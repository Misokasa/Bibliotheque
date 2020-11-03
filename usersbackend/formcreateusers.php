<?php
include "../security/secure.php";
include "../includes/database.php";
include "../includes/define.php";


			$action=$chemin["createusers"];
			$titreForm=" AJOUT D'UN USERS ";


?>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../css/css.css">

<h1><?php echo $titreForm;?></h1>

		<div class="container">
        <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">


		 		                 <h1>Formulaire HTML</h1>

		 		                 <form action="createusers.php" method="post">
													 <div class="row mx-md-n5">
														 <div class="col px-md-5">
															 <div class="p-3 border bg-light">
																 <!-- Formulaire HTML super simple à sérialiser -->
																 <form id="formulaire" method="POST" action="../api/checkemail.php">
																 <div class="alert alert-primary" role="alert">
																	 Nom<input type="text" id="nom"name="nom"/>
																 </div>
																 <div class="alert alert-primary" role="alert">
																	 Prénom<input type="text" id="prenom" name="prenom"/>
																 </div>
																 <div class="alert alert-primary" role="alert">
																	 E-email<input type="text" id="email" name="email"/><span id='error_email' style="color:red"> </span><br/>
																 </div>
																 <div class="alert alert-danger" role="alert">
																	 Password<input type="text" name="password" id="password" /><span id='error_password' style="color:red"> </span><br/>
																 </div>
																 <div class="alert alert-danger" role="alert">
																	 Retype password<input type="text" name="repassword" id="repassword" /><span id='error_repassword' style="color:red"> </span><br/>
																 </div>
																 <div class="alert alert-warning" role="alert">
				 		                         <label for="date">Date de naissance : </label>
				 		                         <input type="date" id="date" name="naissance">
				 		                     </div>
																 <div class="alert alert-warning" role="alert">
				 		                         <label for="tel">Téléphone : </label>
				 		                         <input type="number" id="tel" name="telephone">
				 		                     </div>
																 <div class="alert alert-warning" role="alert">
				 		                         <label for="adresse">Adresse : </label>
				 		                         <input type="text" id="adresse" name="adresse">
				 		                     </div>
																 <div class="alert alert-warning" role="alert">
													          <label for="pays">Pays :</label>
													           <select id="pays" name="pays">
													             <option value="202"></option>
													             <option value="1">Afrique du Sud</option>
													             <option value="2">Albanie</option>
													             <option value="3">Algérie</option>
													             <option value="4">Allemagne</option>
													             <option value="5">Andorre</option>
													             <option value="6">Angola</option>
													             <option value="7">Anguilla</option>
													             <option value="8">Antigua et Barbuda</option>
													             <option value="9">Antilles néerlandaises</option>
													             <option value="10">Arabie Saoudite</option>
													             <option value="11">Argentine</option>
													             <option value="12">Arménie</option>
													             <option value="13">Aruba</option>
													             <option value="14">Australie</option>
													             <option value="15">Autriche</option>
													             <option value="16">Bahamas</option>
													             <option value="17">Bahreïn</option>
													             <option value="18">Barbades</option>
													             <option value="19">Belgique</option>
													             <option value="20">Bélize</option>
													             <option value="21">Bénin</option>
													             <option value="22">Bermudes</option>
													             <option value="23">Bhoutan</option>
													             <option value="24">Bolivie</option>
													             <option value="25">Bosnie-Herzégovine</option>
													             <option value="26">Botswana</option>
													             <option value="27">Brésil</option>
													             <option value="28">Brunei</option>
													             <option value="29">Bulgarie</option>
													             <option value="30">Burkina Faso</option>
													             <option value="31">Burundi</option>
													             <option value="32">Caïmanes, Iles</option>
													             <option value="33">Cambodge</option>
													             <option value="34">Canada</option>
													             <option value="35">Cap-Vert</option>
													             <option value="36">Chili</option>
													             <option value="37">Chine</option>
													             <option value="38">Chypre</option>
													             <option value="39">Cité du Vatican</option>
													             <option value="40">Colombie</option>
													             <option value="41">Comores</option>
													             <option value="42">Corée du Sud</option>
													             <option value="43">Costa Rica</option>
													             <option value="44">Croatie</option>
													             <option value="45">Danemark</option>
													             <option value="46">Djibouti</option>
													             <option value="47">Dominique</option>
													             <option value="48">Emirats Arabes Unis</option>
													             <option value="49">Equateur</option>
													             <option value="50">Erythrée</option>
													             <option value="51">Espagne</option>
													             <option value="52">Estonie</option>
													             <option value="53">Etats fédérés de Micronésie</option>
													             <option value="190">Etats-Unis</option>
													             <option value="54">Ethiopie</option>
													             <option value="55">Falkland (Malvinas), Iles</option>
													             <option value="56">Fidji</option>
													             <option value="57">Finlande</option>
													             <option selected="" value="58">France</option>
													             <option value="59">Gambie</option>
													             <option value="60">Gibraltar</option>
													             <option value="61">Grèce</option>
													             <option value="62">Grenade</option>
													             <option value="63">Groenland</option>
													             <option value="64">Guadeloupe</option>
													             <option value="65">Guatemala</option>
													             <option value="66">Guinée</option>
													             <option value="67">Guinée française</option>
													             <option value="68">Guinée-Bissau</option>
													             <option value="69">Guyane</option>
													             <option value="212">Haïti</option>
													             <option value="70">Honduras</option>
													             <option value="71">Hong-Kong</option>
													             <option value="72">Hongrie</option>
													             <option value="73">Ile Maurice</option>
													             <option value="74">Ile Norfolk</option>
													             <option value="75">Iles Cook</option>
													             <option value="76">Iles de Svalbard et Jan Mayen</option>
													             <option value="77">Iles Féroé</option>
													             <option value="78">Iles Marshall</option>
													             <option value="79">Iles Pitcairn</option>
													             <option value="80">Iles Salomon</option>
													             <option value="81">Iles Vierges britanniques</option>
													             <option value="82">Iles Wallis-et-Futuna</option>
													             <option value="83">Inde</option>
													             <option value="84">Indonésie</option>
													             <option value="85">Irlande</option>
													             <option value="86">Islande</option>
													             <option value="87">Israël</option>
													             <option value="88">Italie</option>
													             <option value="89">Jamaïque</option>
													             <option value="90">Japon</option>
													             <option value="91">Jordanie</option>
													             <option value="92">Kazakhstan</option>
													             <option value="93">Kenya</option>
													             <option value="94">Kirghizistan</option>
													             <option value="95">Kiribati</option>
													             <option value="96">Koweït</option>
													             <option value="97">Laos</option>
													             <option value="98">Lesotho</option>
													             <option value="99">Lettonie</option>
													             <option value="192">Liban</option>
													             <option value="100">Liechtenstein</option>
													             <option value="101">Lituanie</option>
													             <option value="102">Luxembourg</option>
													             <option value="103">Madagascar</option>
													             <option value="104">Malaisie</option>
													             <option value="105">Malawi</option>
													             <option value="106">Maldives</option>
													             <option value="107">Mali</option>
													             <option value="108">Malte</option>
													             <option value="109">Maroc</option>
													             <option value="110">Martinique</option>
													             <option value="111">Mauritanie</option>
													             <option value="112">Mayotte</option>
													             <option value="113">Mexique</option>
													             <option value="114">Mongolie</option>
													             <option value="115">Montserrat</option>
													             <option value="116">Mozambique</option>
													             <option value="117">Namibie</option>
													             <option value="118">Nauru</option>
													             <option value="119">Népal</option>
													             <option value="120">Nicaragua</option>
													             <option value="121">Niger</option>
													             <option value="122">Niue</option>
													             <option value="123">Norvège</option>
													             <option value="124">Nouvelle-Calédonie</option>
													             <option value="125">Nouvelle-Zélande</option>
													             <option value="126">Oman</option>
													             <option value="127">Ouganda</option>
													             <option value="128">Palaos</option>
													             <option value="129">Panama</option>
													             <option value="130">Papouasie-Nouvelle-Guinée</option>
													             <option value="131">Pays-Bas</option>
													             <option value="132">Pérou</option>
													             <option value="133">Philippines</option>
													             <option value="134">Pologne</option>
													             <option value="135">Polynésie française</option>
													             <option value="136">Portugal</option>
													             <option value="137">Qatar</option>
													             <option value="138">République d'Azerbaïdjan</option>
													             <option value="139">République Démocratique du Congo</option>
													             <option value="140">République dominicaine</option>
													             <option value="141">République du Congo</option>
													             <option value="142">République du Gabon</option>
													             <option value="143">République tchèque</option>
													             <option value="144">Réunion</option>
													             <option value="145">Roumanie</option>
													             <option value="146">Royaume-Uni</option>
													             <option value="147">Russie</option>
													             <option value="148">Rwanda</option>
													             <option value="149">Saint-Christophe-et-Niévès</option>
													             <option value="150">Saint-Marin</option>
													             <option value="151">Saint-Pierre et Miquelon</option>
													             <option value="152">Saint-Vincent-et-les-Grenadines</option>
													             <option value="153">Sainte-Hélène</option>
													             <option value="154">Sainte-Lucie</option>
													             <option value="155">Salvador</option>
													             <option value="156">Samoa</option>
													             <option value="157">Sao Tomé-et-Principe</option>
													             <option value="158">Sénégal</option>
													             <option value="159">Seychelles</option>
													             <option value="160">Sierra Leone</option>
													             <option value="161">Singapour</option>
													             <option value="162">Slovaquie</option>
													             <option value="163">Slovénie</option>
													             <option value="164">Somalie</option>
													             <option value="165">Sri Lanka</option>
													             <option value="166">Suède</option>
													             <option value="167">Suisse</option>
													             <option value="168">Surinam</option>
													             <option value="169">Swaziland</option>
													             <option value="170">Tadjikistan</option>
													             <option value="171">Taiwan</option>
													             <option value="172">Tanzanie</option>
													             <option value="173">Tchad</option>
													             <option value="174">Thaïlande</option>
													             <option value="175">Togo</option>
													             <option value="176">Tonga</option>
													             <option value="177">Trinité-et-Tobago</option>
													             <option value="178">Tunisie</option>
													             <option value="179">Turkménistan</option>
													             <option value="180">Turks-et-Caïques, Iles</option>
													             <option value="181">Turquie</option>
													             <option value="182">Tuvalu</option>
													             <option value="183">Ukraine</option>
													             <option value="184">Uruguay</option>
													             <option value="185">Vanuatu</option>
													             <option value="186">Venezuela</option>
													             <option value="187">Vietnam</option>
													             <option value="188">Yémen</option>
													             <option value="189">Zambie</option>
													           </select>
													         </div>

															 	</div>
														 	</div>

													<div class="col px-md-5">
													  <div class="p-3 border bg-light">

															<div class="alert alert-secondary" role="alert">
		 		                         	<input type="radio" id="femme" name="sexe" value="femme">
		 		                         	<label for="femme"> Femme </label>
		 		                         	<input type="radio" id="homme" name="sexe" value="homme">
		 		                         	<label for="homme"> Homme </label>
		 		                         	<input type="radio" id="autre" name="sexe" value="autre">
		 		                         	<label for="autre"> Autre </label>
		 		                     	</div>
		 		                     	<div class="alert alert-secondary" role="alert">
		 		                         	<label for="genre"> Genre(s) préféré(s) : </label>
		 		                         	<input type="text" id="genre" name="genre">
		 		                     	</div>
		 		                     	<div class="alert alert-secondary" role="alert">
		 		                         	<label for="pseudo">Identifiant : </label>
		 		                         	<input type="text" id="pseudo" name="pseudo">
		 		                     	</div>

		 		                     	<div class="c100" id="submit" name="submit">
		 		                         	<input type="submit" value="Envoyer">
		 		                     	</div>
														</form>
											 		</div>
												</div>
											</div>
										</form>



