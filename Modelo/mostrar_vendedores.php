<?php
include("../bd.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>mostrar vendedores</title>
</head>
<body>

<a href="../menu_admin.php">volver</a>
<br>

<table class="table table-striped-columns">
<tr>
      <th scope="col">ID</th>
      <th scope="col">usuario</th>
      <th scope="col">identificacion</th>
      <th scope="col">telefono</th>
      <th scope="col">estado</th>
    </tr>

    <?php 
    $sql="SELECT * FROM vendedores";
    $result=mysqli_query($conexion, $sql);

    while($mostrar=mysqli_fetch_array($result)){
    ?>

    <tr>
        <td><?php echo $mostrar['id']?></td>
        <td><?php echo $mostrar['Usuario']?></td>
        <td><?php echo $mostrar['Cedula']?></td>
        <td><?php echo $mostrar['Telefono']?></td>
        <td><?php echo $mostrar['Activo']?></td>
    </tr>
    <?php 
    }
    ?>
</table>
<form action="../borrar_ven.php" method="post">
        <h1>BORRAR</h1>
        <p><input type="number" placeholder="ID" name="id"></p>
        <input type="submit" value="Ingresar">
    </form>
    <br><br>

    <button type="button" class="btn btn-warning"><a href="../form_editar_ven.php" style="color:#0F0908;">editar vendedores</a></button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>