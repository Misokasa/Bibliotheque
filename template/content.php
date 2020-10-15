<div class="row">

<?php
include "includes/define.php";
include "includes/database.php";

try{

$sth = $dbco->prepare(
 "SELECT livre.titre, livre.id_livre, livre.genre, livre.logo_livre,
         auteur.nom as auteur_name,
         editeur.nom as editeur_name
         FROM livre, publier, auteur, editeur
         WHERE publier.id_livre=livre.id_livre
         AND publier.id_auteur=auteur.id_auteur
         AND publier.id_editeur=editeur.id_editeur"
);

$sth->execute();

$result = $sth->fetchAll(PDO::FETCH_ASSOC);

/*Retourne un tableau associatif pour chaque entrée de notre table
*avec le nom des colonnes sélectionnées en clefs*/

foreach ($result as $row => $livre) {
?>

<div col="col-4">
    <div class="card text-black border-success mb-3 livrecard">
      <img class="" src="uploads/<?php echo $livre['logo_livre'] ?>" alt="Card image cap">
         <div class="card-body">
           <h5 class="card-title"><?php echo $livre['titre'] ?></h5>
           <p class="card-text"><?php echo $livre['genre'] ?></p>
           <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
           <a class="btn btn-success" href="?id=<?php echo $livre['id_livre'] ?>&page=livre">Détails</a>
        </div>
      </div>
</div>

<?php
}

/*print_r permet un affichage lisible des résultats,
*<pre> rend le tout un peu plus lisible*/

}

catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
?>

</div>
