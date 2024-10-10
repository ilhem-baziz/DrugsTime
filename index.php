

<!-- pour le traitement php dans la meme page il faut avant le head -->
<?php 
if (isset($_POST["login"])) {
    // recuperer les donnees du formulaire
    $_email=$_POST['mail'];
    $_mdp=$_POST['mdp'];
    // recuperer les comptes de la bdd
    // d'abord il faut se connecter
    require('connexion.php');
    $_comptes=$amis->query('select email,mdp from candidat');
    $_existe=false;
    while ($tuple=$_comptes->fetch()) {
        if ($_email==$tuple['email'] && $_mdp==$tuple['mdp']) {
            $_existe=true;
            break;
        }
    }
    // header pour redireger vers une autre page avec le php
    if ($_existe) {
        header('location:monespace.php');
    }else{
        header('location:index.php');

    }
   
}
// isset >>>>>>>> si on clicke sur le btn valider qui avait le name = vali
if (isset($_POST['vali'])) {
  $mail=$_POST['mail'];

  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $daten=$_POST['daten'];
  $lieun=$_POST['lieun'];
  $mdp=$_POST['mdp'];
  $num=$_POST['num'];

  require('connexion.php');
  $amis-> exec("INSERT INTO candidat (email,nom,prenom,dateNaiss,lieuNaiss,numTel,mdp) 
  VALUES ('".$mail."','".$nom."','".$prenom."','".$daten."','".$lieun."','".$num."','".$mdp."')");
}
?>
<!doctype html>
<html lang="fr">




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DrugsTime</title>
  <meta name="description" content="">
  <meta name="keywords" content="">



  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="index-page">


<header id="header" class="header sticky-top">
    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/logojpg1.png" alt="logo"style="width: 30;">

          <h1 class="sitename">DrugsTime</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#about">À propos</a></li>
            <li><a href="#services">Services</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

         <!-- Boutons pour ouvrir les modals -->
        <a><button type="button" data-bs-toggle="modal" data-bs-target="#inscriptionModal" class="cta-btn d-none d-sm-block">S'inscrire</button></a>
         <a><button id="cn"type="button" data-bs-toggle="modal" data-bs-target="#connexionModal" class="cta-btn d-none d-sm-block">Se Connecter</button></a>
    </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
       <!-- Hero Section -->
       <section id="hero" class="hero section light-background">
    <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative">

        <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
          <h2>Bienvenue à DrugsTime</h2>
          <p>Votre application qui permet de surveiller la prise des traitements</p>
          <p>et vous dit qui contacter en cas d'urgence</p>

        </div><!-- End Welcome -->

        <div class="content row gy-4">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
              <h3>Pourquoi notre application ?</h3>
              <p>
              Ne laissez pas la gestion de vos médicaments devenir un fardeau. Notre application innovante vous permet de suivre facilement vos traitements, d'ajouter les doses et la durée, et de recevoir des rappels personnalisés pour ne jamais manquer une prise.
              </p>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="d-flex flex-column justify-content-center">
              <div class="row gy-4">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                    <p>Profitez d'une santé optimisée et d'une tranquillité d'esprit.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                    <p>Grâce à notre chatbot intelligent, planifiez des rappels et obtenez des réponses instantanées à vos questions urgentes
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                  <p> Rejoignez-nous dès aujourd'hui et transformez votre expérience</p>
                  </div>
                </div><!-- End Icon Box -->

              </div>
            </div>
          </div>
        </div><!-- End  Content-->

      </div>

    </section><!-- /Hero Section -->

   
    
</div>
<!-- section se connecter  -->


<!-- modal -->







<!-- Modal d'inscription -->

<div class="modal fade" id="inscriptionModal" tabindex="-1" aria-labelledby="inscriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Classe pour une modal plus large -->
        <div class="modal-content">
            <form action="index.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="inscriptionModalLabel">ESPACE INSCRIPTION</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" width="150" alt="" style="display: block; margin: 0 auto;">
                    
                    <!-- Section Informations Personnelles -->
                    <h6>Informations Personnelles</h6>
                    <div class="row">
                        <div class="col-md-6"> <!-- Colonne de gauche -->
                            <div class="form-group">
                                <input type="text" name="nom" id="nom" placeholder="Nom" class="input-custom mb-3">
                            </div>
                            <div class="form-group">
                            <input type="date" name="daten" id="iddatenaiss" class="input-custom mb-3">
                            </div>
                        </div>
                        <div class="col-md-6"> <!-- Colonne de droite -->
                            <div class="form-group">

                            <input type="text" name="prenom" id="prenom" placeholder="Prénom" class="input-custom mb-3">
                               
                            </div>
                            <div class="form-group">
                                <input type="text" name="lieun" id="idlieu" placeholder="Lieu de naissance" class="input-custom mb-3">
                            </div>
                        </div>
                    </div>

                    <!-- Section Coordonnées -->
                    <h6>Coordonnées</h6>
                    <div class="row">
                        <div class="col-md-6"> <!-- Colonne de gauche -->
                            <div class="form-group">
                                <input type="email" name="mail" id="email" placeholder="E-mail: exemple@gmail.com" class="input-custom mb-3">
                            </div>
                        </div>
                        <div class="col-md-6"> <!-- Colonne de droite -->
                            <div class="form-group">
                                <input type="tel" name="num" id="num" placeholder="numéro de téléphone " class="input-custom mb-3">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div > <!-- Colonne de gauche -->
                            <div class="form-group">
                                <input type="password" name="mdp" id="mdp" placeholder="mot de passe" class="input-custom mb-3">
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div id="successAlert" class="alert alert-success" role="alert" style="display: none;">
  Création de compte avec succès !
</div>
                <div class="modal-footer">
                    <button type="submit" class="cta-btn d-none d-sm-block" id="valider" name="vali">Valider</button>
                </div>
            </form>
        </div>
    </div>
</div>




<!-- Modal de connexion -->
<!-- Modal de connexion -->
<div class="modal fade" id="connexionModal" tabindex="-1" aria-labelledby="connexionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="connexionModalLabel">ESPACE CONNEXION</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="mail" class="form-control input-custom" id="mail" placeholder="E-mail: exemple@gmail.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" name="mdp" class="form-control input-custom" id="password" placeholder="Mot de passe" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="cta-btn d-none d-sm-block" name="login">Se Connecter</button>
                </div>
                <!-- Lien vers l'inscription -->
                <div class="modal-footer">
                <p class="text-start" style="margin: 0;">
  Vous êtes nouveau ? <a href="#" data-bs-toggle="modal" data-bs-target="#inscriptionModal">Inscrivez-vous</a>
</p>

                </div>
            </form>
        </div>
    </div>
</div>



     <!-- About Section -->
     <section id="about" class="about section">

<div class="container">

  <div class="row gy-4 gx-5">

    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
      <img src="assets/img/img1.jpg" class="img-fluid" alt="">
    </div>

    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
      <h3>À propos de nous</h3>
      <p style="text-align: justify;">
      Votre partenaire de confiance pour une gestion efficace de votre santé. Notre mission est de simplifier le suivi de vos médicaments afin que vous puissiez vous concentrer sur ce qui compte vraiment : votre bien-être. 

Nous savons que la prise de médicaments peut être complexe et source de stress. C'est pourquoi nous avons développé une application intuitive qui vous aide à gérer vos traitements de manière claire et accessible. Que vous ayez besoin de suivre vos doses, de planifier des rappels ou d'obtenir des réponses à vos questions, notre solution est conçue pour vous accompagner à chaque étape.

Avec notre chatbot intelligent, nous mettons la technologie à votre service pour vous offrir un soutien personnalisé. Chez DrugsTime, nous croyons que chaque utilisateur mérite une approche sur mesure pour améliorer son observance thérapeutique et, par conséquent, sa qualité de vie.

Rejoignez notre communauté et découvrez comment DrugsTime peut transformer votre expérience de suivi des médicaments. Ensemble, prenons soin de votre santé, un rappel à la fois ! 
      </p>
    </div> 

</div>





    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><a href="#cn">Services</a></h2>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative"><a href="urgence.php">
              <div class="icon">
                <i class="fas fa-hospital-user"></i>
              </div>    
                <h3>Téléconsultation</h3></a>
            </div>
          </div><!-- End Service Item -->
          <div class="col-lg-4 col-md-6" id="treat"data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative" class="point" id="suiviTraitements">
          <div class="icon">
                <i class="fas fa-pills"></i>
              </div>
                <h3>Suivi de Mes Traitements</h3>
            </div>
          </div> 
        
<!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative" class="point" id="monChatbot">
              <div class="icon">
                <i class="fas fa-heartbeat"></i>
              </div>
                <h3>Mon Chatbot</h3>
            </div>
          </div><!-- End Service Item -->
          


 


  




    
    </section>
  

  </main>

 
  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">DrugsTime</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Rue du Chemin Vert</p>
            <p>75011</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+33 7689 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@drgustime.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Liens Utiles</h4>
          <ul>
            <li>Accueil</li>
            <li><a href="#">À Propos</a></li>
            <li><a href="#">Services</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nos Services</h4>
          <ul>
            <li><a href="#">Dossier Médical</a></li>
            <li><a href="#">Suivi de Traitements</a></li>
            <li><a href="#">Chatbot</a></li>
          </ul>
        </div>

    
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Autres</h4>
          <ul>
            <li><a href="#">Témoignages</a></li>
            <li><a href="#">Contacts</a></li>
            <li><a href="#">Blogs</a></li>
            <li><a href="#">Partenaires</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">DrugsTime</strong> <span>Tous droits resérvés</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>