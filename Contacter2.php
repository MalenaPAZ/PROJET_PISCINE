<?php

session_start();
$loginadmin = $_SESSION["login"];
$mdpadmin = $_SESSION["mdp"];

//saisir les données du formulaire
$message = isset($_POST["message"])? $_POST["message"] : "";




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
    $sql = "SELECT * FROM admin ";
    //avec son LOGIIN ET MDP
    if (($login != "")&& ($mdp != "")) {
    $sql .= " WHERE Login LIKE '%$login%' AND Mdp LIKE '%$mdp%'";
    }
    $result = mysqli_query($db_handle, $sql);
    //regarder s'il y a de resultat
    if (mysqli_num_rows($result) != 0) {
    echo "<p>Compte already exists. Duplicates not allowed.</p>";
    header("Location : accueilAdmin.php");
    } else {


    //on ajoute ce compte
    $sql = "INSERT INTO admin( Mdp, Login, NomAdmin, PrenomAdmin, EmailAdmin) 
     VALUES('$mdp','$login','$nom','$prenom','$email')";
     

    $result =mysqli_query($db_handle, $sql);
        if($result)
        {
            echo "Insert Sucessful";
            header('Location: accueilAdmin.php');
        }
        else {
            
            echo "Unable to insert";
            header('Location : accueilAdmin.php');
            }  
            
            
            
    
    
}}else echo "WTF";}

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




