<?php
    include("../navbar/dir_navbar.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar correo</title>
</head>
<body>
<?php
      
   ?><br>
    <div class=" d-flex justify-content-center">
    <form class=" col-9 p-3 rounded-5 " method="post">
    <label for="email">Nombre</label>
        <input type="text" id="name" name="namee" value="Food's Store" required>
        <br>
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" value="<?php echo($_POST[$email])?>" required>
        <br>
        <label for="subject">Asunto:</label>
        <input type="text" id="subject" name="asunto"
                
        required>
        <br>
        <label for="message">Mensaje:</label>
        <textarea id="message" name="msg" value="su pedido es <?php
            echo(($_POST["$descripcion"])  ($_POST["$cantidad"])); 
        ?>buen provecho muak " required></textarea>
        <br>
        <input type="submit" name="enviaremail" value="Enviar">
    </form>
    </div>
    <?php
        include("send_email.php")
    ?>
    
</body>
</html>

</>
<?php
include("pie.php");
incluir_pie();
?>
</html>