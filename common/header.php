<?php 
session_start();
?>

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
        <?php 
        if ($_SESSION['statut']=="Acheteur") {?></li>
        <li class="nav-item">
          <a class="nav-link" href="../compte-acheteur/">Votre Compte <?php if (isset($_SESSION["prenom"])) {echo $_SESSION["prenom"];
          }
    ?></a>
        </li>
      <?php
      }?>
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

<?php ?>