<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <link href="../style/connexion_inscription.css" rel="stylesheet" media="all" type="text/css">
  <link href="../style/style.css" rel="stylesheet" media="all" type="text/css">

  <title>BID ECE | Connexion</title>
</head>

<body>
  <!--Navbar-->
  <div class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand h1 text-primary" href="../"><img src="../img/logo_bid_ece.jpg" width="100px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="../">Accueil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="../achat" id="navbarDropdownMenuLink" role="button" aria-haspopup="true"
            aria-expanded="false">
            Achat
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item nav-link" href="../categories/">
              Catégories
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item nav-link" href="../modes-de-vente/">Mode de Vente</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
            Vente
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item nav-link" href="../compte-vendeur/">Espace Vendeur</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item nav-link" href="../compte-admin/">Espace Admin</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../compte-acheteur/">Votre Compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../paiement">Payer</a>
        </li>
        <?php if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {?>
          <li class="nav-item">
            <a href="../traitement/deconnexion.php" class="nav-link btn btn-danger">Deconnexion</a>
          </li>
        <?php
}
?>
      </ul>
    </div>
  </div>
  <!--/.Navbar-->

  <div class="container-fluid">
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icone -->
        <div class="fadeIn first">
          <img src="../img/logo_bid_ece.jpg" id="icon" alt="BID ECE" />
        </div>

        <!-- Formulaire de connexion -->
            <form action="../traitement/connexion.php" method="post">
                <input type="email" id="email" class="fadeIn second" name="email" placeholder="Email">
                <input type="password" id="mot_de_passe" class="fadeIn third" name="mot_de_passe" placeholder="Mot de passe">
                <input type="submit" name="connexion" class="fadeIn fourth" value="Connexion">
            </form>


        <!-- Inscription si pas de compte -->
        <div id="formFooter">
          <a class="underlineHover" href="inscription_ex.html">Pas encore client ? Inscrivez-vous ici !</a>
        </div>
        <!-- Mot de passe oublié -->
        <div id="formFooter">
          <a class="underlineHover" href="#">Mot de passe oublié ?</a>
        </div>
      </div>
    </div>
  </div>

  <!--Footer-->
  <footer>
    <div class="container">
      <div class="my-auto text-white text-center py-4">
        <h6 class="my-auto no-deco">2020
          &copy; BID ECE<span></span></h6>
        <div class="row">
          BID ECE a été créé en 2020 pour permettre à chacun d’acheter et de vendre
          les plus belles pièces uniques. Les prix affichés sont fixés par ces
          vendeurs et BID ECE opère en tant qu’intermédiaire et tiers de confiance
          auprès d’eux et des acheteurs. Ces derniers peuvent ainsi dénicher parmi
          les 100 000 références de BID ECE la perle rare et être livrés sans
          bouger de leur canapé. Les pièces proposées à la vente sont quant à
          elles quotidiennement sélectionnées à la main par nos équipes.
        </div>
      </div>
    </div>
  </footer>
  <!--/.Footer-->

</body>

</html>