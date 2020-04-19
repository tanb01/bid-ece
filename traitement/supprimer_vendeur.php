<?php

if (isset($_POST['supprimerVendeur']) && $_POST['supprimerVendeur'] == '- Supprimer un vendeur' && isset($_POST['idVendeur'])) {
    $userId = isset($_POST["idVendeur"]) ? $_POST["idVendeur"] : "";
    $sql = "SELECT user_id FROM `user` WHERE user_id =" . $userId;
    $result = mysqli_query($db_handle, $sql);
    if (mysqli_num_rows($result) == 1) {
        $sql = "DELETE FROM `user` WHERE `user`.`user_id` =" . $userId;
        $result = mysqli_query($db_handle, $sql);
        ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Le vendeur/ La vendeuse <?php echo $userId ?> a été supprimé(e)!</strong>
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