<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;

include('bd.php'); 

$consulta = "SELECT * FROM admin WHERE Usuario='$usuario' AND contraseña='$contraseña'";

$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("location: ../Vista/menu_admin.php"); 
} else {
    header("location: ../Vista/login_admin2.php"); // Redirigir de vuelta al formulario de inicio de sesión
    exit; // Terminar el script para evitar ejecutar más código
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
