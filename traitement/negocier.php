<?php
if (isset($_POST['faireOffre']) && $_POST['faireOffre'] == 'Faire une offre' && isset($_POST['idArticle']) && isset($_POST['prixMeilleureOffre'])) {
    $itemId = isset($_POST["idArticle"]) ? $_POST["idArticle"] : "";
    $prixOffre = isset($_POST["prixMeilleureOffre"]) ? $_POST["prixMeilleureOffre"] : "";
    
    $sql = "SELECT prix_meilleure_offre, MAX(numero_offre) as nombreOffre FROM negociation WHERE item_id =" .$itemId." AND acheteur_id = ".$_SESSION['id'];
    $result = mysqli_query($db_handle, $sql);
    $data = mysqli_fetch_assoc($result);
    $nombreOffre = $data['nombreOffre'];
    if ($prixOffre <= $data['prix_meilleure_offre'] ) {
      header("location: ../compte-acheteur/");
      exit;
    }
    if ($nombreOffre < 5) {
      $nombreOffre++;
      $sql = "INSERT INTO `negociation` (`negociation_id`, `item_id`, `acheteur_id`, `numero_offre`, `prix_meilleure_offre`, `is_vendu`) VALUES (NULL, '$itemId',".$_SESSION['id'].", '$nombreOffre', '$prixOffre', '0')";
      $result = mysqli_query($db_handle, $sql);
    ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>L'offre <?php echo $itemId ?> a été envoyé!</strong>
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