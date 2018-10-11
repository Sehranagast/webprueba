<!doctype html>



<html lang="en">
  <head>
    <title>Title</title>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="index.html">
  <body>
  <header>
  <nav class="navbar transparent navbar-inverse navbar-static-top hr">
            <div class="container">
            <li class="nav-item <?= !empty($_GET["seccion"]) && $_GET["seccion"] == "index" ? "active" : ""; ?>">
                    <a class="nav-link" href="index.php?seccion=index">WarcraftMovie</a>
                </li>
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

            </ul>
        </div>

    </nav>
    </header>
    <div class="row">
            <div class="col">
                <h1 class="text-center">Registro</h1>
            </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-6 ">
            <?php
              if(isset($_GET["error"]) && $_GET["error"] == "true"):
            ?>

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                  </button>
                  <strong>Error!</strong> Los campos <b>Usuario</b> y <b>Password</b> son obligatorios.
                </div>
            <?php
              endif;
            ?>
            <form action="procesar-registro.php" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Apellido</label>
                <input type="text" name="apellido" class="form-control" placeholder="Ingrese su apellido">
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" placeholder="usuario@gmail.com">
                <small id="emailHelp" class="form-text text-muted">Ingrese su email de google</small>
              </div>
              
              
              <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input type="text" name="usuario" class="form-control" placeholder="usuario">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" name="password" class="form-control" placeholder="*********">
                <small id="emailHelp" class="form-text text-muted">La clave debe contener un número y una letra en Mayúscula</small>
              </div>

              <div class="form-group">
                <label>¿Cuál es tu personaje favorito?</label>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="personajes[]"  value="Lothar">
                    <b class="text-primary">Lothar</b>
                  </label>
                </div>
                
                

                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="personajes[]"  value="Khadgar">
                    <b class="text-primary">Khadgar</b>
                  </label>
                </div>

                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="personajes[]"  value="Medivh">
                    <b class="text-primary">Medivh</b>
                  </label>
                </div>

                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="personajes[]"  value="Durotan">
                    <b class="text-danger">Durotan</b>
                  </label>
                </div>

                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="personajes[]"  value="Garona">
                    <b class="text-danger">Garona</b>
                  </label>
                </div>

                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="personajes[]"  value="Orgrim">
                    <b class="text-danger">Orgrim</b>
                  </label>
                </div>

              </div>

              <button type="submit" class="btn btn-success btn-block">Registrarse</button>
            </form>
          </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
            </body>
  </html>