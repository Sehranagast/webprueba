<?php

    if(empty($_GET["usuario"])){
        header("Location:index.php?error=404");
        die();
    }


    $usuario = $_GET["usuario"];

?>

<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="index.html">
</head>
<body>
<header>
        <nav class="navbar transparent navbar-inverse navbar-static-top hr">
    <div class="container">
      
    <a class="navbar-brand" href="index.php?seccion=index">WarcraftMovie</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>
        <nav class="navbar bg-primary navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

       
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav mr-auto">
             
                <li class="nav-item <?= !empty($_GET["seccion"]) && $_GET["seccion"] == "index" ? "active" : ""; ?>">
                    <a class="nav-link" href="index.php?seccion=index">Index</a>
                </li>
                <li class="nav-item <?= !empty($_GET["seccion"]) && $_GET["seccion"] == "galeria" ? "active" : ""; ?>">
                    <a class="nav-link"href="galeria.php?seccion=galeria">Galeria</a>
                </li>
                <li class="nav-item <?= !empty($_GET["seccion"]) && $_GET["seccion"] == "registro" ? "active" : ""; ?>">
                    <a class="nav-link"href="registro.php?seccion=registro">Registro</a>
                </li>

            </ul>
        </div>

    </nav>
    </header>
        <div class="row">
            <div class="col">
            <h1 class="text-center">¡Bienvenido a Azeroth!</h1>          
            </div>
        </div>



        <div class="row justify-content-center">
          <div class="col-6 ">
              
            <p class="text-center">Gracias <b class="text-success"><?= $usuario ?></b> por registrarte.</p>

            
          </div>
        </div>

    </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>