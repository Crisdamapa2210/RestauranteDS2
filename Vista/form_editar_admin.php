<?php
      include("../navbar/dir_navbar.php");
      include("../Modelo/bd.php");
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleLogin.css">

    <title>Document</title>
</head>
<body class=bg-info>
<?php
    incluir_navbar();
    if(isset($_POST["enviar"])){
        $cedula=$_POST["cedula"];
        $sql="SELECT * FROM admin where Cedula=$cedula";
        $result=mysqli_query($conexion, $sql);

        while($mostrar=mysqli_fetch_array($result)){    
            ?>
        <form class="d-flex justify-content-center" action="../Controlador/editar_admin.php" method="post">

            <div class="bg-white p-5 rounded-5">
                <div class="d-flex justify-content-center"><img src="../imagen/login.png" height="130px" width="130px"></div>
                    <h2>Modificar datos</h2><br>
                    <p class="d-flex justify-content-center"><input class="form-control" type="text" value="<?php echo $mostrar["Cedula"]?>" name="new_cedula"></p>
                    <p class="d-flex justify-content-center"><input class="form-control" type="text" value="<?php echo $mostrar["Usuario"] ?>"  name="new_usuario"></p>
                    <p class="d-flex justify-content-center"><input class="form-control" type="text" value="<?php echo $mostrar["Contraseña"] ?>" name="new_contraseña"></p>
                    <p class="d-flex justify-content-center"><input class="form-control" type="email" value="<?php echo $mostrar["email"] ?>" name="new_email"></p>
                    <p class="d-flex justify-content-center"><input class="form-control" type="text"  value="<?php echo $mostrar["Telefono"] ?>"name="new_telefono"></p>
                    <p class="d-flex justify-content-center"><select name="estado" id="estado"class="form-select">
                        <option value="1">Activo</option> 
                        <option value="0">Inactivo</option>
                    </select></p>
                
                    <input type="submit" name=editar value="editar">
                 </div>
            </div>
        </form><?php
        }
    }
?>
    
</body>
<?php
include("pie.php");
incluir_pie();
?>
</html> 