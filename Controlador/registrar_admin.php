<?php 
include("../Modelo/bd.php");

if (isset($_POST['ingresar'])) {
    if (strlen($_POST['usuario'])>=1 && 
        strlen($_POST['email'])>=1 &&
        strlen($_POST['cedula'])>=1 &&
        strlen($_POST['telefono'])>=1 &&
        strlen($_POST['contraseña'])>=1 &&
        strlen($_POST['confirmar_contraseña'])>=1) {
        if ($_POST['contraseña'] == $_POST['confirmar_contraseña']) {
            $usuario1 =($_POST['usuario']);
            $email =($_POST['email']);
            $cedula=($_POST['cedula']);
            $contraseña = ($_POST['contraseña']);
            $telefono =($_POST['telefono']);
            
            $consulta= "INSERT INTO admin(usuario,  contraseña, email, cedula, telefono, Activo) VALUES ('$usuario1','$contraseña','$email','$cedula','$telefono', 1)";
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