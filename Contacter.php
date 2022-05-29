<?php


session_start();
$loginadmin = $_SESSION["login"];
$mdpadmin = $_SESSION["mdp"];

$ID = $_GET['idrec'];
$LOGIN = $_GET['loginrec'];
$MDP = $_GET['mdprec'];



$Connexion = mysqli_connect('localhost', 'root', '', 'omnes sante');
//Verifier connexion
if (!$Connexion) {
  die("Echec de la connexion : " . mysqli_connect_error());
}




$sql = "SELECT * FROM patient WHERE Login LIKE '$loginadmin' AND
 Mdp LIKE '$mdpadmin'";
$result = mysqli_query($Connexion, $sql);
if (mysqli_num_rows($result) == 0) {
  $sql = "SELECT * FROM medecin WHERE Login LIKE '$loginadmin' AND Mdp LIKE '$mdpadmin'";
  $result = mysqli_query($Connexion, $sql);
  if (mysqli_num_rows($result) == 0) {
    
      $nom = $data['NomAdmin'];
      $prenom = $data['PrenomAdmin'];
      $id = $data['ID'];
      $mailenv = $data['EmailAdmin'];

  } else {

    $nom = $data['Nom'];
    $prenom = $data['Prenom'];
    $id = $data['ID'];
    $mailen = $data['Email'];
  } //si medecin
} else {

  $nom = $data['NomPatient'];
  $prenom = $data['PrenomPatient'];
  $id = $data['IDpatient'];
  $mailrec = $data['EmailPatient'];
} //si patient

$sql = "SELECT * FROM patient WHERE Login LIKE '$LOGIN' AND Mdp LIKE '$MDP'";
$result = mysqli_query($Connexion, $sql);
if (mysqli_num_rows($result) == 0) {
  $sql = "SELECT * FROM medecin WHERE Login LIKE '$LOGIN' AND Mdp LIKE '$MDP'";
  $result = mysqli_query($Connexion, $sql);
  if (mysqli_num_rows($result) == 0) {
    $sql = "SELECT * FROM admin WHERE Login LIKE '$LOGIN' AND Mdp LIKE '$MDP'";
    $result = mysqli_query($Connexion, $sql);
    if (mysqli_num_rows($result) == 0) {
      echo "Compte incorrect";
    } else {

      $nomrec = $data['NomAdmin'];
      $prenomrec = $data['PrenomAdmin'];
      $idrec = $data['ID'];
      $mailrec = $data['EmailAdmin'];
    } //si admin
  } else {

    $nomrec = $data['Nom'];
    $prenomrec = $data['Prenom'];
    $idrec = $data['ID'];
    $mailrec = $data['Email'];
  } //si medecin
} else {

  $nomrec = $data['NomPatient'];
  $prenomrec = $data['PrenomPatient'];
  $idrec = $data['IDpatient'];
  $mailrec = $data['EmailPatient'];
} //si patient

?>

<!DOCTYPE html>
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

    <style type="text/css">
      #section1 {
        text-align: center;
      }

      #a {
        color: #3fbbc0;
        text-decoration: none;
      }
    </style>

    <div id="section1">
      <div id="a">
        <h1>MAIL</h1><br>
      </div>
      <?php
      echo '<form action="Contacter2.php?mailrec=' . $mailrec . '&amp;mailenv=' . $mail . '" method="post">';
      ?>
      <p>
        <label for="message" class="left">Message</label>
      <div id="section1">
        <input name="message" id="message" type="text" size="5000" maxlength="3000" />
      </div>
      </p>


      <input type="submit" name="Creer" value="Envoyer">
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