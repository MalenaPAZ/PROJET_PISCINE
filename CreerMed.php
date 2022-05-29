<?php

//saisir les données du formulaire
$login = isset($_POST["login"])? $_POST["login"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$specialite = isset($_POST["Specialite"])? $_POST["Specialite"] : "";
$email = isset($_POST["email"])? $_POST["email"] : "";
$tel = isset($_POST["telephone"])? $_POST["telephone"] : "";
$salle = isset($_POST["salle"])? $_POST["salle"] : "";


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
    $sql = "SELECT * FROM medecin ";
    //avec son LOGIIN ET MDP
    if (($login != "")&& ($mdp != "")) {
    $sql .= " WHERE Login LIKE '%$login%' AND Mdp LIKE '%$mdp%'";
    }
    $result = mysqli_query($db_handle, $sql);
    //regarder s'il y a de resultat
    if (mysqli_num_rows($result) != 0) {
    echo "<p>Compte already exists. Duplicates not allowed.</p>";
    header("Location : Creermedecin.html");
    } else {

        if(isset($_POST["specialite"]) == "Generaliste"){$spe = FALSE;}else $spe = TRUE;
    //on ajoute ce compte
    $sql = "INSERT INTO medecin( Nom, Prenom, Login, Mdp, Specialiste, Email, Tel, Specialite, Photo, Salle) 
     VALUES('$nom','$prenom','$login','$mdp','$spe','$email','$tel','$specialite', 'medecin.png', '$salle')";
     

    $result =mysqli_query($db_handle, $sql);
        if($result)
        {
            echo "Insert Sucessful";
            header("Location : accueilAdmin.php");
        }
        else {
            
            echo "Unable to insert";
            header("Location : accueilAdmin.php");
            }  
            
            
            
    
    
}}else echo "WTF";}

