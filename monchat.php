<?php include('connexion.php') ?>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" ...>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ...></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ...></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ...></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800,900|Ubuntu" rel="stylesheet">
  <link href="css/chat.css" rel="stylesheet" >
  <link rel="stylesheet" href="stylechat.css">
</head>

<body>
  <div class="container">
    <?php if(isset($_SESSION['full_name'])): ?>
      <button class="btn btn-light btn-lg" type="button" name="button">
        <a href="index.php?logout='1'" style="color:black;text-decoration: none;padding:1rem;">Déconnexion</a>
      </button>
      <button id="formButton" class="btn btn-light btn-lg" type="button" name="button">
        <a href="chat.php#form1" style="color:black;text-decoration: none;">Mettre à jour les informations</a>
      </button>
      <h1>Bienvenue, <?php echo (string)$_SESSION['full_name']; ?>!</h1>
    <?php endif ?>

    <!-- Section de gestion des médicaments -->
   
<!-- le chat bot  -->
    
<iframe
    allow="microphone;"
    width="350"
    height="430"
    src="https://console.dialogflow.com/api-client/demo/embedded/ce4d594f-9c36-490b-95d3-3849aa0f6acb">
</iframe>
    <!-- Section pour afficher le chatbot -->
    <div id="chatSection">
      <h2>Conversation avec le chatbot</h2>
      <div id="chatMessages"></div>
      <form id="chatForm" name="chatForm">
        <div class="form-group">
          <input type="text" class="form-control" id="chatInput" placeholder="Ecrivez votre message ici...">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
    </div>
  </div>
  
  <script src="scripts/chat.js"></script>
</body>
</html>
