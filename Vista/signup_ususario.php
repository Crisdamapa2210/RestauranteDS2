<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../styleLogin.css">
</head>
<body>
    <form method="post">
    	<h1>Registrarse</h1>        
    	<input type="text" name="Usuario" placeholder="Nombre completo">
         <input type="text" name="Telefono" placeholder="Telefono">
        <input type="text" name="Direccion" placeholder="Dirección">
    	<input type="password" name="Contraseña" placeholder="Contraseña">
        <input type="password" name="Confirmar_contraseña" placeholder="Confirmar contraseña">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("../registros/registrar.php");
        ?>
</body>
</html>