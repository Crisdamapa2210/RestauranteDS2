<?php
$id = $_POST['id'];
session_start();
$_SESSION['ID'] = $id;

include('bd.php'); 

$consulta = "DELETE FROM clientes WHERE id=$id";

$resultado = mysqli_query($conexion,$consulta);



mysqli_close($conexion);


header("Location: mostrar/mostrar_usuarios.php")

?>