<script>

    function validateEmail($email) {
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      return emailReg.test( $email );
    }

    $(document).ready(function(){

      $("#email").on("blur",function(){
        var $email= $("#email").val();
        if(validateEmail($email)){

        $.ajax({

          url : '../api/checkemail.php',
          type : 'GET',
          data:'email='+$("#email").val(),

        dataType : 'text',
        success : function(resultat, statut){
        // alert(resultat);
        if (resultat=="Yeah") {
          // Mettre la couleur du texte en vert
          $("#email").css('color','green');
          $('#error_email').html("");
        }
        else if(resultat=="Nop"){
          // Mettre la couleur du texte en rouge
          $("#email").css('color','red');
          $('#error_email').html("Email already exist");
        }

      },

        error : function(resultat, statut, erreur){
          alert(resultat);
        },

        complete : function(resultat, statut){

        }

      });
        }
          else {
            $('#email').focus();
            $('#error_email').html("Email non Valide");
          }

        });

      $("#password").on("input",function(){

        var $password= $("#password").val();



        $.ajax({

          url : '../api/validatepassword.php',
          type : 'GET',
          data:'password='+$("#password").val(),

          dataType : 'text',
          success : function(resultat, statut){
          //alert(resultat);
          if(resultat=="valid"){
          //Mettre la bordure en vert
          $("#password").css('color','green');
          $('#error_password').html("");
        }
          else if(resultat!="valid"){
          //Mettre la bordure en rouge
          $("#password").css('color','red');
          $('#error_password').html("Password not valid");
        }
      },

      error : function(resultat, statut, erreur){
        alert(resultat);
      },

      complete : function(resultat, statut){

      }

    });

  });

  $("#repassword").on("input",function(){
var $password= $("#password").val();
var $repassword= $("#repassword").val();


if($password==$repassword)
{
	$("#repassword").css({color :'green', borderColor :'green'});
	$('#error_repassword').html("");
}

 else
 {
("#repassword").css({color :'red', borderColor :'red'});
('#error_repassword').html("password non indentiques");
}


});

$("#formulaire").submit(function(e){ // On sélectionne le formulaire par son identifiant
      e.preventDefault();

      var donnees = $(this).serialize(); // On créer une variable content le formulaire sérialisé
    //alert(data);
  	// alert('ok');
      $.ajax({

       url : '../api/checkemail.php',
       type : 'POST',
  	   data:donnees,

        dataType : 'html',
        success : function(code_html, statut){
  	alert("Success");
      },

        error : function(resultat, statut, erreur){
  	alert(resultat);
      },

        complete : function(resultat, statut){

      }

     });


  });

  });

  </script>
