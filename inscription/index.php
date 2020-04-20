<?php
require_once "../traitement/config.php";

$nom = $prenom = $email = $password = $confirmPassword = "";
$nomErr = $prenomErr = $emailErr = $passwordErr = $confirmPasswordErr = "";
// Récupérér les données venant de la page HTML
$nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$password = isset($_POST["mot_de_passe"]) ? $_POST["mot_de_passe"] : "";
$confirmPassword = isset($_POST["conf_mot_de_passe"]) ? $_POST["mot_de_passe"] : "";
// Remplissage du formulaire et blindage
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
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Déjà inscrit, connectez vous grâce à votre compte.</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <?php
                } else {
                    $sql = "INSERT INTO acheteur (acheteur_id, email, mot_de_passe, nom, prenom, contrat_legal, carte_de_fidelite) VALUES(NULL,'$email', '$password', '$nom', '$prenom','0','0')";
                    $result = mysqli_query($db_handle, $sql);
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Inscription réussi!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <?php
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
<?php
require "../common/header.php";
    // Header commun inclut dans chaque page
?>
<?php
    // Différenciation du statut de la personne connectée et donc de sa session et de ses pages respectives
if (isset($_SESSION['statut']) && $_SESSION['statut'] == "Admin") {
    header("location: ../compte-admin/");
    exit;
} else if (isset($_SESSION['statut']) && $_SESSION['statut'] == "Vendeur") {
    header("location: ../compte-vendeur/");
    exit;
} else if (isset($_SESSION['statut']) && $_SESSION['statut'] == "Acheteur") {
    header("location: ../compte-acheteur/");
    exit;
}
?>
  <div class="container-fluid">

    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icone -->
        <div class="fadeIn first">
          <img src="../img/logo_bid_ece.jpg" id="icon" alt="BID ECE" style="width:150px"/>
        </div>

        <!-- Formulaire d'inscription -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" id="nom" class="fadeIn second" name="nom" placeholder="Nom">
            <input type="text" id="prenom" class="fadeIn second" name="prenom" placeholder="Prénom">
            <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email">
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

  <?php
require "../common/footer.php";
    // Footer commun inclut dans chaque page
?>

</body>

</html>
