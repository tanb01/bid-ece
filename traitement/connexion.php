<?php

session_start();

if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
    header("location: ../");
    exit;
}

include "../traitement/config.php";

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

    if (empty($emailErr) && empty($passwordErr)) {
        $fin_de_email = substr($email, strpos($email, "@") + 1);
        if ($fin_de_email == "edu.ece.fr") {
            $sql = "SELECT user_id, pseudo, statut FROM user WHERE email = '$email' and mot_de_passe = '$password'";
        } else {
            $sql = "SELECT acheteur_id, prenom FROM acheteur WHERE email = '$email' and mot_de_passe = '$password'";
        }

        $result = mysqli_query($db_handle, $sql);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            session_start();
            while ($data = mysqli_fetch_assoc($result)) {
                $_SESSION["logged_in"] = true;
                if (!isset($_SESSION['statut'])) {
                    $_SESSION["id"] = $data['acheteur_id'];
                    $_SESSION["statut"] = "Acheteur";
                    $_SESSION['prenom'] = $data['prenom'];
                } else if ($data['statut'] === "Admin" || $data["statut"] === "Vendeur") {
                    $_SESSION["id"] = $data['user_id'];
                    $_SESSION["statut"] = $data['statut'];
                    $_SESSION['prenom'] = $data['pseudo'];
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
}

?>