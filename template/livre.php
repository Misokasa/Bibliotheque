<?php
include "includes/database.php";

if(@$_GET['id']!=""){
$livre=$_GET['id'];


$sql = "SELECT livre.titre, livre.id_livre, livre.genre, livre.logo_livre, livre.description, livre.page, livre.prix, auteur.nom

		as auteur_name,editeur.nom
		as editeur_name,publier.date_de_publication

		FROM livre,publier,auteur,editeur

		  WHERE publier.id_livre=livre.id_livre
			AND publier.id_auteur=auteur.id_auteur
		  AND publier.id_editeur=editeur.id_editeur
			AND livre.id_livre=$livre";

$sth = $dbco->prepare($sql);

$sth->execute();
$result = $sth->fetch(PDO::FETCH_ASSOC);


$titre=$result['titre'];
$genre=$result['genre'];
$logo=$result['logo_livre'];
$auteur_name=$result['auteur_name'];
$editeur_name=$result['editeur_name'];
$description=$result['description'];
$page=$result['page'];
$prix=$result['prix'];
$publication=$result['date_de_publication'];

}

?>

<div class="row">
	<div class="col-12">
    <div class="card livrecard">
		  <div class="row">
		  	<div class="col-4">
					<img class="card-img-left" src="uploads/<?php echo $logo;?>"alt="Card image" >
		  	</div>
		  	<div class="col-8">
          <div class="card-body">
          	<h5 class="card-title">  <?php echo $titre;?></h5>
          		<p class="card-auteur"> <?php echo $auteur_name?></p>
		   				<p class="card-editeur"><?php echo $editeur_name;?></p>
		   				<p class="card-text"><?php echo $description;?></p>
		   				<p class="card-page"><?php echo $page;?></p>
		   				<p class="card-prix"><?php echo $prix;?></p>
		  			<hr>
         			<p class="card-date"> Publication <small class="text-muted"><?php echo $publication;?></small></p>
          		<a class="btn btn-success"> Emprunter </a>
		  		</div>
	   		</div>
			</div>
		</div>
	</div>
</div>
