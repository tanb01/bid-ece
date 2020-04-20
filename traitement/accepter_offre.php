<?php
// Acceptation de l'offre
if (isset($_POST['accepterOffre']) && $_POST['accepterOffre'] == 'Accepter Offre' && isset($_POST['idOffre'])) {
    $offreId = isset($_POST["idOffre"]) ? $_POST["idOffre"] : "";
    $sql = "UPDATE `negociation` SET `is_vendu` = '1' WHERE `negociation`.`item_id` = 3";

    UPDATE `negociation` SET `is_vendu` = '1' WHERE `negociation`.`negociation_id` = 1

    SELECT item.item_id, item.user_id, negociation_id FROM negociation INNER JOIN item ON item.item_id = negociation.item_id
    $result = mysqli_query($db_handle, $sql);
    if (mysqli_num_rows($result) == 1) {
        $sql = "DELETE FROM `user` WHERE `user`.`user_id` =" . $userId;
        $result = mysqli_query($db_handle, $sql);
        ?>


<!-- vente -->
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