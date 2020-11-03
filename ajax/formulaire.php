<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--
<?php
  // require_once '../template/menu.php';
 ?> -->

 <div class="row mx-md-n5">
   <div class="col px-md-5">
     <div class="p-3 border bg-light">
       <!-- Formulaire HTML super simple à sérialiser -->
       <form id="formulaire" method="POST" action="traitement.php">
       <div class="alert alert-primary" role="alert">
         Nom<input type="text" name="nom"/>
       </div>
       <div class="alert alert-primary" role="alert">
         Prénom<input type="text" name="prenom"/>
       </div>
       <div class="alert alert-primary" role="alert">
         E-email<input type="text" id="email" name="email"/><span id='error_email' style="color:red"> </span><br/>
       </div>
       <div class="alert alert-danger" role="alert">
         Password<input type="text" name="password" id="password" /><span id='error_password' style="color:red"> </span><br/>
       </div>
       <div class="alert alert-danger" role="alert">
         Retypeassword<input type="text" name="repassword" id="repassword" /><span id='error_repassword' style="color:red"> </span><br/>
       </div>

     </div></div>


   <div class="col px-md-5">
     <div class="p-3 border bg-light">
       <div class="c100">
           <input type="radio" id="femme" name="sexe" value="femme">
           <label for="femme"> Femme </label>
           <input type="radio" id="homme" name="sexe" value="homme">
           <label for="homme"> Homme </label>
           <input type="radio" id="autre" name="sexe" value="autre">
           <label for="autre"> Autre </label>
       </div>

       <div class="c100">
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

       <div class="naissance">Année de naissance</div>
       <div class="naissance"><select id="data_birthdate" class="persoinfo_inputbox myinput">
         <option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option selected="" value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option><option value="1904">1904</option><option value="1903">1903</option><option value="1902">1902</option><option value="1901">1901</option><option value="1900">1900</option></select></div>
       <div class="clb"></div>
     </div>
   </div>



<button type="button" class="btn btn-dark"><input type="submit" name="submit"/></button>
</form>
</div>

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

          url : 'traitement.php',
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

          url : 'validatepassword.php',
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
						$("#repassword").css({color :'red', borderColor :'red'});
						$('#error_repassword').html("password non indentiques");
				}


		});

$("#formulaire").submit(function(e){ // On sélectionne le formulaire par son identifiant
      e.preventDefault();

      var donnees = $(this).serialize(); // On créer une variable content le formulaire sérialisé
    //alert(data);
  	// alert('ok');
      $.ajax({

       url : 'traitement.php',
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
