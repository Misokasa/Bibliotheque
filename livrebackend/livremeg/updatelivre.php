<?php
include "../security/secure.php";
include "../includes/database.php";
include "../includes/define.php";
include "../includes/functions.php";

var_dump($_POST);
if(@$_POST['id_livre']!=""){
  $livre = $_POST['id_livre'];
  $titre=$_POST['titre'];
  $auteur=$_POST['id_auteur'];
  $genre=$_POST['genre'];
  $editeur=$_POST['id_editeur'];
  $publication=$_POST['date_de_publication'];
  @$logo=uploadfile('logo_livre',true);
  echo "bonjour 0";

  try{

  if($logo!=""){
    $sql = "UPDATE livre,publier set titre=:titre,id_auteur=:id_auteur,genre=:genre,id_editeur=:id_editeur,date_de_publication=:date_de_publication,logo_livre=:logo_livre WHERE livre.id_livre=:id_livre and publier.id_livre =:id_livre";
    $sth = $dbco->prepare($sql);

    $params=array(
      ':titre'=>$titre,
      ':id_auteur'=>$auteur,
      ':id_editeur'=>$editeur,
      ':genre'=>$genre,
      ':logo_livre'=>$logo,
      ':date_de_publication'=>$publication,
      ':id_livre'=>$livre

    );
   }
   else {
     $sql = "UPDATE livre,publier set titre=:titre,id_auteur=:id_auteur,genre=:genre,id_editeur=:id_editeur,date_de_publication=:date_de_publication WHERE livre.id_livre=:id_livre and publier.id_livre=:id_livre";
     $sth = $dbco->prepare($sql);

     $params=array(
       ':titre'=>$titre,
       ':id_auteur'=>$auteur,
       ':id_editeur'=>$editeur,
       ':genre'=>$genre,
       ':date_de_publication'=>$publication,
       ':id_livre'=>$livre

     );
   }

    $sth->execute($params);
       header('Location:../admin/starter.php?page=livrelist');
  }

  catch(PDOException $e){
    echo "Erreur : ". $e->getMessage();
  }
}
?>
