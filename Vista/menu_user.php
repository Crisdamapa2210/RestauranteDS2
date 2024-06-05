<?php
 include("../navbar/dir_navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
      incluir_navbar();
   ?>
    <h1 class="bg-secondary d-flex justify-content-center align-content-center">Bienvenido, ¿Que se te antoja hoy?</h1>
    <div class="content-wrapper container-fluid">
    <div class="row no-gutters" style="height: 100vh;">
      <div class="col-3 sidebar d-flex flex-column bg-secondary">
        <!-- Contenido de la barra lateral -->
        <h2>Barra Lateral</h2><br><br>
        <p>Comida Rapida</p>
        <p>Reservas</p>
        <p>final</p>
      </div>

      <div class="col-9 content">
        <!-- Contenido principal -->
        <h1>Comida Principal</h1>
    <p>
        
    
            <div class="d-flex justify-content-around">
                <div>
                    <div class="card" style="width: 18rem;">
                        <img src="../imagen/hamburgesa.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hamburguesa</h5>
                            <p class="card-text">Hamburguesa artesanal con chips de carne y tocino </p>
                            <a href="hamburguesa.php" class="btn btn-primary">Mirame</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card" style="width: 18rem;">
                        <img src="../imagen/perro.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Perro</h5>
                            <p class="card-text">Perro elaborado e inventado por la casa con salsas variadas.</p>
                            <a href="#" class="btn btn-primary">Mirame</a>
                        </div>
                    </div>

                </div>
                <div> 
                    <div class="card" style="width: 18rem;">
                        <img src="../imagen/pizza.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pizza</h5>
                            <p class="card-text">variedad de pizzas armalas a tu gusto</p>
                            <a href="#" class="btn btn-primary">Mirame</a>
                        </div>
                    </div>

                </div>


            </div>
        
            
    </p>
      </div>
    </div>
  </div>
    
    
    <div class="#">
        <div>
            <div>
                

            </div>
            <div>


            </div>
            <div> 


            </div>


        </div>
    </div>



</body>
<?php
include("pie.php");
incluir_pie();
?>
</html>