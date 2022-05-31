<?php


session_start();
$loginpatient = $_SESSION["login"];
$mdppatient = $_SESSION["mdp"];



$ID = $_GET['id'];
$_SESSION["id"] = $ID;

$Connexion = mysqli_connect('localhost', 'root', '', 'omnes sante');
//Verifier connexion
if (!$Connexion) {
    die("Echec de la connexion : " . mysqli_connect_error());
}

$sql = "SELECT * FROM patient WHERE Login LIKE '$loginpatient' AND
 Mdp LIKE '$mdppatient'";
$result = mysqli_query($Connexion,$sql);
while($data = mysqli_fetch_assoc($result)){

    $id = $data['IDpatient'];
    $nom = $data['NomPatient'];
    $prenom = $data['PrenomPatient'];
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
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
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="style2.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medicio - v4.7.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


    <script>
        function funcIndispo() {
            alert("RDV indispo")
        }
        function funcDispo() {
            alert("RDV dispo creez un compte")
        }

    </script>
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

    <!--------------------------- PHP ----------------------------------------------------------------------->

    <?php


    $sql = "SELECT * FROM medecin WHERE ID LIKE '$ID'";
    $result = mysqli_query($Connexion, $sql);
    if (mysqli_num_rows($result) == 0) {
        
    } else while ($data = mysqli_fetch_assoc($result)) {

        $prenom = $data['Prenom'];
        $nommed = $data['Nom'];
        $idmed = $data['ID'];
        $telmed = $data['Tel'];
        $emailmed = $data['Email'];
        $sallemed = $data['Salle'];
        $photomed = $data['Photo'];

        
    }
    //si medecin



    /************       EMPLOI DU TEMPS        *********************************************************/
    echo '<div class="EDT">';
    echo '<h1>Disponibilités </h1>';

    echo '<div class="calendrier">';
    echo '<div class="table-responsive">';
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th></th>';
    echo '<th>Lundi</th>';
    echo '<th>Mardi</th>';
    echo '<th>Mercredi</th>';
    echo '<th>Jeudi</th>';
    echo '<th>Vendredi</th>';
    echo '</tr>';
    echo '</thead>';

    echo '<tbody>';


    for ($i = 8; $i < 19; $i++) {

        /**$$$$$$$$$$$$$$$$$$$$$$$$$$$$     8H00       $$$$$$$$$$$$$$$$$$$$$$$$$$$$**/
        echo '<tr>';
        echo '<td>' . $i . 'h00</td>';
        /********* LUNDI *******/
        echo '<td>';
        $sql = "SELECT * FROM rdv WHERE IDMedecin LIKE '$ID' AND Etat_RDV LIKE '0'";
        $result = mysqli_query($Connexion, $sql);
        $test = 0;
        while ($data = mysqli_fetch_assoc($result)) {

            $var_date = $data['Date'];
            //separation de la variable en deux partie une pour les date une pour les heures
            list($date, $time) = explode(" ", $var_date);
            //separation de dates entre les 3 autres
            list($year, $month, $day) = explode("-", $date);
            //separation des heures en sous variable
            list($hour, $min, $sec) = explode(":", $time);
            $jour = date("l", mktime(0, 0, 0, $month, $day, $year));
            $heure = $hour;

        
            $id = $data['IDMedecin'];


            if ($jour == 'Monday' && $heure == '0' . $i . '' && $min == '00') {
                echo '<div class="indispo">';
                echo  '<input type="button" onclick="funcIndispo()" value="Indisponible"/>';
                echo '</div>';
                $test = 1;
            }
           
        }
        
        $dateRDV = '2022-05-30 '.$i.':00:00';
        if ($test != 1) {

            echo '<div class="dispo">';
            echo  '<input type="button" onclick="funcDispo()" value="disponible"/>';           
             echo '</div>';
        }
        
        echo '</td>';

        /********* MARDI *******/
        echo '<td>';
        $sql = "SELECT * FROM rdv WHERE IDMedecin LIKE '$ID' AND Etat_RDV LIKE '0'";
        $result = mysqli_query($Connexion, $sql);
        $test = 0;
        while ($data = mysqli_fetch_assoc($result)) {

            $var_date = $data['Date'];
            //separation de la variable en deux partie une pour les date une pour les heures
            list($date, $time) = explode(" ", $var_date);
            //separation de dates entre les 3 autres
            list($year, $month, $day) = explode("-", $date);
            //separation des heures en sous variable
            list($hour, $min, $sec) = explode(":", $time);
            $jour = date("l", mktime(0, 0, 0, $month, $day, $year));
            $heure = $hour;

        
            $id = $data['IDMedecin'];


            if ($jour == 'Tuesday' && $heure == '0' . $i . '' && $min == '00') {
                echo '<div class="indispo">';
                echo  '<input type="button" onclick="funcIndispo()" value="Indisponible"/>';
                echo '</div>';
                $test = 1;
            }
           
        }
        
        $dateRDV = '2022-05-31 '.$i.':00:00';
        if ($test != 1) {

            echo '<div class="dispo">';
            echo  '<input type="button" onclick="funcDispo()" value="Disponible"/>';           
             echo '</div>';
        }
        
        echo '</td>';

        /********* MERCREDI *******/
        echo '<td>';
        $sql = "SELECT * FROM rdv WHERE IDMedecin LIKE '$ID' AND Etat_RDV LIKE '0'";
        $result = mysqli_query($Connexion, $sql);
        $test = 0;
        while ($data = mysqli_fetch_assoc($result)) {

            $var_date = $data['Date'];
            //separation de la variable en deux partie une pour les date une pour les heures
            list($date, $time) = explode(" ", $var_date);
            //separation de dates entre les 3 autres
            list($year, $month, $day) = explode("-", $date);
            //separation des heures en sous variable
            list($hour, $min, $sec) = explode(":", $time);
            $jour = date("l", mktime(0, 0, 0, $month, $day, $year));
            $heure = $hour;

        
            $id = $data['IDMedecin'];


            if ($jour == 'Wednesday' && $heure == '0' . $i . '' && $min == '00') {
                echo '<div class="indispo">';
                echo  '<input type="button" onclick="funcIndispo()" value="Indisponible"/>';
                echo '</div>';
                $test = 1;
            }
           
        }
        
        $dateRDV = '2022-06-01 '.$i.':00:00';
        if ($test != 1) {

            echo '<div class="dispo">';
            echo  '<input type="button" onclick="funcDispo()" value="Disponible"/>';           
             echo '</div>';
        }
        
        echo '</td>';

        /********* Jeudi *******/
        echo '<td>';
        $sql = "SELECT * FROM rdv WHERE IDMedecin LIKE '$ID' AND Etat_RDV LIKE '0'";
        $result = mysqli_query($Connexion, $sql);
        $test = 0;
        while ($data = mysqli_fetch_assoc($result)) {

            $var_date = $data['Date'];
            //separation de la variable en deux partie une pour les date une pour les heures
            list($date, $time) = explode(" ", $var_date);
            //separation de dates entre les 3 autres
            list($year, $month, $day) = explode("-", $date);
            //separation des heures en sous variable
            list($hour, $min, $sec) = explode(":", $time);
            $jour = date("l", mktime(0, 0, 0, $month, $day, $year));
            $heure = $hour;

        
            $id = $data['IDMedecin'];


            if ($jour == 'Thursday' && $heure == '0' . $i . '' && $min == '00') {
                echo '<div class="indispo">';
                echo  '<input type="button" onclick="funcIndispo()" value="Indisponible"/>';
                echo '</div>';
                $test = 1;
            }
           
        }
        
        $dateRDV = '2022-06-02 '.$i.':00:00';
        if ($test != 1) {

            echo '<div class="dispo">';
            echo  '<input type="button" onclick="funcDispo()" value="Disponible"/>';           
             echo '</div>';
        }
        
        echo '</td>';

        /********* Vendredi *******/
        echo '<td>';
        $sql = "SELECT * FROM rdv WHERE IDMedecin LIKE '$ID' AND Etat_RDV LIKE '0'";
        $result = mysqli_query($Connexion, $sql);
        $test = 0;
        while ($data = mysqli_fetch_assoc($result)) {

            $var_date = $data['Date'];
            //separation de la variable en deux partie une pour les date une pour les heures
            list($date, $time) = explode(" ", $var_date);
            //separation de dates entre les 3 autres
            list($year, $month, $day) = explode("-", $date);
            //separation des heures en sous variable
            list($hour, $min, $sec) = explode(":", $time);
            $jour = date("l", mktime(0, 0, 0, $month, $day, $year));
            $heure = $hour;

        
            $id = $data['IDMedecin'];


            if ($jour == 'Friday' && $heure == '0' . $i . '' && $min == '00') {
                echo '<div class="indispo">';
                echo  '<input type="button" onclick="funcIndispo()" value="Indisponible"/>';
                echo '</div>';
                $test = 1;
            }
           
        }
        
        $dateRDV = '2022-06-03 '.$i.':00:00';
        if ($test != 1) {

            echo '<div class="dispo">';
            echo  '<input type="button" onclick="funcDispo()" value="Disponible"/>';           
             echo '</div>';
        }
        
        echo '</td>';
    }



    echo '</div>';

    //fermer la connexion
    mysqli_close($Connexion);
    ?>

    <!--------------------------- FIN PHP ----------------------------------------------------------------------->




</body>

</html