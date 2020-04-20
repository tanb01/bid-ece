<?php
            
            // Récuperer les données venant de la page HTML
            $nom = isset($_POST["nom"])? $_POST["nom"] : ""; 
            $prenom = isset($_POST["prenom"])? $_POST["prenom"] : ""; 
            $adresse = isset($_POST["adresse1"])? $_POST["adresse1"] : ""; 
            $adresse = isset($_POST["adresse2"])? $_POST["adresse2"] : ""; 
            $codepostale = isset($_POST["codepostale"])? $_POST["codepostale"] : "";
            $ville = isset($_POST["ville"])? $_POST["ville"] : "";
            $tel = isset($_POST["tel"])? $_POST["tel"] : ""; 
            
            
            //Identifier votre BDD
            $database = "bid_ece";
            //connectez-vous dans votre BDD
            //Rappel: votre serveur = localhost | votre login = root |votre password = root
            $db_handle = mysqli_connect('localhost', 'root', '');
            $db_found = mysqli_select_db($db_handle, $database);
            
            if (isset($_POST['button1'])) { 
                    if ($db_found) {
                        $sql = "SELECT * FROM coordonnees";
                        $result = mysqli_query($db_handle, $sql);
                        if(mysqli_num_rows($result)!=0){
                            echo" Vous est deja enregistré dans notre systeme";
                        }else {     
                       
                            $sql = "INSERT INTO coordonnees(nom, prenom, adresse_ligne_1, adresse_ligne_2, ville, code_postal, pays, numero_de_telephone) VALUES(NULL,'1', '$nom', '$prenom', '$adresse1', NULL, '$ville', '$zipcode', '$pays', '$phone')";
                            $result = mysqli_query($db_handle, $sql);
                            echo "Merci nous faire confiance";
                    
                        }
                    } 
                        
               
            }
            
            //fermer la connexion
            mysqli_close($db_handle);
            ?>