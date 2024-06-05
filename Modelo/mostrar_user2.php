<?php
include("bd.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>mostrar administradores</title>
</head>
<body>

<button><a href="../Vista/menu_vendedor.php"style="color:#0F0908;">volver</a></button>
<br>

<table class="table table-striped-columns">
<tr>
      <th scope="col">email</th>
      <th scope="col">usuario</th>
      <th scope="col">cedula</th>
      <th scope="col">telefono</th>
      <th scope="col">estado</th>
    </tr>

    <?php 
    $sql="SELECT * FROM clientes";
    $result=mysqli_query($conexion, $sql);

    while($mostrar=mysqli_fetch_array($result)){
    ?>

    <tr>
        <td><?php echo $mostrar['email']?></td>
        <td><?php echo $mostrar['usuario']?></td>
        <td><?php echo $mostrar['cedula']?></td>
        <td><?php echo $mostrar['telefono']?></td>
        <td><?php echo $mostrar['activo']?></td>
    </tr>
    <?php 
    }
    ?>
</table>
</body>
</html>