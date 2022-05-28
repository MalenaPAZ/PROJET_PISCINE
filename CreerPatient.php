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
            $sql = "INSERT INTO patient (NomPatient, PrenomPatient, Login, Mdp, EmailPatient, NumPatient, AdressePatient,NumCarteVitale,SpecialitePref, Ville, CodePostal, Pays, Photo)
     VALUES('$nom','$prenom','$login','$motdepasse','$email','$telephone','$adresse','$numcartevitale','$specialiteP','$ville','$codepostal','$pays','$avatar')";
            $result = mysqli_query($db_handle, $sql);
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
