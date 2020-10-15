<?php
include "../security/secure.php";
include "../includes/database.php";

		if(@$_GET['id_editeur']!=""){
			$editeur=$_GET['id_editeur'];



			$sql = "select editeur.id_editeur,nom,adresse,telephone FROM editeur WHERE editeur.id_editeur=$editeur";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$editeur=$result['id_editeur'];
			$nom=$result['nom'];
			$adresse=$result['adresse'];
			$telephone=$result['telephone'];
		//	$editeur=$result['id_editeur'];
		// $publication=$result['date_de_publication'];

				 $action="updateediteur.php";
				 $titreForm=" MODIFIER EDITEUR ";
		}
		else {
			$action= "createediteur.php";
			$titreForm=" AJOUT DE L'EDITEUR ";

		}
?>


<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		  	      <link rel="stylesheet" href="../css/livre.css">

<h1><?php echo $titreForm;?></h1>

		<div class="container">
        <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">

		<input type="hidden" id="id_editeur" name="id_editeur" value="<?php echo @$editeur;?>">
		 <div class="c100">
                <label for="nom">Nom </label>
                <input type="text" id="nom" name="nom" value="<?php echo @$nom;?>">
            </div>
            <div class="c100">
                <label for="adresse">Adresse : </label>
                <input type="text" id="adresse" name="adresse" value="<?php echo @$adresse;?>">
            </div>
            <div class="c100">
                <label for="telephone">Téléphone : </label>
								<input type="text" id="telephone" name="telephone" value="<?php echo @$telephone;?>">
						</div>

            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
		</div>
