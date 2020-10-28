<?php
include "../security/secure.php";
include "../includes/database.php";

		if(@$_GET['id_auteur']!=""){
			$auteur=$_GET['id_auteur'];



			$sql = "select auteur.id_auteur,nom,prenom,nationalite,photo_auteur FROM auteur WHERE auteur.id_auteur=$auteur";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$auteur=$result['id_auteur'];
			$nom=$result['nom'];
			$prenom=$result['prenom'];
			$nationalite=$result['nationalite'];
			$photo=$result['photo_auteur'];

				 $action="updateauteur.php";
				 $titreForm=" MODIFIER AUTEUR ";
		}
		else {
			$action= "createauteur.php";
			$titreForm=" AJOUT DE L'AUTEUR ";

		}
		/*REQUETE LISTE DE TOUS LES AUTEURS */
			/************************************/

			$sql = "select id_auteur, nom as auteur_nom, prenom FROM auteur ";
			$sth = $dbco->prepare($sql);
			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			foreach ($result as $auteur => $val){
				 @$optiona .="<option value='".$val['nationalite']."'>".$val['nom']." ".$val['prenom']."</option>";

			 }

?>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		  	      <link rel="stylesheet" href="../css/css.css">

<h1><?php echo $titreForm;?></h1>

		<div class="container">
        <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">

		<input type="hidden" id="id_auteur" name="id_auteur" value="<?php echo @$auteur;?>">
		 <div class="c100">
                <label for="nom">Nom </label>
                <input type="text" id="nom" name="nom" value="<?php echo @$nom;?>">
            </div>
            <div class="c100">
                <label for="prenom">Prénom : </label>
                <input type="text" id="prenom" name="prenom" value="<?php echo @$prenom;?>">
            </div>
            <div class="c100">
                <label for="nationalite">Nationalité : </label>
								<input type="text" id="nationalite" name="nationalite" value="<?php echo @$nationalite;?>">

								<div class="c100">
		                <label for="photo">Photo : </label>
		                <input type="file" id="photo_auteur" name="photo_auteur" >  <img class='tabimg' src="../uploads/<?php echo @$photo;?> "/>
		            </div>

            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
		</div>
