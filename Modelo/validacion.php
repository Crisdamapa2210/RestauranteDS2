<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;

include('../bd.php'); 

$consulta = "SELECT * FROM clientes WHERE Usuario='$usuario' AND contraseña='$contraseña'";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("location: ../home.php"); 
} else {
    include("../logins/login_user.php");
    ?>
    <h1 class="bad">Usuario o contraseña equivocados</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>