<?php
include("bd.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>mostrar Pedidoss</title>
</head>
<body>
<button><a href="../Vista/menu_vendedor.php" style="color:#0F0908;">volver</a></button>

<br>

<table class="table table-striped-columns">
<tr>
    <th scope="col">Usuarios</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
      <th scope="col">Completado</th>
    </tr>

    <?php 
    $sql="SELECT * FROM pedidos";
    $result=mysqli_query($conexion, $sql);

    while($mostrar=mysqli_fetch_array($result)){
    ?>

    <tr>
    <td><?php echo $mostrar['Usuario']?></td>
        <td><?php echo $mostrar['Descripcion']?></td>
        <td><?php echo $mostrar['Telefono']?></td>
        <td><?php echo $mostrar['Direccion']?></td>
        <td><?php echo $mostrar['Completado']?></td>
</td>
    </tr>
    <?php 
    }
    ?>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

