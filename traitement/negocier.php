<?php
if (isset($_POST['faireOffre']) && $_POST['faireOffre'] == 'Faire une offre' && isset($_POST['idArticle']) && isset($_POST['prixMeilleureOffre'])) {
    $itemId = isset($_POST["idArticle"]) ? $_POST["idArticle"] : "";
    $prixOffre = isset($_POST["prixMeilleureOffre"]) ? $_POST["prixMeilleureOffre"] : "";
//search count max
    $sql = "SELECT COUNT(*) nombreOffre FROM negociation WHERE item_id = $itemId AND acheteur_id=".$_SESSION['id'];
$result = mysqli_query($db_handle, $sql);
$data = mysqli_fetch_assoc($result);
$nombreOffre = $data['nombreOffre'];

    $prixOffre = isset($_POST["prixMeilleureOffre"]) ? $_POST["prixMeilleureOffre"] : "";

    //count numbre of offres

    $sql = "SELECT COUNT";

    $sql = "INSERT INTO `negociation` (`negociation_id`, `item_id`, `acheteur_id`, `numero_offre`, `prix_meilleure_offre`) VALUES (NULL, '$itemId',".$_SESSION['id'].", '', '$prixOffre')";
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