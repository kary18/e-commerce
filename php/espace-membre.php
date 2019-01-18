 <?php session_start(); ?>
<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <title>Accueil</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script type="text/javascript" src="jquery.js"></script>
</head>

<header>

  <!--------------------------------- Barre de Navigation --------------------------------------->

  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="espace-membre.php"><img src="img/log.png" height="200" width="200"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-white" href="espace-membre.php">Nouveauté<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="accueil.php">Vêtements<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item connexion">
          <a class="nav-link text-white" href="connexion.php">Accessoires</a>
        </li>
      </ul>
      <div id="recherche">
        <input id="inputR" type="text" name="recherche" placeholder="recherche...">
        <img src="img/paniersac.jpg">
        <a class="nav-link text-white" href="accueil.php">BONJOUR<br> Se déconnécter</a>
      </div>
    </div>
  </nav>
</header>

<body>

  <!--------------------------------- Carousel Bootstrap --------------------------------------->

  <div>
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/123.jpg" alt="First slide" width="500" height="400">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/nouveaute.jpg" alt="Second slide" width="500" height="400">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/coucou.jpeg" alt="Third slide" width="500" height="400">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br>

  <!--------------------------------- Bannière centrale --------------------------------------->

  <div class="container">
    <div id="fond" class="jumbotron jumbotron-fluid">
      <div  class="container">
        <h1 class="display-4 text-dark">Les Nouveaute</h1>
      </div>
    </div>
</div>

<!--------------------------------- Card Decks Bootstrap --------------------------------------->

<div class="container">
    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="img/robe noir.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Robe noir</h5>
          <p class="card-text"></p>
          <p class="card-text"><small class="text-muted">220€</small></p>
          <button type="button" class="btn btn-primary buy">Acheter</button>
        </div>
      </div>

     

      
      <div class="card">
        <img class="card-img-top" src="img/robe blanche.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">robe blanche</h5>
          <p class="card-text"></p>
          <p class="card-text"><small class="text-muted">69.99€</small></p>
          <button type="button" class="btn btn-primary buy"> dans le panier </button>
        </div>
      </div>
      

      <div class="card">
        <img class="card-img-top" src="img/Robe ajustée noire, .jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Robe ajustée noire, </h5>
          <p class="card-text"></p>
          <p class="card-text"><small class="text-muted">69.99€</small></p>
          <button type="button" class="btn btn-primary buy">Dans le panier</button>
        </div>
      </div>
    </div>
    <br/>
    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="img/pull.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">pull avec laçage ocre</h5>
          <p class="card-text"></p>
          <p class="card-text"><small class="text-muted">69.99€</small></p>
          <button type="button" class="btn btn-primary buy">Dans le panier</button>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="img/pull avec perle.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">pull avec perles gris anthracite chiné</h5>
          <p class="card-text"></p>
          <p class="card-text"><small class="text-muted">29.99€</small></p>
          <button type="button" class="btn btn-primary buy">Dans le panier</button>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="img/long-pull.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">pull long décolleté v écru et rouge </h5>
          <p class="card-text"></p>
          <p class="card-text"><small class="text-muted">69.99€</small></p>
          <button type="button" class="btn btn-primary buy">Dans le panier</button>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

<!---------------------------------------- Footer ----------------------------------------------->

<footer  class="container-fluid">
      
      <div id="footer-top" class="row justify-content-center px-5 pt-5">
      
        <!--Liens vers autres sites-->

        <ul class="col-xl-4 col-md-4 col-sm-6 col-12 pb-4">
          <h2>Nos gategories</h2>
          <li><a>MANTEAUX & VESTE</a></li>
          <li><a>ROBES & COMBIS</a></li>
          <li><a>PULLS & GILET</a></li>
          <li><a>ACCESSOIRE</a></li>
        </ul>

        <!--Liens téléchargement application-->

        <div class="col-xl-4 col-md-4 col-sm-6 col-12 pb-4">
          
          <div class="row justify-content-center">
            <h2>Téléchargez l'application</h2>
          </div>
          
          <div class="row justify-content-center">
            <div class="col-12 text-center">
              <img class="bouton-store" src="img/bouton_googleplay.jpg" alt="googleplay">
            </div>
            <div class="col-12 text-center">
              <img class="bouton-store" src="img/bouton_appstore.png" alt="appstore">
            </div>
          </div>
          
        </div>

        <!--Liens réseaux sociaux-->

        <div class="col-xl-4 col-md-4 col-sm-12 col-12 pb-4">
          <h2>Suivez-nous</h2>
          
          <div class="flex-logo">
            <a><img src="./img/logo_fb.png" alt="Facebook" class="rounded logo-social"></a>
            <a><img src="./img/logo_tweeter.png" alt="Facebook" class="rounded logo-social"></a>
            <a><img src="./img/logo_instagram.png" alt="Facebook" class="rounded logo-social"></a>
          </div>
        </div>
        
      </div>
      
      <!--Navigation-->
      
      <div id="nav-footer" class="row align-items-end">
        
        <ul class="col-12 nav justify-content-center align-self-end">
          <li class="nav-item">
            <a class="nav-link" href="#">Mentions légales</a>
          </li>
          <li class="nav-item nav-borders">
            <a class="nav-link" href="#">Foire aux questions</a>
          </li>
          <li class="nav-item nav-borders">
            <a class="nav-link" href="#">Accessibilité</a>
          </li>
          <li class="nav-item nav-borders">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item nav-borders">
            <a class="nav-link" href="#">Plan du site</a>
          </li>
        </ul>
        
      </div>
      
      
    </footer>

<script type="text/javascript" src="scripts/scripts.js"></script>

</html>
