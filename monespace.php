

<?php
// isset >>>>>>>> si on clicke sur le btn valider qui avait le name = vali
if (isset($_POST['vali'])) {
    $mail=$_POST['mail'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $daten=$_POST['daten'];
    $lieun=$_POST['lieun'];
    $numt=$_POST['numt'];
   
    $mdp=$_POST['mdp'];

    require('connexion.php');
    $amis-> exec("INSERT INTO candidat (email,nom,prenom,dateNaiss,lieuNaiss,numTelmdp) 
    VALUES ('".$mail."','".$nom."','".$prenom."','".$daten."','".$lieun."','".$numt."','".$mdp."')");
}
if (isset($_POST['add'])) {
  // Récupérer les valeurs du formulaire
  $treatment_name = $_POST['namet'];
  $treatment_dose = $_POST['dose'];
  $treatment_duration = $_POST['duration'];
  $treatment_time = $_POST['heure']; // Corrigé pour correspondre au 'name' du formulaire

  // Connexion à la base de données
  require('connexion.php');

  // Insérer les données dans la table traitement
  $traitem->exec("INSERT INTO traitement (namet, dose, duration, timet) 
      VALUES ('". $treatment_name."','".$treatment_dose."','".$treatment_duration."','".$treatment_time."')");
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

<body class="index-page">

  <header id="header" class="header sticky-top">


    <?php
    include('navcompte.php');
    ?>


  </header>

  <main class="main">
    
<!-- Hero Section -->
<section id="hero" class="hero section light-background">
  <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

  <div class="container position-relative">
    <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
      <h2>Bienvenue sur votre compte</h2>
      <h2>DrugsTime</h2>
      <p>Votre meilleur allié pour suivre </p>
      <p>votre prise de médicaments</p>
    </div><!-- End Welcome -->

    <div class="content row gy-4">
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="d-flex flex-row justify-content-between w-100">
          <div class="row gy-5 w-100">
            <div class="col-xl-3 d-flex align-items-stretch">
              <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                <i class="bi bi-clipboard-data"></i>
                <h4><a href="#" data-bs-toggle="modal" data-bs-target="#medicalModal">Fiche Médicale</a></h4>
                <p>Ajoutez vos informations de santé</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="col-xl-3 d-flex align-items-stretch">
              <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                <i class="bi bi-capsule"></i>
                <h4><a href="#" data-bs-toggle="modal" data-bs-target="#treatmentModal">Mes Traitements</a></h4>
                <p>Ajoutez votre traitement, la dose et la durée</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="col-xl-3 d-flex align-items-stretch">
              <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                <i class="bi bi-chat-dots"></i>
                <h4>Questions</h4>
                <p>Mon Chatbot Bienveillant</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="col-xl-3 d-flex align-items-stretch">
              <div class="icon-box" data-aos="zoom-out" data-aos-delay="600">
                <i class="bi bi-telephone"></i>
                <h4><a href="urgence.php">Téléconsultation</a></h4>
                <p>Consultez un médecin en ligne</p>
              </div>
            </div><!-- End Icon Box -->
          </div>
        </div>
      </div>
    </div><!-- End Content -->
  </div>
</section><!-- /Hero Section -->

<!-- Modale pour Fiche Médicale -->

<div class="modal fade" id="medicalModal" tabindex="-1" aria-labelledby="medicalModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width: 70%;"><!-- Largeur définie à 70% -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="medicalModalLabel">Ajouter vos informations médicales</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="medicalForm">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="pathology" class="form-label">Pathologie</label>
              <textarea class="form-control" id="pathology" rows="3" placeholder="Indiquez votre pathologie"></textarea>
            </div>
            <div class="col-md-6 mb-3">
              <label for="medicalHistory" class="form-label">Antécédents médicaux</label>
              <textarea class="form-control" id="medicalHistory" rows="3" placeholder="Indiquez vos antécédents médicaux"></textarea>
            </div>
            <div class="col-md-6 mb-3">
              <label for="familyHistory" class="form-label">Antécédents familiaux</label>
              <textarea class="form-control" id="familyHistory" rows="3" placeholder="Indiquez les antécédents familiaux"></textarea>
            </div>
            <div class="col-md-6 mb-3">
              <label for="bloodGroup" class="form-label">Groupe sanguin</label>
              <select class="form-select" id="bloodGroup">
                <option value="" disabled selected>Sélectionnez votre groupe sanguin</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="allergies" class="form-label">Allergies</label>
              <input type="text" class="form-control" id="allergies" placeholder="Indiquez vos allergies éventuelles">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
       
        <button type="submit" class="btn btn-primary" id="saveMedicalInfo" name="save">Enregistrer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modale pour Mes Traitements -->
 
<div class="modal fade" id="treatmentModal" tabindex="-1" aria-labelledby="treatmentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg"> <!-- Changez 'modal-dialog' en 'modal-dialog modal-lg' pour une largeur accrue -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="treatmentModalLabel">Mes Traitements</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table" id="treatment-list">
          <thead>
            <tr>
              <th scope="col">Nom du traitement</th>
              <th scope="col">Dose</th>
              <th scope="col">Durée</th>
              <th scope="col">Heure</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            
           
            
          </tbody>
        </table>

        <!-- Formulaire pour ajouter un traitement -->
        <form id="treatment-form">
          <div class="mb-3">
            <label for="treatment-name" class="form-label">Nom du traitement</label>
            <input type="text" class="form-control" name="namet" id="treatment-name" placeholder="Nom du traitement" required>
          </div>
          <div class="mb-3">
            <label for="treatment-dose" class="form-label">Dose</label>
            <input type="text" class="form-control"name="dose" id="treatment-dose" placeholder="Dose" required>
          </div>
          <div class="mb-3">
            <label for="treatment-duration" class="form-label">Durée</label>
            <input type="text" name="duration" class="form-control" id="treatment-duration" placeholder="Durée" required>
          </div>
          <div class="mb-3">
            <label for="treatment-time" class="form-label">Heure</label>
            <input type="time" name="heure" class="form-control" id="treatment-time" required>
          </div>
          <button type="submit" class="btn btn-primary" name="add">Ajouter un traitement</button>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div> 

<script>
  document.getElementById('treatment-form').addEventListener('submit', function(e) {
    e.preventDefault();

    // Récupérer les valeurs des champs
    const name = document.getElementById('treatment-name').value;
    const dose = document.getElementById('treatment-dose').value;
    const duration = document.getElementById('treatment-duration').value;
    const time = document.getElementById('treatment-time').value;

    // Créer une nouvelle ligne dans le tableau
    const tbody = document.getElementById('treatment-list').getElementsByTagName('tbody')[0];
    const newRow = tbody.insertRow();

    // Insérer les cellules dans la nouvelle ligne
    newRow.innerHTML = `
      <td>${name}</td>
      <td>${dose}</td>
      <td>${duration}</td>
      <td>${time}</td>
      <td>
        <button class="btn btn-warning btn-sm">Modifier</button>
        <button class="btn btn-danger btn-sm">Supprimer</button>
        <div class="form-check">
    <input type="checkbox" id="reminderCheckbox" class="form-check-input">
    <label class="form-check-label" for="reminderCheckbox">médicament pris</label>
</div>
      </td>
    `;

    // Réinitialiser le formulaire
    this.reset();
  });

  function supprimer(button) {
        const row = button.parentNode.parentNode; // Obtenir la ligne parente
        row.parentNode.removeChild(row); // Supprimer la ligne
    }

    // Fonction pour modifier une ligne (simple exemple)
    function modifier(button) {
        const row = button.parentNode.parentNode; // Obtenir la ligne parente
        const cells = row.getElementsByTagName('td');
        
        // Pour l'exemple, nous allons juste afficher un message
        alert('Modifier la ligne: ' + cells[0].innerText);
        
        // Vous pouvez ajouter plus de logique ici pour la modification
    }
</script>




<script>
  document.getElementById('addTreatment').addEventListener('click', function() {
  const name = document.getElementById('treatmentName').value;
  const dose = document.getElementById('treatmentDose').value;
  const duration = document.getElementById('treatmentDuration').value;

  if (name && dose && duration) {
    const listItem = document.createElement('li');
    listItem.className = 'list-group-item d-flex justify-content-between align-items-center';
    listItem.innerHTML = `${name} - ${dose} - ${duration} <button class="btn btn-danger btn-sm delete-treatment">Supprimer</button>`;
    
    document.getElementById('treatmentList').appendChild(listItem);
    
    
    document.getElementById('treatmentForm').reset();

   
    listItem.querySelector('.delete-treatment').addEventListener('click', function() {
      listItem.remove();
    });
  } else {
    alert('Veuillez remplir tous les champs.');
  }
});
  document.getElementById('add-treatment').addEventListener('click', function() {
    const name = document.getElementById('treatment-name').value;
    const dose = document.getElementById('treatment-dose').value;
    const duration = document.getElementById('treatment-duration').value;
    const time = document.getElementById('treatment-time').value;

    if (name && dose && duration && time) {
      const table = document.getElementById('treatment-list').getElementsByTagName('tbody')[0];
      const newRow = table.insertRow();

      newRow.innerHTML = `
        <td>${name}</td>
        <td>${dose}</td>
        <td>${duration}</td>
        <td>${time}</td>
        <td>
          <button class="btn btn-warning btn-sm">Modifier</button>
          <button class="btn btn-danger btn-sm" id="btnsupp>Supprimer</button>
        </td>
      `;

      // Reset input fields
      document.getElementById('treatment-name').value = '';
      document.getElementById('treatment-dose').value = '';
      document.getElementById('treatment-duration').value = '';
      document.getElementById('treatment-time').value = '';
    } else {
      alert('Veuillez remplir tous les champs.');
    }
  });

  document.getElementById('treatmentTableBody').addEventListener('click', function(e) {
        if (e.target && e.target.id === 'supprimerBtn') {
            const row = e.target.parentNode.parentNode; // Obtenir la ligne parente
            row.remove(); // Supprimer la ligne du tableau
        }
    });
        if (e.target && e.target.id === 'supprimerBtn') {
            const row = e.target.parentNode.parentNode; // Obtenir la ligne parente
            const cells = row.getElementsByTagName('td');

            // Supprimer le contenu des cellules
            for (let i = 0; i < cells.length - 1; i++) {
                cells[i].innerText = ''; // Effacer le contenu des cellules (toutes sauf la dernière)
            }
        }
  

</script>

    


    <div class="container mt-5">
    <!-- Bouton pour afficher la carte -->
   
</div>

   
    
</div>
<!-- section se connecter  -->

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