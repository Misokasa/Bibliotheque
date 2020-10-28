<?php
include "../security/secure.php";

?>
<!DOCTYPE html>

<html>

  <head>

      <title> EDITEURLIST </title>

      <meta charset='utf-8'>
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <link rel="stylesheet" href="../css/css.css">

    </head>

    <body>

      <h1> Cours PHP / MySQL </h1>
          <h3> Base de données MySQL </h3>

          <a class='btn btn-info btn-xs' href='formediteur.php'><span class='glyphicon glyphicon-edit'></span> Ajouter Editeur </a>

          <div class="container">
              <div class="row col-md-6 col-md-offset-2 custyle">
                  <table class="table table-striped custab">

<?php

                      $servname = "localhost"; $dbname = "bd_megane_biblio"; $editeur = "root"; $password = "";
                      try{$dbco = new PDO("mysql:host=$servname;dbname=$dbname", $editeur, $password);
                        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // Sélectionne tous les editeurs dans la table editeur

                        $anyname = $dbco->prepare(
                          "SELECT editeur.id_editeur, editeur.adresse,editeur.telephone, editeur.nom
                              as editeur_name
                          FROM editeur
                          WHERE editeur.id_editeur=editeur.id_editeur");

                        $anyname->execute();

                        /*Retourne un tableau associatif pour chaque entrée de notre table avec le nom des colonnes sélectionnées en clefs*/
                        $resultat = $anyname->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($resultat as $row => $editeur) {
                          echo "<tr>";

                          echo "<td>". $editeur['id_editeur']."</td>";
                          echo "<td>". $editeur['editeur_name']."</td>";
                          echo "<td>". $editeur['adresse']."</td>";
                          echo "<td>". $editeur['telephone']."</td>";

                          echo "<td> <a class='btn btn-info btn-xs' href='starter.php?page=formediteur&id_editeur=".$editeur['id_editeur']."'><span class='glyphicon glyphicon-edit'></span> Edit </a>";
                          echo "<td> <a class='btn btn-danger btn-xs' href='".$chemin["deleteediteur"]."?id_editeur=".$editeur['id_editeur']."'><span class='glyphicon glyphicon-remove'></span> Delete </a>";

                          echo "</tr>";

                      }

                      echo "</table>";

                    }

                  catch(PDOException $e){
                    echo "Erreur : ".$e->getMessage();

                  }

?>
            </div>
    </body>
</html>
