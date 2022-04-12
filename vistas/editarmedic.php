<?php 
$conect = mysqli_connect("localhost", "root", "", "farmacia");
if(isset($_GET['editarM'])){

  $medic_editar = $_GET['editarM']; 

  $consulta = "SELECT * FROM medicamento WHERE id_medicamento='$medic_editar'";
  $ejecutar = mysqli_query($conect, $consulta); 

  $fila=mysqli_fetch_array($ejecutar);

  $nombre = $fila['nombre']; 
  $precio = $fila['precio']; 
  $categoria = $fila['categoria']; 
  $existencia = $fila['num_existencia']; 
  $unidades = $fila['unidades'];
}
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
        <h3>EDITAR MEDICAMENTO</h3>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <input type="text" name="nombre" value="<?php echo $nombre;?>"/><br/>
          <input type="password" name="precio" value="<?php echo $precio;?>"/><br/>
          <input type="text" name="cate" value="<?php echo $categoria;?>"/><br/>
          <input type="text" name="exis" value="<?php echo $existencia;?>"/><br/>
          <input type="text" name="unidad" value="<?php echo $unidades;?>"/><br/>
          <button type="submit" class="btn btn-success" name="actualizar">ACTUALIZAR MEDICAMENTO</button>
        </form>

      </div>
    </div>
  </div>
</body>
</html>

<?php 
if(isset($_POST['actualizar'])){

  $actualizar_nombre = $_POST['nombre'];
  $actualizar_precio = $_POST['precio'];
  $actualizar_cate = $_POST['cate'];
  $actualizar_exist = $_POST['exis'];
  $actualizar_unidad = $_POST['unidad'];

  $actualizar = "UPDATE medicamento SET nombre='$actualizar_nombre', precio='$actualizar_precio', categoria='$actualizar_cate', num_existencia='$actualizar_exist', unidades='$actualizar_unidad' WHERE id_medicamento='$medic_editar'";

  $ejecutar = mysqli_query($conect, $actualizar);

  if($ejecutar){

    echo "<script>alert('Medicamento actualizado!')</script>";
    echo "<script>window.open('index2.php','_self')</script>";
  }
}

?> 