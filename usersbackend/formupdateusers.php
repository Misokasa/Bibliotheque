<?php
include "../security/secure.php";
include "../includes/database.php";
include "../includes/define.php";

		if(@$_GET['id_users']!=""){
			$users=$_GET['id_users'];



			$sql = "SELECT prenom,nom,telephone,adresse,pays,genres,email,identifiant,password
			FROM users where id_users='$users'";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$resultat = $sth->fetch(PDO::FETCH_ASSOC);

			$nom = $resultat['nom'];
      $prenom = $resultat['prenom'];
      $adresse = $resultat['adresse'];
      $telephone = $resultat['telephone'];
      $pays = $resultat['pays'];
      $genre = $resultat['genres'];
      $email = $resultat['email'];
      $pseudo = $resultat['identifiant'];
      $password = $resultat['password'];

				 $action=$chemin["updateusers"];
				 $titreForm=" MODIFIER USERS ";
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
                <input type="text" id="nom" name="nom" value="<?php echo @$nom;?>" readonly>
            </div>
						<div class="c100">
			                 <label for="prenom"> Prénom : </label>
			                 <input type="text" id="prenom" name="prenom" value="<?php echo @$prenom;?>" readonly>
			      </div>
            <div class="c100">
                <label for="telephone"> Téléphone : </label>
                <input type="text" id="telephone" name="telephone" value="<?php echo @$telephone;?> "/>
            </div>
            <div class="c100">
                <label for="adresse"> Adresse : </label>
                <input type="text" id="adresse" name="adresse" value="<?php echo @$adresse;?>">
            </div>
						<div class="c100">
								<label for="pays">Pays :</label>
								<select id="pays" name="pays">
										<optgroup label="Europe">
												<option value="france">France</option>
												<option value="belgique">Belgique</option>
												<option value="suisse">Suisse</option>
										</optgroup>
										<optgroup label="Afrique">
												<option value="algerie">Algérie</option>
												<option value="tunisie">Tunisie</option>
												<option value="maroc">Maroc</option>
												<option value="madagascar">Madagascar</option>
												<option value="benin">Bénin</option>
												<option value="togo">Togo</option>
										</optgroup>
										<optgroup label="Amerique">
												<option value="canada">Canada</option>
										</optgroup>
								</select>
						</div>
						<div class="c100">
								<label for="genre"> Genre(s) préféré(s) : </label>
								<input type="text" id="genre" name="genre">
						</div>
						<div class="c100">
                <label for="email"> Email : </label>
                <input type="text" id="email" name="email" value="<?php echo @$email;?> "/>
            </div>
						<div class="c100">
								<label for="pseudo">Identifiant : </label>
								<input type="text" id="pseudo" name="pseudo">
						</div>
						<div>
								<label for="password">Password : </label>
								<input type="password" id="password" minlength="8" required  name="password">
						</div>
						<div>
								<label for="retypepasswordpass">Re password (8 characters minimum):</label>
								<input type="retypepassword" id="retypepasswordpass" name="retypepassword"
											 minlength="8" required>
						</div>
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
		</div>
