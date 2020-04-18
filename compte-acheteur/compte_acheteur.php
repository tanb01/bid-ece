<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link href="../style/comptes.css" rel="stylesheet" media="all" type="text/css">
</head>

<body>
    <?php 
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=bid_ece;charset=utf8', 'root', 'root');
    // On récupère tout le contenu de la table jeux_video
    $reponse = $bdd->query('SELECT * FROM acheteur');

    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    {

    ?>
    <div class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <a class="navbar-brand h1 text-primary" href="../"><img src="../img/logo_bid_ece.jpg" width="100px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ac">
                    <a class="nav-link" href="../">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="../achat" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Achat
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item nav-link" href="../categories/index.html">
                            Categorie
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item nav-link" href="../modes-de-vente/index.html">Mode de Vente</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Vente
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item nav-link" href="../compte-vendeur/index.html">Compte</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item nav-link" href="../compte-admin/index.html">Admin</a>
                    </div>
                </li>
                <li class="nav-item ac">
                    <a class="nav-link" href="../compte-acheteur/index.html">Votre Compte</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="../img/logo_bid_ece.jpg" alt="Take a pic" />
                        <div class="file btn btn-lg btn-primary">
                            Modifier la photo
                            <input type="file" name="file" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            Bonjour <?php echo $donnees['email']; ?>
                        </h5>
                        <h6>
                            Client numéro 1
                        </h6>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="informations-tab" data-toggle="tab" href="#informations" role="tab" aria-controls="informations" aria-selected="true">Informations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="livraison-tab" data-toggle="tab" href="#livraison" role="tab" aria-controls="livraison" aria-selected="false">Livraison</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="paiement-tab" data-toggle="tab" href="#paiement" role="tab" aria-controls="paiement" aria-selected="false">Paiement</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="formulaire-tab" data-toggle="tab" href="#formulaire" role="tab" aria-controls="formulaire" aria-selected="false">Formulaire</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Modifier Profil" />
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
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="informations" role="tabpanel" aria-labelledby="informations-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nom</label>
                                </div>
                                <div class="col-md-6">
                                    <p>"nom du client"</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Prénom</label>
                                </div>
                                <div class="col-md-6">
                                    <p>"prénom du client"</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>emailclient@mail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="livraison" role="tabpanel" aria-labelledby="livraison-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Informations de livraison</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Adresse ligne 1</label>
                                </div>
                                <div class="col-md-6">
                                    <p>...</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Adresse ligne 2</label>
                                </div>
                                <div class="col-md-6">
                                    <p>...</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Ville</label>
                                </div>
                                <div class="col-md-6">
                                    <p>...</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Code Postal</label>
                                </div>
                                <div class="col-md-6">
                                    <p>...</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Pays</label>
                                </div>
                                <div class="col-md-6">
                                    <p>...</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="paiement" role="tabpanel" aria-labelledby="paiement-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Information de paiement</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nom sur la carte</label>
                                </div>
                                <div class="col-md-6">
                                    <p>...</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Type de carte</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Visa / Mastercard / ...</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Numéro de carte</label>
                                </div>
                                <div class="col-md-6">
                                    <p>...</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Date d'expiration</label>
                                </div>
                                <div class="col-md-6">
                                    <p>...</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Cryptogramme</label>
                                </div>
                                <div class="col-md-6">
                                    <p>...</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="formulaire" role="tabpanel" aria-labelledby="formulaire-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label></label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="accepte">
                                        <label class="form-check-label" for="accepte">
                                            J'accepte
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    BID ECE™ ©opyright 2020 - QB/DO/BT
                </div>
            </div>
        </div>
    </footer>
    <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
</body>

</html>
