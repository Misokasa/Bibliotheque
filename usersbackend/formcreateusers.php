<?php
include "../security/secure.php";
include "../includes/database.php";
include "../includes/define.php";


			$action=$chemin["createusers"];
			$titreForm=" AJOUT D'UN USERS ";


?>


<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		  	      <link rel="stylesheet" href="../css/css.css">

<h1><?php echo $titreForm;?></h1>

		<div class="container">
        <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">


		 		                 <h1>Formulaire HTML</h1>

		 		                 <form action="createusers.php" method="post">
		 		                     <div class="c100">
		 		                         <label for="prenom">Prénom : </label>
		 		                         <input type="text" id="prenom" name="prenom">
		 		                     </div>
		 		                     <div class="c100">
		 		                         <label for="nom">Nom : </label>
		 		                         <input type="text" id="nom" name="nom">
		 		                     </div>
		 		                     <div class="c100">
		 		                         <label for="date">Date de naissance : </label>
		 		                         <input type="date" id="date" name="naissance">
		 		                     </div>
														 <div class="c100">
		 		                         <label for="tel">Téléphone : </label>
		 		                         <input type="number" id="tel" name="telephone">
		 		                     </div>
														 <div class="c100">
		 		                         <label for="adresse">Adresse : </label>
		 		                         <input type="text" id="adresse" name="adresse">
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
		 		                         <input type="radio" id="femme" name="sexe" value="femme">
		 		                         <label for="femme"> Femme </label>
		 		                         <input type="radio" id="homme" name="sexe" value="homme">
		 		                         <label for="homme"> Homme </label>
		 		                         <input type="radio" id="autre" name="sexe" value="autre">
		 		                         <label for="autre"> Autre </label>
		 		                     </div>
		 		                     <div class="c100">
		 		                         <label for="genre"> Genre(s) préféré(s) : </label>
		 		                         <input type="text" id="genre" name="genre">
		 		                     </div>
		 		                     <div class="c100">
		 		                         <label for="pseudo">Identifiant : </label>
		 		                         <input type="text" id="pseudo" name="pseudo">
		 		                     </div>
		 		                     <div class="c100">
		 		                         <label for="email">Email : </label>
		 		                         <input type="email" id="email" name="email">
		 		                     </div>
		 		                     <div>
		 		                         <label for="username">Password : </label>
		 		                         <input type="password" id="username" minlength="8" required  name="password">
		 		                     </div>
		 		                     <div>
		 		                         <label for="pass">Re password (8 characters minimum):</label>
		 		                         <input type="password" id="pass" name="retypepassword"
		 		                                minlength="8" required>
		 		                     </div>
		 		                     <div class="c100" id="submit" name="submit">
		 		                         <input type="submit" value="Envoyer">
		 		                     </div>
		 		                 </form>
						</div>
