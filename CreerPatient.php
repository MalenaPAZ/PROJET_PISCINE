<?php



//saisir les données du formulaire
$login = isset($_POST["login"]) ? $_POST["login"] : "";
$motdepasse = isset($_POST["motdepasse"]) ? $_POST["motdepasse"] : "";
$nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : "";
$specialiteP = isset($_POST["SpecialitePref"]) ? $_POST["SpecialitePref"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$telephone = isset($_POST["telephone"]) ? $_POST["telephone"] : "";
$ville = isset($_POST["ville"]) ? $_POST["ville"] : "";
$adresse = isset($_POST["adresse"]) ? $_POST["adresse"] : "";
$codepostal = isset($_POST["codepostal"]) ? $_POST["codepostal"] : "";
$pays = isset($_POST["pays"]) ? $_POST["pays"] : "";
$numcartevitale = isset($_POST["numcartevitale"]) ? $_POST["numcartevitale"] : "";

$avatar = isset($_POST["avatar"]) ? $_POST["avatar"] : "";
$typecarte = isset($_POST["Typecarte"]) ? $_POST["Typecarte"] : "";
$numcarte = isset($_POST["Numcarte"]) ? $_POST["Numcarte"] : "";
$nomcarte = isset($_POST["Nomcarte"]) ? $_POST["Nomcarte"] : "";
$dateexp = isset($_POST["Dateexp"]) ? $_POST["Dateexp"] : "";
$codesecu = isset($_POST["Codesecu"]) ? $_POST["Codesecu"] : "";




//identifier BDD
$database = "omnes sante";
//connectez-vous dans BDD
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

//*************************************





//si le bouton2 (Ajouter) est cliqué
if (isset($_POST["Creer"])) {

    if ($db_found) {
        //on cherche l'ADMIN
        $sql = "SELECT * FROM patient ";
        //avec son LOGIIN ET MDP
        if (($login != "") && ($motdepasse != "")) {
            $sql .= " WHERE Login LIKE '%$login%' AND Mdp LIKE '%$motdepasse%'";
        }
        $result = mysqli_query($db_handle, $sql);
        //regarder s'il y a de resultat
        if (mysqli_num_rows($result) != 0) {
            

            echo'<script type="text/javascript">
            alert("Ces identifiants sont deja utilisés")';
            echo '</script>';
            exit();
        } else {
            

            //on ajoute ce compte
<<<<<<< HEAD
            $sql1 = "INSERT INTO patient (NomPatient, PrenomPatient, Login, Mdp, EmailPatient, NumPatient, AdressePatient,NumCarteVitale,SpecialitePref, Ville, CodePostal, Pays, Photo, Typecarte, Numcarte, Nomcarte, Dateexp, Codesecu)
     VALUES('$nom','$prenom','$login','$motdepasse','$email','$telephone','$adresse','$numcartevitale','$specialiteP','$ville','$codepostal','$pays','$avatar','$typecarte','$numcarte','$nomcarte','$dateexp','$codesecu')";
            $result1 = mysqli_query($db_handle, $sql1);
        }
        //on cherche l'ADMIN
        $sql = "SELECT * FROM patient ";
        //avec son LOGIIN ET MDP
        if (($login != "") && ($motdepasse != "")) {
            $sql .= " WHERE Login LIKE '%$login%' AND Mdp LIKE '%$motdepasse%'";
        }
        $result = mysqli_query($db_handle, $sql);
=======


>>>>>>> 964363863a1c0cd26c03ca06dc2301b1533d1830
            $sql = "INSERT INTO patient (NomPatient, PrenomPatient, Login, Mdp, EmailPatient, NumPatient, AdressePatient,NumCarteVitale,SpecialitePref, Ville, CodePostal, Pays, Photo, TypeCarte, NumCarteB, NomCarte, DateExp, CodeSecu)
     VALUES('".$nom."','".$prenom."','".$login."','".$motdepasse."','".$email."','".$telephone."','".$adresse."','".$numcartevitale."','".$specialiteP."','".$ville."','".$codepostal."','".$pays."','".$avatar."', '".$typecarte."', '".$numcarte."', '".$nomcarte."', '".$dateexp."', '".$codesecu."')";
            $result = mysqli_query($db_handle, $sql);
        if ($result) {
<<<<<<< HEAD
=======

>>>>>>> 964363863a1c0cd26c03ca06dc2301b1533d1830

            ## Définitions des deux constantes
        define('ADRESSE_WEBMASTER', 'pazmalena2001@yahoo.fr'); // Votre adresse qui apparaitra en tant qu'expéditeur des E-mails
        define('SUJET', 'Creation Compte Omnes sante'); // Sujet commun aux deux E-mail

        ## Message envoyé au visiteur
        $message = "Bonjour ".$prenom.", Bienvenue hihihi.
        \nCeci est un mail automatique, Merci de ne pas y répondre.
         \n\nL'équipe Omnes Sante";

        ## Second appel de la fonction mail() : le visiteur reçoit cet E-mail
        ini_set('SMTP', 'smtp.orange.fr'); //il faut mettre le stmp qui correspond à son serveur, le lien suivant nous le donne : http://check414.free.fr/detection-smtp/
        ini_set("sendmail_from", "pazmalena2001@yahoo.fr"); //donne l'expéditeur (il faut mettre une vrai addresse mail)
        mail($email, SUJET, $message, 'From: Omnes sante' ); //on envoie le mail


        if (mail($email, SUJET, $message, 'From: Omnes sante' )) {

            echo'<script type="text/javascript">
            alert("email de validation de creation de compte envoyé à '.$email .'")';
            
            
            echo '</script>';

           

        } else {
    
            echo'<script type="text/javascript">
            alert("Impossible de creer le compte")';
            echo '</script>';
            //header("Location : CreerPatient.html");
    
        }
        header('Location: Accueil_neutre.html');
        exit();
        }  echo'<script type="text/javascript">
        alert("Impossible de creer le compte")';
        echo '</script>';
        }
        
        

        //header("Location : Accueil_neutre.html");
    } else echo "database not found";
} else echo "bouton not found";




