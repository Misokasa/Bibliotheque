<?php
    //On démarre une nouvelle session
    session_start();

    /*On utilise session_id() pour récupérer l'id de session s'il existe.
     *Si l'id de session n'existe  pas, session_id() rnevoie une chaine
     *de caractères vide*/

?>

    <!DOCTYPE html>
<html>

    <head>
        			<meta charset="utf-8" />
      				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

      				<title> Projet bibliothèque GITHUB  </title>

      				<link href="../css/mb-comingsoon.min.css" rel="stylesheet" />
				      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>

          <!--lien pour les carrousels-->
					<link rel="stylesheet" href="../assets/owl.carousel.min.css"/>

          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
          <script src="js/jquery.mb-comingsoon.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

                  <link rel="stylesheet" href="assets/owl.theme.default.min.css"/>
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
                  <link href="css/css.css" rel="stylesheet"/>

​
    </head>

    <body>

	<?php
		require_once 'template/menu.php';
	 ?>

     <div class="container-fluid">
       <?php
        require_once 'includes/functions.php';
        @$page=securisation($_GET["page"]);
        if($page =="" || $page=="content")
        {
          include 'template/content.php' ;
        }
          else if($page== "livre"){

          include 'template/livre.php';
        }

        else if($page== "formemprunt"){

        include 'empruntbackend/formemprunt.php';
      }
        ?>
        </div>

      <?php
      include "template/footer.php";
      ?>

</body>

</html>
