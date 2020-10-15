<?php
include "../security/secure.php";
include "../includes/database.php";
include "../includes/define.php";
include "../includes/functions.php";

 // Vérifier si le formulaire est soumis
//var_dump($_POST);
         if(@$_POST['titre']!="" && @$_POST['id_auteur']!="" && @$_POST['genre']!="" ){


     // récupérer les données du formulaire en utilisant la valeur des attributs name comme clé
     $titre = $_POST['titre'];
     $publication = $_POST['date_de_publication'];
     $genre = $_POST['genre'];
     $auteur = $_POST['id_auteur'];
     $editeur = $_POST['id_editeur'];
     $bibliotheque = $_POST['id_bibliotheque'];

     // changement fonction pour fichier
     $logo =  uploadfile('logo_livre');



            try{

// INSERTION DANS LA TABLE LIVRE
                $sql = "INSERT INTO livre (id_bibliotheque,titre,genre,logo_livre)
                        VALUES(:id_bibliotheque,:titre,:genre,:logo_livre)";

                      $sth = $dbco->prepare($sql);

                $params=array(

                                    ':id_bibliotheque' => "$bibliotheque",
                                    ':titre' => "$titre",
                                    ':genre' => "$genre",
                                    ':logo_livre' => "$logo",
               );

                $sth->execute($params);

                $livre=$dbco->lastInsertId();

// INSERTION DANS LA TABLE PUBLIER
                $sql = "INSERT INTO publier (id_livre,id_editeur,id_auteur,date_de_publication)
                        VALUES  (:id_livre,:id_editeur,:id_auteur,:date_de_publication)";

                        $sth = $dbco->prepare($sql);

                  $params3=array(

                    ':id_livre' => "$id_livre",
                    ':id_auteur' => "$auteur",
                    ':id_editeur' => "$editeur",
                    ':date_de_publication' => $publication,
);


              $sth->execute($params3);

				          header('Location:../admin/starter.php?page=livrelist');
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
