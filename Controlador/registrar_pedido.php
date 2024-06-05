<?php 
include("../Modelo/bd.php");

if (isset($_POST['pedir'])) {
    if (strlen($_POST['name'])>=1 && 
        strlen($_POST['descripcion'])>=1 &&
        strlen($_POST['direccion'])>=1 &&
        strlen($_POST['telefono'])>=1 &&
        strlen($_POST['cantidad'])>=1 &&
        strlen($_POST['email'])) {        
            $name =($_POST['name']);
            $descripcion =($_POST['descripcion']);
            $cantidad=($_POST['cantidad']);
            $direccion = ($_POST['direccion']);
            $telefono =($_POST['telefono']);
            
            
            $consulta= "INSERT INTO pedidos(Direccion,  telefono, descripcion, Usuario, cantidad, Completado) VALUES ('$direccion','$telefono','$descripcion','$name','$cantidad', 0)";
            $resultado = mysqli_query($conexion, $consulta);
        }if ($resultado) {
            $email= ($_POST["email"]);
            $subject = "Food's Store";
            $message = "Gracias por su compra, espero sea feliz muak";
            $header="From: noreply@example.com". "\r\n";
            $header.= "Reply-To: noreply@example.com". "\r\n";
            $header.= "X-Mailer: PHP/". phpversion();
            $mail= mail($email,$subject,$message,$header);

            if ($mail) {
                echo "Correo enviado exitosamente";
            } else {
                echo "Error al enviar el correo";
            }

                ?>
                <br><center><h3 class='ok'>¡Solicitud Registrada!</h3></center>
                
                <?php
                
            }else {
                ?>
                <br><center><h3 class='bad'>¡Algo ha salido mal!</h3></center>
                
                <?php
            }
        }else{
                ?>
                <br><center><h3 class='bad'>completa todos los campos</h3></center>
                
                <?php
        }

mysqli_close($conexion);
?>