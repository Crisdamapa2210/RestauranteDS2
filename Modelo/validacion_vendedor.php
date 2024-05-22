<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;

include('../bd.php'); 

$consulta = "SELECT * FROM vendedores WHERE Usuario='$usuario' AND Contraseña='$contraseña'";

$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("location: https://www.youtube.com/"); 
} else {
    include("login_vendedor.php");
    ?>
    
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>