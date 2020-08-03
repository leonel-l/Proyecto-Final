<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Tienda Mascotas - Contacto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootshape.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

    <!-- Fonts -->
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
    <div align="center" class="jumbotron">
        <img src="img/contacto1.png" width=1000>
      </div>
    </div>
    <!-- Fin Slider -->

    <h3 class="text-center">Contactanos &amp; Pet Shop</h3>

    <!-- Contenido -->
    <div class="container thumbs">
      <div class="col-sm-6 col-md-6">
        <div class="thumbnail">
          <img src="images/logo.png" width=400>
          <div class="text-center" class="caption">
            <h3>Contacto</h3>
            <p>Puede entrar en contacto con nosotros mediante estos canales:</p>
            <h4>Correo</h4>
            <p>
            Contacto:<a href="https://accounts.google.com/"> petshop@gmail.com</a></p>
            <h4>Celular</h4>
            <p>Llamanos: +51 987654321</p>
          </div>
        </div>
      </div>
      
      <div class="col-sm-2 col-md-6">
        <div class="thumbnail">
          <img src="img/contacto2.jpg" >
        </div>
      </div>

      <div class="col-sm-8 col-md-12"></br>
        <div class="thumbnail">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61238.54151772835!2d-71.57403117414263!3d-16.404049450630687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424a487785b9b3%3A0xa3c4a612b9942036!2zQXJlcXVpcGEsIFBlcsO6!5e0!3m2!1ses!2ses!4v1596473192023!5m2!1ses!2ses" width="1100" height="460" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
        </div>
      </div>
    </div>
    <!-- Fin Contenido -->

    <img align="left" width="300" height="375" src="img/perro.png">
    
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