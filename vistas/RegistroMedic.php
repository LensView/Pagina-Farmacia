<!DOCTYPE html>
<?php  
$conect = mysqli_connect("localhost", "root", "", "farmacia");
?>
<html lang="es">
<head>
 <meta charset="utf-8">
 <title>Registro</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <link rel="stylesheet" href="../css/Registro.css">
 <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 <script>
  $(document).ready(function()
  {
   $("#mostrarmodal").modal("show");
 });
</script>
</head>
<body>

 <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h3>REGISTRO DE MEDICAMENTO</h3>
    </div>
    <div class="modal-body">

      <form role="form" method="post" action="">

        <div class="container">
          <label for="uname"><b>Nombre de Medicamento</b></label>
          <input type="text" class="form-control" placeholder="Ingresa Nombre de Medicamento" id="nombre" name="nombre" required>

          <label for="uname"><b>Precio</b></label>
          <input type="text" class="form-control" placeholder="Ingresa Precio" name="precio" required>

          <label for="uname"><b>Categoria</b></label>
          <input type="text" class="form-control" placeholder="Ingresa la Categoria" name="categoria" required>

          <label for="uname"><b>No. de Existencia</b></label>
          <input type="text" class="form-control" placeholder="Ingresa No. de Existente" id="correo" name="existencia" required>

          <label for="psw"><b>Unidades (Gramos)</b></label>
          <input type="text" placeholder="Ingresa las unidades " id="password" name="unidades" required>
          <br>

        </div>

        <button type="submit" class="btn btn-default" name="insert" onclick="location='Admin.php'">Ingresar Medicamento</button>
      </form>

    </div>
    <div class="modal-footer">
    </div>
  </div>
</div>
</div>

<?php 
  if(isset($_POST['insert'])){
  
    $Nombre = $_POST['nombre'];
    $Precio = $_POST['precio'];
    $Categoria = $_POST['categoria'];
    $Existencia = $_POST['existencia'];
    $Unidad = $_POST['unidades'];
    
    $insertar = "INSERT INTO medicamento (nombre, precio, categoria, num_existencia, unidades) values ('$Nombre','$Precio','$Categoria','$Existencia','$Unidad')";
    
    $ejecutar = mysqli_query($conect,$insertar);
  }
  
  ?> 

</body>
</html>