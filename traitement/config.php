<?php
// Connexion à la base de données
// Mot de passe : root pour mac
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_MOT_DE_PASSE', '');
define('DB_BASE_DE_DONNEES', 'bid_ece');
$db_handle = mysqli_connect(DB_SERVER, DB_USERNAME, DB_MOT_DE_PASSE, DB_BASE_DE_DONNEES);
mysqli_set_charset($db_handle, "utf8");
if ($db_handle === false) {
    die("ERREUR: Échec connexion a la base de données." . mysqli_connect_error());
}
