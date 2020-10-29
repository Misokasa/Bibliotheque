<div class="row">

<?php
include "includes/define.php";
include "includes/database.php";

try{

  $sth = $dbco->prepare("SELECT distinct genre FROM livre");
  $sth->execute();
  $listeGenre =$sth->fetchAll (PDO::FETCH_ASSOC);

foreach ($listeGenre as $grow => $genre) {

  echo $genre["genre"];
	echo "<div class='container'> <div class='row'>";

$sth = $dbco->prepare(
 "SELECT livre.titre, livre.id_livre, livre.genre, livre.logo_livre,
         auteur.nom as auteur_name,
         editeur.nom as editeur_name, livre.description, livre.page, livre.prix
         FROM livre, publier, auteur, editeur
         WHERE publier.id_livre=livre.id_livre
         AND publier.id_auteur=auteur.id_auteur
         AND publier.id_editeur=editeur.id_editeur
         AND livre.genre=:genre"
);

$param=array("genre"=>$genre["genre"]);
$sth->execute($param);

$result = $sth->fetchAll(PDO::FETCH_ASSOC);

/*Retourne un tableau associatif pour chaque entrée de notre table
*avec le nom des colonnes sélectionnées en clefs*/

foreach ($result as $row => $livre) {
?>


<div class="card" style="width: 18rem;">
  <img src="uploads/<?php echo $livre['logo_livre'] ?>" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title"><?php echo $livre['titre'] ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $livre['auteur_name'] ?></h6>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo $livre['page']?></li>
            <li class="list-group-item"><?php echo $livre['prix']?></li>
        </ul>
    <a href="?id=<?php echo $livre['id_livre'];?>&page=livre" class="btn btn-primary">Plus</a>
  </div>
</div>

<?php
}

/*print_r permet un affichage lisible des résultats,
*<pre> rend le tout un peu plus lisible*/
}

    echo'</div>';
		echo'</div>';
}

catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
?>

</div>
