<?php
$id = $_POST["ID"];
$new_usuario = $_POST["new_usuario"];
$new_contraseña = $_POST["contraseña"];
$new_telefono = $_POST["telefono"];
$estado = $_POST["estado"];
session_start();
$_SESSION['ID'] = $id;

include('bd.php'); 

$consulta = "UPDATE admin SET Usuario = '$new_usuario', Contraseña= '$new_contraseña', Telefono= '$new_telefono', Activo='$estado' WHERE id = $id";

$resultado = mysqli_query($conexion,$consulta);


mysqli_close($conexion);


header("Location: mostrar/mostrar_admins.php")

?>