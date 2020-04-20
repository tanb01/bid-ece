<?php
            
            // Récuperer les données venant de la page HTML
            $nom = isset($_POST["nom"])? $_POST["nom"] : ""; 
            $prenom = isset($_POST["prenom"])? $_POST["prenom"] : ""; 
            $carte = isset($_POST["carte"])? $_POST["carte"] : ""; 
            $numerodecarte = isset($_POST["numerodecarte"])? $_POST["numerodecarte"] : ""; 
            $expireMM = isset($_POST["expireMM"])? $_POST["expireMM"] : "";
            $expireYY = isset($_POST["expireYY"])? $_POST["expireYY"] : "";
            $crypto = isset($_POST["crypto"])? $_POST["crypto"] : ""; 
            
            
            //Identifier votre BDD
            $database = "bid_ece";
            //connectez-vous dans votre BDD
            //Rappel: votre serveur = localhost | votre login = root |votre password = root
            $db_handle = mysqli_connect('localhost', 'root', '');
            $db_found = mysqli_select_db($db_handle, $database);
            
            if (isset($_POST['button1'])) { 
                    if ($db_found) {
                        $sql = "SELECT * FROM info_bancaire";
                        $result = mysqli_query($db_handle, $sql);
                        if(mysqli_num_rows($result)!=0){
                            echo" Vous est deja enregistré dans notre systeme";
                        }else {     
                       
                            $sql = "INSERT INTO info_bancaire(info_bancaire_id,acheteur_id,numero_de_carte, type_de_carte, ville, code_postal, pays, numero_de_telephone) VALUES(NULL,'1', '$nom', '$prenom', '$adresse1', NULL, '$ville', '$zipcode', '$pays', '$phone')";
                            $result = mysqli_query($db_handle, $sql);
                            echo "Merci nous faire confiance";
                    
                        }
                    } 
                        
               
            }
            
            //fermer la connexion
            mysqli_close($db_handle);
            ?>