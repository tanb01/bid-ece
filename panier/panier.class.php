<?php
class panier{
    private $DB;

    public function __construct($DB){
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION["panier"])){
            //création d'un panier vide
            $_SESSION["panier"]= array();
        }
        //initialisation
        $this->DB= $DB;
        
        if(isset($_POST['panier']['quantity'])){
            $this->calcul();
        }

    }
<<<<<<< HEAD
    //fonction qui permet de calculer le total du panier

=======
    //fontion qui permet calculer le total du panier
    public function calcul(){
        foreach($_SESSION['panier'] as $product_item_id => $quantity ){
            if(isset($_POST['panier']['quantity'][$product_item_id])){
             $_SESSION['panier'][$product_item_id]= $_POST['panier']['quantity'][$product_item_id];
            }
        }       
        
    }
>>>>>>> 9585f5db7ccd7a7f1530ef147ddb77bf3d1b8063
    public function total(){
        //parcours du tableau avec différents produits
        $total=0;
        $item_ids= array_keys($_SESSION['panier']);
        //requète pour récupérer tout les id des produits
        if(empty($item_ids)){
            $item = array();
        }else{
            $item = $this->DB->query('SELECT item_id, prix  FROM item WHERE item_id IN ('.implode(',',$item_ids).')');
        }
        foreach($item as $product){
            //récuperation du prix total
            $total += $product->prix;
        }
        return $total;
    }
    //fonction permettant d'ajouter du produit dans le panier
    public function ajouterpanier($product_item_id){
        //on va ajouter le produit au panier par l'id du produit
        if (isset($_SESSION['panier'][$product_item_id])){
            $_SESSION["panier"][$product_item_id]++;
        }else{
        $_SESSION["panier"][$product_item_id]=1;
        }
    }

    //fonction qui permet le paiement immédiat d'un seul produit (dans la page paiement)

    //fonction élimination du produit du panier
    public function del($product_item_id){
        unset($_SESSION["panier"][$product_item_id]);
    }    
}