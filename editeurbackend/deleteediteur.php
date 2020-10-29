<?php
include "../security/secure.php";
include "../includes/database.php";

$editeur=$_GET['id_editeur'];
try{

  $sql = "DELETE FROM editeur WHERE id_editeur='$editeur'";

  $sth = $dbco->prepare($sql);
 $sth->execute();
  header('Location:../admin/starter.php?page=editeurlist');
}catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
?>
