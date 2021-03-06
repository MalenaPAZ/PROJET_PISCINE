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
  ======================================================== --><meta charset="utf-8">
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

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <br><br><br><br>
      <div class="section-title">
        <h2>Le saviez-vous ?</h2>
        <p>Omnes sante est une entreprise française fondée en 2022 par quatre étudiants qui propose un logiciel de gestion des rendez-vous et des services aux patients pour les professionnels de santé et un service de prise de rendez-vous en ligne pour les patients en France.</p>
        <br><br><br>
      <h3>Trouvez rapidement un spécialiste près de chez vous et prenez rendez-vous gratuitement en ligne en seumement quelques clics</h3>
      </div>
      <div class="row">
        <div class="col-lg-6" data-aos="fade-right">
          <img src="ece paris.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
          <br><br><br>
           <p class="fst-italic">
            Les catégories de services disponibles chez Omnes Santé
          </p>
          <br>
          <ul>
            <li><i class="bi bi-check-circle"></i> Médecine générale</li>
            <li><i class="bi bi-check-circle"></i> Médecins spécialistes</li>
            <li><i class="bi bi-check-circle"></i> Laboratoire de biologie médicale</li>
          </ul>
          
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(event1.jpg)">
          <div class="container">
            <h2>Evènements de la semaine du 30/05/2022</span></h2>
            <h4><p>30/05/2022 : Forum de la médecine et de l'industrie pharmaceutique</p></h4>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(event2.png)">
          <div class="container">
            <h4><br><p>31/05/2022 : Début du séminaire des médecins organisé par Omnes Santé</p></h4>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(event3.jpg)">
          <div class="container">
            <h4><br><p>01/06/2022 : Conférence autour de la pandémie de Covid-19 à Paris</p></h4>
          </div>
        </div>

        <!--Slide 4-->
        <div class="carousel-item" style="background-image: url(event4.jpg)">
          <div class="container">
            <h4><br><p>02/06/2022 : Porte-ouverte de l'Omnes Santé</p></h4>
          </div>
        </div>

         <!--Slide 5-->
         <div class="carousel-item" style="background-image: url(event5.jpg)">
          <div class="container">
            <h4><br><p>03/06/2022 : Rencontre avec la nouvelle ministre de la santé : Brigitte Bourguignon</p></h4>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section>
  <!-- End Hero -->


<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Docteurs</h2>
      <p>Chez Omnes Santé, nous avons fait appel aux meilleurs médecins spécialistes et généralistes afin d'être sûrs que vous êtes entre de bonnes mains ! Découvrez les ci-dessous !</p>
    </div>

    <div class="gallery-slider swiper">
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><a class="gallery-lightbox" href="medecin1.jpg"><img src="medecin1.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="gallery-lightbox" href="medecin2.jpg"><img src="medecin2.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="gallery-lightbox" href="medecin3.jpg"><img src="medecin3.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="gallery-lightbox" href="medecin4.jpg"><img src="medecin4.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="gallery-lightbox" href="medecin5.jpg"><img src="medecin5.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="gallery-lightbox" href="medecin6.jpg"><img src="medecin6.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="gallery-lightbox" href="medecin7.jpeg"><img src="medecin7.jpeg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="gallery-lightbox" href="medecin8.jpg"><img src="medecin8.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="gallery-lightbox" href="medecin9.jpg"><img src="medecin9.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="gallery-lightbox" href="medecin10.jpg"><img src="medecin10.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="gallery-lightbox" href="medecin11.jpg"><img src="medecin11.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="gallery-lightbox" href="medecin12.jpg"><img src="medecin12.jpg" class="img-fluid" alt=""></a></div>



      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section>

<!-- End Gallery Section -->


