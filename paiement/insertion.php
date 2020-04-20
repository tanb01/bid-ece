<?php
$objetPdo = new PDO(mysql:host=localhost; dbname="bid_ece",'root','');

$pdoStat = $objectPdo ->prepare('INSERT INTO coordonnees VALUES(NULL,:nom,:prenome, :adresse1, :adresse2, :pays, :ville, :telehpne)');

$pdoStar_>bindValue(':nom', $_POST['nom'], PDO::PARAN_STR);
$pdoStar_>bindValue(':prenom', $_POST['prenome'], PDO::PARAN_STR);
$pdoStar_>bindValue(':adresse_ligne_1', $_POST['adresse1'], PDO::PARAN_STR);
$pdoStar_>bindValue(':adresse_ligne_2', $_POST['adresse2'], PDO::PARAN_STR);
$pdoStar_>bindValue(':ville', $_POST['ciudad'], PDO::PARAN_STR);
$pdoStar_>bindValue(':code_postal', $_POST['codepostale'], PDO::PARAN_STR);
$pdoStar_>bindValue(':pays', $_POST['pays'], PDOO::PARAN_STR);
$pdoStar_>bindValue(':numero_de_telephone', $_POST['tel'], PDO::PARAN_STR);

//execution de la requete preparee
$insertIsok = $pdoStat->execute();

if($insertIsok){
    $message = ' le contact a été ajouté dans la bdd'
}
else{
    $message = ' Echec de l\insertion';
    
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>BID ECE | Paiement</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Little Closet template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    type="text/css">
  <link rel="stylesheet" type="text/css" href="../style/paiement.css">
  <script type="text/javascript" src="./paiement.js"> </script>
</head>

<body>
    <h1>Insertion des contacts</h1>
</body>