<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Tienda Mascotas - Accesorio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootshape.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

    <!-- Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css'>
    
    <link href="css/estilos.css" rel="stylesheet">

    </head>
  <body>

    <!-- Navbar -->
    <?php
        include "encabezado/navbar.php";    
    ?>
    <!-- Fin Navbar -->
      
    <!-- Slider -->
    <div class="jumbotron">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Imagenes -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/accesorio1.jpg" width=1500>
            <div class="carousel-caption">
            </div>
          </div>
          <div align=center class="item">
            <img src="img/accesorio2.jpg" width=1000>
            <div class="carousel-caption">
            </div>
          </div>
          <div align=center class="item">
            <img src="img/accesorio3.jpg" width=1000>
            <div class="carousel-caption">
            </div>
          </div>
        </div>

        <!-- Control -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <!-- Fin Slider -->

    <h3 class="text-center">Accesorios &amp; Pet Shop</h3>
    
    <!-- Contenido -->
    <div class="container thumbs">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/juguete1.jpg" width=300>
          <div class="caption">
            <h3 class="text-center">JUGUETE PLUSH MOUSE</h3>
            <p>Juguete de gato. Divertidisimo para tu mascota..</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/juguete2.jpg" width=300>
          <div class="caption">
            <h3 class="text-center">MASAJEADOR PARA GATO</h3>
            <p>Cepillo masajeador para gato.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/juguete3.jpg" width=300>
          <div class="caption">
            <h3 class="text-center">COMEDERO CATIT PLAY</h3>
            <p>Comedero interactivo con juegos para tu gato.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/juguete4.jpg" width=300>
          <div class="caption">
            <h3 class="text-center">JUGUETE HUESO DE GUABU PARA PUPPY</h3>
            <p>Juguete para cachorro. Multicolor para su entretenimiento.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/juguete5.jpg" width=300>
          <div class="caption">
            <h3 class="text-center">PISCINA PLEGABLE SUMMER VIBES PARA PERRO</h3>
            <p>La piscina para perros más fácil de montar.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/juguete6.jpg" width=300>
          <div class="caption">
            <h3 class="text-center">JUGUETE CUERDA GUABU PARA PUPPY</h3>
            <p>Juguete para cachorro. Cuerda multicolor para su entretenimiento.</p>
          </div>
        </div>
      </div>

    </div>
    <!-- Fin Contenido -->

    <!-- Footer -->
    <?php
       include "encabezado/footer.php"; 
    ?>
    <!-- Fin Footer -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
  </body>
</html>