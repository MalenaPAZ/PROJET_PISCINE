<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php
$database = "omnes sante";
 $db_handle = mysqli_connect('localhost','root','');
 $db_found = mysqli_select_db($db_handle, $database);
 $login = isset($_POST["login"])? $_POST["login"]: "";
 $mdp = isset($_POST["mdp"])? $_POST["mdp"]: "";



//si le bouton est cliqué
if (isset($_POST["button1"])) {
//traitement
if ($db_found) {

$sql = "SELECT * FROM patient WHERE Login LIKE '$login' AND
 Mdp LIKE '$mdp'";
$result = mysqli_query($db_handle, $sql);
if (mysqli_num_rows($result) == 0)
{
    $sql = "SELECT * FROM medecin WHERE Login LIKE '$login' AND Mdp LIKE '$mdp'";
    $result = mysqli_query($db_handle, $sql);
    if (mysqli_num_rows($result) == 0)
    {
        $sql = "SELECT * FROM admin WHERE Login LIKE '$login' AND Mdp LIKE '$mdp'";
        $result = mysqli_query($db_handle, $sql);
        if (mysqli_num_rows($result) == 0)
        {
            echo "Compte incorrect";

        } else { 
            $_SESSION["login"] = $data['Login'];
            $_SESSION["mdp"] =  $data['Mdp'];
            header("Location: accueilAdmin.php");}//si admin
    }else { 
        $_SESSION["login"] = $data['Login'];
        $_SESSION["mdp"] =  $data['Mdp'];
        header("Location: accueilMed.php");}//si medecin
}else { 
    $_SESSION["login"] = $data['Login'];
    $_SESSION["mdp"] = $data['Mdp'];
    header("Location: accueilPat.php");}//si patient
} 
echo "BDD not found";

//fermer la connexion
mysqli_close($db_handle);
}
?>
</body>
</html>
