<?php
    include "../security/secure.php";
    include "../includes/database.php";

    if(@$_POST['nom']!="" && @$_POST['prenom']!="" && @$_POST['adresse']!="" ){

      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $adresse = $_POST['adresse'];
      $telephone = $_POST['telephone'];
      $naissance = $_POST['naissance'];
      $pays = $_POST['pays'];
      $sexe = $_POST['sexe'];
      $genre = $_POST['genre'];
      $email = $_POST['email'];
      $pseudo = $_POST['pseudo'];
      $role = $_POST['role'];
      $password = $_POST['password'];

            try{

        $sql = "INSERT INTO users (id_users,prenom,nom,naissance,telephone,adresse,pays,sexe,genres,email,identifiant,role,password)
                VALUES (:id_users,:prenom,:nom,:naissance,:telephone,:adresse,:pays,:sexe,:genres,:email,:pseudo,:role,:password)";

                $sth = $dbco->prepare( $sql);

                $params=array(
                    ':id_users' => $users,
                    ':prenom' => $prenom,
                    ':nom' => $nom,
                    ':naissance' => $naissance,
                    ':telephone' => $telephone,
                    ':adresse' => $adresse,
                    ':pays' => $pays,
                    ':sexe' => $sexe,
                    ':genre' => $genre,
                    ':email' => $email,
                    ':pseudo' => $pseudo,
                    ':password' => $password,
                    ':role' => "admin");

                $sth->execute($params);
                header('Location:../admin/starter.php?page=userslist');

                echo 'Entrée ajoutée dans la table';

            }
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        }

        ?>
