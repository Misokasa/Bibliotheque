<?php
include "../security/secure.php";
include "../includes/database.php";

$id_livre=$_GET['id_livre'];
try{

// --------- Select fichier lié (supprimer -unlink- image) --------------

    $sql = "SELECT logo_livre FROM livre WHERE id_livre='$id_livre'";
    $sth = $dbco->prepare($sql);
    $sth->execute();

    $result = $sth->fetch(PDO::FETCH_ASSOC);
    $logo=$result['logo_livre'];
    unlink("uploads/".$logo);

// --------- TABLE PUBLIER --------------

    $sql = "DELETE FROM publier WHERE id_livre='$id_livre'";

    $sth = $dbco->prepare($sql);
    $sth->execute();

// ----------------- TABLE LIVRE -----------

    $sql = "DELETE FROM livre WHERE id_livre='$id_livre'";

    $sth = $dbco->prepare($sql);
    $sth->execute();

      }
      catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
      }
      header('Location:../admin/starter.php?page=livrelist');
?>
