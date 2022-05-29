<?php


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

    $prenom = $data['Prenom'];
    $nom = $data['Nom'];
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

     $motif= isset($_POST["Motif"])? $_POST["Motif"] : "";

 
    if ($Connexion) {

        if ($spe == 'Generaliste') {
            $prix = 0;
        } else {header('Location: CreerPatient.html');
                exit();} 


        

        //on ajoute ce compte
        $sql1= "INSERT INTO rdv( IDPatient, IDMedecin,Motif_RDV, Salle_RDV, Etat_RDV, Type_RDV, prix, Date) 
        VALUES ('".$idpatient."', '".$idmed."','coucou','".$salle."', '0', '".$spe."', '".$prix."', '".$date."')";
        $result1 = mysqli_query($Connexion, $sql1);
        if ($result1) {
            header("Location: accueilPat.php");
        } else {
            header("Location: prof.php");
        }
    } else echo "WTF";  


   




    ?>