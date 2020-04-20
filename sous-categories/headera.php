<?php
require '../connection.php';
require '../panier/panier.class.php';
$DB = new DB();/**connecteru a la bases de donnes */
$panier =new panier($DB);
?><!DOCTYPE html>
<html lang="fr">

<head>
  <title>BID ECE | Ferraille ou Trésor</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="BIDECE">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    type="text/css">
  <link rel="stylesheet" type="text/css" href="../style/ferraille.css">
</head>

<body>
  <!--Menu-->
  <div class="menu-bar">
    <ul>
      <li><a href="../"><i class="fa fa-home" aria-hidden="true"></i>Accueil</a></li>
      <li><a href="../achat"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Achat</a>
        <div class="sub-menu1">
          <ul>
            <li class="hover-me"><a href="../categories/">Catégories</a><i class="fa fa-angle-right"></i>
              <div class="sub-menu2">
                <ul>
                  <li><a href="ferraille-ou-tresor">Ferraille ou Trésor</a></li>
                  <li><a href="/bon-pour-le-musee/">Bon pour le Musée</a></li>
                  <li><a href="/accessoire-vip/">Accessoire VIP</a></li>
                </ul>
              </div>
            </li>
            <li class="hover-me"><a href="../modes-de-vente/">Mode de vente</a><i class="fa fa-angle-right"></i>
              <div class="sub-menu2">
                <ul>
                  <li><a href="../enchere/">Enchères</a></li>
                  <li><a href="../achetez-le-maintenant/">Achetez-le maintenant</a></li>
                  <li><a href="../meilleur-offre/">Meilleure offre</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </li>
      <li><a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Ventes</a>
        <div class="sub-menu1">
          <ul>
            <li class="hover-me"><a href="../compte-vendeur/">Espace Vendeur</a></li>
            <li class="hover-me"><a href="../compte-admin/">Espace Admin</a></li>
          </ul>
        </div>
      </li>
      <li><a href="../compte-acheteur/"><i class="fa fa-user" aria-hidden="true"></i>Votre Compte</a></li>
      <li><a href="panier.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Payer</a></li>
        </ul>
  </div>
  <!--Fin menu-->
  <!-- Home -->
  <div class="home">
    <div class="home_container d-flex flex-column align-items-center justify-content-end">
      <div class="home_content text-center">
        <div class="home_title">ACCESSOIRE VIP</div>
        <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
          <ul class="d-flex flex-row align-items-start justify-content-start text-center">
            <li><a href="ferraille-ou-tresor">Ferraille ou Trésor</a></li>
            <li><a href="bon-pour-le-musee">Bon pour le Musée</a></li>
            <li><a href="accessoire-vip">Accessoire VIP</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
