<?php
$email= $_POST['email'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['admin'] = $email;

include('bd.php'); 

$consulta = "SELECT * FROM admin WHERE email='$email' AND contraseña='$contraseña'";
$consulta2= "SELECT Activo from admin where email='$email' ";
$resultado = mysqli_query($conexion,$consulta);
$filas = mysqli_num_rows($resultado);
$resultado2=mysqli_query($conexion,$consulta2);
$fila2=mysqli_num_rows($resultado2);
$stmt = $conexion->prepare("SELECT Activo FROM admin WHERE email =? AND contraseña = ?");
$stmt->bind_param("ss", $email, $contraseña);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($activo);
$stmt->fetch();


if ($stmt->num_rows > 0) {
    if ($activo == 1) {
        if ($filas) {
            header("location: ../Vista/menu_admin.php");
        }else {       
            include("../Vista/login_admin2.php");
            ?>
            <br>
            <h3 class="bad bg-danger d-flex justify-content-center">Usuario o contraseña equivocados</h3>
            <?php
    }}else{
        ?>
        <br>
        <h3 class="bad bg-danger d-flex justify-content-center">Usuario Bloqueado</h3>
        <?php

             } 
        
}else{
?>
<br>
<h3 class="bad bg-danger d-flex justify-content-center">Usuario No Existe</h3>
<?php 
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>