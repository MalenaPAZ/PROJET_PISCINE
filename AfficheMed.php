<?php


// Start the session
session_start();
$login = $_SESSION["login"];
$mdp = $_SESSION["mdp"];

$Connexion = mysqli_connect('localhost', 'root', '','omnes sante' );
//Verifier connexion
if(!$Connexion){die("Echec de la connexion : ". mysqli_connect_error());}


$sql = "SELECT * FROM patient WHERE Login LIKE '$login' AND
 Mdp LIKE '$mdp'";
$result = mysqli_query($Connexion,$sql);
while($data = mysqli_fetch_assoc($result)){

    $id = $data['IDpatient'];
    $nom = $data['NomPatient'];
    $prenom = $data['PrenomPatient'];
}


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

  <link href="MedGene.css" rel="stylesheet" type="text/css" />


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
          <li><a class="nav-link scrollto " href="accueilPat.php">Accueil</a></li>
          <li class="dropdown"><a href="#"><span>Tout parcourir</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="MedecinGeneraliste.php"><span>Médecine générale</span></a>
                
              <li class="dropdown"><a href="#"><span>Médecins spécialistes</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="MedecinSpecialiste.php?spe=Addictologie">Addictologie</a></li>
                  <li><a href="MedecinSpecialiste.php?spe=Andrologie">Andrologie</a></li>
                  <li><a href="MedecinSpecialiste.php?spe=Cardiologie">Cardiologie</a></li>
                  <li><a href="MedecinSpecialiste.php?spe=Dermatologie">Dermatologie</a></li>
                  <li><a href="MedecinSpecialiste.php?spe=Gastro-Hépato-Enterologie">Gastro-Hépato-Entérologie</a></li>
                  <li><a href="MedecinSpecialiste.php?spe=Gynecologie">Gynécologie</a></li>
                  <li><a href="MedecinSpecialiste.php?spe=I.S.T.">I.S.T.</a></li>
                  <li><a href="MedecinSpecialiste.php?spe=Osteopathie">Ostéopathie</a></li>
                </ul>
                <li class="dropdown"><a href="#"><span>Laboratoire de biologie médicale</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Informations</a></li>
                  <li><a href="ServicesP.php?service=Depistage covid-19">Dépistage covid-19</a></li>
                  <li><a href="ServicesP.php?service=Biologie preventive">Biologie préventive</a></li>
                  <li><a href="ServicesP.php?service=Biologie de la femme enceinte">Biologie de la femme enceinte</a></li>
                  <li><a href="ServicesP.php?service=Biologie de routine">Biologie de routine</a></li>
                  <li><a href="ServicesP.php?service=Cancerologie">Cancérologie</a></li>
                  <li><a href="ServicesP.php?service=Gynecologie">Gynécologie</a></li>
                </ul>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#services">Recherche</a></li>
          <li><a class="nav-link scrollto" href="AfficherRDV.php">Rendez-vous</a></li>
          <li class="dropdown"><a href="chat.php"><span>Votre compte</span><i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="AfficherInfoPat.php"><span>Mon compte</span></a>
                <li class="dropdown"><a href="Accueil_neutre.html"><span>Deconnexion</span></i></a>
              </ul>
            </li>
            
            <div class="col-sm">
                <?php echo $nom. ' '. $prenom ?>
                <?php echo "ID : " . $id ?>
                        </div>
                        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      

    </div>
  </header><!-- End Header -->
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
        $salle = $data['Salle'];
        $spe = $data['Specialite'];


        echo'<div class="Enseignants">';
                echo' <div class="row">';
                    
                            echo '<div class="PhotoID">';
                            echo' <a href="#"><img class="image" src="'.$data['Photo'].'" alt="Photo profil" width ="200" height="200"/></a>';
                        echo'</div>';
                    
                        echo '<div class="col-sm"> <!--Changer la mise en page utiliser tr td th-->';
                            echo'<h2 href="">Dr.' . $data['Prenom'] .'   '.$data['Nom'] . '  -  '.$spe.'</h2>';
                            echo'<div class="row">';
                                echo'<div class="col-sm">';
                                echo'<p>Salle : '. $data['Salle'].'</p>';
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