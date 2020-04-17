<?php
if (isset($_GET["item_id"])) {
  $item_id = $_GET["item_id"];
} else {
  $item_id = "Le produit n'a pas ete trouve";
}

$database = "bid_ece";
$db_handle = mysqli_connect('localhost', 'root', '');
mysqli_set_charset($db_handle, 'utf8');
$db_found = mysqli_select_db($db_handle, $database);

$sql = "SELECT * FROM item WHERE item_id = $item_id";

$result = mysqli_query($db_handle, $sql);
if (mysqli_num_rows($result) == 0) {
  echo "Produit non trouve";
} else {
  $data = mysqli_fetch_assoc($result) ?>


  <!doctype html>
  <html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/style.css">

    <title>BID ECE | Article</title>
  </head>

  <body>
    <div class="container-fluid">
      <div class="container mt-4">
        <h1>Article</h1>
        <div class="row mb-5">
          <div class="col-sm">
            <a href="#">
              <img src="data:image/jpeg;base64, <?php echo base64_encode($data['photo']) ?>" class="card-img-top rounded" />
            </a>
          </div>
          <div class="col-sm">
            <h1 class="text-center"><?php echo $data['nom'] ?></h1>
            <h4>Catégorie : <?php echo $data['categorie'] ?></h4>
            <h4>Mode de Vente : <?php echo $data['mode_de_vente'] ?></h4>
            <h4>Stock : <?php echo $data['stock'] ?></h4>
          </div>
          <div class="col-sm mt-5">
            <div class="card align-items-center text-center">
              <div class="card-body">
                <div class="row">
                  <?php 
                  if ($data['mode_de_vente'] == "1" || $data['mode_de_vente'] == "4") {?>
                    <div class="col-sm">
                      <h5>Prix Enchère : <?php echo $data['prix'] ?>€</h5>
                      <h5>Temps restant</h5>
                      <h4><?php echo "Temps" ?></h4>              
                        <a href="../panier" type="button" class="btn btn-outline-primary btn-sm">Enchérir</a>
                    </div>
                  <?php
                  } else if ($data['mode_de_vente'] == "2" || $data['mode_de_vente'] == "5") {?>
                    <div class="col-sm">
                      <h5>Prix Meilleure Offre : <?php echo $data['prix'] ?>€</h5>
                      <a href="../panier" type="button" class="btn btn-outline-primary btn-sm">Négocier</a>
                    </div>
                  <?php
                  }
                  if ($data['mode_de_vente']== "3" || $data['mode_de_vente']== "4" || $data['mode_de_vente']== "5") {?>
                    <div class="col-sm">
                      <h5>Prix Achat Immédiat : <?php echo $data['prix'] ?>€</h5>
                    <?php 
                      if ($data['mode_de_vente']== "3" || $data['mode_de_vente']== "4" || $data['mode_de_vente']== "5") {?>
                        <a href="../panier" type="button" class="btn btn-outline-success btn-sm">Achetez-le maintenant</a>
                      <?php 
                      }
                    ?>
                    </div>
                  <?php
                  }
                  ?>
                </div>              
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm">
            <div class="description-card">
              <div class="card-body">
                <h1 class="card-title">Description</h1>
                <p><?php echo $data['description'] ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
  </body>

  </html>

<?php

}
?>