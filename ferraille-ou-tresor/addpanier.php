<?php
require '_header.php';
$json = array('error' =>true);
if(isset($_GET["item_id"])){
    $product=$DB->query("SELECT item_id FROM item WHERE item_id=:id", array ("id" => $_GET["item_id"]));
    if(empty($product)){
        $json['message']="Ce produit n'exite pas";
    }
    //on va ajouter le produit au panier par l'id du produit
    $panier->add($product[0]->item_id);
    $json['error'] = false;
    $json ['total'] = $panier->total();    
    $json['message']='le produit a bien été ajouté à votre panier';
}else{
    $json['message']="vous navez pas selectionne de produits a ajouter au panier";
}
echo json_encode($json);

?>