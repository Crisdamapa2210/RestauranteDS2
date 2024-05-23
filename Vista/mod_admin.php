<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styleLogin.css">
</head>
<body>
<?php
      include("../navbar/navbar_vista.php");
   ?>
    <form action="validacionmodad.php" method="post">
        <h1>Modificacion de admins</h1>
        <p><input type="text" placeholder="ingrese su usuario" name="usuario"></p>
        <input type="submit" value="Completar   "> 
        <p><input type="text" placeholder="ingrese su usuario" name="contraseña"></p>
        <p><input type="text" placeholder="ingrese su usuario" name="cedula"></p>
        <p><input type="text" placeholder="ingrese su usuario" name="telefono"></p>
        <p><input type="text" placeholder="ingrese su usuario" name="activo"></p>
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>