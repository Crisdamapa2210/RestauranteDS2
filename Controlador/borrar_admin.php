<?php
$id = $_POST['cedula'];
session_start();
$_SESSION['ID'] = $id;

include('../Modelo/bd.php'); 

$consulta = "DELETE FROM admins WHERE cedula=$id";

$resultado = mysqli_query($conexion,$consulta);



mysqli_close($conexion);


header("Location: mostrar/mostrar_vendedor.php")

?>