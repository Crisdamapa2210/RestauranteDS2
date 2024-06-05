<?php
    include("../navbar/dir_navbar.php");
    include("../Modelo/bd.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aa</title>
</head>
<body>
    <?php incluir_navbar();
    $consulta = "SELECT precio FROM comida WHERE descripcion = 'Pizza'";
    $resultado = mysqli_query($conexion, $consulta);
    
if ($resultado) {
    $fila = mysqli_fetch_assoc($resultado);
    if ($fila) {
        $precio = $fila['precio'];
        }}
?>
    
      
    <div class="content-wrapper container-fluid">
    <div class="row no-gutters" style="height: 100vh;">
      <div class="col-3 sidebar d-flex flex-column bg-secondary"><br>
        <!-- Contenido de la barra lateral -->
       <center><img src="../imagen/pizza.jpg" alt="pizza rayquzaña" height="250px" width=300px></center>
       <center><h4> Pizza rayquaza's </h4></center>
      </div>

      <div class="col-9 content">
        <!-- Contenido principal -->
        <h1>Pizza</h1>
    <h4 class="lead">
        Traidas de donde traen las mejores hamburguesas de colombia con carne de rayquaza ahumada <br>
        perfectas para comidas familiares y muy reconocidas por los niños. <br><br>
        <b>Precio:<?php echo ($precio)?></b>
</h4>



    </div>



</body>
<?php
include("pie.php");
incluir_pie();
?>
</html>