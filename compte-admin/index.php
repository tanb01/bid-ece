<?php

if ($_SESSION['statut'] == "Admin") {?>

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

  <div class="container emp-profile">
    <form method="post">
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
                  <label>Article(s) en vente :</label>
                </div>
                <div class="col-md-6">
                  <p>Nombre d'article(s)</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Article 1</label>
                </div>
                <div class="col-md-6">
                  <p>Supprimer</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Article 2</label>
                </div>
                <div class="col-md-6">
                  <p>Supprimer</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <a href="../add-article/" type="button" class="btn btn-primary" name="ajouterArticle"><label>+ Ajouter un article</label></a>
                </div>
                <div class="col-md-6">
                  <a href="../add-article/" type="button" class="btn btn-danger" name="supprimerArticle"><label>- Supprimer un article</label></a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="vendeurs" role="tabpanel" aria-labelledby="vendeurs-tab">
              <div class="row">
                <div class="col-md-6">
                  <label>Vendeur(s) actif(s) :</label>
                </div>
                <div class="col-md-6">
                  <p>Nombre de vendeurs</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Vendeur 1</label>
                </div>
                <div class="col-md-6">
                  <p>Supprimer</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Vendeur 2</label>
                </div>
                <div class="col-md-6">
                  <p>Supprimer</p>
                </div>
              </div>
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
    </form>
  </div>

<?php require "../common/footer.php";?>
</body>

</html>
<?php
} else {
    header("location: ../");
}
?>