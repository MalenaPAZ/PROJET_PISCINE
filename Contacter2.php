<?php

session_start();
$loginadmin = $_SESSION["login"];
$mdpadmin = $_SESSION["mdp"];

//saisir les données du formulaire
$message = isset($_POST["message"])? $_POST["message"] : "";
$MAILENV = $_GET['mailenv'];
$MAILREC = $_GET['mailrec'];




//identifier BDD
$database = "omnes sante";
//connectez-vous dans BDD
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
//*************************************


//si le bouton2 (Ajouter) est cliqué
if (isset($_POST["Creer"]))   {
## Définitions des deux constantes
define('ADRESSE_WEBMASTER', "'.$MAILENV.'"); // Votre adresse qui apparaitra en tant qu'expéditeur des E-mails
define('SUJET', 'Creation Compte Omnes sante'); // Sujet commun aux deux E-mail



## Second appel de la fonction mail() : le visiteur reçoit cet E-mail
ini_set('SMTP', 'smtp.orange.fr'); //il faut mettre le stmp qui correspond à son serveur, le lien suivant nous le donne : http://check414.free.fr/detection-smtp/
ini_set("sendmail_from", "'.$MAILENV.'"); //donne l'expéditeur (il faut mettre une vrai addresse mail)
mail($MAILREC, SUJET, $message, 'From: Omnes sante message'); //on envoie le mail


if (mail($MAILREC, SUJET, $message, 'From: Omnes sante')) {

    echo '<script type="text/javascript">
    alert("email de validation de rendez-vous envoyé à ' . $emMAILRECail . '")';
    echo '</script>';
} else {

    echo '<script type="text/javascript">
    alert("Les données sont incorrectes, réesayez")';
    echo '</script>';
}


    }



