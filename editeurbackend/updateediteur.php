<?php
include "../security/secure.php";
include "../includes/database.php";
include "../includes/functions.php";

if(@$_POST['id_editeur']!=""){
  $editeur = $_POST['id_editeur'];
  $nom=$_POST['nom'];
  $adresse=$_POST['adresse'];
  $telephone=$_POST['telephone'];

  try{
    
     $sql = "UPDATE editeur set id_editeur=:id_editeur,nom=:nom,adresse=:adresse,telephone=:telephone
     WHERE editeur.id_editeur=:id_editeur";

     $sth = $dbco->prepare($sql);

     $params=array(
       ':id_editeur'=>$editeur,
       ':nom'=>$nom,
       ':adresse'=>$adresse,
       ':telephone'=>$telephone,

     );

    $sth->execute($params);
      header('Location:editeurlist.php');
  }

  catch(PDOException $e){
    echo "Erreur : ". $e->getMessage();
  }
}
?>
