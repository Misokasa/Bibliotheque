<?php
include "../security/secure.php";
include "../includes/database.php";
include "../includes/define.php";

		if(@$_GET['id_users']!=""){
			$users=$_GET['id_users'];



			$sql = "SELECT nom,prenom,adresse,telephone FROM users where id_users='$users'";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$resultat = $sth->fetch(PDO::FETCH_ASSOC);

			$nom=	$resultat['nom'];
			$prenom=	$resultat['prenom'];
			$adresse=	$resultat['adresse'];
			$telephone=	$resultat['telephone'];

				 $action=$chemin["updateusers"];
				 $titreForm=" MODIFIER USERS ";
		}
		else {
			$action=$chemin["createusers"];
			$titreForm=" AJOUT D'UN USERS ";

		}
?>


<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		  	      <link rel="stylesheet" href="../css/css.css">

<h1><?php echo $titreForm;?></h1>

		<div class="container">
        <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">

		<input type="hidden" id="id_users" name="id_users" value="<?php echo @$users;?>">
		 <div class="c100">
                <label for="nom"> Nom : </label>
                <input type="text" id="nom" name="nom" value="<?php echo @$nom;?>">
            </div>
						<div class="c100">
			                 <label for="prenom"> Prénom : </label>
			                 <input type="text" id="prenom" name="prenom" value="<?php echo @$prenom;?>">
			      </div>
            <div class="c100">
                <label for="adresse"> Adresse : </label>
                <input type="text" id="adresse" name="adresse" value="<?php echo @$adresse;?>">
            </div>
            <div class="c100">
                <label for="telephone"> Téléphone : </label>
                <input type="text" id="telephone" name="telephone" value="<?php echo @$telephone;?> "/>
            </div>

            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
		</div>
