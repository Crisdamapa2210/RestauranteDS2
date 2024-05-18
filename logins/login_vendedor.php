<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../styleLogin.css">
</head>
<body>
    <form action="../validaciones/validacion_vendedor.php" method="post">
        <h1>Ingreso de vendedor</h1>
        <p><input type="text" placeholder="ingrese su usuario" name="usuario"></p>
        <p><input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
        <p><a href="login_admin.php">administrador</a></p>
        <p><a href="login_user.php">Usuario</a></p>
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>