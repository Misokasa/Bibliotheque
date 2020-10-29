<?php
@session_start();

  include "../includes/database.php";
  include "../includes/functions.php";

  $livre=$_POST['id_livre'];
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $telephone=$_POST['telephone'];
  $emprunt =$_POST['date_emprunt'];

				$paramsClients=array(':nom' => $nom,
				':prenom' => $prenom,
				 ':telephone'=>$telephone);

				$sql = "INSERT INTO clients (nom,prenom,telephone) VALUE (:nom,:prenom,:telephone)";
				$anyname= $dbco->prepare( $sql);


				$anyname->execute($paramsClients);
				$id_client=$dbco->lastInsertId();

				$paramsEmprunt=array(':id_client' => $client,
				':date_emprunt' => $emprunt,
				 ':id_livre'=>$livre);

				$sql = "INSERT INTO emprunter (date_emprunt,id_client,id_livre) VALUE (:date_emprunt,:id_client,:id_livre)";
				$anyname= $dbco->prepare( $sql);


				$anyname->execute($paramsEmprunt);
				header("Location:../homepage.php");


?>
