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

    <title>BID ECE | Ajouter un vendeur</title>
</head>

<body>
<?php
require "../common/header.php";
    // Header commun inclut dans chaque page
?>
<?php
    // Uniquement ADMIN peut ajouter un vendeur
if ($_SESSION['statut'] != "Admin") {
    header("location: ../");
    exit;
}

// Récupérer les données venant de la page HTML
$email = isset($_POST["emailVendeur"]) ? $_POST["emailVendeur"] : "";
$password = isset($_POST["passwordVendeur"]) ? $_POST["passwordVendeur"] : "";
$nomVendeur = isset($_POST["nomVendeur"]) ? $_POST["nomVendeur"] : "";
$pseudo = isset($_POST["pseudoVendeur"]) ? $_POST["pseudoVendeur"] : "";
$statut = isset($_POST["choixStatut"]) ? $_POST["choixStatut"] : "";
$note = null;
$photoDeProfil = isset($_POST["photoVendeur"]) ? $_POST["photoVendeur"] : null;
$imageDeFond = isset($_POST["fondVendeur"]) ? $_POST["fondVendeur"] : null;
// $prix = isset($_POST["prix"]) ? $_POST["prix"] : "";
// $cat = isset($_POST["choix"]) ? $_POST["choix"] : "";
// $mdv = isset($_POST["choix1"]) ? $_POST["choix1"] : "";

if (isset($_POST["ajouter"])) {
    if ($email && $password && $nomVendeur && $pseudo && $statut) {
        $sql = "SELECT * FROM user";
        if ($email != "") {
            //on cherche l'article avec le paramètre nomArticle
            $sql .= " WHERE email LIKE '%$email%'";
        }
        $result = mysqli_query($db_handle, $sql);
        //regarder s'il y a de résultat

        if (mysqli_num_rows($result) != 0) {
            //l'article est déjà dans la BDD
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Le vendeur existe déjà!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
} else {
            $sql = "INSERT INTO `user` (`user_id`, `email`, `mot_de_passe`, `nom`, `pseudo`, `statut`, `note`, `photo_de_profil`, `image_de_fond`) VALUES (NULL, '$email', '$password', '$nomVendeur', '$pseudo', '$statut', NULL, '$photoDeProfil', '$imageDeFond')";
            $result = mysqli_query($db_handle, $sql);
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Le vendeur a été ajouté!</strong>
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
    //afficher information sur la catégorie
    echo "<br>Catégorie:" . $email;
    //afficher information sur le mode de vente
    echo "<br>Mode de vente:" . $password;
    echo "<br>Nom Article:" . $nomVendeur;
    echo "<br>Description:" . $statut;
    echo "<br>Prix:" . $pseudo;
    ?>

<?php
}
?>

  <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12" class="text-center">
                <div id="formContent">
                    <form method="post" enctype="multipart/form-data" action="">
                        <input type="text" id="emailVendeur" name="emailVendeur" placeholder="Email du vendeur">
                        <input type="text" id="passwordVendeur" name="passwordVendeur" placeholder="Mot de passe du vendeur">
                        <input type="text" id="nomVendeur" name="nomVendeur" placeholder="Nom du vendeur">
                        <input type="text" id="pseudoVendeur" name="pseudoVendeur" placeholder="Pseudo du vendeur">

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="choixStatut" value="Vendeur" id="Vendeur">
                            <label class="form-check-label" for="Vendeur">
                                Vendeur
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="choixStatut" value="Admin" id="Admin">
                            <label class="form-check-label" for="Admin">
                                Admin
                            </label>
                        </div>
                        <label class="form-check-label" for="photoVendeur">
                                Photo du vendeur :
                            </label>
                        <input type="file" id="photoVendeur" name="photoVendeur">
                        <label class="form-check-label" for="fondVendeur">
                                Fond du vendeur :
                            </label>
                        <input type="file" id="fondVendeur" name="fondVendeur">

                        <input type="submit" name="ajouter" id="ajouter" value="Ajouter un vendeur">
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>

<?php require "../common/footer.php";
    // Footer commun inclut dans chaque page
    ?>

</body>

</html>