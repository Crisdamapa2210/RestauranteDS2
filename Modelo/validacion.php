<?php
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['email'] = $email;

include('bd.php'); 

$consulta = "SELECT * FROM clientes WHERE email='$email' AND contraseña='$contraseña'";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("location: ../Vista/menu_user.php"); 
} else {   
    include("location: ../Vista/login_user2.php");
    ?>
    <h1 class="bad">Usuario o contraseña equivocados</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>