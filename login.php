

<!-- starter template -->
<!doctype html>
<html lang="fr">



<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/stylelogin.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Espace connexion</title>
</head>

<body>







    <!-- About Section -->
    
    <section id="about" style="margin-top: 100;" class="about section">

      <div class="container">

        <div class="row gy-4 gx-5">

          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
           
            <img src="assets/img/fond.jpeg" class="img-fluid" alt="">          </div>

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
          <div style="text-align: center; color: rgb(68, 67, 67);">
                                <i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i>
                                <h3 style="font-family: none;">ESPACE CONNEXION</h1>
                            </div>
          
            <p>  
            </p>
            <form action="login.php" method="post">
                                <div class="zone">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    
                                    <input type="email" name="mail" id="email" placeholder="exemple@gmail.com" required>
                                </div>
                                <div class="zone">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                    <input type="password" name="mdp" id="mdpass" placeholder="********" required>
                                    <span id="speye">
                                        <i id="eye" class="fa fa-eye" aria-hidden="true"></i>
                                        <i id="eyes" class="fa fa-eye-slash" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div>
                                    <input type="checkbox" name="retenir" value="Retenir le mot de passe">
                                    <label for="">Retenir le mot de passe</label>
                                </div>
                                <div style="text-align: right;">
                                <button type="button"  class="cta-btn d-none d-sm-block" onclick="window.location.href='service.php';">se connecter</button>

                                   
                                </div>
            </form>
            

        </div>

      </div>

    </section><!-- /About Section -->
    
    <!-- container magre a gauche et a droit -->
  

  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="assets/js/login.js"></script>
</body>

</html>