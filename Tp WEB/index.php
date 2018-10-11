<!doctype html>
<?php

    require_once("configuraciones.php");
   
    

?>
<html lang="en">
  <head>
    <title>WarcraftMovie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
<body background="img/prot.jpg">
  <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
    <?php
              if(!empty($_GET["error"]) && $_GET["error"] == "404" ):
       ?>
           <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>404!</strong> Error, el sitio no existe
                </div>

        <?php
            endif;
        ?>
          <div class="container-fluid">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/fondo.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Bienvenidos</h1>
                            <p>Pagina dedicada a Warcraft</p>
                            <a href="informacion.php">
                                <button class="btn btn-primary" class="nav-link">Informacion</button>
                            </a>
                        </div>
                      </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/anduin.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Anduin Lothar</h1>
                            <p>Comandante de la Alianza</p>
                            <a href="vermasdeanduin.php" class="nav-link">
                                <button class="btn btn-success">Ver mas de Anduin</button>
                            </a>
                        </div>
                      </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/orgrim.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Orgrim Doomhammer</h1>
                            <p>Jefe de guerra de la Horda</p>
                            <a href="vermasdeorgrim.php" class="nav-link">
                                <button class="btn btn-danger" class="nav-link">Ver mas de Orgrim</button>
                                </a>
                             </div>
                     </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
               <div class="row">
                   <div class="col-12">
                      <br>
                       <h1 class="text-center">Warcraft: el primer encuentro de dos mundos</h1><br><br>
                       <p>La película está protagonizada por Travis Fimmel, Paula Patton, Ben Foster, Dominic Cooper, Toby Kebbell,
                        Ben Schnetzer, Robert Kazinsky y Daniel Wu.
                         La compañía de videojuegos Blizzard Entertainment anunció la película por primera vez en 2006 como un proyecto colaborativo con Legendary Pictures.
                       El rodaje comenzó el 13 de enero de 2014 y terminó el 23 de mayo del mismo año.
                        La película fue lanzada por Universal Pictures y se estrenó el 3 de junio de 2016.</p>
                 <br><br> <h2 class="text-center">Sinopsis</h2><br><br>
                  <p>El pacífico reino de Azeroth está a punto de entrar en guerra
                   contra unos terribles invasores que han dejado su destruido reino para colonizar otro.
                    Dos héroes están a punto de chocar y cambiar el destino de su familia, su pueblo y su hogar.</p>
                   </div>
               </div>
              
           </div>
             <div class="container">
                    <div class="row">
                          <div class="col-12">
                               <h1 class="text-center">Curiosidades</h1>
          <p>  1- Aplazada debido a Star Wars 
          La película de Warcraft se planeaba estrenar los primeros días de diciembre del 2015, sin embargo, con el anuncio del estreno de la séptima entrega de Star Wars (The Force Awakens), los productores decidieron aplazar su lanzamiento hasta junio para que no perdiera relevancia entre el público geek.
          <hr><p>
          2- Johnny Depp pudo ser el protagonista, al igual que Colin Farrell  
          En las etapas previas de producción de la película, Johnny Depp, quien es un fanático de World of Warcraft, estuvo muy interesado en interpretar al protagonista de la cinta. Sin embargo nunca resultó. De igual forma, Colin Farrell también estuvo llamado a presentar casting para actuar en esta y de hecho estuvo en charlas con el director. Al final, al igual que con Johnny Depp, esto no quedó en nada y uno de los motivos pudo haber sido que los productores no buscaban famosos entre los actores.   
          </p><hr><p>
          3- La película tuvo una década de desarrollo
          La idea de hacer una película de Warcraft surgió en Blizzard desde las fechas cercanas al lanzamiento de World of Warcraft, no solo por el apasionante universo, sino para aprovechar la fuerza en su momento del fenómeno en que se estaba convirtiendo el juego. Sin embargo tampoco querían afanar la película y tuvieron que pasar muchos años para poder conseguir una productora (Legendary) que satisficiera todos sus requerimientos. Sin embargo con esta ya seleccionada, el guión de la película se modificó varias veces y el director también, para finalmente empezar a rodarse en el 2014 de la mano de Duncan Jones como líder del proyecto.
        </p><hr><p>
          4- Mega postproducción
          El rodaje de la película duró 123 días comprendidos entre enero y mayo del 2014, los siguientes 22 meses se dedicaron a tareas de postproducción, es decir, agregar los efectos especiales y gráficos por computador, además de las labores tradicionales como seleccionar cuáles escenas van y cuáles no en la cinta.
         </p> <hr><p>
          5- Un nuevo idioma para la película
          Durante la película veremos muchos momentos donde los personajes hablarán en un extraño idioma. Se trata del Orcish, un dialecto creado específicamente para la película y seguramente para el universo de Warcraft.
        </p><hr><p>
          6- Un guionista del juego es el escritor de la película
          El texto original de la película fue encargado por Legendary a Chris Metzen, quién es reconocido por ser el escritor líder del equipo encargado de World of Warcraft, y además, ser la voz de diferentes personajes en el juego. La historia eso si pasó por mano de los guionistas siendo finalmente Duncan Jones, el mismo director, quien escribió el guión de la cinta.
          </p><hr><p>
          7- A diferencia del juego, aquí no podrás elegir tu bando
          En el juego MMO puedes elegir tu bando y hay dos facciones claramente marcadas. La película nos muestra que realmente en las dos facciones hay buenos y malos, precisamente por eso, va a ser difícil elegir un bando como fuera el caso del mismo juego, o lo que hicieron películas recientes como Civil War y Batman v Superman.
         </p> <hr><p>
          8- Utilería muy realista
          Por lo que se ha visto en fotos y videos del making-of de la película, es que hay un uso excesivo de CGI (gráficos generados por computador). Sin embargo, esto está un poco fuera de la realidad ya que para las escenas principales y de acción, el equipo de producción tuvo que realizar armas a escala real, muchas de estas gracias al poder de las impresoras 3D. En total se construyeron mas de 150 espadas y escudos para la filmación, sin contar otro tipo de armas e indumentaria utilizada.
        </p><hr><p>
          9- Un gimnasta profesional fue el maestro orco
          La película tiene muchas escenas de acción y gracias a la naturaleza de los orcos y otros personajes, los movimientos que hicieron los actores tuvieron que ser un tanto diferentes debido a su anatomía. Terry Notary, un reconocido gimnasta profesional que también ha trabajado en el Cirque du Soleil, fue el encargado de crear las coreografías y dirigir el movimiento de los actores basado en todo lo que vio en el juego.
          </p><hr>
         <p> 10- El elenco ama Warcraft
          Al menos la gran mayoría de actores que participaron en roles protagónicos, conocían qué era Warcraft y eran fanáticos del MMORPG. Este es el caso de Robert Kazinsky, quién interpretó a Orgrim Doomhammer, uno de los protagonistas de la película que en una reciente entrevista en Comic-Con, incluso contó la anécdota de cómo una novia le terminó su relación debido a que él pasaba mucho tiempo jugando WoW. Otro ferviente fan de WoW es Duncan Jones, el director de la película.
          </p>
          </div>
          </div>
          </div>
       
          <main id="multimedia">
       <section>
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <h1 class="text-center">Trailer</h1>
                   </div>
               </div>
               <div class="row">
                   <div class="col-12">
                       <video class="img-fluid rounded" src="img/trailer.mp4" controls type="trailer.mp4"></video>
                   </div>
               </div>
           </div>
       </section>
   </main>


           <footer>
 
             <div class="container">
            <div class="row">
                <div class="col-12">
           <h3 class="text-center">copyright - 2018</h3>
                   </div>
            </div>
        </div>
   </footer>
  <?php
   ini_set("display_errors", 1);
   error_reporting(E_ALL);

   ?>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script>
        $('.carousel').carousel({
            interval: 3500 })
    </script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
        </body>
</html>
