<?php
session_start();
$_SESSION['logged_in'] = '';
$_SESSION = array();
session_destroy();
header("location: ../connexion/");
exit;
?>