<?php

// Start the session
session_start();

$Connexion = mysqli_connect('localhost', 'root', '','omnes sante' );
//Verifier connexion
if(!$Connexion){die("Echec de la connexion : ". mysqli_connect_error());}
$login = $_SESSION["login"];
$mdp = $_SESSION["mdp"];

$sql = "SELECT * FROM admin WHERE Login LIKE '$login' AND
 Mdp LIKE '$mdp'";
$result = mysqli_query($Connexion,$sql);
while($data = mysqli_fetch_assoc($result)){

    $id = $data['ID'];
    $nom = $data['Nom'];
    $prenom = $data['Prenom'];
}


?>



<!doctype html>

<html lang="en">

  <head>

    <title>Accueil Patient</title>

    <!--Required meta tags-->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS -->

    <link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="MedGene.css" rel="stylesheet" type="text/css"/>

  </head>
        
 

  <body>

    <div class="container-fluid" id="wrapper">

        <div class="navbar navbar-expand-lg navbar-dark bg-dark">

            <div class="logo">

              <img src="../Images/omnes_edu.png" alt="Bootstrap" width="200" id="imgECE">

            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

              <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

              <ul class="navbar-nav">

                <ul>

                  <a class="nav-item nav-link" href="../index.html">Acceuil

                   <span class="sr-only">(current)</span></a>

                </ul>

                <ul>

                    <a class="nav-item nav-link active" href="#">Parcourir</a>

                </ul>

                <ul>      

                    <a class="nav-item nav-link" href="#">RDV</a>

                </ul>

               

                <!--<a class="nav-item nav-link disabled" href="#">Disabled</a>-->

                <ul>

                  <form class="form-inline">

                   <input class="form-control mr-sm-2" type="search" placeholder="Recherche..." aria-label="Search">

                   <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Recherche</button>

                  </form>

                </ul>

                <ul>      

                <div class="col-sm">
                <?php echo $nom. ' '. $prenom ?>
                        </div>

                        <div class="col-sm">
                <?php echo "ID : " . $id ?>
                        </div>

                  

              </ul>

              </div>

        </div>

        <div class="container-fluid" id="EnTete">

 

        </div>

        <div id="SectionEnseignants">
        
        
        <?php
$Connexion = mysqli_connect('localhost', 'root', '','omnes sante' );
//Verifier connexion
if(!$Connexion){die("Echec de la connexion : ". mysqli_connect_error());}
echo "login: ".$_SESSION["login"]." mdp: " . $_SESSION["mdp"]. "//";
?>

        

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src=https://code.jquery.com/jquery-3.3.1.slim.min.js integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src=https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>

</html>