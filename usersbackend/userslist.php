<?php
include "../security/secure.php";
include "../includes/database.php";
include "../includes/define.php";
?>

<!DOCTYPE html>

<html>
<!--  UserList.php (Cliquez sur Update)-> FormUpdateUser.php (Remplir les information puis cliquer envoyer)-> updateuser.php(modifie
les information dans la base puis redirige vers UserList.php) -->
    <head>

        <title> USERSLIST </title>

        <meta charset='utf-8'>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="../css/css.css">

    </head>

    <body>

        <h1> Cours PHP / MySQL </h1>
            <h3> Base de données MySQL </h3>

            <a class='btn btn-info btn-xs' href='starter.php?page=formcreateusers'><span class='glyphicon glyphicon-edit'></span> S'inscrire </a>


        <div class="container">
            <div class="row col-md-6 col-md-offset-2 custyle">
                <table class="table table-striped custab">
                  <?php


                  try{

                      /*Sélectionne les valeurs dans les colonnes prenom et mail de la table
                      *users pour chaque entrée de la table*/

                      $anyname = $dbco->prepare("SELECT id_users,prenom,nom,telephone,naissance,adresse,pays,sexe,genres,role,email,identifiant,password FROM users");

                      $anyname->execute();

                      /*Retourne un tableau associatif pour chaque entrée de notre table
                      *avec le nom des colonnes sélectionnées en clefs*/

                      $resultat = $anyname->fetchAll(PDO::FETCH_ASSOC);

                      foreach ($resultat as $row => $users) {

                          echo "<tr>";

                          echo "<td>". $users['prenom']."</td>";
                          echo "<td>". $users['nom']."</td>";
                          echo "<td>". $users['adresse']."</td>";
                          echo "<td>". $users['telephone']."</td>";
                          echo "<td>". $users['naissance']."</td>";
                          echo "<td>". $users['pays']."</td>";
                          echo "<td>". $users['sexe']."</td>";
                          echo "<td>". $users['genres']."</td>";
                          echo "<td>". $users['email']."</td>";
                          echo "<td>". $users['id_users']."</td>";
                          echo "<td>". $users['role']."</td>";
                          echo "<td>". $users['identifiant']."</td>";
                          echo "<td>". $users['password']."</td>";


                          echo "<td> <a class='btn btn-info btn-xs' href='starter.php?page=formupdateusers&id_users=".$users['id_users']."'><span class='glyphicon glyphicon-edit'></span> Edit </a>";

                          echo "<td> <a class='btn btn-danger btn-xs' href='deleteusers.php?id_users=".$users['id_users']."'><span class='glyphicon glyphicon-remove'></span> Delete </a>";


                          echo "</tr>";
                      }
                      echo "</table>";

                      /*print_r permet un affichage lisible des résultats,
                      *<pre> rend le tout un peu plus lisible*/

                  }

                  catch(PDOException $e){

                      echo "Erreur : " . $e->getMessage();
                  }
            ?>

                </table>
            </div>
</body>
</html>
