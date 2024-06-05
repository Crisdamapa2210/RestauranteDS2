<?php
    include("../navbar/dir_navbar.php");
    include("../Modelo/bd.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aa</title>
</head>
<body>
    <?php incluir_navbar();
    $consulta = "SELECT precio FROM comida WHERE descripcion = 'Hamburguesa'";
    $resultado = mysqli_query($conexion, $consulta);
    
if ($resultado) {
    $fila = mysqli_fetch_assoc($resultado);
    if ($fila) {
        $precio = $fila['precio'];
        }}
?>
    
      
    <div class="content-wrapper container-fluid">
    <div class="row no-gutters" style="height: 100vh;">
      <div class="col-3 sidebar d-flex flex-column bg-secondary"><br>
        <!-- Contenido de la barra lateral -->
       <center><img src="../imagen/hamburgesa.jpg" alt="hamburguesa rayquzaña" height="250px" width=300px></center>
       <center><h4> Hamburguesa rayquaza's </h4></center>
      </div>

      <div class="col-9 content">
        <!-- Contenido principal -->
        <h1>Hamburguesa</h1>
    <h4 class="lead">
        Traidas de donde traen las mejores hamburguesas de colombia con carne de rayquaza ahumada <br>
        perfectas para comidas familiares y muy reconocidas por los niños. <br><br>
        <b>Precio:<?php echo ($precio)?></b><br><br>

           <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mi-modal">Pedir</button>

            <div class="modal fade" id="mi-modal" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-tittle">Pedir</h5>
                            <button class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3 needs-validation" method="post"novalidate>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="validationCustom01" name="name" value="ej: Mark" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Cantidad</label>
                                <input type="number" class="form-control" id="validationCustom02" name="cantidad" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustomUsername" class="form-label">descripcion</label>
                                <div class="input-group has-validation"> 
                                <input type="text" class="form-control" name="descripcion" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="Hamburguesa" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">direccion</label>
                                <input type="text" class="form-control" id="validationCustom03" name="direccion" value="calle..." required>
                                <div class="invalid-feedback">
                                Ok!!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">telefono</label>
                                <input type="text" class="form-control" id="validationCustom03" name="telefono"value="320..." required>
                                <div class="invalid-feedback">
                                Numero telefonico
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">email</label>
                                <input type="email" class="form-control" id="validationCustom03" name="email"value="noreply@example.com" required>
                                <div class="invalid-feedback">
                                correo
                                </div>
                            </div>
                                
                            
                            </div>
                            <div class="col-12">
                            <button class="btn btn-danger" data-bs-dismiss="modal">cancelar</button>
                            <button class="btn btn-primary" name="pedir">Pedir</button>
                            </div>
                            </form>
                            <?php
                                include("../Controlador/registrar_pedido.php");
                
                            ?>

                        </div>
                        

                    </div>

                </div>

            </div>
        

</h4>



    </div>

</div></div>

</body>
<?php
include("pie.php");
incluir_pie();
?>
</html>