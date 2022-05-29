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

$sql = "SELECT * FROM patient WHERE Login LIKE '$loginpatient' AND
 Mdp LIKE '$mdppatient'";
$result = mysqli_query($Connexion, $sql);
while ($data = mysqli_fetch_assoc($result)) {
    $nompatient =$data['NomPatient'];
$prenompatient =$data['PrenomPatient'];
    $email = $data['EmailPatient'];
    $idpat = $data['IDpatient'];
    $TYPECARTE = $data['TypeCarte'];
    $NUMCARTE = $data['NumCarteB'];
    $NOMCARTE = $data['NomCarte'];
    $DATEEXP = $data['DateExp'];
    $CODECARTE = $data['CodeSecu'];
}
$sql1 = "SELECT * FROM medecin WHERE ID LIKE '$idmed'";
$result1 = mysqli_query($Connexion, $sql1);
while ($data = mysqli_fetch_assoc($result1)) {

    $nommed = $data['Nom'];
    $prenommed = $data['Prenom'];
    $salle = $data['Salle'];
    $spe = $data['Specialite'];
    $mail = $data['Email'];
}

$typecarte = isset($_POST["Typecarte"]) ? $_POST["Typecarte"] : "";
$numCarte = isset($_POST["numcarte"]) ? $_POST["numcarte"] : "";
$nomcarte = isset($_POST["nomcarte"]) ? $_POST["nomcarte"] : "";
$dateexp = isset($_POST["dateexp"]) ? $_POST["dateexp"] : "";
$codecarte = isset($_POST["codecarte"]) ? $_POST["codecarte"] : "";

echo $typecarte.'//'.$numCarte.'//'.$nomcarte.' //'.$dateexp.'//'.$codecarte.'';
echo $TYPECARTE.'//'.$NUMCARTE.'//'.$NOMCARTE.' //'.$DATEEXP.'//'.$CODECARTE.'';
echo $idpat.'//'.$idmed.'//'.$date.' //'.$spe.'//'.$salle.'';



//identifier BDD
$database = "omnes sante";
//connectez-vous dans BDD
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

//*************************************





//si le bouton2 (Ajouter) est cliqué
if (isset($_POST["Creer"])) {

    if ($db_found) {
        if ($typecarte == $TYPECARTE && $numCarte == $NUMCARTE && $nomcarte == $NOMCARTE && $dateexp == $DATEEXP && $codecarte == $CODECARTE) {
            


            $sql= "INSERT INTO rdv( IDPatient, IDMedecin,Motif_RDV, Salle_RDV, Etat_RDV, Type_RDV, prix, Date) 
            VALUES ('".$idpat."', '".$idmed."','coucou','".$salle."', '0', '".$spe."', '0', '".$date."')";
            $result = mysqli_query($Connexion, $sql);
        
                if ($result) {

                    ## Définitions des deux constantes
                    define('ADRESSE_WEBMASTER', 'pazmalena2001@yahoo.fr'); // Votre adresse qui apparaitra en tant qu'expéditeur des E-mails
                    define('SUJET', 'Creation Compte Omnes sante'); // Sujet commun aux deux E-mail

                    ## Message envoyé au visiteur
                    $message = "Bonjour " . $prenompatient . ", nous confirmons un rendez-vous avec le doctor '.$prenommed.' '.$nommed.' ('.$spe.').
                    Le RDV aura lieu de '.$date.' dans la salle de consultation '.$salle.' au 37 quai de Grenelle, 75015 Paris. Vous pouvez contacter le DR '.$nommed.' via mail grace a 
                    son adresse mail: '.$mail.'.
                    \nCeci est un mail automatique, Merci de ne pas y répondre.
                    \n\nL'équipe Omnes Sante";

                    ## Second appel de la fonction mail() : le visiteur reçoit cet E-mail
                    ini_set('SMTP', 'smtp.orange.fr'); //il faut mettre le stmp qui correspond à son serveur, le lien suivant nous le donne : http://check414.free.fr/detection-smtp/
                    ini_set("sendmail_from", "pazmalena2001@yahoo.fr"); //donne l'expéditeur (il faut mettre une vrai addresse mail)
                    mail($email, SUJET, $message, 'From: Omnes sante'); //on envoie le mail


                    if (mail($email, SUJET, $message, 'From: Omnes sante')) {

                        echo '<script type="text/javascript">
                        alert("email de validation de rendez-vous envoyé à ' . $email . '")';
                        echo '</script>';
                    } else {

                        echo '<script type="text/javascript">
                        alert("Les données sont incorrectes, réesayez")';
                        echo '</script>';
                    }
                    
                }
                header('Location: prof.php?id='.$idmed.'');
                exit();
            
        } 
    } else echo "database not found";
} else echo "bouton not found";
