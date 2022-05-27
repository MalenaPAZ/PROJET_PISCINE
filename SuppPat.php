<?php

session_start();
$login = $_SESSION["login"];
$mdp = $_SESSION["mdp"];

$idpat = $_GET['idpat'];




//identifier BDD
$database = "omnes sante";
//connectez-vous dans BDD
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
//*************************************

 
    if ($db_found) {

    $sql = "SELECT * FROM admin";

    $sql = "SELECT * FROM patient WHERE IDpatient LIKE '$idpat'";
    $result = mysqli_query($db_handle, $sql);

    if (mysqli_num_rows($result) == 0) {

    echo "<p>Cannot delete. account not found.</p>";
    } else {

    while ($data = mysqli_fetch_assoc($result)) {
        $idpat = $data['IDpatient'];
        }
    //on supprime cet item par son ID
    $sql = "DELETE FROM patient WHERE IDpatient = $idpat";
    $result =mysqli_query($db_handle, $sql);
    
    if($result)
        {
            echo "delete Sucessful";
            header("Location: accueilAdmin.php");
        }
        else {
            echo "Unable to delete";
            header("Location: accueilAdmin.php");
            }    
    //on affiche le reste des livres dans notre BDD
    
}}