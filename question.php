<?php
// isset >>>>>>>> si on clicke sur le btn valider qui avait le name = vali
if (isset($_POST['vali'])) {
    $mail=$_POST['mail'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $daten=$_POST['daten'];
    $lieun=$_POST['lieun'];
    $numt=$_POST['numt'];
    $fb=$_POST['fb'];
    $mdp=$_POST['mdp'];

    require('connexion.php');
    $amis-> exec("INSERT INTO candidat (email,nom,prenom,dateNaiss,lieuNaiss,numTel,fcb,mdp) 
    VALUES ('".$mail."','".$nom."','".$prenom."','".$daten."','".$lieun."','".$numt."','".$fb."','".$mdp."')");

}



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Mon Espace</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <link href="assets/css/main.css" rel="stylesheet">

 
</head>
<style>
    .boxchat {
  background-color: var(--surface-color);
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  position: relative;
  border-radius: 5px;
  transition: 0.5s;
  padding: 30px;
  height: 100%;
}



        .boxchat:hover {
  transform: translateY(-10px);
}

        .walking-animation {
            position: relative;
            animation: walk 1s infinite;
        }

        @keyframes walk {
            0% {
                transform: translateY(0); /* Position de départ */
            }
            20% {
                transform: translateY(-5px); /* Monte légèrement */
            }
            40% {
                transform: translateY(0); /* Retour à la position de départ */
            }
            60% {
                transform: translateY(-5px); /* Monte à nouveau */
            }
            80% {
                transform: translateY(0); /* Retour à la position de départ */
            }
            100% {
                transform: translateY(0); /* Position finale */
            }
        }

        #chatSection {
            display: none; /* Masquer la section du chatbot par défaut */
            margin-top: 20px; /* Pour espacer le chatbot du contenu précédent */
        }
    </style>
    


<body>
   
<header id="header" class="header sticky-top">


    <?php
    include('navcompte.php');
    ?>


  </header>

   

    <!-- chat bot -->
<section class="boxchat">
    <div class="container-fluid py-5">
    <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6">
        
        
        <h2 class="container section-title" data-aos="fade-up"><a href="#">Questions?</a></h2>
        <h5 class="sitename" style="text-decoration: underline;">Avez-vous des questions ? </h5>
            <img src="assets/img/Graident Ai Robot.jpg" id="robot" alt="Description de l'image" class="img-fluid mt-4 walking-animation" style="cursor: pointer;">
        </div>
        <div class="col-lg-6">
            <!-- Contenu du chatbot -->
            <div class="chatbot-content">
              
                <div class="chatbot-iframe">
                    <iframe
                        allow="microphone;"
                        width="100%"  
                        height="430"
                        src="https://console.dialogflow.com/api-client/demo/embedded/ce4d594f-9c36-490b-95d3-3849aa0f6acb">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
    <!-- Modal -->


   

    <!-- Footer Start -->
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

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
    // Vérifier si le navigateur prend en charge l'API de reconnaissance vocale
    function scheduleNotificationAndSMS() {
    console.log("Function scheduleNotificationAndSMS called");
    var now = new Date();
    var targetTime = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 16, 15, 0); // Aujourd'hui à 16h15
    var delay = targetTime - now;

    console.log("Current time:", now);
    console.log("Target time:", targetTime);
    console.log("Delay in milliseconds:", delay);

    if (delay > 0) {
        setTimeout(function() {
            console.log("Triggering notification and SMS");
            notifyMe();
            sendSMS();
        }, delay);
    } else {
        console.log("Il est déjà passé 16h15.");
    }
}
document.getElementById("robot").addEventListener("click", function() {
    alert("Image clicked!");
    scheduleNotificationAndSMS();
});



</script>
</body>

</html>