<?php

//saisir les données du formulaire
$login = isset($_POST["login"])? $_POST["login"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";

//identifier BDD
$database = "omnes sante";
//connectez-vous dans BDD
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
//*************************************
// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button1"])){
if ($db_found) {
//commencer le query
$sql = "SELECT * FROM admin";
if (($login != "") && ($mdp != "")) {
//on recherche le livre par son titre
$sql .= " WHERE Login LIKE '%$login%' AND Mdp LIKE '%$mdp%'";
//on cherche ce livre par son auteur aussi
/*if ($mdp != "") {
$sql .= " AND Mdp LIKE '%$mdp%'";
}*/
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
} //end Rechercher



