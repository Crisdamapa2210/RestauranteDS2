<?php
    include("../navbar/dir_navbar.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu administrador  </title>
    <link rel="stylesheet" type="text/css" href="styleLogin.css">

</head>
<body>
<?php
      incluir_navbar();
   ?>

<center><h1>Menu de administrador</h1></center>
    
    <form class="d-flex justify-content-center"  method="post">
    <div class="col-9">
    
    <div class="d-flex justify-content-between">
        <div>
            <div class="p-2">
            <h4>administradores</h4>        
            <button type="button" name="volver">
            <a href="signup_admin.php" style="color:#0F0908;">Crear administrador nuevo</a></button>        
            </div>

            <div class="p-2">
            <button type="button" class="">
            <a href="../Modelo/mostrar_admins.php" style="color:#0F0908;">mostrar administradores</a></button>
            </div>

            <div class="p-2">
            <button type="button" class="">
            <a href="mod_admin.php" style="color:#0F0908;">modificar administradores</a></button>
            </div>
            
        </div>
        <div>
            <div class="p-2">
            <h4>vendedores</h4>
            <button type="button" class="">
            <a href="signup_vendedor.php" style="color:#0F0908;">Crear vendedor nuevo</a></button>
            </div>

            <div class="p-2">
            <button type="button" class=" ">
            <a href="../Modelo/mostrar_vendedores.php" style="color:#0F0908;">mostrar vendedores</a></button>
            </div>

        </div>
        <div>
            <div class="p-2">
            <h4>Usuarios</h4>        
            <button type="button" name="volver">
            <a href="signup_ususario.php" style="color:#0F0908;">Crear Usuario nuevo</a></button>        
            </div>

            <div class="p-2">
            <button type="button" class="">
            <a href="../Modelo/mostrar_usuarios.php" style="color:#0F0908;">mostrar usuarios</a></button>
            </div>

            <div class="p-2">
            <button type="button" class="">
            <a href="mod_user.php" style="color:#0F0908;">modificar usuarios</a></button>
            </div>
        </div>      
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
      
    </form>
</body>
<?php
include("pie.php");
incluir_pie();
?>
</html>