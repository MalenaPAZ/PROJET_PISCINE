<?php


session_start();
$login = $_SESSION["login"];
$mdp = $_SESSION["mdp"];
//$idmed = $_GET['idmed'];


$idmed = isset($_POST['idmed']) ? $_POST['idmed'] : NULL;
$date = isset($_POST['date']) ? $_POST['date'] : NULL;




$Connexion = mysqli_connect('localhost', 'root', '', 'omnes sante');
//Verifier connexion
if (!$Connexion) {
    die("Echec de la connexion : " . mysqli_connect_error());
}



$sql = "SELECT * FROM medecin WHERE ID LIKE '$idmed'";
$result = mysqli_query($Connexion, $sql);
while ($data = mysqli_fetch_assoc($result)) {

    $prenom = $data['Prenom'];
    $nom = $data['Nom'];
    $idmed = $data['ID'];
    $tel = $data['Tel'];
    $email = $data['Email'];
    $salle = $data['Salle'];
    $photo = $data['Photo'];
    $spe = $data['Specialite'];
}


$sql = "SELECT * FROM patient WHERE Login LIKE '$login' AND Mdp LIKE '$mdp' ";
$result = mysqli_query($Connexion, $sql);
while ($data = mysqli_fetch_assoc($result)) {

    $idpatient = $data['IDpatient'];
    $nompatient = $data['NomPatient'];
    $prenompatient = $data['PrenomPatient'];
    $adressepatient = $data['AdressePatient'];
    $emailpatient = $data['EmailPatient'];
    $Telpatient = $data['NumPatient'];
    $CarteVitale = $data['NumCarteVitale'];
    $photo = $data['Photo'];
}

$motif= isset($_POST["Motif"])? $_POST["Motif"] : "";

     if (isset($_POST["Creer"]))   {
    if ($Connexion) {

        if ($spe == 'Generaliste') {
            $prix = 0;
        } else $prix = 30;

        //on ajoute ce compte
        $sql = "INSERT INTO rdv( IDPatient, IDMedecin, Motif_RDV, Salle_RDV, Etat_RDV, Type_RDV, prix, Date) 
       VALUES ('$idpatient','$idmed',$motif,'$salle','0','$spe','$prix',$date)";
        $result = mysqli_query($Connexion, $sql);
        if ($result) {
            echo "Insert Sucessful";
        } else {

            echo "Unable to insert";
        }
    } else echo "WTF";  }


?>