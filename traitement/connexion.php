<?php
// Début de la session
session_start();

if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
    header("location: ../");
    exit;
}

include "../traitement/config.php";
// Traitement de la connexion et blindage
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["email"]))) {
        $emailErr = "Il faut votre nom d'utilisateur.";
    } else {
        $email = trim($_POST["email"]);
    }

    if (empty(trim($_POST["mot_de_passe"]))) {
        $passwordErr = "Il faut votre mot de passe";
    } else {
        $password = trim($_POST["mot_de_passe"]);
    }
    // Vérification de l'email et particulièrement email vendeur soit de la forme @edu.ece.fr
    if (empty($emailErr) && empty($passwordErr)) {
        $fin_de_email = substr($email, strpos($email, "@") + 1);
        if ($fin_de_email == "edu.ece.fr") {
            $sql = "SELECT * FROM user WHERE email = '$email' and mot_de_passe = '$password'";
            $isUser = 1;
        } else {
            $sql = "SELECT * FROM acheteur WHERE email = '$email' and mot_de_passe = '$password'";
            $isUser = 2;
        }

        $result = mysqli_query($db_handle, $sql);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            session_start();
            while ($data = mysqli_fetch_assoc($result)) {
                $_SESSION["logged_in"] = true;
                $_SESSION["email"] = $email;
                if ($isUser == 2) {
                    $_SESSION["id"] = $data['acheteur_id'];
                    $_SESSION["statut"] = "Acheteur";
                    $_SESSION['prenom'] = $data['prenom'];
                    $_SESSION['nom'] = $data['nom'];
                    $_SESSION['contrat_legal'] = $data['contrat_legal'];
                    $_SESSION['carte_de_fidelite'] = $data['carte_de_fidelite'];
                    header("location: ../compte-admin/");
                    exit;
                } else if ($isUser = 1) {
                    $_SESSION["id"] = $data['user_id'];
                    $_SESSION["statut"] = $data['statut'];
                    $_SESSION['nom'] = $data['nom'];
                    $_SESSION['pseudo'] = $data['pseudo'];
                    $_SESSION['note'] = $data['note'];
                    $_SESSION['photo_de_profil'] = $data['photo_de_profil'];
                    $_SESSION['image_de_fond'] = $data['image_de_fond'];
                } else {
                    $_SESSION["id"] = 0;
                    $_SESSION["statut"] = "";
                    $_SESSION['prenom'] = "";
                }
                // echo "Id: " . $_SESSION["id"] . "<br>";
                // echo "Statut: " . $_SESSION["statut"] . "<br>";
                // echo "Prenom: " . $_SESSION["prenom"] . "<br>";
            }
        } else if ($count == 0) {
            $emailErr = "Votre compte n'a pas ete retrouve!";
            $_SESSION["statut"] = "";
            $_SESSION['prenom'] = "";
        } else {
            $error = "Votre nom d'utilisateur ou mot de passe est invalide";
        }
        mysqli_close($db_handle);
    }
    if (isset($_SESSION['statut']) && $_SESSION['statut'] == 'Admin') {
        header("location: ../compte-admin/");
        exit;
    } else if (isset($_SESSION['statut']) && $_SESSION['statut'] == 'Vendeur') {
        header("location: ../compte-vendeur/");
        exit;
    } else if (isset($_SESSION['statut']) && $_SESSION['statut'] == 'Acheteur') {
        header("location: ../compte-acheteur/");
        exit;
    }
}
