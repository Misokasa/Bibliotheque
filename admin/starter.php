<<?php session_start();

include "../security/secure.php";

?>

<!DOCTYPE html>


<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title> Booknode </title>

                <!-- Font Awesome Icons -->
          <link rel="stylesheet" href="../css/all.min.css">

                  <!-- Theme style -->
          <link rel="stylesheet" href="../css/adminlte.min.css">

                  <!-- Google Font: Source Sans Pro -->
          <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>

    <body>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">La Grande Salle</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"> Mon Espace <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Univers </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"> Science - Fiction </a>
                <a class="dropdown-item" href="#"> Polar </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="#"> A la Une <span class="sr-only">(current)</span></a>
            </li>

          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Rechercher livre, auteur, ..." aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>


      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="Adminlte/index3.html" class="brand-link">
          <img src="../img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
           <span class="brand-text font-weight-light"> AdminLTE 3 </span>
        </a>
        <div class="sidebar">
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="../img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block"> <?php echo $_SESSION["user_firstname"]; ?> </a>
            </div>
          </div>

          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="starter.php?page=livrelist" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p> Livres </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.php?page=bibliolist" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p> Bibliothèque </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.php?page=userslist" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                    <p> Utilisateurs </p>
                </a>
              </li>
              <li class="nav-item">
                 <a href="starter.php?page=auteurlist" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p> Auteur </p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="starter.php?page=editeurlist" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p> Editeur </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="../identification/logout.php" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p><button type="button" class="btn btn-danger">Log Out</button></p>
                  </a>
              </li>
            </ul>
          </nav>
        </div>
      </aside>

      <div class="container-fluid">
        <?php
        include "../includes/functions.php";
        include "../includes/define.php";

        @$page=securisation($_GET["page"]);

        if(file_exists(@$chemin[$page])){
        include $chemin[$page];
          }
        ?>
      </div>

    <footer class="main-footer">

                  <!-- To the right -->
          <div class="float-right d-none d-sm-inline">
            Anything you want
          </div>
                  <!-- Default to the left -->
          <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io </a>.</strong> All rights reserved.

   </footer>

                <script src="../js/icon.js"></script>
                      <!-- jQuery -->
                <script src="../js/jquery.min.js"></script>
                      <!-- Bootstrap 4 -->
                <script src="../js/bootstrap.bundle.min.js"></script>
                      <!-- AdminLTE App -->
                <script src="../js/adminlte.min.js"></script>

    </body>


</html>
