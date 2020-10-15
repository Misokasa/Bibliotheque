<?php
include "../security/secure.php";
include "../includes/database.php";
include "../includes/functions.php";



 // Vérifier si le formulaire est soumis
//var_dump($_POST);
         if(@$_POST['nom']!="" && @$_POST['adresse']!="" && @$_POST['telephone']!="" ){


     // récupérer les données du formulaire en utilisant la valeur des attributs name comme clé
     $nom=$_POST['nom'];
     $adresse=$_POST['adresse'];
     $telephone=$_POST['telephone'];

            try{

// INSERTION DANS LA TABLE EDITEUR
                $sql = "INSERT INTO editeur (nom,adresse,telephone)
                        VALUES(:nom,:adresse,:telephone)";

                      $sth = $conn->prepare($sql);

                $params=array(

                                    ':nom' => "$nom",
                                    ':adresse' => "$adresse",
                                    ':telephone' => "$telephone",
               );

                $sth->execute($params);

                $id_editeur=$conn->lastInsertId();


				  //header('Location:livrelist.php');
                echo 'Entree ajoutee dans la table';

             }
             /*
                echo 'Entrée ajoutée dans la table';
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/

            catch(PDOException $e){

                   // $conn->rollBack();
              echo "Erreur : " . $e->getMessage();
            }
    }
?>
