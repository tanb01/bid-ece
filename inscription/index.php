<?php
require_once "../traitement/config.php";

$nom = $prenom = $email = $password = $confirmPassword = "";
$nomErr = $prenomErr = $emailErr = $passwordErr = $confirmPasswordErr = "";
// Récuperer les données venant de la page HTML
$nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$password = isset($_POST["mot_de_passe"]) ? $_POST["mot_de_passe"] : "";
$confirmPassword = isset($_POST["conf_mot_de_passe"]) ? $_POST["mot_de_passe"] : "";

if (isset($_POST["inscrire"])) {
    if ($nom && $prenom && $email && $password) {
        if (strlen($password) >= 8) {
            if ($password == $confirmPassword) {
                $sql = "SELECT * FROM acheteur";
                if ($nom != "") {
                    //on cherche l'acheteur avec les paramètres nom et prenom
                    $sql .= " WHERE nom LIKE '%$nom%'";
                    if ($prenom != "") {
                        $sql .= " AND prenom LIKE '%$prenom%'";
                    }
                }
                $result = mysqli_query($db_handle, $sql);
                //regarder s'il y a de résultat

                if (mysqli_num_rows($result) != 0) {
                    //l'acheteur est déjà dans la BDD
                    echo "Déjà inscrit, connectez vous grâce à votre compte.";
                } else {
                    $sql = "INSERT INTO acheteur (acheteur_id, email, mot_de_passe, nom, prenom, contrat_legal, carte_de_fidelite) VALUES(NULL,'$email', '$password', '$nom', '$prenom','0','0')";
                    $result = mysqli_query($db_handle, $sql);
                    echo "Inscription réussie" . "<br>";
                }

            } else {
                echo "<h4>Les mots de passe ne correspondent pas !</h4>";
            }

        } else {
            echo "<h4>Le mot de passe est trop court !</h4>";
        }

    } else {
        echo "<h4>Veuillez remplir tout les champs</h4>";
    }
}

//fermer la connexion
mysqli_close($db_handle);
?>

<!DOCTYPE html>
<body>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <link href="../style/connexion_inscription.css" rel="stylesheet" media="all" type="text/css">
  <link href="../style/style.css" rel="stylesheet" media="all" type="text/css">

  <title>BID ECE | Inscription</title>
</head>

<body>
  <!--Navbar-->
  <div class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand h1 text-primary" href="../"><img src="../img/logo_bid_ece.jpg" width="100px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="../">Accueil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="../achat" id="navbarDropdownMenuLink" role="button" aria-haspopup="true"
            aria-expanded="false">
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

  <div class="container-fluid">

    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icone -->
        <div class="fadeIn first">
          <img src="../img/logo_bid_ece.jpg" id="icon" alt="BID ECE" />
        </div>

        <!-- Formulaire d'inscription -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" id="nom" class="fadeIn second" name="nom" placeholder="Nom">
            <input type="text" id="prenom" class="fadeIn second" name="prenom" placeholder="Prénom">
            <input type="email" id="email" class="fadeIn second" name="email" placeholder="Email">
            <input type="password" id="mot_de_passe" class="fadeIn third" name="mot_de_passe" placeholder="Mot de passe">
            <label for="mot_de_passe"><small>Le mot de passe doit contenir au moins 8 caractères.</small></label>
            <input type="password" id="conf_mot_de_passe" class="fadeIn third" name="conf_mot_de_passe" placeholder="Confirmation du mot de passe">
            <label for="conf_mot_de_passe"><small>Les mots de passe doivent être identiques</small></label>
            <input type="submit" name="inscrire" class="fadeIn fourth" value="S'inscrire">
        </form>
        <!-- Connexion si déjà un compte -->
        <div id="formFooter">
          <a class="underlineHover" href="connexion_ex.html">Déjà client ? Connectez-vous ici !</a>
        </div>
      </div>
    </div>
  </div>

  <!--Footer-->
  <footer>
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
  </footer>
  <!--/.Footer-->

</body>

</html>
