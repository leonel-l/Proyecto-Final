<?php
session_start(); //Inicia Sesion
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Tienda Mascotas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootshape.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css'>
    
    <link href="css/estilos.css" rel="stylesheet">

    <style type="text/css">
        body{ font: 16px sans-serif; text-align: center; }

        .wf-container{margin: 0 -25px;
          padding: 0;
          font-size: 0;
          word-spacing: -4px;}
    </style>

    </head>
  <body>

    <div></br></br>
        <h1>Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenid@ a nuestro sitio.</h1>
    </div>
    
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
        <div align=center class="carousel-inner">
          <div class="item active">
            <img src="https://www.tottus.com.pe/static/landing/mascotas/mascotas_2/images/mascotas-banner-mobile.jpg" width=1000>
            <div class="carousel-caption">
            </div>
          </div>

          <div class="item">
            <img src="https://maskowe.com/media/wysiwyg/home/localiza-tu-tienda-cercana.jpg" width=1900>
            <div class="carousel-caption">
            </div>
          </div>

          <div class="item">
            <img src="https://chelseazonamascotas.com/wp-content/uploads/TiendaMascotasRetiro.jpg" width=1500>
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

    <h3 class="text-center">Nosotros &amp; Pet Shop</h3>

    <!-- Contenido -->
    <div class="container thumbs">

      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="https://estaticos.muyinteresante.es/uploads/images/article/5e53ccda5cafe849c002505d/mascotas.jpg" alt="" class="img-circle">
          <div class="caption">
            <h3 class="text-center">Nosotros</h3>
            <p>Pet shop nace debido a la gran demanda que existe actualmente prometiendo cumplir con las espectativas del consumidor.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="https://www.elcolombiano.com/documents/10157/0/580x549/0c184/580d365/none/11101/JMYI/image_content_35479950_20200330185914.jpg" alt="" class="img-circle">
          <div class="caption">
            <h3 class="text-center">Mision</h3>
            <p>La Misión de Tienda de Mascotas consiste en brindar una solución integral a la atención de la mascota, a partir de una inmejorable oferta de producto, precio, calidad y servicio.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="https://zaragozabuenasnoticias.com/wp-content/uploads/2019/10/mascotas-preferidas-espanoles.jpg" alt="" class="img-circle">
          <div class="caption">
            <h3 class="text-center">Vision</h3>
            <p>La Visión de Tienda de Mascotas es continuar siendo la empresa Nº 1 en la comercialización de productos para mascotas en la Región, operando con sucursales en las principales ciudades.</p>
          </div>
        </div>
      </div>

    </div>
    <!-- Fin Contenido -->

    <img align="center" width="300" height="375" src="img/perro.png">
    
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