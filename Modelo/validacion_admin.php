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
    
    include("../Vista/login_admin2.php");
    ?>
    <br>
    <h1 class="bad bg-danger d-flex justify-content-center">Usuario o contraseña equivocados</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>