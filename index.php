<!DOCTYPE html>
<html lang="fr">

<head>
  <title>BID ECE | Accueil</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="BIDECE">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    type="text/css">
  <link rel="stylesheet" type="text/css" href="./style/accueil.css">
</head>

<body>
  <!--Menu du navbar en header-->
  <div class="menu-bar">
    <ul>
      <li><a href="./"><i class="fa fa-home" aria-hidden="true"></i>Accueil</a></li>
      <li><a href="./achat/"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Achat</a>
        <div class="sub-menu1">
          <ul>
            <li class="hover-me"><a href="./categories/">Catégories</a><i class="fa fa-angle-right"></i>
              <div class="sub-menu2">
                <ul>
                  <li><a href="sous-categories/ferraille-ou-tresor">Ferraille ou Trésor</a></li>
                  <li><a href="sous-categories/bon-pour-le-musee">Bon pour le Musée</a></li>
                  <li><a href="sous-categories/accessoire-vip">Accessoire VIP</a></li>
                </ul>
              </div>
            </li>
            <li class="hover-me"><a href="./modes-de-vente/">Mode de vente</a><i class="fa fa-angle-right"></i>
              <div class="sub-menu2">
                <ul>
                  <li><a href="modes-de-vente/enchere">Enchères</a></li>
                  <li><a href="modes-de-vente/achat-immediat">Achetez-le maintenant</a></li>
                  <li><a href="modes-de-vente/meilleures-offres">Meilleure offre</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </li>
      <li><a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Ventes</a>
        <div class="sub-menu1">
          <ul>
            <li class="hover-me"><a href="./compte-vendeur/index.php">Espace Vendeur</a></li>
            <li class="hover-me"><a href="./compte-admin/index.php">Espace Admin</a></li>
          </ul>
        </div>
      </li>
      <li><a href="compte-acheteur/index/"><i class="fa fa-user" aria-hidden="true"></i>Votre Compte</a></li>
      <li><a href="panier/panier"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Payer</a></li>
    </ul>
  </div>
  <!--Fin du menu-->

  <!-- Caroussel d'images-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./img/img_accueil/timbres.jpg" alt="First slide" height="700px">
      </div>
      <div class="carousel-item"><a href="modes-de-vente/soldes">
        <img class="d-block w-100" src="./img/img_accueil/sale.jpg" alt="First slide" height="700px" ></a>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./img/img_accueil/piece.jpg" alt="Second slide" height="700px">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./img/img_accueil/art3.jpg" alt="Third slide" height="700px">
      </div>
    </div>
    <a class="carousel-control-prev"  role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next"  role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- FIN du caroussel d'image -->

  
  <!-- Produits -->

  <div class="products">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-md-6">
          <div class="section_title text-center">CATÉGORIES</div>
        </div>
      </div>
      <div class="row page_nav_row">
        <div class="col">
          <div class="page_nav">
            <ul class="d-flex flex-row align-items-start justify-content-center">
              <li><a href="sous-categories/ferraille-ou-tresor">Ferraille ou trésor</a></li>
              <li><a href="sous-categories/bon-pour-le-musee">Bon pour le musée</a></li>
              <li><a href="sous-categories/accessoire-vip">Accessoire VIP</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row products_row">

        <!-- Produit -->
        <div class="col-xl-4 col-md-6">
          <div class="product">
            <div class="product_image"><img src="./img/img_accueil/statue.jpg" alt="statue" width="350px"
                height="320px"></div>
            <div class="product_content">
              <div class="product_info d-flex flex-row align-items-start justify-content-start">
                <div>
                  <div>
                    <div class="product_name"><a href="product.html"> Le retour du pêcheur</a></div>
                    <div class="product_category">In <a href="category.html">Achat</a></div>
                  </div>
                </div>
                <div class="ml-auto text-right">
                  <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                  <div class="product_price text-right">$300<span>.99€</span></div>
                </div>
              </div>
              <div class="product_buttons">
                <div class="text-right d-flex flex-row align-items-start justify-content-start">
                  <div
                    class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                    <div>
                      <div><a href="./panier/"><img src="./img/icones/panier.svg" class="svg"
                            alt="ajouter dans le panier" title="Ajouter dans le panier"></a>
                        <div>+</div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                    <div>
                      <div><a href="./paiement/coordonnees"><img src="./img/icones/payer.svg" class="svg" alt="payer"
                            title="Payer maintenat"></a>
                        <div>+</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>        
        <!-- Guide pour le site -->
        <div class="col-xl-4 col-md-8">
          <div class="product">            
            <h2 sty>Comment ça marche?</h2>
            <h5> Nous vous proposons 3 façons d'acheter sur notre site BIDECE:</h5>
              <ul>
                <li>Enchères: Nous vous proposons des produits aux enchères, c'est à vous de faire des offres et de remporter l'objet. Restez attentif et augmentez vos chances de gagner en faisant au moins 5 offres. </li><br>
                <li>Achat immédiat d'un produit: Vous avez eu un coup de foudre pour un de nos produits ? Pas de panique !! Vous pouvez le payer en un clic. Pour cela rendez-vous sur la page ACHAT IMMÉDIAT </li><br>
                <li>Meilleure offre: Vous pouvez négocier avec le vendeur jusqu'à 5 fois pour conclure le prix final d'un article. </li> 
              </ul>
            </div>
        </div>
        <!-- Aide / Guide pour ajouter ou payer un article -->
        <div class="col-xl-4 col-md-6">
          <div class="product">
          <h3 sty>Comment ajouter un article au panier ou payer un article?</h3>
              <div class="product_buttons">
                <div class="text-right d-flex flex-row align-items-start justify-content-start">
                  <div
                    class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                    <div>
                      <div><a href="panier/index.html"><img src="./img/icones/panier.svg" class="svg"
                            alt="ajouter dans le panier" title="Ajouter dans le panier"></a>
                        <div>+</div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                    <div>
                      <div><a href="paiement/index.html"><img src="./img/icones/payer.svg" class="svg" alt="payer"
                            title="Payer maintenat"></a>
                        <div>+</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div><br>
              <ul>
                <li>Ajouter un article dans le panier: Cliquez sur l'icône Panier pour ajouter vos articles dans le panier tout au long de votre navigation dans la page, vous pouvez modifier manuellement la quantité dans le panier. Un message va apparaître en vous demandons de aller dans le panier ou continuer à voir vos articles </li><br>
                <li>Achat immédiat d'un produit: Cliquez sur l'icône carte de crédit, qui va vous rediriger vers la page paiement, remplissez le formulaire et payez l'article ! Simple et Facile comme BIDECE.</ul>
            </div>
          </div>
        </div> 
        <!-- Cases pour les enchères populaires, les meilleures offres ou acheter maintenant -->

        <div class="boxes">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="boxes_container d-flex flex-row align-items-start justify-content-between flex-wrap">

                  <!-- Enchères les plus populaires -->
                  <div class="box">
                    <div class="background_image" style="background-image:url(./img/img_accueil/art1.jpg)"></div>
                    <div class="box_content d-flex flex-row align-items-center justify-content-start">
                      <div class="box_left">
                        <div class="box_image">
                          <a href="modes-de-vente/enchere">
                            <div class="background_image" style="background-image:url(./img/img_accueil/violent.jpg)">
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="box_right text-center">
                        <div class="box_title">Encherès les plus populaires</div>
                      </div>
                    </div>
                  </div>

                  <!-- Meilleures offres -->
                  <div class="box">
                    <div class="background_image" style="background-image:url(./img/img_accueil/art2.jpg)"></div>
                    <div class="box_content d-flex flex-row align-items-center justify-content-start">
                      <div class="box_left">
                        <div class="box_image">
                          <a href="modes-de-vente/meilleures-offres">
                            <div class="background_image" style="background-image:url(./img/img_accueil/statue.jpg)">
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="box_right text-center">
                        <div class="box_title">Profitez des meilleures offres</div>
                      </div>
                    </div>
                  </div>

                  <!-- Acheter maintenant -->
                  <div class="box">
                    <div class="background_image" style="background-image:url(./img/img_accueil/art3.jpg)"></div>
                    <div class="box_content d-flex flex-row align-items-center justify-content-start">
                      <div class="box_left">
                        <div class="box_image">
                          <a href="modes-de-vente/achat-immediat">
                            <div class="background_image" style="background-image:url(./img/img_accueil/horloge.jpg)">
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="box_right text-center">
                        <div class="box_title">N'attendez pas!<br>Achetez maintenant</div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <p> .</p>
        </div>
        <!-- Footer -->

        <footer class="footer">
          <div class="footer_content">
            <div class="container">
              <div class="row">

                <!-- À propos de nous -->
                <div class="col-lg-4 footer_col">
                  <div class="footer_about">
                    <div class="footer_logo">
                      <a href="#">
                        <div class="d-flex flex-row align-items-center justify-content-start">
                          <div class="footer_logo_icon"><img src="./img/logo_bid_ece.jpg" alt="logo" height="50px"
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

                <!-- Liens du footer -->
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
                        <a href="modes-de-vente/enchere">
                          <div>Encherès du moment<div class="footer_tag_2">recommandé</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="modes-de-vente/meilleures-offres">
                          <div>Meilleures offres du moment</div>
                        </a>
                      </li>                
                    </ul>
                  </div>
                </div>

                <!-- Contact footer -->
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
      </div>

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