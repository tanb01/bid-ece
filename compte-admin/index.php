<?php
include "../traitement/config.php";

$sql = "SELECT COUNT(*) nombreDeVendeurs FROM user";
$result = mysqli_query($db_handle, $sql);
$data = mysqli_fetch_assoc($result);
$nombreDeVendeurs = $data['nombreDeVendeurs'];

if (isset($_POST['supprimerArticle']) && $_POST['supprimerArticle'] == '- Supprimer un article' && isset($_POST['idArticle'])) {
    $itemId = isset($_POST["idArticle"]) ? $_POST["idArticle"] : "";
    $sql = "SELECT item_id FROM `item` WHERE item_id =" . $itemId;
    $result = mysqli_query($db_handle, $sql);
    if (mysqli_num_rows($result) == 1) {
        $sql = "DELETE FROM `item` WHERE `item`.`item_id` =" . $itemId;
        $result = mysqli_query($db_handle, $sql);
        ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>L'article <?php echo $itemId ?> a été supprimer!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
<?php
?>
      </div>
<?php
}
}
?>
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
  <link href="../style/comptes.css" rel="stylesheet" media="all" type="text/css">
  <link href="../style/style.css" rel="stylesheet" media="all" type="text/css">

  <title>BID ECE | Compte Admin</title>
</head>

<body>
  <?php
require "../common/header.php";
?>
  <?php

if ($_SESSION['statut'] == "Admin") {?>
<?php
$sql = "SELECT COUNT(*) nombreArticles FROM item WHERE user_id=" . $_SESSION['id'];
    $result = mysqli_query($db_handle, $sql);
    $data = mysqli_fetch_assoc($result);
    $nombreArticles = $data['nombreArticles'];
    ?>

  <div class="container emp-profile">
      <div class="row">
        <div class="col-md-4">
          <div class="profile-img">
            <img src="data:image/jpeg;base64, <?php echo base64_encode($_SESSION['photo_de_profil']) ?>" alt="Take a pic" />
            <div class="file btn btn-lg btn-primary">
              Modifier la photo
              <input type="file" name="file" />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="profile-head">
            <h5>
              Admin
            </h5>
            <h6>
              Admin numéro <?php echo htmlspecialchars($_SESSION['id']) ?>
            </h6>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="informations-tab" data-toggle="tab" href="#informations" role="tab"
                  aria-controls="informations" aria-selected="true">Informations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="articles-tab" data-toggle="tab" href="#articles" role="tab"
                  aria-controls="articles" aria-selected="false">Articles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="vendeurs-tab" data-toggle="tab" href="#vendeurs" role="tab"
                  aria-controls="vendeurs" aria-selected="false">Vendeurs</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="profile-work">
            <p>Liens ?</p>
            <a href="">Lien 1</a><br />
            <a href="">Lien 2</a>
          </div>
        </div>
        <div class="col-md-8">
          <div class="tab-content informations-tab" id="myTabContent">
            <div class="tab-pane fade show active" id="informations" role="tabpanel" aria-labelledby="informations-tab">
              <div class="row">
                <div class="col-md-6">
                  <label>ID admin</label>
                </div>
                <div class="col-md-6">
                  <p><?php echo htmlspecialchars($_SESSION['id']); ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Nom</label>
                </div>
                <div class="col-md-6">
                  <p><?php echo htmlspecialchars($_SESSION['nom']); ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Email</label>
                </div>
                <div class="col-md-6">
                  <p><?php echo htmlspecialchars($_SESSION['email']); ?></p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="articles" role="tabpanel" aria-labelledby="articles-tab">
              <div class="row">
                <div class="col-md-6">
                  <label>Article(s) en vente</label>
                </div>
                <div class="col-md-6">
                  <p>Nombre d'article(s) : <?php echo "$nombreArticles" ?></p>
                </div>
              </div>
              <table class="table">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prix</th>
                  <th scope="col">Categorie</th>
                  <th scope="col">Mode de Vente</th>
                </tr>
              </thead>
              <tbody>
              <?php
$sql = "SELECT item_id, nom, prix, categorie, mode_de_vente FROM item WHERE user_id=" . $_SESSION['id'];
    $result = mysqli_query($db_handle, $sql);
    while ($data = mysqli_fetch_assoc($result)) {
        ?>
              <tr>
                <th scope="row"><?php echo $data['item_id'] ?></th>
                <td><?php echo $data['nom'] ?></td>
                <td><?php echo $data['prix'] ?> €</td>
                <td><?php echo $data['categorie'] ?></td>
                <td class="text-center"><?php echo $data['mode_de_vente'] ?></td>
              </tr>
              <?php
}
    ?>
              </tbody>
              </table>
                <div class="row">
                <form action="../add-article/" method="POST">
                    <div class="col-md-6">
                      <input type="submit" class="btn btn-primary" name="ajouterArticle" value="+ Ajouter un article">
                    </div>
                </form>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="col-md-6">
                      <input type="number" id="idArticle" name="idArticle" placeholder="Id de l'article">
                      <input type="submit" class="btn btn-danger" name="supprimerArticle" value="- Supprimer un article">
                    </div>
                </form>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="vendeurs" role="tabpanel" aria-labelledby="vendeurs-tab">
              <div class="row">
                <div class="col-md-6">
                  <label>Vendeur(s) actif(s)</label>
                </div>
                <div class="col-md-6">
                  <p>Nombre de vendeur(s): <?php echo "$nombreDeVendeurs" ?></p>
                </div>
              </div>
              <table class="table">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Statut</th>
                  <th scope="col">Email</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
              <?php
$sql = "SELECT user_id, nom, pseudo, statut, email, note FROM user WHERE user_id!=" . $_SESSION['id'];
    $result = mysqli_query($db_handle, $sql);
    while ($data = mysqli_fetch_assoc($result)) {
        ?>
              <tr>
                <th scope="row"><?php echo $data['user_id'] ?></th>
                <td><?php echo $data['nom'] ?></td>
                <td><?php echo $data['statut'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td>Supprimer</td>
              </tr>
              <?php
}
    ?>
              </tbody>
</table>
              <div class="row">
              <div class="col-md-6">
                  <a href="../add-article/" type="button" class="btn btn-primary" name="ajouterVendeur"><label>+ Ajouter un vendeur</label></a>
              </div>
              <div class="row">
              <div class="col-md-6">
                  <a href="../add-article/" type="button" class="btn btn-danger" name="supprimerVendeur"><label>- Supprimer un vendeur</label></a>
              </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

<?php require "../common/footer.php";?>
<?php
} else {
    header("location: ../");
}
?></body>

</html>
