<?php
$Connexion = mysqli_connect('localhost', 'root', '','omnes sante' );
//Verifier connexion
if(!$Connexion){die("Echec de la connexion : ". mysqli_connect_error());}

$sql = "SELECT * FROM medecin";
$result = mysqli_query($Connexion,$sql);

 while($data = mysqli_fetch_assoc($result)){

    $prenom = $data['Prenom'];
    $nom = $data['Nom'];
    $tel = $data['Tel'];
    $email = $data['Email'];
    $photo = $data['Photo'];
}
?>



<!doctype html>

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

                  <a class="nav-item nav-link" href="ConnexionAdmin.html">

                    Connexion <img id = "user" src="../Icon/32/user-2.png" alt="User" width="32" id="imgECE">

                  </a>

              </ul>

              </div>

        </div>

        <div class="container-fluid" id="EnTete">

 

        </div>

        <div id="SectionEnseignants">
        
        
            

            <div class="Enseignants">

                <div class="row">

                    <div class="col-sm">

                        <div class="PhotoID">

                            <img class="cropped2" src="medecin12.png" alt="logoEdu" id="imgECE">

                        </div>

                    </div>

                    <div class="col-sm"> <!--Changer la mise en page utiliser tr td th-->

                        <h2 href="#"> <?php echo $prenom?> <?php echo$nom;?> </h2>

                        <div class="row">

                            <div class="col-sm">

                                <p>Salle : </p>

                            </div>

                            <div class="col-sm">

                                <p>EM015 </p>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm">

                                <p>Telephone : </p>

                            </div>

                            <div class="col-sm">

                                <p><?php echo $tel;?></p>

                            </div>

                            

                        </div>

                        <div class="row">

                            <div class="col-sm">

                                <p>Email : </p>

                            </div>

                            <div class="col-sm">

                                <p><?php echo $email;?></p>

                            </div>  

                        </div>

                        <div class="col-sm">
                        <div class="row" >

                        <a class="btn btn-outline-light my-2 my-sm-0" type="submit"href="#">Prendre RDV</a><br>

                        <a class="btn btn-outline-light my-2 my-sm-0" type="submit"href="#">Contacter</a><br>

                        <a class="btn btn-outline-light my-2 my-sm-0" type="submit"href="#">Voir son CV</a>

                    </div></div>

                    </div>

                    

                </div>
                

            </div>
        

        </div>

        

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src=https://code.jquery.com/jquery-3.3.1.slim.min.js integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src=https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>

</html>