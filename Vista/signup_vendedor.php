<?php
include("../navbar/dir_navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styleLogin.css">
   
</head>

<body class="bg-secondary">
<?php incluir_navbar(); ?>
  <form class="bg-secondary d-flex justify-content-center"  method="post">
    <div class="bg-white col-3 p-3 rounded-5">
      <div 
        class="d-flex justify-content-center "><img src="../imagen/login.png" height="130px" width="130px">
      </div>
      <h2 class="d-flex justify-content-center">Registrar vendedor</h2>
      <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
      <div id="emailHelp" class="form-text">Ingrese su correo electronico</div>  

      <label for="exampleInputtext" class="form-label">Nombre de usuario</label>
      <input type="text" class="form-control" id="exampleInputtext" aria-describedby="emailText" name="usuario">
      <div id="emailText" class="form-text">Ingrese su correo electronico</div>

      <label for="exampleInputtext" class="form-label">Cedula</label>
      <input type="text" class="form-control" id="exampleInputtext" aria-describedby="emailText" name="cedula">
      <div id="emailText" class="form-text">Ingresa tu Cedula de ciudadania</div>

      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="contraseña">
      <div id="exampleInputPassword1" class="form-text">Ingrese su contraseña</div><br>

      <label for="exampleInputPassword2" class="form-label">Confirmar</label>
      <input type="password" class="form-control" id="exampleInputPassword2" name="confirmar_contraseña">
      <div id="exampleInputPassword1" class="form-text">confirme su contraseña</div><br>

      <label for="exampleInputTel" class="form-label">Telefono</label>
      <input type="text" class="form-control" id="exampleInputTel" aria-describedby="telHelp" name="telefono">
      <div id="emailHelp" class="form-text">Ingrese su Numero telefonico</div> <br>

      <button type="submit" class="btn btn-primary" name="ingresar">ingresar</button> 
      </div> 
  </form>
        <?php 
        include("../Controlador/registrar_vendedor.php");
        ?>
</body>

<?php
include("pie.php");
incluir_pie();
?>
</html>