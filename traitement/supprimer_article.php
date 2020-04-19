<?php

if (isset($_POST['supprimerArticle']) && $_POST['supprimerArticle'] == '- Supprimer un article' && isset($_POST['idArticle'])) {
    $itemId = isset($_POST["idArticle"]) ? $_POST["idArticle"] : "";
    $sql = "SELECT item_id FROM `item` WHERE item_id =" . $itemId;
    $result = mysqli_query($db_handle, $sql);
    if (mysqli_num_rows($result) == 1) {
        $sql = "DELETE FROM `item` WHERE `item`.`item_id` =" . $itemId;
        $result = mysqli_query($db_handle, $sql);
        ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>L'article <?php echo $itemId ?> a été supprimé!</strong>
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