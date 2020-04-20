<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="../style/categories_modes_de_vente.css" rel="stylesheet" media="all" type="text/css">
  <link href="../style/style.css" rel="stylesheet" media="all" type="text/css">

  <title>BID ECE | Catégories</title>
</head>

<body>
  <?php
require "../common/header.php";
    // Header commun inclut dans chaque page
?>
  <div class="container-fluid">
    <div class="wrapper">
      <h1><u>Catégories :</u></h1>
      <div class="cols">
        <div class="col" ontouchstart="this.classList.toggle('hover');">
          <div class="container">
            <div class="front" style="background-image: url(../img/img_categories/tresor.jpg)">
              <div class="inner">
                <p>Ferraille/Trésor</p>
                <span>Cliquez pour voir les articles</span>
              </div>
            </div>
            <div class="back">
              <div class="inner">
                <p>Retrouvez ici tous les articles appartenant à la catégories Ferraille/Trésor</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col" ontouchstart="this.classList.toggle('hover');">
          <div class="container">
            <div class="front" style="background-image: url(../img/img_categories/musee.png)">
              <div class="inner">
                <p>Bon pour le musée</p>
                <span>Cliquez pour voir les articles</span>
              </div>
            </div>
            <div class="back">
              <div class="inner">
                <p>Retrouvez ici tous les articles appartenant à la catégories Bon pour le musée</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col" ontouchstart="this.classList.toggle('hover');">
          <div class="container">
            <div class="front" style="background-image: url(../img/img_categories/vip.jpg)">
              <div class="inner">
                <p>Accessoires VIP</p>
                <span>Cliquez pour voir les articles</span>
              </div>
            </div>
            <div class="back">
              <div class="inner">
                <p>Retrouvez ici tous les articles appartenant à la catégories Accessoires VIP</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
require "../common/footer.php";
    // Footer commun inclut dans chaque page
?>

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