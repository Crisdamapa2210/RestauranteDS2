<?php
    include("../navbar/dir_navbar.php");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class=bg-info>
    <?php incluir_navbar();?>
    <form class="d-flex justify-content-center bg-info "action="form_editar_usuario.php" method="post">
        <p><input type="text" name="cedula" placeholder="cedula del usuario "></p>
        <p><input type="submit" name="enviar"></p>
        
    </form>
</body>
</html>