<?php
class panier{
    private $DB;

    public function __construct($DB){
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION["panier"])){
            //creation d'un panier vide
            $_SESSION["panier"]= array();
        }
        //inilitiation
        $this->DB= $DB;
    }
    //fontion qui permet calculer le total du panier

    public function total(){
        //par cour du tableau avec differents produits
        $total=0;
        $item_ids= array_keys($_SESSION['panier']);
        //requete pour recouperer tout les id des produits
        if(empty($item_ids)){
            $item = array();
        }else{
            $item = $this->DB->query('SELECT item_id, prix  FROM item WHERE item_id IN ('.implode(',',$item_ids).')');
        }
        foreach($item as $product){
            //recuperation du prix total
            $total += $product->prix;
        }
        return $total;
    }
    //fontion permettant j'ajout du produit dans le panier
    public function add($product_item_id){
        //on va ajouter le produit au panier par l'id du produit
        if (isset($_SESSION['panier'][$product_item_id])){
            $_SESSION["panier"][$product_item_id]++;
        }else{
        $_SESSION["panier"][$product_item_id]=1;
        }
    }

    //funtion elimination produit du panier
    public function del($product_item_id){
        unset($_SESSION["panier"][$product_item_id]);
    }    
}