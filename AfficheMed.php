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
 $Nom = isset($_POST["NomMedecin"])? $_POST["NomMedecin"]: "";
 $Prenom = isset($_POST["PrenomMedecin"])? $_POST["PrenomMedecin"]: "";

//traitement
if ($db_found) {
$sql = "SELECT * from medecin WHERE Nom LIKE '$Nom' AND
 Prenom LIKE '$Prenom'";
$result = mysqli_query($db_handle, $sql);
if($result){echo "Nom: " . $Nom . '<br>';}else echo "MERDE";
while ($data = mysqli_fetch_assoc($result)){



    echo' <div class="row">';
                
    echo '<div class="PhotoID">';
       echo' <a href="#"><img class="image" src="'.$data['Photo'].'" alt="Photo profil" width ="200" height="200"/></a>';
   echo'</div>';

 echo '<div class="col-sm"> <!--Changer la mise en page utiliser tr td th-->';
    echo'<h2 href="">' . $data['Prenom'] .'   '.$data['Nom'] . '</h2>';
    echo'<div class="row">';
        echo'<div class="col-sm">';
           echo'<p>Salle : EM015</p>';
        echo'</div>';
       
    echo'</div>';
   echo'<div class="row">';
        echo'<div class="col-sm">';
            echo'<p>Telephone : '. $data['Tel'].'</p>';
        echo'</div>';
        
    echo '</div>';

    echo'<div class="row">';
        echo'<div class="col-sm">';
            echo'<p>Email : '.$data['Email'].' </p>';
       echo'</div>';
        
    echo'</div>';
    echo'<div class="col-sm">';
    echo'<div class="row" >';
   
    

    echo'<div class="btn-group" role="group" aria-label="Basic example">';
    echo'<a role="button" class="btn btn-secondary" href="https://getbootstrap.com/docs/4.0/components/buttons/">Disponibilité</a>';
    echo'<a role="button" class="btn btn-secondary" href="">CV</a>';
    echo'<a role="button" class="btn btn-secondary" href="">Contacter</a>';
    echo'</div>';
    
    echo'</div></div>';
    echo'</div>';

   

    echo'</div>';
} }

//fermer la connexion
mysqli_close($db_handle);
?>
</body>
</html>