<!-- ======= Departments Section ======= -->
<section id="departments" class="departments">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Médecins spécialistes</h2>
      <img src="médecins spécialistes.jpg" alt="médecins spécialistes" height="350" width="500"/>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-4 mb-5 mb-lg-0">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4>Addictologie</h4>
              <p>Étude des comportements pouvant aboutir à une dépendance dangereuse pour la santé.</p>
            </a>
          </li>
          <li class="nav-item mt-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <h4>Andrologie</h4>
              <p>Discipline médicale traitant de la physiologie et de la pathologie de l'appareil génital masculin.</p>
            </a>
          </li>
          <li class="nav-item mt-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <h4>Cardiologie</h4>
              <p>Spécialité médicale qui traite du cœur et des vaisseaux sanguins, en particulier de leurs maladies.</p>                </a>
          </li>
          <li class="nav-item mt-4">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <h4>Dermatologie</h4>
              <p>Partie de la médecine qui étudie et soigne les maladies de la peau.</p>
            </a>
          </li>
          <li class="nav-item mt-5">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
              <h4>Gastro-Hépato-Entérologie</h4>
              <p>Spécialité de la médecine qui étudie les organes du tube digestif, leur fonctionnement et leurs pathologies.</p>
            </a>
          </li><li class="nav-item mt-6">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
              <h4>Gynécologie</h4>
              <p>Discipline médicale qui a pour objet l'étude de l'appareil génital de la femme.</p>
            </a>
          </li><li class="nav-item mt-7">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-7">
              <h4>I.S.T.</h4>
              <p>Infections sexuellement transmissibles transmises par voie sexuelle.</p>
            </a>
          </li>
        </li><li class="nav-item mt-8">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-8">
            <h4>Ostéopathie</h4>
            <p>Pratique exclusivement manuelle qui lève en particulier les blocages articulaires du corps pour lui permettre de mieux fonctionner.</p>
          </a>
          </li>
        </ul>
      </div>
      <div class="col-lg-8">
        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <br><br><br>
            <h3>Addictologie</h3>
            <img src="Addictologie.png" alt="" class="img-fluid">
            <div class="justifier">
                <p>L'addictologie est l'étude et le soin des addictions, c'est-à-dire de la dépendance physiologique et psychologique à une substance ou à un comportement.<br>
                Ce domaine de recherche en construction vise à appréhender, dans un cadre commun, les psychopathologies entraînant les rapports de dépendance (toxicomanie, jeu pathologique, alcoolisme, tabagisme, mais aussi anorexie mentale, boulimie, etc.).<br><br>
                Les addictologues sont les médecins ou personnels soignants qualifiés dans ce domaine.</p>
              </div> 
          </div>
          
          <div class="tab-pane active show" id="tab-2">
            <br><br><br>
            <h3>Andrologie</h3>
            <img src="andrologie.jpg" alt="" class="img-fluid">
            <div class="justifier">
              <p>L’andrologie est une sous-discipline de l’urologie qui traite des maladies spécifiquement masculines, notamment celles qui concernent l’appareil reproducteur masculin.<br><br>
                L’andrologue est l’équivalent masculin du gynécologue, à ceci près que, si pratiquement toutes les femmes ont leur gynécologue, rares sont les hommes qui consultent pour une affection andrologique.</p>
            </div> 
          </div>

          <div class="tab-pane active show" id="tab-3">
            <br><br><br>
            <h3>Cardiologie</h3>
            <img src="cardiologie.jpg" alt="" class="img-fluid">
            <div class="justifier">
              <p>La cardiologie est une branche de la médecine qui traite des troubles du cœur ainsi que de certaines parties du système circulatoire. <br>Le domaine comprend le diagnostic médical et le traitement des malformations cardiaques congénitales, des maladies coronariennes, de l'insuffisance cardiaque, des cardiopathies valvulaires et de l'électrophysiologie. Les médecins spécialisés dans ce domaine de la médecine sont appelés cardiologues. <br>Les cardiologues pédiatres sont des pédiatres spécialisés en cardiologie. <br>Les médecins spécialisés en chirurgie cardiaque sont appelés chirurgiens cardiothoraciques ou chirurgiens cardiaques, une spécialité de la chirurgie générale.<br>
                Bien que le système cardiovasculaire soit inextricablement lié au sang, la cardiologie ne s'intéresse guère à l'hématologie ni à ses maladies.</p>
            </div> 
          </div>

          <div class="tab-pane active show" id="tab-4">
            <br><br><br>
            <h3>Dermatologie</h3>
            <img src="dermatologie.jpg" alt="" class="img-fluid">
            <div class="justifier">
              <p>La dermatologie est une spécialité de médecine qui s'occupe de la peau, des muqueuses et des phanères (ongles, cheveux, poils).<br> Elle est associée à la vénérologie (vénéréologie), c’est-à-dire l'étude des maladies vénériennes ou infections sexuellement transmissibles (IST).<br> Le médecin spécialisé pratiquant la dermatologie s'appelle le dermatologue ou le dermatologiste. <br><br>
                La peau se compose de plusieurs couches superposées (de la plus profonde à la plus superficielle) incluant l'hypoderme, le derme (dermes réticulaire, profond et papillaire), la membrane basale et l'épiderme (Stratum germinativum, spinosum, granulosum, lucidum et corneum).</p>
            </div>
          </div>

          <div class="tab-pane active show" id="tab-5">
            <br><br><br>
            <h3>GastroHépato-Entérologie </h3>
            <img src="Gastro Hépato-Entérologie.jpg" alt="" class="img-fluid">
            <div class="justifier">
              <p>Partie de la médecine qui étudie les organes de la digestion, leurs fonctionnements, leurs maladies et les moyens de les soigner.<br>
                Les organes de la digestion sont composés du tube digestif (œsophage, estomac, intestins) du foie et du pancréas.<br>
                La gastro-entérologie concerne le tube digestif et l'hépatologie, le foie.<br>
                La proctologie est une spécialité qui fait partie de la "gastro-entérologie". <br> <br>Elle étudie plus particulièrement la dernière partie du tube digestif : le rectum et l'anus.</p>
            </div>
          </div>

          <div class="tab-pane active show" id="tab-6">
            <br><br><br>
            <h3>Gynécologie</h3>
            <img src="gynécologie.png" alt="" class="img-fluid">
            <div class="justifier">
              <p>La gynécologie est une spécialité médico-chirurgicale qui s'occupe de la physiologie et des maladies de l'appareil génital féminin.<br> Le médecin spécialisé pratiquant la gynécologie s'appelle un gynécologue.<br> Cette spécialité peut aussi être pratiquée par une sage-femme. <br>La spécialité des aspects médicaux pour les hommes s'appelle quant à elle l'andrologie.</p>
            </div>
          </div>

          <div class="tab-pane active show" id="tab-7">
            <br><br><br>
            <h3>I.S.T.</h3>
            <img src="I.S.T..png" alt="" class="img-fluid">
            <div class="justifier">
              <p>Les Infections Sexuellement Transmissibles (anciennement appelées Maladies Sexuellement Transmissibles [MST] ou maladies vénériennes) sont des infections provoquées par des microbes (virus, bactéries, parasites) qui peuvent être transmis plus ou moins facilement au cours de relations sexuelles.<br>
                <br>Les IST les plus connues sont : le VIH, la gonococcie, les chlamydiae, la syphilis, les condylomes, la vaginose, l'herpès génital, les hépatites.</p>
            </div>
          </div>

          <div class="tab-pane active show" id="tab-8">
            <br><br><br>
            <h3>Ostéopathie</h3>
            <img src="Ostéopathie.jpg" alt="" class="img-fluid">
            <div class="justifier">
              <p>L'ostéopathie est une médecine non conventionnelle qui repose sur l'idée non démontrée que des manipulations manuelles du système musculosquelettique et des techniques de relâchement myofascial permettraient d'apporter un soulagement dans le domaine du trouble fonctionnel.<br><br><br> En France, elle est aujourd'hui réglementée, mais considérée comme non-scientifique.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
  <!-- End Departments Section -->


  <main id="main">

 
    
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

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


        
        
        <?php
$Connexion = mysqli_connect('localhost', 'root', '','omnes sante' );

echo "login: ".$_SESSION["login"]." mdp: " . $_SESSION["mdp"]. "//";
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