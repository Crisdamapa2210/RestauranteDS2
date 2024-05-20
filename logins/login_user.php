<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../styleLogin.css">
</head>
<body>
    <?php
    include("../navbar/MenuPrincipal.php");
    ?>
    <form action="../validaciones/validacion.php" method="post">
        <h1>Ingreso de usuarios</h1>     
        <p><input type="text" placeholder="ingrese su usuario" name="usuario"></p>
        <p><input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>       
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>