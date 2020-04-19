<?php
include "../traitement/config.php";

?>

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
<?php
require "../common/header.php";
?>
<?php
// Récuperer les données venant de la page HTML
$nomArticle = isset($_POST["nomArticle"]) ? $_POST["nomArticle"] : "";
$description = isset($_POST["description"]) ? $_POST["description"] : "";
$prix = isset($_POST["prix"]) ? $_POST["prix"] : "";
$cat = isset($_POST["choix"]) ? $_POST["choix"] : "";
$mdv = isset($_POST["choix1"]) ? $_POST["choix1"] : "";
$photoDeprofil = isset($_POST["photo"]) ? $_POST["photo"] : NULL;
$video = isset($_POST["video"]) ? $_POST["video"] : NULL;

if (isset($_POST["ajouter"])) {
    if ($nomArticle && $description && $prix) {
        $sql = "SELECT * FROM item";
        if ($nomArticle != "") {
            //on cherche l'article avec le paramètre nomArticle
            $sql .= " WHERE nom LIKE '%$nomArticle%'";
        }
        $result = mysqli_query($db_handle, $sql);
        //regarder s'il y a de résultat

        if (mysqli_num_rows($result) != 0) {
            //l'article est déjà dans la BDD
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>L'article est déjà en ligne!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
} else {
            $sql = "INSERT INTO item (item_id, user_id, nom, prix, photo, video, description, categorie, mode_de_vente, stock) VALUES (NULL, ".$_SESSION['id'].", '$nomArticle', '$prix', '$photoDeprofil', '$video', '$description', '$cat', '$mdv', '1')";
            $result = mysqli_query($db_handle, $sql);
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>L'article a été ajouté!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
}
    } else {
      ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Veuillez remplir tout les champs</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php
    }
}
//fermer la connexion
mysqli_close($db_handle);

//si le bouton est cliqué
if (isset($_POST["ajouter"])) {
    // //afficher information sur la catégorie
    // echo "<br>Catégorie:" . $cat;
    // //afficher information sur le mode de vente
    // echo "<br>Mode de vente:" . $mdv;
    // echo "<br>Nom Article:" . $nomArticle;
    // echo "<br>Description:" . $description;
    // echo "<br>Prix:" . $prix;?>

<?php
}
?>

    <div class="container mt-5">

        <div class="row">
            <div class="col-lg-12" class="text-center">
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
                        <h5 class="text-center">Catégorie :</h5>
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
                        <h5 class="text-center">Mode de vente :</h5>
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
                            <input class="form-check-input" type="radio" name="choix1" value="5" id="meilleureoffreachatimmediat">Meilleure Offre et Achat Immédiat
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

<?php require "../common/footer.php";?>
</body>

</body>

</html>

<!-- INSERT INTO `user` (`user_id`, `email`, `mot_de_passe`, `nom`, `pseudo`, `statut`, `note`, `photo_de_profil`, `image_de_fond`) VALUES (NULL, 'carl', 'carl', 'bonhomme', 'carlito', 'Vendeur', '3', NULL, NULL) -->