<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../css/css.css"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php
  require_once '../template/menu.php';
 ?>

 <div class="row mx-md-n5">
   <div class="col px-md-5"><div class="p-3 border bg-light">Custom column padding</div></div>
   <div class="col px-md-5"><div class="p-3 border bg-light">Custom column padding</div></div>
 </div>

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
  Password<input type="text" name="password" id="password" />
</div>
<div class="alert alert-danger" role="alert">
  Retypeassword<input type="text" name="repassword" id="repassword" />
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
