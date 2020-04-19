<?php
require 'db.class.php';
require 'panier.class.php';
$DB = new DB();/**connecteru a la bases de donnes */
$panier =new panier($DB);
?>