<?php

use LDAP\Result;

session_start();
$loginpatient = $_SESSION["login"];
$mdppatient = $_SESSION["mdp"];

$idmed = $_GET["id"];
$date = $_GET['date'];





$Connexion = mysqli_connect('localhost', 'root', '', 'omnes sante');
//Verifier connexion
if (!$Connexion) {
    die("Echec de la connexion : " . mysqli_connect_error());
}



$sql = "SELECT * FROM medecin WHERE ID LIKE '$idmed'";
$result = mysqli_query($Connexion, $sql);
while ($data = mysqli_fetch_assoc($result)) {

    $prenom = $data['Prenom'];
    $nom = $data['Nom'];
    $idmed = $data['ID'];
    $tel = $data['Tel'];
    $email = $data['Email'];
    $salle = $data['Salle'];
    $photo = $data['Photo'];
    $spe = $data['Specialite'];
} if ($result){} else{
    $spe = "Generaliste";
    $sql = "SELECT * FROM services WHERE ID LIKE '$idmed'";
    $result = mysqli_query($Connexion, $sql);
    if (mysqli_num_rows($result) == 0) {
        echo "compte n'existe pas";
    } else while ($data = mysqli_fetch_assoc($result)) {

        $salle = $data['Salle'];
        $service1 = $data['Servicelab'];
        $infos = $data['Infos'];
        $idservice = $data['ID'];
        
    }
    
} 


$sql = "SELECT * FROM patient WHERE Login LIKE '$loginpatient' AND Mdp LIKE '$mdppatient' ";
$result = mysqli_query($Connexion, $sql);
while ($data = mysqli_fetch_assoc($result)) {

    $idpatient = $data['IDpatient'];
    $nompatient = $data['NomPatient'];
    $prenompatient = $data['PrenomPatient'];
    $adressepatient = $data['AdressePatient'];
    $emailpatient = $data['EmailPatient'];
    $Telpatient = $data['NumPatient'];
    $CarteVitale = $data['NumCarteVitale'];
    $photo = $data['Photo'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Omnes santé</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="sante.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
      * Template Name: Medicio - v4.7.0
      * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
      * Author: BootstrapMade.com
      * License: https://bootstrapmade.com/license/
      ======================================================== -->
</head>

<body>

    


                

    <?php

$Connexion = mysqli_connect('localhost', 'root', '', 'omnes sante');
//Verifier connexion
if (!$Connexion) {
    die("Echec de la connexion : " . mysqli_connect_error());
}

$sql = "SELECT * FROM medecin WHERE ID LIKE '$idmed'";
$result = mysqli_query($Connexion, $sql);
while ($data = mysqli_fetch_assoc($result)) {

    $prenommed = $data['Prenom'];
    $nommed = $data['Nom'];
    $idmed = $data['ID'];
    $tel = $data['Tel'];
    $email = $data['Email'];
    $salle = $data['Salle'];
    $photo = $data['Photo'];
    $spe = $data['Specialite'];
    
}


$sql = "SELECT * FROM patient WHERE Login LIKE '$loginpatient' AND Mdp LIKE '$mdppatient' ";
$result = mysqli_query($Connexion, $sql);
while ($data = mysqli_fetch_assoc($result)) {

    $idpatient = $data['IDpatient'];
    $nompatient = $data['NomPatient'];
    $prenompatient = $data['PrenomPatient'];
    $adressepatient = $data['AdressePatient'];
    $emailpatient = $data['EmailPatient'];
    $Telpatient = $data['NumPatient'];
    $CarteVitale = $data['NumCarteVitale'];
    $photo = $data['Photo'];


}


 
    if ($Connexion) {

        if ($spe != 'Generaliste' ) {
            
           header('Location: Paiement1.php?id='.$idmed.'&date='.$date.'');
               exit();
        } 
       


        

        //on ajoute ce compte
        $sql1= "INSERT INTO rdv( IDPatient, IDMedecin,Motif_RDV, Salle_RDV, Etat_RDV, Type_RDV, prix, Date, NomMed, PrenomMed, SpeMed) 
        VALUES ('".$idpatient."', '".$idmed."','coucou','".$salle."', '0', '".$spe."', '0', '".$date."', '".$nommed."', '".$prenommed."', '".$spe."')";
        $result1 = mysqli_query($Connexion, $sql1);
        if ($result1) {
             ## Définitions des deux constantes
             define('ADRESSE_WEBMASTER', 'pazmalena2001@yahoo.fr'); // Votre adresse qui apparaitra en tant qu'expéditeur des E-mails
             define('SUJET', 'Creation Compte Omnes sante'); // Sujet commun aux deux E-mail

             ## Message envoyé au visiteur
             $message = "Bonjour " . $prenompatient . ", nous confirmons un rendez-vous avec le doctor '.$prenommed.' '.$nom.' ('.$spe.').
             Le RDV aura lieu de '.$date.' dans la salle de consultation '.$salle.' au 37 quai de Grenelle, 75015 Paris. 
             \nCeci est un mail automatique, Merci de ne pas y répondre.
             \n\nL'équipe Omnes Sante";

             ## Second appel de la fonction mail() : le visiteur reçoit cet E-mail
             ini_set('SMTP', 'smtp.orange.fr'); //il faut mettre le stmp qui correspond à son serveur, le lien suivant nous le donne : http://check414.free.fr/detection-smtp/
             ini_set("sendmail_from", "pazmalena2001@yahoo.fr"); //donne l'expéditeur (il faut mettre une vrai addresse mail)
             mail($emailpatient, SUJET, $message, 'From: Omnes sante'); //on envoie le mail


             if (mail($emailpatient, SUJET, $message, 'From: Omnes sante')) {

                 echo '<script type="text/javascript">
                 alert("email de validation de rendez-vous envoyé à ' . $emailpatient . '")';
                 echo '</script>';
             } else {

                 echo '<script type="text/javascript">
                 alert("Les données sont incorrectes, réesayez")';
                 echo '</script>';
             }
            header('Location: prof.php? id='.$idmed.'');
        } else {
            header('Location: prof.php? id='.$idmed.'');
        }
    } else echo "WTF";  


   




    ?>