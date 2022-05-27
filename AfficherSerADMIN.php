<?php


session_start();
$loginadmin = $_SESSION["login"];
$mdpadmin = $_SESSION["mdp"];



$Connexion = mysqli_connect('localhost', 'root', '','omnes sante' );
//Verifier connexion
if(!$Connexion){die("Echec de la connexion : ". mysqli_connect_error());}


/*$sql = "SELECT * FROM patient WHERE Login LIKE '$loginpatient' AND
 Mdp LIKE '$mdppatient'";
$result = mysqli_query($Connexion,$sql);
while($data = mysqli_fetch_assoc($result)){

    $idpatient = $data['IDpatient'];
    $nompatient = $data['NomPatient'];
    $prenompatient = $data['PrenomPatient'];
}*/



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

    
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Omnes santé</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="sante.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v4.7.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    

  </head>
        
 

  <body>

    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo me-auto"><img src="Omnes sante.png" alt="Omnes sante logo" height="280" width="130"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <li><a class="nav-link scrollto " href="accueilAdmin.php">Accueil</a></li>
        <li class="dropdown"><a href="#"><span>Medecins</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="CreerMedecin.php"><span>Ajouter</span></a>
                
              <li class="dropdown"><a href="#"><span>Parcourir</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                <li><a href="AfficherMedADMIN.php?spe=Generaliste">Généraliste</a></li>
                  <li><a href="AfficherMedADMIN.php?spe=Addictologie">Addictologie</a></li>
                  <li><a href="AfficherMedADMIN.php?spe=Andrologie">Andrologie</a></li>
                  <li><a href="AfficherMedADMIN.php?spe=Cardiologie">Cardiologie</a></li>
                  <li><a href="AfficherMedADMIN.php?spe=Dermatologie">Dermatologie</a></li>
                  <li><a href="AfficherMedADMIN.php?spe=Gastro-Hépato-Enterologie">Gastro-Hépato-Entérologie</a></li>
                  <li><a href="AfficherMedADMIN.php?spe=Gynecologie">Gynécologie</a></li>
                  <li><a href="AfficherMedADMIN.php?spe=I.S.T.">I.S.T.</a></li>
                  <li><a href="AfficherMedADMIN.php?spe=Osteopathie">Ostéopathie</a></li>
                </ul>
                
            </ul>
          </li>

             <li class="dropdown"><a href="#"><span>Patient</span><i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="CreerPatADMIN.php"><span>Ajouter</span></a>
                  <li class="dropdown"><a href="AfficherPatADMIN.php"><span>Parcourir</span></i></a>
                </ul>
             </li>
            
            <li class="dropdown"><a href="#"><span>Rendez-vous</span><i class="bi bi-chevron-down"></i></a>
               <ul>
                 <li><a href="#"><span>Ajouter</span></a>
                 <li class="dropdown"><a href="AfficherRdvADMIN.php"><span>Parcourir</span></i></a>
               </ul>
            </li>

              <li class="nav-link scrollto"><a href="AfficherSerADMIN.php">Services</a></li>

             <li class="dropdown"><a href="#"><span>Mon Compte</span><i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#"><span>Mes informations</span></a>
                  <li class="dropdown"><a href="Accueil_neutre.html"><span>Deconnexion</span></i></a>
                </ul>
             </li>

          </ul>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline"> </a>

    </div>
  </header><!-- End Header -->

        <div id="SectionEnseignants">
        
        
        <?php
$Connexion = mysqli_connect('localhost', 'root', '','omnes sante' );
//Verifier connexion
if(!$Connexion){die("Echec de la connexion : ". mysqli_connect_error());}

$sql = "SELECT * FROM services ";
$result = mysqli_query($Connexion,$sql);

 while($data = mysqli_fetch_assoc($result)){

    $salle = $data['Salle'];
   $service1 = $data['Servicelab'];
   $infos = $data['Infos'];
    
        
        

    
   echo'<div class="Enseignants">';
               echo' <div class="row">';
                
                        echo '<div class="PhotoID">';
                           echo' <a href="#"><img class="image" src="sante.png" alt="Photo profil" width ="200" height="200"/></a>';
                       echo'</div>';
                 
                    echo '<div class="col-sm"> <!--Changer la mise en page utiliser tr td th-->';
                        echo'<h2 href=""> '. $service1 . '</h2>';
                        echo'<div class="row">';
                            echo'<div class="col-sm">';
                               echo'<p>Salle : '.$salle.'</p>';
                            echo'</div>';
                           
                        echo'</div>';
                       

                        
                        echo'<div class="col-sm">';
                        echo'<div class="row" >';

                        

                        

                        echo'<div class="btn-group" role="group" aria-label="Basic example">';                        
                        echo'<a role="button" class="btn btn-secondary" href="">Contacter</a>';
                        echo'<a role="button" class="btn btn-secondary" href="AfficherSerRdvADMIN.php? service='.$service1.'">Afficher RDV</a>';
                        echo'</div>';
                        
                        echo'</div></div>';
                        echo'</div>';

                       

                        echo'</div>';
                        echo'</div>';
}
?>

            
        </div>

        <a role="button" class="btn btn-light" href="accueilAdmin.php">Retour</a>

        

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src=https://code.jquery.com/jquery-3.3.1.slim.min.js integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src=https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>

</html>