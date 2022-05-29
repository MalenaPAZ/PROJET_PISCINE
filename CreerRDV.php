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

<!DOCTYPE html >
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

          <title>Omnes santé</title>
          <meta content="" name="description">
          <meta content="" name="keywords">

          <!-- Favicons -->
          <link href="Patient.png" rel="icon">

          <!-- Google Fonts -->
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

          <!-- Vendor CSS Files -->
          <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
          <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
          <link href="assets/vendor/aos/aos.css" rel="stylesheet">
          <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
          <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
          <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
          <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
          <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

          <!-- Template Main CSS File -->
          <link href="assets/css/style.css" rel="stylesheet">

          </head>
          <body>
         <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="Accueil_neutre.html" class="logo me-auto"><img src="Omnes sante.png" alt="Omnes sante logo" height="280" width="130"></a>
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

      <br><br><br><br><br><br><br>

    <title>Créer RDV Medecin</title>
  </head>
  <body>

    <style type="text/css">
      #section1{
      text-align: center;
      }
      #a {
      color: #3fbbc0;
      text-decoration: none;
      }
    </style>

    <div id="section1">
      <div id="a">
        <h1>Créer un rendez-vous</h1><br>
      </div>
      <form action="creerRDVAdmin.php" method="post">
          <p>
              <label for="NumRDV" class="left">NumRDV</label>
              <div id="section1">
                <input name="NumRDV" id="NumRDV" type="text" size="30" maxlength="30" />
              </div>
          </p>
          
        <p>
            <label for="IDPatient" class="left">ID Patient</label>
            <div id="section1">
              <input name="IDPatient" id="IDPatient" type="text" size="30" maxlength="30" />
          </div>
        </p>
        <p>
          <label for="IDMedecin" class="left">ID Medecin</label>
          <div id="section1">
            <input name="IDMedecin" id="IDMedecin" type="text" size="30" maxlength="30" />
          </div>
        </p>
        <p>
          <label for="Motif_RDV" class="left">Motif du RDV</label>
          <div id="section1">
            <input name="Motif_RDV" id="Motif_RDV" type="text" size="30" maxlength="30" />
          </div>
        </p>

        <p>
          <label for="Salle_RDV" class="left">Salle du RDV</label>
          <div id="section1">
            <input name="Salle_RDV" id="Salle_RDV" type="text" size="30" maxlength="30" />
          </div>
        </p>
        <p>
          <label for="Etat_RDV" class="left">Etat du RDV</label>
          <div id="section1">
            <input name="Etat_RDV" id="Etat_RDV" type="text" size="30" maxlength="30" />
          </div>
        </p>
        <p>
          <label for="Type_RDV" class="left">Type de RDV</label>
          <div id="section1">
            <input name="Type_RDV" id="Type_RDV" type="text" size="30" maxlength="30" />
          </div>
        </p>
        <p>
          <label for="prix" class="left">Prix</label>
          <div id="section1">
            <input name="prix" id="prix" type="text" size="30" maxlength="30" />
          </div>
        </p>
        <p>
          <label for="Date" class="left">Date</label>
          <div id="section1">
            <input name="Date" id="Date" type="Date" size="30" maxlength="30" />
          </div>
        </p>

        <input type="submit" name="Creer" value="Créer RDV">
      </form>
    </div>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

          <div class="section-title">
          <h2>Contact</h2>
          <p>N'hésitez pas à nous contacter grâce aux informations que vous trouverez ci-dessous si vous avez la moindre question, nous restons à la disposition de nos patients !</p>
          </div>

      </div>

      <div>
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.351862863769!2d2.2872323999999997!3d48.8515004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6700497ee3ec5%3A0xdd60f514adcdb346!2s37%20Quai%20de%20Grenelle%2C%2075015%20Paris!5e0!3m2!1sfr!2sfr!4v1653258049942!5m2!1sfr!2sfr" frameborder="0" allowfullscreen></iframe>
      </div>
      
      <div class="container">

          <div class="row mt-5">

              <div class="row">
              <div class="col-md-12">
                  <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Adresse</h3>
                  <p>37 quai de Grenelle, 75015 Paris</p>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Mail </h3>
                  <p><a href="mailto:info@omnessante.com">info@omnessante.com</a><br><a href="mailto:contact@omnessante.com">contact@omnessante.com</a></p>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Téléphone</h3>
                  <p>(+33)1 02 03 04 05</p>
                  <br>
                  </div>
              </div>

          </div>

      </div>
      </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <br>
  <footer id="footer">
      <div class="container">
          <div class="copyright">
              &copy; Copyright <strong><span>2022 Omnes Santé</span></strong>.
          </div>
      </div>
      
  </footer><!-- End Footer -->

  </body>
</html>
            


