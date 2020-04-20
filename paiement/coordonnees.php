<?php
require '../connection.php';
?><!DOCTYPE html>
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
  <!--Création du formulaire de paiement-->
  <!--Contour de la boite paiement-->
  <div class="checkout">
			<div class="container">
				<div class="row">					
					<!-- Billing -->
					<div class="col-lg-6">
						<div class="billing">
							<div class="checkout_title">Informations</div>
							<div class="checkout_form_container">
							<form action="traitement.php" methode="post" class="checkout_form">
								<div class="row">
								<div class="col-lg-6">
									<!-- Name -->
									<input type="text" id="nombre" name="prenome "class="checkout_input" placeholder="Prenom"
									required="required"  minlength="2" maxlength="20" title="Renseigné votre prenom de famille">
								</div>
								<div class="col-lg-6">
									<!-- Last Name -->
									<input type="text" id="apellido" name="nom" class="checkout_input" placeholder="Nom"
									required="required" minlength="2" maxlength="20" title="Renseigné votre nom de famille">
								</div>
								</div>
								<div >
								<!-- Country -->
								<input type="text" id="pays" name="pays" class="dropdown_item_select checkout_input"
									require="required" placeholder="pays">									
								</div>
								<div>
								<!-- Address -->
								<input type="text" id="direction" name="adresse1" class="checkout_input checkout_address_1"
									placeholder="Address Ligne 1" required="required" minlength="9" maxlength="40" title="Renseigné votre adresse">
								</div>
								<div>
								<!-- Address -->
								<input type="text" id="direction" name="adresse2" class="checkout_input checkout_address_2"
									placeholder="Address Ligne 2" required="required" minlength="9" maxlength="40" title="Renseigné votre adresse">
								</div>
								<div>
								<!-- Zipcode -->
								<input type="number" id="zipcode" name="codepostale" class="checkout_input" placeholder="Code postal"
									required="required" size="5" title="Entrez entre 3 et 4 chifres du code postale français">
								</div>
								<div>
								<!-- City / Town -->
								<input type="text" id="ville" name="ciudad "class="dropdown_item_select checkout_input"
									require="required" placeholder="Ville">									
								</div>
								<div>
								<!-- Phone no -->
								<input type="number" id="phone" name="tel" class="checkout_input" placeholder="Phone No."
									required="required" pattern="\x2b[0-9]+" size="20"  title="Inserz un numéro de telephone de 10 nombres">
								</div>								
							
								<div class="garder_options">
								<div class="checkout_title">On protege vos informations</div><br>
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
									</div>
									<input type="submit" name="button1" class="checkout_button trans_200" value="Confirmer mes coordonnées">									
								</form>
							</div>
						</div>						
					</div>
						
					<!-- Cart Total -->
					<div class="col-lg-6 cart_col">
					<div class="checkout_form_container">
						<div class="cart_total">
							<div class="cart_extra_content cart_extra_total">
								
								<form action="traitement2.php" methode="post">
									<form action="#" id="checkout_form" class="checkout_form">
										<div class="row">
											<div class="col-lg-6">
												<!-- Name -->
												<input type="text" id="checkout_name"  nom="prenom"class="checkout_input" placeholder="Prenom" required="required">
											</div>
											<div class="col-lg-6">
												<!-- Last Name -->
												<input type="text" id="checkout_last_name" nom="nom" class="checkout_input" placeholder="Nom" required="required">
											</div>
										</div>
										<div><br>
										<!--Carte bancaire-->
										<select name="carte" id="typecarte" class="dropdown_item_select checkout_input"
											require="required">
											<option>Visa</option>
											<option>MasterCard</option>
											<option>American Express</option>
											<option>PayPal</option>
										</select>
										</div><br>
										<div>                      
											<!--Numéro de carte-->
											<input type="number" name="numerodecarte" id="numerodecarte" class="checkout_input" placeholder="Numero de carte bancaire"
											required="required" size="16">
										</div><br>
										<!--Date d'expiration-->
										<div>
										<select name="expireMM" id="expireMM" class="dropdown_item_select checkout_input">
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
										<select name="expireYY" id="expireYY" class="dropdown_item_select checkout_input">
											<option value=''>Année</option>
											<option value='101'>2020</option>
											<option value='102'>2021</option>
											<option value='103'>2022</option>
											<option value='104'>2023</option>
											<option value='105'>2024</option>
											<option value='106'>2025</option>
											<option value='107'>2026</option>
										</select> 
										</div><br>
										<div>                    
										<!-- Cryptogramme visuel-->
										<input type="number" name="crypto" id="crypto" class="checkout_input" placeholder="Crytogramme visuel" required="required" size="3">
										</div><br>
								<div class="checkout_title">Total du Panier</div>
								<div class="cart_text">
									<h5>Puisque vous avez chosit un achat immmediat, la livraison est offerte</h5><br>
									<p>Merci de votre confiance</p>
								</div>
								<div class="checkout_button trans_200">Acheter le produit</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    <p>.</p>

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
          <!--liste de liens-->

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