<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_MOT_DE_PASSE', '');
   define('DB_BASE_DE_DONNEES', 'bid_ece');
   $db_handle = mysqli_connect(DB_SERVER, DB_USERNAME, DB_MOT_DE_PASSE, DB_BASE_DE_DONNEES);

   if($db_handle === false){
    die("ERREUR: Échec connexion a la base de données." . mysqli_connect_error());
}
?>