<?php
include "../security/secure.php";
include "../includes/database.php";
include "../includes/functions.php";


 // Vérifier si le formulaire est soumis
//var_dump($_POST);
         if(@$_POST['nom']!="" && @$_POST['prenom']!="" && @$_POST['nationalite']!="" ){


     // récupérer les données du formulaire en utilisant la valeur des attributs name comme clé
     $nom=$_POST['nom'];
     $prenom=$_POST['prenom'];
     $nationalite=$_POST['nationalite'];

     // changement fonction pour fichier
     @$photo=uploadfile('photo_auteur',true);



            try{

// INSERTION DANS LA TABLE AUTEUR
                $sql = "INSERT INTO auteur (nom,prenom,nationalite,photo_auteur)
                        VALUES(:nom,:prenom,:nationalite,:photo_auteur)";

                      $sth = $conn->prepare($sql);

                $params=array(

                                    ':nom' => "$nom",
                                    ':prenom' => "$prenom",
                                    ':nationalite' => "$nationalite",
                                    ':photo_auteur' => "$photo",
               );

                $sth->execute($params);

                $id_auteur=$conn->lastInsertId();


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
