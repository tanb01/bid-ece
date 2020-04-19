<?php require "headerp.php"; ?> 
<?php
if (isset($_GET['del'])){
  $panier->del($_GET['del']);
}
?>
  <!-- Cart -->

  <div class="cart_section">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="cart_container">

            <!-- Cart Bar -->
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

            <!-- Cart Items -->
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
                <!-- Cart Item -->
                <li
                  class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start">
                  <div
                    class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
                    <div>
                      <div class="product_number">1</div>
                    </div>
                    <div>
                      <div class="product_image"><img src="images/cart_itemk_1.jpg" alt=""></div>
                    </div>
                    <div class="product_name_container">
                      <div class="product_name"><a href="product.html"><?= $product->nom;?></a></div>
                      <div class="product_text">ajouter une mini description</div>
                    </div>
                  </div>
                  <div class="product_color product_text"><?= $product->categorie;?></div>
                  <div class="product_price product_text"><?= number_format($product->prix,2);?>€</div>
                  <div class="product_quantity_container">
                    <div class="product_quantity ml-lg-auto mr-lg-auto text-center">
                      <span class="product_text product_num"><?= $_SESSION['panier'][$product->item_id]; ?></span>
                      <div class="qty_sub qty_button trans_200 text-center"><span>-</span></div>
                      <div class="qty_add qty_button trans_200 text-center"><span>+</span></div>
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

            <!-- Cart Buttons -->
            <div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
              <div
                class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
                <div class="button button_clear trans_200"><a href="categories.html">Abandoner</a></div>
                <div class="button button_continue trans_200"><a href="categories.html">continuer</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row cart_extra_row">
        <div class="col-lg-6">
          <div class="cart_extra cart_extra_1">
            <div class="cart_extra_content cart_extra_coupon">
              <div class="cart_extra_title">Code de réduction</div>
              <div class="coupon_form_container">
                <form action="#" id="coupon_form" class="coupon_form">
                  <input type="text" class="coupon_input" required="required">
                  <button class="coupon_button">Appliquer</button>
                </form>
              </div>
              <div class="coupon_text">Si vous avez un code de réduction ajoutez le.<br> Code de 10% :QBEDI</div>
              <div class="shipping">
                <div class="cart_extra_title">Methode d'envoie</div>
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
                      <span class="radio_text">Livraison standar</span>
                    </label>
                    <div class="shipping_price ml-auto">$1.99</div>
                  </li>
                  <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                    <label class="radio_container">
                      <input type="radio" id="radio_3" name="shipping_radio" class="shipping_radio" checked>
                      <span class="radio_mark"></span>
                      <span class="radio_text">Livraison plus de 10 jours</span>
                    </label>
                    <div class="shipping_price ml-auto">Gratuite</div>
                  </li>
                </ul>
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
                  <div class="cart_extra_total_value ml-auto">Gratuit</div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="cart_extra_total_title">Total</div>
                  <div class="cart_extra_total_value ml-auto"><span><?= number_format($panier->total(),2); ?> €</span></div>
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
  </body>

</html>
  