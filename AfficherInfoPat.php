<?php

// Start the session
session_start();
$login = $_SESSION["login"];
$mdp = $_SESSION["mdp"];

$Connexion = mysqli_connect('localhost', 'root', '','omnes sante' );
//Verifier connexion
if(!$Connexion){die("Echec de la connexion : ". mysqli_connect_error());}


$sql = "SELECT * FROM patient WHERE Login LIKE '$login' AND
 Mdp LIKE '$mdp'";
$result = mysqli_query($Connexion,$sql);
while($data = mysqli_fetch_assoc($result)){

    $id = $data['IDpatient'];
    $nom = $data['NomPatient'];
    $prenom = $data['PrenomPatient'];
    
}

echo "Nom : ".$nom.", Prenom: ".$prenom." id: ".$id; 


?>