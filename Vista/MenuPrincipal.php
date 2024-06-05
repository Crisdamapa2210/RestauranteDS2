<?php
include("../navbar/dir_navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
<?php incluir_navbar(); ?>

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../imagen/hamburguesa-1080X550.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../imagen/perro.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../imagen/pizza.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div><br><br>
<center><h1>Bienvenido a Food's Store</h1></center>

  
    <center>
    <h3 class="lead">en Food's Store encontraremos una variedad de comida rapida de nuestro restaurante.<br>
                    En Esta pagina podras hacer reservaciones en nuestro restaurante y hacer pedidos a domicilio <br>
                    Pides por internet y pagas cuando recibas el pedido... Prueba esta nueva forma de <br>
                    disfrutar desde casa tus antojos preferidos.<br><br>
                    
                    La idea apenas comienza, dejanos tu sugerencia de como mejorar nuestro servicio y <br>
                    nuestra pagina web para una mejor atencion al cliente<br>
    </h3><br><h2><b>¡¡ Registrate Ahora !!</b></h2><br>
    <a href="signup_ususario.php"><button class="btn btn-primary">Registrate</button></a>
    </center>
<br><br><br><br>

</body>
<?php
include("pie.php");
incluir_pie();
?>
</html>