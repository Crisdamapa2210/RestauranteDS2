<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleLogin.css">

    <title>Document</title>
</head>
<body>
    <?php
      include("../navbar/navbar_vista.php");
   ?>

<form action="editar_usuario.php" method="post">

        <h1>Editar datos</h1>
        <p><input type="number" placeholder="ID del usuario a modificar" name="ID"></p>
        <p><input type="text" placeholder="ingrese su nuevo usuario" name="new_usuario"></p>
        <p><input type="password" placeholder="ingrese su nueva contraseña" name="contraseña"></p>
        <p><input type="text" placeholder="ingrese su nuevo telefono" name="telefono"></p>
        <p><input type="number" placeholder="estado" name="estado"></p>


        <input type="submit" value="editar">
    </form>
    
</body>
</html>