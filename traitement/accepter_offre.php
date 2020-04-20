<?php

if (isset($_POST['accepterOffre']) && $_POST['accepterOffre'] == 'Accepter Offre' && isset($_POST['idOffre'])) {
    $offreId = isset($_POST["idOffre"]) ? $_POST["idOffre"] : "";
    if ($offreId=="") {
      header("location: ../compte-vendeur/");
      exit;
    }
    $sql = "SELECT negociation.prix_meilleure_offre as prix, negociation.acheteur_id, item.user_id, item.item_id FROM negociation INNER JOIN item ON item.item_id = negociation.item_id WHERE negociation_id=".$offreId;
    $result = mysqli_query($db_handle, $sql);
    $data = mysqli_fetch_assoc($result);
    echo $acheteurId = $data['acheteur_id'];
    echo $itemId = $data['item_id'];
    echo $prix = $data['prix'];
    $sql = "UPDATE `negociation` SET `is_vendu` = '1' WHERE `negociation`.`item_id` =$itemId AND `negociation_id`=$offreId";
    $result = mysqli_query($db_handle, $sql);

    // $sql = "INSERT INTO `vente` (`vente_id`, `acheteur_id`, `user_id`, `item_id`, `mode_achat`, `datetime_de_vente`, `info_bancaire_id`, `livraison_id`) VALUES (NULL, '2', '', '', '', '', '2', '1');";
    // $result = mysqli_query($db_handle, $sql);

    while ($data = mysqli_fetch_assoc($result)) {
      

    ?>

      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Article <?php echo $itemId ?> a été vendu!</strong>
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