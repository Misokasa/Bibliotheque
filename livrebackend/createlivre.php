<?php
include "../security/secure.php";
include "../includes/functions.php";
include "../includes/database.php";


        if(@$_POST['titre']!="")
        {

        /*$servername = 'localhost'; //connexion en local
            $username = 'root'; // par défaut
            $password = ''; // rien par défaut

            //On établit la connexion
            $conn = new mysqli($servername, $username, $password);

            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo 'Connexion réussie';*/



            $titre = $_POST['titre'];
            $genre = $_POST['genre'];
            $auteur = $_POST['id_auteur'];
            $editeur = $_POST['id_editeur'];
            $publication= $_POST['date_de_publication'];
            $bibliotheque=$_POST["id_bibliotheque"];
			      $logo=uploadfile("logo_livre",true);
            $description=$_POST["description"];
            $page=$_POST["page"];
            $prix=$_POST["prix"];

            //On établit la connexion
            try{

                 // Insertion dans la table livre

                $sql = "INSERT INTO livre (titre,genre,logo_livre,id_bibliotheque,description,page,prix)
                VALUES(:titre,:genre,:logo,:bibliotheque,:description,:page,:prix)";

                $sth = $dbco->prepare( $sql);

                $params=[
                ':titre' => $titre,
                ':genre' => $genre,
                ':id_bibliotheque' => $bibliotheque,
                ':logo_livre' => $logo,
                ':description' => $description,
                ':page' => $page,
                ':prix' => $prix];

                $sth->execute($params);
                $livre=$dbco->lastInsertId();

                // Insertion dans la table publier
                 $sql = "INSERT INTO publier (id_editeur,id_auteur,id_livre,date_de_publication)
                VALUES(:id_editeur,:id_auteur,:id_livre,:date_de_publication)";

                $sth = $dbco->prepare( $sql);

                $params=[
                ':id_editeur' => $editeur,
                ':id_auteur' => $auteur,
                ':id_livre' => $livre,
                ':date_de_publication' => $publication];


                $sth->execute($params);



                header('Location:../admin/starter.php?page=livrelist');

                echo "Entrée ajoutée dans la table";

            }

            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }


        }

        ?>
