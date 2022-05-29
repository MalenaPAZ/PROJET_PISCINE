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



//identifier BDD
$database = "omnes sante";
//connectez-vous dans BDD
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

//*************************************


/*// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button1"])){
if ($db_found) {
//commencer le query
$sql = "SELECT * FROM medecin ";
if (($login != "") && ($mdp != "")) {
//on recherche le livre par son titre
$sql .= " WHERE Login LIKE '%$login%' AND Mdp LIKE '%$mdp%'";
//on cherche ce livre par son auteur aussi
/*if ($mdp != "") {
$sql .= " AND Mdp LIKE '%$mdp%'";
}
}
$result = mysqli_query($db_handle, $sql);
//regarder s'il y a des resultats
if (mysqli_num_rows($result) == 0) {
echo "<p>Incorrect</p>";
} else {
echo "Num : " . mysqli_num_rows($result);
echo "/// Compte trouvé";
}
} else {
echo "<p>Database not found.</p>";
}
} //end Rechercher*/



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
            echo "<p>Compte already exists. Duplicates not allowed.</p>";
        } else {

            //on ajoute ce compte
            $sql = "INSERT INTO `patient` (`IDpatient`, `NomPatient`, `PrenomPatient`, `Mdp`, `Login`, `AdressePatient`, `EmailPatient`, `NumPatient`, `NumCarteVitale`, `SpecialitePref`, `Ville`, `CodePostal`, `Pays`, `Photo`, `TypeCarte`, `NumCarteB`, `NomCarte`, `DateExp`, `CodeSecu`) 
           VALUES('".$nom."','".$prenom."','".$login."','".$motdepasse."','".$email."','".$telephone."','".$adresse."','".$numcartevitale."','".$specialiteP."','".$ville."','".$codepostal."','".$pays."','".$avatar."', 'Master Card', 123456789, 'PAZ Malena', '05/22', 1234)";
            $result = mysqli_query($db_handle, $sql);
        }
        //on cherche l'ADMIN
        $sql = "SELECT * FROM patient ";
        //avec son LOGIIN ET MDP
        if (($login != "") && ($motdepasse != "")) {
            $sql .= " WHERE Login LIKE '%$login%' AND Mdp LIKE '%$motdepasse%'";
        }
        $result = mysqli_query($db_handle, $sql);

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

       
    } else echo "database not found";
} else echo "bouton not found";

/*

//si le bouton3 (Supprimer) est cliqué
if (isset($_POST["button3"])) {
    if ($db_found) {
    //on cherche le livre
    $sql = "SELECT * FROM admin";
    //avec son titre et auteur
    if (($login != "")&&($mdp != "")) {
    $sql .= " WHERE Login LIKE '%$login%'AND Mdp LIKE '%$mdp%'";
    }
    $result = mysqli_query($db_handle, $sql);
    //regarder s'il y a de resultat
    if (mysqli_num_rows($result) == 0) {
        //ce livre n'existe pas
    echo "<p>Cannot delete. account not found.</p>";
    } else {
    //on supprime cet item
    while ($data = mysqli_fetch_assoc($result)) {
        $id = $data['ID'];
        }
    //on supprime cet item par son ID
    $sql = "DELETE FROM admin WHERE ID = $id";
    $result =mysqli_query($db_handle, $sql);
    
    if($result)
        {
            echo "delete Sucessful";
        }
        else {
            echo "Unable to delete";
            }    
    //on affiche le reste des livres dans notre BDD
    
}}}*/
