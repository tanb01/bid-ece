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
  <link href="../style/comptes.css" rel="stylesheet" media="all" type="text/css">
  <link href="../style/style.css" rel="stylesheet" media="all" type="text/css">
  
  <title>BID ECE | Compte Admin</title>
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
        <?php
        if (isset($_SESSION['statut'])) {
          if ($_SESSION['statut'] == 'Admin' || $_SESSION['statut'] == 'Vendeur') {?>
          <li class="nav-item dropdown">
          <a class="nav-link" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
            Vente
          </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item nav-link" href="../compte-vendeur/">Espace Vendeur</a>
            <?php
            if ($_SESSION['statut'] == 'Admin') {?>
                          <div class="dropdown-divider"></div>
            <a class="dropdown-item nav-link" href="../compte-admin/">Espace Admin</a>
            <?php
            }
            ?>
            </div>
            <?php
            }}
            ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../compte-acheteur/">Votre Compte <?php if (isset($_SESSION["prenom"])) { echo $_SESSION["prenom"];}
          ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../paiement">Payer</a>
        </li>
        <?php
        if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {?>
          <li class="nav-item">
            <a href="../traitement/deconnexion.php" class="nav-link btn btn-danger">Deconnexion</a>
          </li>
        <?php
        } else {?>
          <li class="nav-item">
            <a href="../connexion/" class="nav-link btn btn-primary">Se connecter</a>
          </li>
          <li class="nav-item">
            <a href="../inscription/" class="nav-link btn btn-success">S'inscrire</a>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
  <!--/.Navbar-->

  <div class="container emp-profile">
    <form method="post">
      <div class="row">
        <div class="col-md-4">
          <div class="profile-img">
            <img src="../img/logo_bid_ece.jpg" alt="Take a pic" />
            <div class="file btn btn-lg btn-primary">
              Modifier la photo
              <input type="file" name="file" />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="profile-head">
            <h5>
              Admin 1
            </h5>
            <h6>
              Admin numéro 1
            </h6>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="informations-tab" data-toggle="tab" href="#informations" role="tab"
                  aria-controls="informations" aria-selected="true">Informations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="articles-tab" data-toggle="tab" href="#articles" role="tab"
                  aria-controls="articles" aria-selected="false">Articles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="vendeurs-tab" data-toggle="tab" href="#vendeurs" role="tab"
                  aria-controls="vendeurs" aria-selected="false">Vendeurs</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="profile-work">
            <p>Liens ?</p>
            <a href="">Lien 1</a><br />
            <a href="">Lien 2</a>
          </div>
        </div>
        <div class="col-md-8">
          <div class="tab-content informations-tab" id="myTabContent">
            <div class="tab-pane fade show active" id="informations" role="tabpanel" aria-labelledby="informations-tab">
              <div class="row">
                <div class="col-md-6">
                  <label>ID admin</label>
                </div>
                <div class="col-md-6">
                  <p>Admin ID</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Nom</label>
                </div>
                <div class="col-md-6">
                  <p>Nom de l'admin</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Email</label>
                </div>
                <div class="col-md-6">
                  <p>emailadmin@mail.com</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="articles" role="tabpanel" aria-labelledby="articles-tab">
              <div class="row">
                <div class="col-md-6">
                  <label>Article(s) en vente :</label>
                </div>
                <div class="col-md-6">
                  <p>Nombre d'article(s)</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Article 1</label>
                </div>
                <div class="col-md-6">
                  <p>Supprimer</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Article 2</label>
                </div>
                <div class="col-md-6">
                  <p>Supprimer</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <a href="../add-article/"><label><u>+ Ajouter un article</u></label></a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="vendeurs" role="tabpanel" aria-labelledby="vendeurs-tab">
              <div class="row">
                <div class="col-md-6">
                  <label>Vendeur(s) actif(s) :</label>
                </div>
                <div class="col-md-6">
                  <p>Nombre de vendeurs</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Vendeur 1</label>
                </div>
                <div class="col-md-6">
                  <p>Supprimer</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Vendeur 2</label>
                </div>
                <div class="col-md-6">
                  <p>Supprimer</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>+ Ajouter un vendeur</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
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