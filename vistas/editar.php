<?php 
$conect = mysqli_connect("localhost", "root", "", "farmacia");
if(isset($_GET['editar'])){

    $nomsusuario_editar = $_GET['editar']; 

    $consulta = "SELECT * FROM usuario WHERE nomusuario='$nomsusuario_editar'";
    $ejecutar = mysqli_query($conect, $consulta); 

    $fila=mysqli_fetch_array($ejecutar);

    $nombre = $fila['nombre']; 
    $apellidos = $fila['apellidos'];   
    $email = $fila['correo'];
    $password = $fila['pass'];
    $domi = $fila['direccion'];
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
              <h3>REGISTRADO</h3>
          </div>
          <div class="modal-body">
            <form method="post" action="">
            <input type="text" name="nombre" value="<?php echo $nombre;?>"/><br/>
            <input type="password" name="apelli" value="<?php echo $apellidos;?>"/><br/>
            <input type="text" name="email" value="<?php echo $email;?>"/><br/>
            <input type="text" name="passw" value="<?php echo $password;?>"/><br/>
            <input type="text" name="domic" value="<?php echo $domi;?>"/><br/>
            <button type="submit" class="btn btn-success" name="actualizar">ACTUALIZAR DATOS</button>
            </form>

        </div>
</div>
</div>
</body>
</html>

<?php 
if(isset($_POST['actualizar'])){

    $actualizar_nombre = $_POST['nombre'];
    $actualizar_apellidos = $_POST['apelli'];
    $actualizar_email = $_POST['email'];
    $actualizar_password = $_POST['passw'];
    $actualizar_direc = $_POST['domic'];

    $actualizar = "UPDATE usuario SET nombre='$actualizar_nombre', apellidos='$actualizar_apellidos', correo='$actualizar_email', pass='$actualizar_password', direccion='$actualizar_direc' WHERE nomusuario='$nomsusuario_editar'";

    $ejecutar = mysqli_query($conect, $actualizar);
    
    if($ejecutar){

        echo "<script>alert('Datos actualizados!')</script>";
        echo "<script>window.open('index2.php','_self')</script>";
    }
}

?> 