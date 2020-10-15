<?php
include "../security/secure.php";
include "../includes/database.php";

$bibliotheque=$_GET['id_bibliotheque'];
try{

  $sql = "DELETE FROM bibliotheque WHERE id_bibliotheque='$bibliotheque'";

  $sth = $dbco->prepare($sql);
 $sth->execute();
 header('Location:../admin/starter.php?page=bibliolist');
}catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
?>
