


<!doctype html>

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

      <a href="Accueil_neutre.html" class="logo me-auto"><img src="Omnes sante.png" alt="Omnes sante logo" height="280" width="130"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <div class="search">
          <input class="srch" type="search" id="search" value="" placeholder="Rechercher" onchange="ouvrirPage()">
          <button class="btn" id="button" type="button" onclick="ouvrirPage()">Search</button>
      </div>
                <li class="dropdown"><a href="Connexion.php"><span>Se connecter</span></i></a>
                        
        </ul>
        <script>
        $database = "omnes sante";
        $db_handle = mysqli_connect('localhost','root','');
        $db_found = mysqli_select_db($db_handle, $database);

      function ouvrirPage() {
      var a = document.getElementById("search").value;

      if (a === "medecin generaliste" | a =="généraliste" | a =="médecine générale" | a =="medecine generale") {
          window.open("MEDGENERECH.php");
      }
      if (a === "medecin specialiste" | a =="spécialiste" | a =="specialistes" | a =="medecin spécialiste") {
          window.open("MedecinSpecialiste.php");
      }
      if (a === "labo" | a =="laboratoire" | a =="laboratoire de biologie" | a =="laboratoire de biologie médicale  ") {
          window.open("AfficherSerADMIN.php");
      }
      
      if (a === "gynécologie" | a=="addictologie" | a=="andrologie"  | a=="cardiologie" | a=="dermatologie"
          | a=="gastro" | a=="gastro-hépato" | a=="gastro-hépato-entérologie" | a=="ist" | a=="IST "
          | a=="I.S.T" | a=="I.S.T. " | a=="ostéopathie") {
          window.open("MedecinSpecialiste.php");
      }
      if (a === "informations" | a=="depistage covid-19" | a=="covid 19"  | a=="depistage" | a=="bilogie preventive" | a=="biologie de la femme enceinte"
          | a=="biologie de routine" | a=="cancérologie" | a=="cancerologie" | a=="gynecologie") {
          window.open("AfficherSerADMIN.php");
      }



      }

      </script>
      </nav><!-- .navbar -->

      

    </div>
  </header><!-- End Header -->

  <div id="SectionEnseignants">


    <?php
    $Connexion = mysqli_connect('localhost', 'root', '', 'omnes sante');
    //Verifier connexion
    if (!$Connexion) {
      die("Echec de la connexion : " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM medecin WHERE Specialite LIKE 'Generaliste'";
    $result = mysqli_query($Connexion, $sql);

    while ($data = mysqli_fetch_assoc($result)) {

      $prenom = $data['Prenom'];
      $nom = $data['Nom'];
      $tel = $data['Tel'];
      $email = $data['Email'];
      $salle = $data['Salle'];
      $photo = $data['Photo'];
      $idmed = $data['ID'];


   

      $_SESSION["idmed"] = $idmed;


      echo '<div class="Enseignants">';
      echo ' <div class="row">';

      echo '<div class="PhotoID">';
      echo ' <a href="#"><img class="image" src="' . $data['Photo'] . '" alt="Photo profil" width ="200" height="200"/></a>';
      echo '</div>';

      echo '<div class="col-sm"> <!--Changer la mise en page utiliser tr td th-->';
      echo '<h2 href=""> Dr.' . $data['Nom'] . '   ' . $data['Prenom'] . '</h2>';
      echo '<div class="row">';
      echo '<div class="col-sm">';
      echo '<p>Salle : ' . $data['Salle'] . '</p>';
      echo '</div>';

      echo '</div>';
      echo '<div class="row">';
      echo '<div class="col-sm">';
      echo '<p>Telephone : ' . $data['Tel'] . '</p>';
      echo '</div>';

      echo '</div>';

      echo '<div class="row">';
      echo '<div class="col-sm">';
      echo '<p>Email : ' . $data['Email'] . ' </p>';
      echo '</div>';

      echo '</div>';
      echo '<div class="col-sm">';
      echo '<div class="row" >';





      echo '<div class="btn-group" role="group" aria-label="Basic example">';
      echo '<a role="button" class="btn btn-secondary" href="RECHMEDEDT.php?nom=' . $data['Nom'] . '& prenom=' . $data['Prenom'] . '">Disponibilité</a>';
      echo '<a role="button" class="btn btn-secondary" href="testxmlphp.php">CV</a>';
      echo '<a role="button" class="btn btn-secondary" href="chat.php">Contacter</a>';
      echo '</div>';

      echo '</div></div>';
      echo '</div>';



      echo '</div>';
      echo '</div>';
    }
    ?>


  </div>

  <a role="button" class="btn btn-light" href="accueil.html">Retour</a>



  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src=https://code.jquery.com/jquery-3.3.1.slim.min.js integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src=https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>