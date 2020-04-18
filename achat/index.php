<?php 
session_start();
?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/style.css">

    <title>BID ECE | Achat</title>
  </head>
  <body>
    <div class="container mt-4">
    <h1>Achat</h1>
    <div class="row mb-5">

    <?php

$database = "bid_ece";
$db_handle = mysqli_connect('localhost', 'root', '');
mysqli_set_charset($db_handle, 'utf8');
$db_found = mysqli_select_db($db_handle, $database);

$sql = "SELECT * FROM item";

$result = mysqli_query($db_handle, $sql);
if (mysqli_num_rows($result) == 0) {
    echo "Produit non trouve";
} else {
    while ($data = mysqli_fetch_assoc($result)) {?>
      <div class="col-4">
        <a href="../article/index.php?item_id=<?php echo $data['item_id'] ?>" class="card float-card mb-4">
        <img class="card-img-top" src="data:image/jpeg;base64, <?php echo base64_encode($data['photo']) ?>"/>
        <div class="card-body">
            <h4 class="card-title"><?php echo $data['nom'] ?></h4>
            <p class="card-text">Categorie : <?php echo $data['categorie'] ?></p>
            <p class="card-text">Mode de Vente : <?php 
            switch ($data['mode_de_vente']) {
              case '1':
                echo "Enchère";
                break;
              case '2':
                echo "Meilleure Offre";
                break;
              case '3':
                echo "Achat Immédiat";
                break;
              case '4':
                echo "Enchère/ Achat Immédiat";
                break;
              case '5':
                echo "Meilleure Offre/ Achat Immédiat";
                break;
              default:
                  echo "Erreur";
                break;
            }
            ?>
            </p>
            <p class="card-text">Prix achat immediat : <?php echo $data['prix'] ?>€</p>
            <p class="card-text">Stock : <?php echo $data['stock'] ?></p>
          </div>
        </a>
      </div>
      <?php
}
}
?>

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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>