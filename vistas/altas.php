<?php
    require_once "clase.php";

    if(isset($_POST['Guardar']))
    {
        $usuarios=new claseUsuarios();
        $res = $usuarios->insertar($_POST['nombre'],$_POST['apellidos'], $_POST['nomusuario'], $_POST['correo'], $_POST['pass'], $_POST['direccion']);
        
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="utf-8">
   <title>Registro</title>
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
              <h4>EL USUARIO HA SIDO REGISTRADO CON EXITO</h4>
       </div>
           <div class="modal-footer">
           <button type="button" class="btn btn-success" onclick="location='Index2.php'">Iniciar Sesion</button>
           <button type="button" class="btn btn-danger" onclick="location='../index/index.php'">Salir</button>
           </div>
      </div>
   </div>
</div>
</body>
</html>