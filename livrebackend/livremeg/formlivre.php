<?php
include "../security/secure.php";
include "../includes/database.php";
include "../includes/define.php";

		if(@$_GET['id_livre']!=""){
			$livre=$_GET['id_livre'];



			$sql = "select livre.id_bibliotheque,livre.id_livre,titre,genre,logo_livre,date_de_publication  FROM livre, publier WHERE livre.id_livre=$livre and publier.id_livre=$livre";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$bibliotheque=$result['id_bibliotheque'];
			$titre=$result['titre'];
			$genre=$result['genre'];
			$logo=$result['logo_livre'];
		//	$auteur=$result['id_auteur'];
		//	$editeur=$result['id_editeur'];
			$publication=$result['date_de_publication'];

				 $action=$chemin["updatelivre"];
				 $titreForm=" MODIFIER LIVRE ";
		}
		else {
			$action=$chemin["createlivre"];
			$titreForm=" AJOUT DU LIVRE ";

		}
			/*REQUETE LISTE DE TOUTES LES BIBLIOTHEQUES */
			/************************************/

			$sql = "select id_bibliotheque, nom FROM bibliotheque";
			$sth = $dbco->prepare($sql);
			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC); /* on récupère toute la liste dans la base de donnée*/
			 foreach ($result as $biblio => $val){
				 @$optionb .="<option value='".$val['id_bibliotheque']."'>".$val['nom']."</option>";
				 /* equivalent à $option= "<option value='1'>Ma biblio</option><option value='2'>biblio de quartier</option><option value='3'>Alain Quillot</option><option value='6'>mediatheque</option><option value='7'>Hogwarts library</option>" */
			 }


			/*REQUETE LISTE DE TOUS LES AUTEURS */
			/************************************/

			$sql = "select id_auteur, nom as auteur_nom, prenom FROM auteur ";
			$sth = $dbco->prepare($sql);
			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			foreach ($result as $auteur => $val){
				 @$optiona .="<option value='".$val['id_auteur']."'>".$val['auteur_nom']." ".$val['prenom']."</option>";

			 }


			 /*REQUETE LISTE DE TOUS LES EDITEURS */
			 /*************************************/

			$sql = "select id_editeur, nom as editeur_nom FROM editeur";
			$sth = $dbco->prepare($sql);
			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			foreach ($result as $auteur => $val){
				 @$optione .="<option value='".$val['id_editeur']."'>".$val['editeur_nom']."</option>";

			 }



?>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		  	      <link rel="stylesheet" href="../css/livre.css">

<h1><?php echo $titreForm;?></h1>

		<div class="container">
        <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">

		<input type="hidden" id="id_livre" name="id_livre" value="<?php echo @$livre;?>">
		 <div class="c100">
                <label for="titre">Titre : </label>
                <input type="text" id="titre" name="titre" value="<?php echo @$titre;?>">
            </div>
            <div class="c100">
                <label for="genre">Genre : </label>
                <input type="text" id="genre" name="genre" value="<?php echo @$genre;?>">
            </div>
            <div class="c100">
                <label for="logo">Logo : </label>
                <input type="file" id="logo_livre" name="logo_livre" >  <img class='tabimg' src="../uploads/<?php echo @$logo;?> "/>
            </div>

			<div class="c100">
                <label for="auteur">Auteur :</label>
                <select id="id_auteur" name="id_auteur">  <!-- liste déroulante des auteurs disponibles-->
                    <option value="">--Sélectionnez l'auteur</option>
                       <?php echo @$optiona;

                        ?>
				</select>
			</div>

			<div class="c100">
                <label for="editeur">Editeur :</label>
                <select id="id_editeur" name="id_editeur">  <!-- liste déroulante des éditeurs disponibles-->
                    <option value="">--Sélectionnez la maison d'édition</option>
                       <?php echo @$optione;

                        ?>
				</select>
			</div>

			<div class="c100">
			<label for="date_publication">Date de publication</label>
			<input type="date" id="date_de_publication" name="date_de_publication"  value="<?php echo $publication;?>">
			</div>

			<div class="c100">
                <label for="id_bibliotheque">Bibliothèque :</label>
                <select id="id_bibliotheque" name="id_bibliotheque">  <!-- liste déroulante des bibliothèques disponibles-->
                    <option value="">--Sélectionnez la bibliotheque</option>
                       <?php echo @$optionb;
					   /* ==  <option value='id_biblio1'>Ma biblio</option><option value='2'>biblio de quartier</option><option value='3'>Alain Quillot</option><option value='6'>mediatheque</option><option value='7'>Hogwarts library</option>*/
                        ?>
				</select>
			</div>


            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
		</div>