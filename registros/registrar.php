<?php 
include("../bd.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['Usuario'])>=1 && 
    strlen($_POST['Telefono'])>=1 &&
        strlen($_POST['Direccion'])>=1 &&
        strlen($_POST['Contraseña'])>=1 &&
        strlen($_POST['Confirmar_contraseña'])>=1) {
        if ($_POST['Contraseña'] == $_POST['Confirmar_contraseña']) {
            $usuario1 =($_POST['Usuario']);
            $contraseña = ($_POST['Contraseña']);
            $telefono =($_POST['Telefono']);
            $direccion =($_POST['Direccion']);
            $consulta= "INSERT INTO clientes(Usuario, Contraseña, Telefono, Dirección, Activo) VALUES ('$usuario1','$contraseña','$telefono','$direccion', 1)";
            $resultado = mysqli_query($conexion, $consulta);
            if ($resultado) {
                ?>
                <h3 class='ok'>¡Te has registrado correctamente!</h3>
                <?php
            }else {
                ?>
                <h3 class='bad'>¡Algo ha salido mal!</h3>
                <?php
            }
        }else{
                ?>
                <h3 class='bad'>Las cotraseñas no coinciden</h3>
                <?php
        }
    }else {
        ?>
                <h3 class='bad'>Completa todos los campos</h3>
                <?php
    }
}
?>