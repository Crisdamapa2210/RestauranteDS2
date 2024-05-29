<?php
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['email'] = $email;

include('bd.php'); 

$consulta = "SELECT * FROM clientes WHERE email='$email' AND contraseña='$contraseña'";
$consulta2= "SELECT Activo from clientes where email='$email' AND Contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);
$resultado2= mysqli_query($conexion,$consulta2);
$filas = mysqli_num_rows($resultado);
$filas2= mysqli_num_rows($resultado2);

if($filas2=1){
    if ($filas) {
        header("location: ../Vista/menu_user.php"); 
    } else {   
        include("location: ../Vista/login_user2.php");
        ?>
        <h1 class="bad">Usuario o contraseña equivocados</h1>
        <?php
    }
}else{
?>
<h3 class="bad">Usuario Bloqueado</h3>
<?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>