
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link href="../style/add_article.css" rel="stylesheet" media="all" type="text/css">
    <link href="../style/style.css" rel="stylesheet" media="all" type="text/css">

    <title>BID ECE | Ajouter un article</title>
</head>

<body>
    <!--Navbar-->
    <div class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand h1 text-primary" href="../"><img src="../img/logo_bid_ece.jpg" width="100px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="../achat" id="navbarDropdownMenuLink" role="button" aria-haspopup="true" aria-expanded="false">
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
                <li class="nav-item dropdown">
                    <a class="nav-link" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Vente
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item nav-link" href="../compte-vendeur/">Espace Vendeur</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item nav-link" href="../compte-admin/">Espace Admin</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../compte-acheteur/">Votre Compte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../paiement">Payer</a>
                </li>
            </ul>
        </div>
    </div>
    <!--/.Navbar-->

    <div class="container">

        <div class="row">
            <div class="col-lg-12" align="center">
                <div id="formContent">
                    <form method="post" enctype="multipart/form-data">
                        <input type="text" id="nomArticle" name="nomArticle" placeholder="Nom Article">
                        <!--<label for="photo">Choisir une photo :</label>
                        <input type="file" id="photo" name="photo" accept="image/png, image/jpeg">
                        <label for="video">Choisir une vidéo :</label>
                        <input type="file" id="video" name="video" accept="video/mp4">-->
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                        <input type="number" id="prix" name="prix" placeholder="Prix de départ">
                        <!--<input type="number" id="prixAchat" name="prixAchat" placeholder="Prix d'achat immédiat">-->
                        <h5 align="center">Catégorie :</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="choix" id="tresor" value="Ferraille ou Trésor" checked>
                            <label class="form-check-label" for="tresor">
                                Ferraille ou Trésor
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="choix" id="musee" value="Bon pour le musée">
                            <label class="form-check-label" for="musee">
                                Bon pour le musée
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="choix" id="vip" value="Accessoire VIP">
                            <label class="form-check-label" for="vip">
                                Accessoire VIP
                            </label>
                        </div>
                        <h5 align="center">Mode de vente :</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="choix1" value="1" id="enchere" checked>Enchère
                            <label class="form-check-label" for="enchere" >
                                1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="choix1" value="2" id="achatimmediat">Achat Immédiat
                            <label class="form-check-label" for="achatimmediat">
                                2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="choix1" value="3" id="meilleureoffre">Meilleure Offre
                            <label class="form-check-label" for="meilleureoffre">
                                3
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="choix1" value="4" id="enchereachatimmediat">Enchère et Achat immédiat
                            <label class="form-check-label" for="enchereachatimmediat">
                                4
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="choix1" value="5" id="meilleureoffreachatimmediat">Meilleure Offre et Achat immédiat
                            <label class="form-check-label" for="meilleureoffreachatimmediat">
                                5
                            </label>
                        </div>
                        <input type="submit" name="ajouter" id="ajouter" value="Ajouter un article">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
            
            // Récuperer les données venant de la page HTML
            $nomArticle = isset($_POST["nomArticle"])? $_POST["nomArticle"] : ""; 
            $description = isset($_POST["description"])? $_POST["description"] : "";
            $prix = isset($_POST["prix"])? $_POST["prix"] : "";
            $cat = isset($_POST["choix"])? $_POST["choix"] :"";
            $mdv = isset($_POST["choix1"])? $_POST["choix1"] :"";
            
            
            //Identifier votre BDD
            $database = "bid_ece";
            //connectez-vous dans votre BDD
            //Rappel: votre serveur = localhost | votre login = root |votre password = root
            $db_handle = mysqli_connect('localhost', 'root', 'root');
            $db_found = mysqli_select_db($db_handle, $database);
            
            if ($_POST["ajouter"]) { 
                if($nomArticle&&$description&&$prix){
                    if ($db_found) {
                        $sql = "SELECT * FROM item"; 
                        if ($nomArticle != "") {
                            //on cherche l'article avec le paramètre nomArticle
                            $sql .= " WHERE nom LIKE '%$nomArticle%'";
                        }
                        $result = mysqli_query($db_handle, $sql);
                        //regarder s'il y a de résultat
                    
                        if (mysqli_num_rows($result) != 0) {
                            //l'article est déjà dans la BDD
                            echo "Déjà en ligne";
                        } 
                        else {
                            
                            $sql = "INSERT INTO item (item_id, user_id, nom, prix, photo, video, description, categorie, mode_de_vente, stock) VALUES (NULL, '1', '$nomArticle', '$prix', NULL, NULL, '$description', '$cat', '$mdv', '2')";
                            $result = mysqli_query($db_handle, $sql);
                            echo "Article ajouté" . "<br>";  
                        }
                    } 
                    else {
                        echo "Database not found";
                    } 
                }else echo "<h4>Veuillez remplir tout les champs</h4>";
            }
            
            //fermer la connexion
            mysqli_close($db_handle);
?>

    <?php
                    //si le bouton est cliqué
                    if (isset($_POST["ajouter"])) {
                        //afficher information sur la catégorie
                        echo "<br>Catégorie:" . $cat;
                        //afficher information sur le mode de vente
                        echo "<br>Mode de vente:" . $mdv;
                        echo "<br>Nom Article:" . $nomArticle;
                        echo "<br>Description:" . $description;
                        echo "<br>Prix:" . $prix;
                    }
    
                    
    
    ?>

    <!--Footer-->
    <!--<footer>
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
  </footer>-->
    <!--/.Footer-->

</body>

</html>
