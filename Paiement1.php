<?php


session_start();
$loginpatient = $_SESSION["login"];
$mdppatient = $_SESSION["mdp"];

$idmed = $_GET["id"];
$date = $_GET['date'];

$Connexion = mysqli_connect('localhost', 'root', '','omnes sante' );
//Verifier connexion
if(!$Connexion){die("Echec de la connexion : ". mysqli_connect_error());}


$sql = "SELECT * FROM patient WHERE Login LIKE '$loginpatient' AND
 Mdp LIKE '$mdppatient'";
$result = mysqli_query($Connexion,$sql);
while($data = mysqli_fetch_assoc($result)){

    $idpatient = $data['IDpatient'];
    $nompatient = $data['NomPatient'];
    $prenompatient = $data['PrenomPatient'];
}



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
         

      <br><br><br><br><br><br><br>

    <title>Creer Medecin</title>
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
                <?php echo $nompatient. ' '. $prenompatient ?>
                <?php echo "ID : " . $idpatient ?>
                        </div>
                        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      

    </div>
  </header><!-- End Header -->

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
        <h1>Paiement</h1><br>
      </div>
      <?php 
          echo '<form action="Paiement2.php?date='.$date.'&amp;id='.$idmed.'" method="post">'; 
        ?>
      <h2>Coordonnées bancaires</h2><br>
            
            <p>
              <label for="Typecarte" class="left">Type de carte de paiement :</label>
            <div id="section1">
              <select name="Typecarte" id="Typecarte">
                <option value="Visa">Visa</option>
                <option value="MasterCard">MasterCard</option>
                <option value="American Express">American Express</option>
                <option value="PayPal">PayPal</option>
              </select>
            </div>
            </p>
        <p>
          <label for="numcarte" class="left">Numero de  la carte :</label>
        <div id="section1">
          <input name="numcarte" id="numcarte" type="int" size="30" maxlength="30" />
        </div>
        </p>
        <p>
          <label for="nomcarte" class="left">Nom afficher dans la carte :</label>
        <div id="section1">
          <input name="nomcarte" id="nomcarte" type="text" size="30" maxlength="30" />
        </div>
        </p>
        <p>
          <label for="dateexp" class="left">Date d'espiration :</label>
        <div id="section1">
          <input name="dateexp" id="dateexp" type="text" size="30" maxlength="30" />
        </div>
        </p>
        <p>
          <label for="codecarte" class="left">Code de sécurité :</label>
        <div id="section1">
          <input name="codecarte" id="codecarte" type="int" size="30" maxlength="30" />
        </div>
        </p>


        <input type="submit" name="Creer" value="Payer">
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
            


