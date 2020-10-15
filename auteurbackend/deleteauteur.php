<?php
include "../security/secure.php";
include "../includes/database.php";

$auteur=$_GET['id_auteur'];
try{
  
  $sql = "DELETE FROM auteur WHERE id_auteur='$auteur'";

  $sth = $dbco->prepare($sql);
 $sth->execute();
 header('Location:auteurlist.php');
}catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
?>
