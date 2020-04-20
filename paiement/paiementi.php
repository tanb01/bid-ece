<?php
require '../connection.php';
require '../panier/panier.class.php';
$DB = new DB(); /**Connexion à la base de données */
$panier = new panier($DB);
?>
<?php
$DB->query("SELECT prix FROM item");


if ($_SERVER["REQUEST_METHOD"] == "POST") {?>

<!-- Crée une vente à faire -->
  <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Article acheté!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <title>BID ECE | Paiement</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Little Closet template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    type="text/css">
  <link rel="stylesheet" type="text/css" href="../style/paiement.css">
  <script type="text/javascript" src="./paiement.js"> </script>
</head>

<body>
  <!--Menu-->
	<div class="menu-bar">
		<ul>
			<li><a href="../"><i class="fa fa-home" aria-hidden="true"></i>Accueil</a></li>
			<li><a href="../achat/"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Achat</a>
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
						<li class="hover-me"><a href="../compte-vendeur/">Espace vendeur</a></li>
						<li class="hover-me"><a href="../compte-admin/">Espace administrateur</a></li>
					</ul>
				</div>
			</li>
			<li><a href="../compte-acheteur/"><i class="fa fa-user" aria-hidden="true"></i>Votre compte</a></li>
			<li><a href="../panier/"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Payer</a></li>
		</ul>
	</div>
  <!-- Home -->
  <div class="home">
    <div class="home_container d-flex flex-column align-items-center justify-content-end">
      <div class="home_content text-center">
        <div class="home_title">PAIMENT</div><br>
        <h3>Finalisez votre achat</h3><br>
        <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
          <ul class="d-flex flex-row align-items-start justify-content-start text-center">
            <li><a href="../">Page principal</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="checkout">
    <div class="container">
      <div class="row">
        <!-- Information -->
        <div class="col-lg-12">
          <div class="billing">
            <div class="checkout_title">Informations</div>
            <div class="checkout_form_container">
              <form action="#" id="checkout_form" class="checkout_form">
                <div class="row">
                  <div class="col-lg-6">
                    <!-- Nom -->
                    <input type="text" id="nombre" class="checkout_input" placeholder="Prénom"
                      required="required"  minlength="2" maxlength="20" title="Renseignez votre prénom">
                  </div>
                  <div class="col-lg-6">
                    <!-- Prénom -->
                    <input type="text" id="apellido" class="checkout_input" placeholder="Nom"
                      required="required" minlength="2" maxlength="20" title="Renseignez votre nom de famille">
                  </div>
                </div>
                <div>
                  <!-- Pays -->
                  <select name="checkout_country" id="pays" class="dropdown_item_select checkout_input"
                    require="required">
                    <option>France</option>
                  </select>
                </div>
                <div>
                  <!-- Adresse -->
                  <input type="text" id="direction" class="checkout_input checkout_address_2"
                    placeholder="Adresse" required="required" minlength="9" maxlength="40" title="Renseignez votre adresse">
                </div>
                <div>
                  <!-- Code postal -->
                  <input type="number" id="zipcode" class="checkout_input" placeholder="Code postal"
                    required="required" title="Entrez votre code postal">
                </div>
                <div>
                  <!-- Ville -->
                  <input type="text" id="ville" class="checkout_input checkout_address_2"
                    placeholder="Ville" required="required" title="Renseignez votre Ville">
                </div>
                <div>
                  <!-- Numéro de téléphone -->
                  <input type="number" id="phone" class="checkout_input" placeholder="Numéro de téléphone"
                    required="required" pattern="\x2b[0-9]+" size="20"  title="Insérez un numéro de téléphone">
                </div>
                <div>
                  <!-- Email -->
                  <input type="email" id="email" class="checkout_input" placeholder="Email"
                    required="required" title="Rensegnez votre email">
                </div>
                <div class="garder_options">
                  <div class="checkout_title">On protège vos informations</div>
                  <ul>
                    <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                      <label class="radio_container">
                        <input type="radio" id="radio1" name="garder_radio" class="garder_radio">
                        <span class="radio_mark"></span>
                        <span class="radio_text">Je souhaite garder mes informations</span>
                      </label>
                    </li>
                    <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                      <label class="radio_container">
                        <input type="radio" id="radio2" name="garder_radio" class="garder_radio" checked>
                        <span class="radio_mark"></span>
                        <span class="radio_text">Je ne souhaite pas garder mes informations</span>
                      </label>
                    </li>
                  </ul><br>
                  <div class="checkout_title">Mode de paiement</div>
                  <ul>
                    <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                      <label class="radio_container">
                        <input type="radio" id="radio3" name="payment_radio" class="payment_radio">
                        <span class="radio_mark"></span>
                        <span class="radio_text">Paypal</span>
                      </label>
                    </li>
                    <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                      <label class="radio_container">
                        <input type="radio" id="radio4" name="payment_radio" class="payment_radio" checked>
                        <span class="radio_mark"></span>
                        <span class="radio_text">Carte bancaire</span>
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="checkout_form_container">
                    <div>
                      <!-- Carte -->
                      <select name="checkout_carte" id="typecarte" class="dropdown_item_select checkout_input"
                        require="required">
                        <option>Visa</option>
                        <option>MasterCard</option>
                        <option>Visa electron</option>
                      </select>
                    </div><br>
                    <div>
                      <input class="inputCard" type="hidden" name="expiry" id="expiry" maxlength="4"/>
                        <!-- Numéro de carte bancaire -->
                        <input type="number" id="numero de carte" class="checkout_input" placeholder="Numéro de carte bancaire"
                          required="required" size="16">
                      </div><br>
                    <!-- expiration -->
                    <div>
                      <select name='expireMM' id='expireMM' class="dropdown_item_select checkout_input">
                        <option value=''>Mois</option>
                        <option value='01'>Janvier</option>
                        <option value='02'>Fevrier</option>
                        <option value='03'>Mars</option>
                        <option value='04'>Avril</option>
                        <option value='05'>Mai</option>
                        <option value='06'>Juin</option>
                        <option value='07'>Juillet</option>
                        <option value='08'>Août</option>
                        <option value='09'>Septembre</option>
                        <option value='10'>Octobre</option>
                        <option value='11'>Novembre</option>
                        <option value='12'>Décembre</option>
                    </select>
                    <select name='expireYY' id='expireYY' class="dropdown_item_select checkout_input">
                        <option value=''>Année</option>
                        <option value='10'>2020</option>
                        <option value='11'>2021</option>
                        <option value='12'>2022</option>
                        <option value='11'>2023</option>
                        <option value='12'>2024</option>
                    </select>
                    </div><br>
                    <div>
                    <input class="inputCard" type="hidden" name="expiry" id="expiry" maxlength="4"/>
                      <!-- Cryptogramme visuel -->
                      <input type="number" id="crypto" class="checkout_input" placeholder="Crytogramme visuel"
                        required="required" size="3">
                    </div>
                  </form>
                </div><br>
                <div class="checkout_title">Total du produit</div>
                <ul class="cart_extra_total_list">
                  <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="cart_extra_total_title">Sous-total</div>
                    <div class="cart_extra_total_value ml-auto"><span><?=number_format($panier->total(), 2);?> €</span></div>
                  </li>
                  <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="cart_extra_total_title">Mode de livraison</div>
                    <div class="cart_extra_total_value ml-auto">Gratuit</div>
                  </li>
                  <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="cart_extra_total_title"></div>
                    <div class="cart_extra_total_value ml-auto"><span><?=number_format($panier->total() * 1.196, 2);?> €</span></div>
                  </li>
                </ul>
                <div class="cart_text">
                  <h6>Merci de votre Achat, vous y êtes presque pour avoir vos articles.</h6>
                </div>
              </div>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <input type="submit" class="checkout_button" value="Payer maintenant"></form>
            </div>
          </div>

         </form>
        <div id="errordiv"></div>
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
                    <div class="footer_logo_icon"><img src="../img/logo_bid_ece.jpg" alt="logo" height="60px" width="60px"></div>
                    <div>BIDECE.fr</div>
                  </div>
                </a>
              </div>
              <div class="footer_about_text">
                <p>BIDECE a été créé en 2020 pour permettre à chacun d’acheter et de vendre les plus belles pièces
                  uniques. Les prix affichés sont fixés par ces vendeurs et BIDECE opère en tant qu’intermédiaire et
                  tiers de confiance auprès d’eux et des acheteurs. Ces derniers peuvent ainsi dénicher parmi les 100
                  000 références de BIDECE la perle rare et être livrés sans bouger de leur canapé. Les pièces proposées
                  à la vente sont quant à elles quotidiennement sélectionnées à la main par nos équipes.</p>
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
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>

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