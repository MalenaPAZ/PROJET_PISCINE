<?php

// Start the session
session_start();

$Connexion = mysqli_connect('localhost', 'root', '','omnes sante' );
//Verifier connexion
if(!$Connexion){die("Echec de la connexion : ". mysqli_connect_error());}
$login = $_SESSION["login"];
$mdp = $_SESSION["mdp"];

$sql = "SELECT * FROM medecin WHERE Login LIKE '$login' AND
 Mdp LIKE '$mdp'";
$result = mysqli_query($Connexion,$sql);
while($data = mysqli_fetch_assoc($result)){

    $id = $data['ID'];
    $nom = $data['Nom'];
    $prenom = $data['Prenom'];
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
          <li class="nav-link scrollto"><a href="#">Rendez-vous</a></li>
          <li class="nav-link scrollto"><a href="#">Mon compte</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->


  





  
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

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-thermometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    
    

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>

              <p><strong>Doctors</strong> consequuntur quae qui deca rode</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Departments</strong> adipisci atque cum quia aut numquam delectus</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Research Lab</strong> aut commodi quaerat. Aliquam ratione</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Awards</strong> rerum asperiores dolor molestiae doloribu</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>Est labore ad</h4>
              <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-cube-alt"></i>
              <h4>Harum esse qui</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-images"></i>
              <h4>Aut occaecati</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-shield"></i>
              <h4>Beatae veritatis</h4>
              <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/features.jpg");' data-aos="zoom-in"></div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-wheelchair"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-notes-medical"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select">
                <option value="">Select Department</option>
                <option value="Department 1">Department 1</option>
                <option value="Department 2">Department 2</option>
                <option value="Department 3">Department 3</option>
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select">
                <option value="">Select Doctor</option>
                <option value="Doctor 1">Doctor 1</option>
                <option value="Doctor 2">Doctor 2</option>
                <option value="Doctor 3">Doctor 3</option>
              </select>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->

  
    
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

          <div class="col-lg-6">

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


    <!--<a class="nav-item nav-link disabled" href="#">Disabled</a>-->
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
                <ul>

                  <form class="form-inline">

                   <input class="form-control mr-sm-2" type="search" placeholder="Recherche..." aria-label="Search">

                   <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Recherche </button>

                  </form>

                </ul>


          </div>


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