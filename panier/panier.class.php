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
        
        if(isset($_POST['panier']['quantity'])){
            $this->calcul();
        }

    }
    //fontion qui permet calculer le total du panier
    public function calcul(){
        foreach($_SESSION['panier'] as $product_item_id => $quantity ){
            if(isset($_POST['panier']['quantity'][$product_item_id])){
             $_SESSION['panier'][$product_item_id]= $_POST['panier']['quantity'][$product_item_id];
            }
        }       
        
    }
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
    //fontion permettant d'ajouter du produit dans le panier
    public function ajouterpanier($product_item_id){
        //on va ajouter le produit au panier par l'id du produit
        if (isset($_SESSION['panier'][$product_item_id])){
            $_SESSION["panier"][$product_item_id]++;
        }else{
        $_SESSION["panier"][$product_item_id]=1;
        }
    }

    //fontion qui permet le peiement imédiat d'un seul produit (dans la page paiement)

    //funtion elimination produit du panier
    public function del($product_item_id){
        unset($_SESSION["panier"][$product_item_id]);
    }    
}