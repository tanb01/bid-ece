<?php
require '../connection.php';
require 'panier.class.php';
$DB = new DB();/**connecteru a la bases de donnes */
$panier =new panier($DB);
?>
<?php
if (isset($_GET['del'])){
  $panier->del($_GET['del']);
}
<<<<<<< HEAD
?>
  <!-- Panier -->
=======
?><!DOCTYPE html>
<html lang="fr">

<head>
  <title>BID ECE | Panier</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="BIDECE">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    type="text/css">
  <link rel="stylesheet" type="text/css" href="../style/panier.css">
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
                  <li><a href="../ferraille-ou-tresor/">Ferraille ou Trésor</a></li>
                  <li><a href="../bon-pour-le-musee/">Bon pour le Musée</a></li>
                  <li><a href="../accessoire-vip/">Accessoire VIP</a></li>
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
      <li><a href="../panier/"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Payer</a></li>
    </ul>
  </div>
  <!--Fin menu-->

  <!-- Home -->
  <div class="home">
    <div class="home_container d-flex flex-column align-items-center justify-content-end">
      <div class="home_content text-center">
        <div class="home_title">PANIER</div><br>
        <h3>Un tout y peu pour avoir vos articles</h3><br>
        <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
          <ul class="d-flex flex-row align-items-start justify-content-start text-center">
            <li><a href="index.html">Page principal</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Cart -->
>>>>>>> 9585f5db7ccd7a7f1530ef147ddb77bf3d1b8063

  <div class="cart_section">
    <form method="post" action="panier.php">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="cart_container">

            <!-- Barre du panier -->
            <div class="cart_bar">
              <ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-end">
                <li class="mr-auto">Produit</li>
                <li>Categorie</li>
                <li>Prix HT</li>
                <li>Quantité</li>
                <li>Total</li>
                <li>Action</li>

              </ul>
            </div>

            <!-- Articles du panier -->
            <div class="cart_items">
              <ul class="cart_items_list">
                <?php
                $item_ids= array_keys($_SESSION['panier']);
                if(empty($item_ids)){
                  $item = array();
                }else{
                $item= $DB->query('SELECT * FROM item WHERE item_id IN ('.implode(',',$item_ids).')');
                }
                foreach($item as $product):
                ?>
                <!-- Un article -->
                <li
                  class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start">
                  <div
                    class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
                    <div>
                      <div class="product_number"><?= $product->item_id;?></div>
                    </div>
                    <div>
                      <div class="product_image"><img src="data:image/jpeg;base64, <?= base64_encode($product->photo); ?>" height="70px" width="100px"></div>
                    </div>
                    <div class="product_name_container">
                      <div class="product_name"><a href="product.html"><?= $product->nom;?></a></div>
                      <div class="product_text"><?= $product->description;?></div>
                    </div>
                  </div>
                  <div class=" product_text"><?= $product->categorie;?></div>
                  <div class="product_price product_text"><?= number_format($product->prix,2);?>€</div>
                  <div class="product_quantity_container">
                    <div class="quantity text-center ">
                    <input type="texte" name="panier[quantity][<?=$product->item_id; ?>]"  value="<?= $_SESSION['panier'][$product->item_id]; ?>" >
                      
                    </div>
                  </div>
                  <div class="product_total product_text"><?= number_format($product->prix*1.196,2);?>€</div>
                  <div>
                      <div class="product_image"><a href="panier.php?del=<?= $product->item_id; ?>"> <img src="../img/icones/trash.svg" class="svg" alt=""></a></div>
                    </div>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>

            <!-- Boutons du panier -->
            <div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
              <div
                class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">                
                <div class="button button_continue trans_200"><a href="index.php">Revoir plus de produits</a></div>
              </div>
              <div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
              <div
                class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">                
                <input type="submit" value="calcul" class="button button_continue trans_200"><a href="index.php">Recalculer le total</a></div>
              </div>  
            </div>
          </div>
        </div>
      </div>
      </form>
      <div class="row cart_extra_row">
        <div class="col-lg-6">
          <div class="cart_extra cart_extra_1">
            <div class="cart_extra_content cart_extra_coupon">
              <div class="cart_extra_title">Code de réduction</div>
              <div class="coupon_form_container">
                <form action="#" id="coupon_form" class="coupon_form">
                  <input type="text" class="coupon_input"  required="required">
                  <button class="coupon_button">Valider</button>
                </form>
              </div>
              <div class="coupon_text">Si vous avez un code de réduction ajoutez le.<br> Code de 10% :QBEDI</div>
              <div class="shipping">
                <div class="cart_extra_title">Méthode d'envoi</div>
                <ul>
                  <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                    <label class="radio_container">
                      <input type="radio" id="radio_1" name="shipping_radio" class="shipping_radio">
                      <span class="radio_mark"></span>
                      <span class="radio_text">Livraison de 3-5 jours</span>
                    </label>
                    <div class="shipping_price ml-auto">$4.99</div>
                  </li>
                  <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                    <label class="radio_container">
                      <input type="radio" id="radio_2" name="shipping_radio" class="shipping_radio">
                      <span class="radio_mark"></span>
                      <span class="radio_text">Livraison standard 24H</span>
                    </label>
                    <div class="shipping_price ml-auto">$1.99</div>
                  </li>
                  <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                    <label class="radio_container">
                      <input type="radio" id="radio_3" name="shipping_radio" class="shipping_radio" checked>
                      <span class="radio_mark"></span>
                      <span class="radio_text">Livraison de plus de 10 jours</span>
                    </label>
                    <div class="shipping_price ml-auto">Gratuite</div>
                  </li>
                </ul>
                <button class="coupon_livraison">Valider</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 cart_extra_col">
          <div class="cart_extra cart_extra_2">
            <div class="cart_extra_content cart_extra_total">
              <div class="cart_extra_title">Total du panier</div>
              <ul class="cart_extra_total_list">
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="cart_extra_total_title">Sub-total</div>
                  <div class="cart_extra_total_value ml-auto"><span><?= number_format($panier->total(),2); ?> €</span></div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="cart_extra_total_title">Livraison</div>
                  <div class="cart_extra_total_value ml-auto"><input class="shipping_radio"></div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="cart_extra_total_title">Total</div>
                  <div class="cart_extra_total_value ml-auto"><?= number_format($panier->total()*1.196,2); ?> €</div>
                </li>
              </ul>
              <div class="checkout_button trans_200"><a href="paiement.php">Finalisé votre achat ici</a></div>
            </div>
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
                  <a href="../">
                    <div>Accueil</div>
                  </a>
                </li>
                <li>
                  <a href="../enchere/">
                    <div>Encherès du moment<div class="footer_tag_2">recommandé</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="../meilleur-offre/">
                    <div>Meilleures offres du moment</div>
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
  <script type="text/javascript" src="../custom-js/livraison.js"></script>
  </body>

</html>
  