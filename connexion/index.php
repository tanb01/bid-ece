<!DOCTYPE html>
<html>

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

  <title>BID ECE | Connexion</title>
</head>

<body>
<?php
require "../common/header.php";
    // Header commun inclut dans chaque page
?>

  <div class="container-fluid">
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icone -->
        <div class="fadeIn first">
          <img src="../img/logo_bid_ece.jpg" id="icon" alt="BID ECE" />
        </div>

        <!-- Formulaire de connexion -->
            <form action="../traitement/connexion.php" method="post">
                <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email">
                <input type="password" id="mot_de_passe" class="fadeIn third" name="mot_de_passe" placeholder="Mot de passe">
                <input type="submit" name="connexion" class="fadeIn fourth" value="Connexion">
            </form>


        <!-- Inscription si pas de compte -->
        <div id="formFooter">
          <a class="underlineHover" href="inscription_ex.html">Pas encore client ? Inscrivez-vous ici !</a>
        </div>
        <!-- Mot de passe oublié -->
        <div id="formFooter">
          <a class="underlineHover" href="#">Mot de passe oublié ?</a>
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