<!DOCTYPE html>
<html>
<head>
	<title>Registrar vendedor</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../styleLogin.css">
</head>
<body>
    <form method="post">
    	<h1>Registrar vendedor</h1>
		<a href="../menu_admin.php">volver</a>
    	<input type="text" name="Usuario" placeholder="Nombre completo">
		<input type="text" name="Cedula" placeholder="Identificacion">
        <input type="text" name="Telefono" placeholder="Telefono">
    	<input type="password" name="Contraseña" placeholder="Contraseña">
        <input type="password" name="Confirmar_contraseña" placeholder="Confirmar contraseña">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("../registros/registrar_vendedor.php");
        ?>
</body>
</html>