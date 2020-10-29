<?php

include "../security/secure.php";
include "../includes/database.php";

include_once "../includes/functions.php";  /*inclus le php contenant les fonctions */
 //print_r($_POST);
  if(@$_POST['id_livre']!=""){
		$livre = $_POST['id_livre'];
		$bibliotheque=$_POST['id_bibliotheque'];
		$titre=$_POST['titre'];
		$genre=$_POST['genre'];
		$logo=uploadfile('logo_livre',true);//$_POST['logo'];
		$auteur=$_POST['id_auteur'];
		$editeur=$_POST['id_editeur'];
		$publication=$_POST['date_de_publication'];
		$description=$_POST['description'];
		$page=$_POST['page'];
		$prix=$_POST['prix'];

try{

		if($bibliotheque!="" && $logo!="" && $auteur!="" && $editeur!=""){
		$sql = "UPDATE livre set titre=:titre, id_bibliotheque=:id_bibliotheque, genre=:genre, logo_livre=:logo_livre, description=:description, page=:page, prix=:prix WHERE id_livre=$livre";

		$params=array(':id_bibliotheque' => $bibliotheque,
						':titre' => $titre,
            ':genre' => $genre,
            ':logolivre' => $logo,
            ':description' => $description,
            ':page' => $page,
            ':prix' => $prix

						);
		$sth = $dbco->prepare($sql);
		$sth->execute($params);

		$params=array(':id_auteur'=>$auteur,
							':id_editeur'=>$editeur,
							':date_de_publication'=>$publication

											);
		$sql = "UPDATE publier set  id_auteur=:id_auteur, id_editeur=:id_editeur, date_de_publication=:date_de_publication WHERE id_livre=$livre";

		$sth = $dbco->prepare($sql);

		$sth->execute($params);

        }
		else if($bibliotheque=="" && $logo!="" && $auteur=="" && $editeur==""){

			$sql = "UPDATE livre set titre=:titre, genre=:genre, logo_livre=:logo_livre, description=:description, page=:page, prix=:prix WHERE id_livre=$livre";

		$params=array(
						':titre' => $titre,
            ':genre' => $genre,
            ':logo_livre' => $logo,
            ':description' => $description,
            ':page' => $page,
            ':prix' => $prix

						);
		$sth = $dbco->prepare($sql);
		$sth->execute($params);

		$params=array(':date_de_publication'=>$publication );

		$sql = "UPDATE publier set   date_de_publication=:date_de_publication WHERE id_livre=$livre";

		$sth = $dbco->prepare($sql);

		$sth->execute($params);
		}
    else if($bibliotheque=="" && $logo=="" && $auteur=="" && $editeur==""){

      $sql = "UPDATE livre set titre=:titre, genre=:genre, description=:description, page=:page, prix=:prix WHERE id_livre=$livre";

    $params=array(
            ':titre' => $titre,
            ':genre' => $genre,
            ':description' => $description,
            ':page' => $page,
            ':prix' => $prix

            );
    $sth = $dbco->prepare($sql);
		$sth->execute($params);

    $params=array(':date_de_publication'=>$publication );

    $sql = "UPDATE publier set   date_de_publication=:date_de_publication WHERE id_livre=$livre";

    $sth = $dbco->prepare($sql);

    $sth->execute($params);
    }
	}
	catch(PDOException $e){

	echo "Erreur : " . $e->getMessage();

	}
	header('Location:../admin/starter.php?page=livrelist');
  }
 ?>
