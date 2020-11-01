<?php
@session_start();

  include "../includes/database.php";
  include "../includes/functions.php";

  $livre=$_POST['id_livre'];
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $telephone=$_POST['telephone'];
  $emprunt = date('Y-m-d');

				$paramsClients=array(':nom' => $nom,
				':prenom' => $prenom,
				 ':telephone'=>$telephone);

				$sql = "INSERT INTO clients (nom,prenom,telephone) VALUE (:nom,:prenom,:telephone)";
				$anyname= $dbco->prepare( $sql);


				$anyname->execute($paramsClients);
				$client=$dbco->lastInsertId();

echo $client;
echo "<hr>";

				$paramsEmprunt=array(':id_client' => $client,
				':date_emprunt' => $emprunt,
				 ':id_livre'=>$livre);

				$sql = "INSERT INTO emprunter (date_emprunt,id_client,id_livre) VALUE ('$emprunt',$client,$livre)";
				$anyname= $dbco->prepare( $sql);

echo $sql;

				$anyname->execute();
				header("Location:../homepage.php");


?>
