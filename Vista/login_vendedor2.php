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
    

<body class="bg-secondary">
<?php
      incluir_navbar();
   ?>
  <form class="bg-secondary d-flex justify-content-center" action="../Modelo/validacion_vendedor.php" method="post">
    <div class="bg-white p-5 rounded-5">
      <div 
        class="d-flex justify-content-center "><img src="../imagen/login.png" height="130px" width="130px">
      </div>
      <h1 class="d-flex justify-content-center">Login</h1>
      <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario">
      <div id="emailHelp" class="form-text">Ingrese su correo electronico</div>  
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="contraseña">
      <div id="exampleInputPassword1" class="form-text">Ingrese su contraseña</div><br>
      <button type="submit" class="btn btn-primary">ingresar</button>
  </div>    
  </form>

 
  
  
</body>

</html>