<?php


session_start();
$loginpatient = $_SESSION["login"];
$mdppatient = $_SESSION["mdp"];

echo "login : ".$loginpatient." mdp : ".$mdppatient;

$Nom = $_GET['nom'];
$Prenom = $_GET['prenom'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Index Projet Piscine</title>

    <!--Required meta tags-->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS -->

    <link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="MedGene.css" rel="stylesheet" type="text/css"/>

  </head>
<body>
<div id="SectionEnseignants">
    <?php
    $database = "omnes sante";
    $db_handle = mysqli_connect('localhost','root','');
    $db_found = mysqli_select_db($db_handle, $database);


    //traitement
    if ($db_found) {
    $sql = "SELECT * from medecin WHERE Nom LIKE '$Nom' AND Prenom LIKE '$Prenom'";
    $result = mysqli_query($db_handle, $sql);

    while ($data = mysqli_fetch_assoc($result)){

        $tel = $data['Tel'];
        $email = $data['Email'];
        $photo = $data['Photo'];
        $idmed = $data['ID'];
        $loginmed = $data['Login'];


        echo'<div class="Enseignants">';
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
                            echo'<a role="button" class="btn btn-secondary" href="prof.php?id='.$data['ID'].'">Disponibilité</a>';
                            echo'<a role="button" class="btn btn-secondary" href="">CV</a>';
                            echo'<a role="button" class="btn btn-secondary" href="chat.php?iddest='.$idmed.' && logindest = '.$loginmed.'">Contacter</a>';
                            echo'</div>';
                            
                            echo'</div></div>';
                            echo'</div>';

                        

                            echo'</div>';
                            echo'</div>';
    } }



//fermer la connexion
mysqli_close($db_handle);
?>

</div>
</body>
</html>