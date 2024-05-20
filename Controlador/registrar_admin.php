<?php 
include("../bd.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['Usuario'])>=1 && 
        strlen($_POST['Cedula'])>=1 &&
        strlen($_POST['Telefono'])>=1 &&
        strlen($_POST['Contraseña'])>=1 &&
        strlen($_POST['Confirmar_contraseña'])>=1) {
        if ($_POST['Contraseña'] == $_POST['Confirmar_contraseña']) {
            $usuario1 =($_POST['Usuario']);
            $contraseña = ($_POST['Contraseña']);
            $cedula = ($_POST['Cedula']);
            $telefono = ($_POST['Telefono']);
            $consulta= "INSERT INTO admin(Usuario, contraseña, Cedula, Telefono, Activo) VALUES ('$usuario1','$contraseña','$cedula','$telefono',1)";
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