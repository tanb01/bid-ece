<?php require 'headerb.php'; ?>
<!-- Recuperation de produits qu'on stoque dans la requete req-->
<?php
$DB->query("SELECT * FROM item WHERE categorie='Bon pour le musée'");
?> <!-- Products -->
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
            <div class="products_bar_side d-flex flex-row align-items-center justify-content-start ml-lg-auto">
              <div class="products_dropdown product_dropdown_sorting">
                                  
              
                <div class="isotope_sorting_text"><span>Trier par:</span><i class="fa fa-caret-down"
                    aria-hidden="true"></i></div>
                <ul>
                  <li class="item_sorting_btn">prix</li>
                  <li class="item_sorting_btn">Nom</li>
                </ul>
              </div>
              
              <div class="products_dropdown text-right product_dropdown_filter">
                <div class="isotope_filter_text"><span>Filter</span><i class="fa fa-caret-down" aria-hidden="true"></i>
                </div>
                <ul>
                  <li class="item_filter_btn" data-filter="*">Tous</li>
                  <li class="item_filter_btn" data-filter=".hot">Nouveau</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row products_row products_container grid">
        <!--selection de produits du tableau items qu'on va stocker sous la variable product--> 
        <?php $item =$DB->query("SELECT * FROM item WHERE categorie  LIKE '%MU%'"); ?>
        <?php foreach($item as $product):?>
        <!-- Product tous les appeles à venir se fond grace à l'id du produit-->
        <div class="col-xl-4 col-md-6 grid-item new">
          <div class="product">
            <!--On va prendre l'image qui correspond ou produit qu'on va appeler-->
            <div class="product_image"><img src="data:image/jpeg;base64, <?= base64_encode($product->photo); ?>" height="350px" width="500px"></div>
            <div class="product_content">
              <div class="product_info d-flex flex-row align-items-start justify-content-start">
                <div>
                  <div>
                    <!--On va prendre le nom qui correspond ou produit qu'on va appeler-->
                    <div class="product_name"><a href="product.html"><?= $product->nom;?></a></div>
                    <!--On va prendre la catégorie qui correspond ou produit qu'on va appeler-->
                    <div class="product_category">dans <a href="category.html"><?= $product->categorie;?></a></div>
                  </div>
                </div>
                <div class="ml-auto text-right">
                  <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                  <!--On va prendre le prix  qui correspond ou produit qu'on va appeler-->
                  <div class="product_price text-right"><?= number_format($product->prix,2);?>€</div>
                </div>
              </div>
              <div class="product_buttons">
                <div class="text-right d-flex flex-row align-items-start justify-content-start">
                  <div
                    class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                    <div>
                      <!--Grâce à l'icone panie on peut ajouter des produits dans le panier-->
                      <div><a class="add ajoutPanier" href="ajout.php?item_id=<?= $product->item_id;?>"><img src="../img/icones/panier.svg" class="svg" alt=""></a>
                        <div>+</div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                    <div>
                      <!--Grâce à l'icone carte de crédit être rédirigé vers paiment avec l'unique produit selectionéé-->
                      <div><a class="add ajoutPaiement" href="paiement.php?item_id<?= $product->item_id;?>"><img src="../img/icones/payer.svg" class="svg" alt=""></a>
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
  <script type="text/javascript" src="../custom-js/alert.js"></script>



</body>

</html>