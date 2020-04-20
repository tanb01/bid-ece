<?php
require '../connection.php';
require '../panier/panier.class.php';
$DB = new DB();/**connexion a la base de données */
$panier =new panier($DB);
?>
<!-- Récupération de produits qu'on stocke dans la requète req-->
<?php
$DB->query("SELECT * FROM item");
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
  <link rel="stylesheet" type="text/css" href="../style/enchere.css">
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
                  <li><a href="bon-pour-le-musee.php">Bon pour le Musée</a></li>
                  <li><a href="accessoire-vip.php">Accessoire VIP</a></li>
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
  <!-- Fin du menu-->
  <!-- Home -->
  <div class="home">
    <div class="home_container d-flex flex-column align-items-center justify-content-end">
      <div class="home_content text-center">
        <div class="home_title">ENCHÈRES! Cliquez et gagnez !</div>
        <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
          <ul class="d-flex flex-row align-items-start justify-content-start text-center">
            <li><a href="../ferraille-ou-tresor/">Ferraille ou Trésor</a></li>
            <li><a href="../bon-pour-le-musee/">Bon pour le Musée</a></li>
            <li><a href="#">Accessoire VIP</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div> 
<!-- Produits -->
 <div class="products">
    <div class="container">
      <div class="row products_bar_row">
        <div class="col">
          <div
            class="products_bar d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
            <div class="products_bar_links">
              <ul class="d-flex flex-row align-items-start justify-content-start">
                <li><a href="../ferraille-ou-tresor/">Tous les produits</a></li>
                <li><a href="#">Nouveau produit</a></li>
              </ul>
            </div>
            
        </div>
      </div>
      <div id="app"></div>
      <div class="row products_row products_container grid">
        <!--Sélection de produits du tableau items qu'on va stocker sous la variable product--> 
        <?php $item =$DB->query("SELECT * FROM item "); ?>
        <?php foreach($item as $product): ?>
          
        <!-- Tous les appels à venir se font grâce à l'id du produit-->
        <div class="col-xl-4 col-md-6 grid-item new">
          <div class="product">
         
          <div class="product_tag d-flex flex-column align-items-center justify-content-center">
				<div>
					<div>Solde</div>
          
					</div>
				</div>
            <!--On va prendre l'image qui correspond au produit que l'on va appeler-->
            <div class="product_image"><img src="data:image/jpeg;base64, <?= base64_encode($product->photo); ?>" height="350px" width="500px"></div>
            <div class="product_content">
              <div class="product_info d-flex flex-row align-items-start justify-content-start">
                <div>
                  <div>
                    <!--On va prendre le nom qui correspond au produit que l'on va appeler-->
                    <div class="product_name"><a href="product.html"><?= $product->nom;?></a></div>
                    <!--On va prendre la catégorie qui correspond ou produit qu'on va appeler-->
                    <div class="product_category">dans <a href="category.html"><?= $product->categorie;?></a></div>
                  </div>
                </div>
                <div class="ml-auto text-right">
                  <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                  <!--On va prendre le prix  qui correspond au produit que l'on va appeler-->
                  <div class="product_price text-right"><s><?= number_format($product->prix,2);?>€</s></div>
                  <div class="product_prices text-left"><?= number_format($product->prix,2);?>€</div>
                </div>
              </div>
              <div class="product_buttons">
                <div class="text-center ">                  
                  <div
                    class="product_button text-center d-flex   justify-content-center">
                    <div>
                      <!--Grâce à l'icône carte de crédit être redirigé vers paiement avec l'unique produit selectioné-->
                      <div><a class="add ajoutPaiement" href="paiementi.php?item_id<?= $product->item_id;?>"><img src="../img/icones/law.svg" class="svg" alt=""></a>
                        <div>+</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach ?>
        
      </div>
      <div class="row page_nav_row">
        <div class="col">
          <div class="page_nav">
            <ul class="d-flex flex-row align-items-start justify-content-center">
              <li class="active"><a href="#">01</a></li>
              <li><a href="#">02</a></li>
              <li><a href="#">03</a></li>
              <li><a href="#">04</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->

  <footer class="footer">
    <div class="footer_content">
      <div class="container">
        <div class="row">

          <!-- About -->
          <div class="col-lg-4 footer_col">
            <div class="footer_about">
              <div class="footer_logo">
                <a href="#">
                  <div class="d-flex flex-row align-items-center justify-content-start">
                    <div class="footer_logo_icon"><img src="../img/logo_bid_ece.jpg" alt="logo" height="50px"
                        width="50px">
                    </div>
                    <div>BIDECE.fr</div>
                  </div>
                </a>
              </div>
              <div class="footer_about_text">
                <p>BIDECE a été créé en 2020 pour permettre à chacun d’acheter et de vendre
                  les plus belles pièces uniques. Les prix affichés sont fixés par ces
                  vendeurs et BIDECE opère en tant qu’intermédiaire et tiers de confiance
                  auprès d’eux et des acheteurs. Ces derniers peuvent ainsi dénicher parmi
                  les 100 000 références de BIDECE la perle rare et être livrés sans
                  bouger de leur canapé. Les pièces proposées à la vente sont quant à
                  elles quotidiennement sélectionnées à la main par nos équipes.</p>
              </div>
            </div>
          </div>

          <!-- Footer Links -->
          <div class="col-lg-4 footer_col">
            <div class="footer_menu">
              <div class="footer_title">Support technique</div>
              <ul class="footer_list">
                <li>
                  <a href="#">
                    <div>Service client</div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div>Guide pour payer<div class="footer_tag_2">recommandé</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div>Page principal</div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div>Contact</div>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <!-- Footer Contact -->
          <div class="col-lg-4 footer_col">
            <div class="footer_contact">
              <div class="footer_title">Restons connectés</div>
              <div class="newsletter">
                <form action="#" id="newsletter_form" class="newsletter_form">
                  <input type="email" class="newsletter_input" placeholder="Abonnez vous" required="required">
                  <button class="newsletter_button">+</button>
                </form>
              </div>
              <div class="footer_social">
                <div class="footer_title">Social</div>
                <ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  </li>
                  <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                  </li>
                  <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script type ="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  
  <script type="text/javascript" src="../custom-js/time.js"></script>

        


</body>

</html>