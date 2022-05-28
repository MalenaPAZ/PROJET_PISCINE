<?php

//saisir les données du formulaire
$login = isset($_POST["login"])? $_POST["login"] : "";
$motdepasse = isset($_POST["motdepasse"])? $_POST["motdepasse"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$specialiteP = isset($_POST["SpecialitePref"])? $_POST["SpecialitePref"] : "";
$email = isset($_POST["email"])? $_POST["email"] : "";
$telephone = isset($_POST["telephone"])? $_POST["telephone"] : "";
$ville = isset($_POST["ville"])? $_POST["ville"] : "";
$adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";
$codepostal = isset($_POST["codepostal"])? $_POST["codepostal"] : "";
$pays = isset($_POST["pays"])? $_POST["pays"] : "";
$numcartevitale = isset($_POST["numcartevitale"])? $_POST["numcartevitale"] : "";
$avatar = isset($_POST["avatar"])? $_POST["avatar"] : "";



//identifier BDD
$database = "omnes sante";
//connectez-vous dans BDD
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
//*************************************




//si le bouton2 (Ajouter) est cliqué
if (isset($_POST["Creer"]))   {
    if ($db_found) {
    //on cherche l'ADMIN
    $sql = "SELECT * FROM patient ";
    //avec son LOGIIN ET MDP
    if (($login != "")&& ($motdepasse != "")) {
    $sql .= " WHERE Login LIKE '%$login%' AND Mdp LIKE '%$motdepasse%'";
    }
    $result = mysqli_query($db_handle, $sql);
    //regarder s'il y a de resultat
    if (mysqli_num_rows($result) != 0) {
    echo "<p>Compte already exists. Duplicates not allowed.</p>";
    
    } else {

    //on ajoute ce compte
    $sql = "INSERT INTO patient (NomPatient, PrenomPatient, Login, Mdp, EmailPatient, NumPatient, AdressePatient,NumCarteVitale,SpecialitePref, Ville, CodePostal, Pays, Photo)
     VALUES('$nom','$prenom','$login','$motdepasse','$email','$telephone','$adresse','$numcartevitale','$specialiteP','$ville','$codepostal','$pays','$avatar')";
    $result = mysqli_query($db_handle, $sql);
        if($result)
        {
            echo "Insert Sucessful";
        }
        else {
            
            echo "Unable to insert";
            }    
    
    
}}else echo "WTF";}







