<?php
    include("../navbar/dir_navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendedor</title>
</head>
<body>
<?php
   incluir_navbar();
?>
<center><h1>Menu del Vendedor</h1></center>    
<form class="d-flex justify-content-center"  method="post">
    <div class="col-9">
    
    <div class="d-flex justify-content-center">
        <div>
            <div class="p-2">
            <h4>Pedidos</h4>        
            <button type="button" name="volver">
            <a href="../Modelo/mostrar_pedidos.php" style="color:#0F0908;">Mostrar Pedidos</a></button>        
            </div>

            <div class="p-2">
            <button type="button">
            <a href="../Modelo/mostrar_user2.php" style="color:#0F0908;">Mostrar Usuarios</a></button>
            </div>

            <div class="p-2">
            <button type="button" >
            <a href="mostrar_reserva.php" style="color:#0F0908;">Mostrar Solicitud de reserva</a></button>
            </div>
            
        </div>
</div></div></form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
<?php
include("pie.php");
    incluir_pie();
?>
</html>