<?php
include "../security/secure.php";
include "../includes/define.php";

if(@$_POST['id_users']!=""){

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$adresse = $_POST['adresse'];
	$telephone = $_POST['telephone'];
	$pays = $_POST['pays'];
	$genre = $_POST['genre'];
	$email = $_POST['email'];
	$pseudo = $_POST['pseudo'];
	$password = $_POST['password'];

try{

$sql = "UPDATE Users set nom=:nom,prenom=:prenom,adresse=:adresse,telephone=:telephone,pays=:pays,genre=:genre,email=:email,identifiant=:pseudo,password=:password WHERE id_users=:id_users";
echo $sql;
$sth = $dbco->prepare($sql);
$params=array(

	':prenom' => $prenom,
	':nom' => $nom,
	':telephone' => $telephone,
	':adresse' => $adresse,
	':pays' => $pays,
	':genre' => $genre,
	':email' => $email,
	':pseudo' => $pseudo,
	':password' => $password);

$sth->execute($params);
  header('Location:../admin/starter.php?page=userslist');
}

catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}

 }
?>
