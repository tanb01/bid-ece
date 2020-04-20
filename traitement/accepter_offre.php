<?php

if (isset($_POST['accepterOffre']) && $_POST['accepterOffre'] == 'Accepter Offre' && isset($_POST['idOffre'])) {
    $offreId = isset($_POST["idOffre"]) ? $_POST["idOffre"] : "";
    if ($offreId=="") {
      header("location: ../compte-vendeur/");
      exit;
    }
    $sql = "SELECT negociation.prix_meilleure_offre as prix, negociation.acheteur_id, item.user_id, item.item_id, item.mode_de_vente FROM negociation INNER JOIN item ON item.item_id = negociation.item_id WHERE negociation_id=".$offreId;
    $result = mysqli_query($db_handle, $sql);
    $data = mysqli_fetch_assoc($result);
    $acheteurId = $data['acheteur_id'];
    $itemId = $data['item_id'];
    $prix = $data['prix'];
    $modeAchat = $data['mode_de_vente'];
    
    //Mettre a jour que le produit a ete vendu
    $sql = "UPDATE `negociation` SET `is_vendu` = '1' WHERE `negociation`.`item_id` =$itemId AND `negociation_id`=$offreId";
    $result = mysqli_query($db_handle, $sql);

    date_default_timezone_set('Europe/Paris');
    $datetimeDeVente = date('Y-m-d H:i:s');

    //Verifier info bancaire
    $sql = "SELECT info_bancaire_id FROM info_bancaire WHERE acheteur_id=$acheteurId";
    $result = mysqli_query($db_handle, $sql);
      $dataBanque = mysqli_fetch_assoc($result);
      $infoBancaireId = $dataBanque['info_bancaire_id'];

    if ($result) {
      ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Informations bancaires ont été renseigné!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php 
    } else {
      ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Informations bancaires n'ont pas été renseigné!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php
    }

    //Verifier coordoonees
    $sql = "SELECT coordonnees_id FROM coordonnees WHERE acheteur_id=$acheteurId";
    $result = mysqli_query($db_handle, $sql);
      $dataAdresse = mysqli_fetch_assoc($result);
      $coordonneesId = $dataAdresse['coordonnees_id'];
    if ($result) {

      ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Coordonnées ont été renseigné!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php 
    } else {
      ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Coordonnées n'ont pas été renseigné!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php
}



    //Ajout de jour de livraison pour vente
    $date = date_create($datetimeDeVente);
    date_add($date, date_interval_create_from_date_string('3 days'));
    $dateLivraison = date_format($date, 'd-m-Y');
    $heureLivraison = date_format($date, 'H:i');
    $date = date_format($date, 'Y-m-d H:i:s');
    
    $sql = "INSERT INTO `livraison` (`livraison_id`, `date_de_livraison`, `coordonnees_id`) VALUES (NULL, '$date', '$coordonneesId')";
    $resultLivraison = mysqli_query($db_handle, $sql);

    $sql = "SELECT livraison_id FROM livraison WHERE coordonnees_id = $coordonneesId";
    $result = mysqli_query($db_handle, $sql);
    $dataLivraison = mysqli_fetch_assoc($result);
    $livraisonId = $dataLivraison['livraison_id'];

    //Ajout de vente dans BDD
    $sql = "INSERT INTO `vente` (`vente_id`, `acheteur_id`, `user_id`, `item_id`, `mode_achat`, `datetime_de_vente`, `info_bancaire_id`, `livraison_id`) VALUES (NULL, '$acheteurId', ".$_SESSION['id'] . ", '$itemId', '$modeAchat', '$datetimeDeVente', '$infoBancaireId', '$livraisonId');";
    $result = mysqli_query($db_handle, $sql);

    if ($result) {
    ?>

      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Article <?php echo $itemId ?> a été vendu!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
<?php
}
//
if ($resultLivraison) {
  ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Livraison aura lieu le <?php echo $dateLivraison; echo " a " .$heureLivraison; ?>!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
} else {
  ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Erreur coordonnées!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  <?php
}
}
?>