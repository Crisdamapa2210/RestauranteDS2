<?php
$editar = $_POST["editar"];
$new_usuario = $_POST["new_usuario"];
$new_contraseña = $_POST["new_contraseña"];
$new_email=$_POST["new_email"];
$new_telefono = $_POST["new_telefono"];
$cedula=$_POST["new_cedula"];
$estado=$_POST["estado"];
session_start();
$_SESSION['editar'] = $editar;

include('../Modelo/bd.php'); 

$consulta = "UPDATE clientes SET Usuario = '$new_usuario', Contraseña= '$new_contraseña',email= '$new_email' ,Cedula= '$cedula' ,Telefono= '$new_telefono', Activo='$estado' WHERE cedula = $cedula";

$resultado = mysqli_query($conexion,$consulta);


mysqli_close($conexion);


header("Location: ../Modelo/mostrar_usuarios.php")

?>