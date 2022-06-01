<?php

//saisir les données du formulaire
$NumRDV = isset($_POST["NumRDV"])? $_POST["NumRDV"] : "";
$IDPatient = isset($_POST["IDPatient"])? $_POST["IDPatient"] : "";
$IDMedecin  = isset($_POST["IDMedecin "])? $_POST["IDMedecin "] : "";
$Motif_RDV  = isset($_POST["Motif_RDV "])? $_POST["Motif_RDV "] : "";
$Salle_RDV  = isset($_POST["Salle_RDV "])? $_POST["Salle_RDV "] : "";
$Etat_RDV  = isset($_POST["Etat_RDV "])? $_POST["Etat_RDV "] : "";
$Type_RDV  = isset($_POST["Type_RDV "])? $_POST["Type_RDV "] : "";
$prix  = isset($_POST["prix "])? $_POST["prix "] : "";
$Date  = isset($_POST["Date  "])? $_POST["Date "] : "";


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
    $sql = "SELECT * FROM rdv ";
    $result = mysqli_query($db_handle, $sql);
    //regarder s'il y a de resultat
    if (mysqli_num_rows($result) != 0) {
    echo "<p>Cannot add to the database.</p>";
    header("Location : CreerRDV.php");
    } else {
    $sql = "INSERT INTO rdv( NumRDV, IDPatient, IDMedecin, Motif_RDV, Salle_RDV, Etat_RDV, Type_RDV, prix, Date) 
     VALUES('$NumRDV','$IDPatient','$IDMedecin','$Motif_RDV','$Salle_RDV','$Etat_RDV','$Type_RDV','$prix','$Date')";
     

    $result =mysqli_query($db_handle, $sql);
        if($result)
        {
            echo "Insert Sucessful";
            header("Location : Accueil_admin.php");
        }
        else {
            
            echo "Unable to insert";
            header("Location : Accueil_admin.php");
            }  
    
}}else echo "WTF";}