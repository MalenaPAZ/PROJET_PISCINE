<?php

session_start();
$loginpatient = $_SESSION["login"];
$mdppatient = $_SESSION["mdp"];

$idRdv = $_GET['idrdv'];



$sql = "SELECT * FROM rdv WHERE NumRDV LIKE '$idRdv'";
$result = mysqli_query($Connexion,$sql);
while($data = mysqli_fetch_assoc($result)){

    $idpatient = $data['IDpatient'];
    $nompatient = $data['NomPatient'];
    $prenompatient = $data['PrenomPatient'];
    }



//identifier BDD
$database = "omnes sante";
//connectez-vous dans BDD
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
//*************************************

 
    if ($db_found) {

    $sql = "SELECT * FROM admin";

    $sql = "SELECT * FROM rdv WHERE NumRDV LIKE '$idRdv'";
    $result = mysqli_query($db_handle, $sql);

    if (mysqli_num_rows($result) == 0) {

    echo "<p>Cannot add. account not found.</p>";
    } else {

    while ($data = mysqli_fetch_assoc($result)) {
        $idRdv = $data['NumRDV'];
        }
    //on supprime cet item par son ID
    $sql = "INSERT INTO rdv WHERE NumRDV = $idRdv";
    $result =mysqli_query($db_handle, $sql);

    if($idpatient='')
    {
        echo "Le médecin est indisponible"
        header("Location: accueilMed.php");
    } 
    
    if($result)
        {
            echo "add Sucessful";
            header("Location: AfficherRDV.php");
        }
        else {
            echo "Unable to add";
            header("Location:  AfficherRDV.php");
            }   

    //on affiche le reste des livres dans notre BDD
    
}}