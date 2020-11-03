<?php
include "../includes/database.php";

@$email=$_GET["email"];
// Instruction : Vérifier si $mail existe dans la table users
$sql = "SELECT * FROM users WHERE email='$email'";


$sth = $dbco->prepare($sql);
$sth->execute();
$resultat = $sth->fetch(PDO::FETCH_ASSOC);
if($sth->rowCount()>0){
  echo "Nop";
}
else {
  echo "Yeah";
}

?>
