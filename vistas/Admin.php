<!DOCTYPE html>
<?php
$conect = mysqli_connect("localhost", "root", "", "farmacia")
?>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/index.css">
  <script src="../jquery/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="../js/bootstrap.min.js"></script>
  <title>TecCura</title>
</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">

    </div>
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" class="fa fa-facebook" style="font-size:25px;color:blue"></a></li>
      <li><a href="#" class="fa fa-instagram" style="font-size:25px;color:orange"></a></li>
      <li><a href="#" class="fa fa-twitter" style="font-size:25px;color:cyan"></a></li>
      <li><a href="#" class="fa fa-whatsapp" style="font-size:25px;color:green"></a></li>
      <li><a href="#"></a></li>
    </ul>
    <img id="imgindex" src="../imgs/Teccura.png" />

  </div>

  <div class="container-fluid">
    <div class="container" >
     <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <div id="imaginary_container"> 
          <div class="input-group stylish-input-group">
            <input type="text" class="form-control"  placeholder="Buscar Productos" >
            <span class="input-group-addon">
              <button type="submit">
                <span class="glyphicon glyphicon-search"></span>
              </button>  
            </span>
          </div>
        </div>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../vistas/logout.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesion</a></li>
      </ul>
    </div>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li class="dropdown"><a href="../index/index.php">Inicio</span></a>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="fa fa-heart" style="font-size:20px;color:red"></a></li>
            <li><a href="#" class="fa fa-shopping-cart" style="font-size:22px;color:black"></a></li>
          </div>
        </nav>


        <section>

          <h1>Bienvenido a tu cuenta (ADMIN) <?php echo $user->getNombre(); ?> </h1>

        </section>
      </div>

      <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th><h3>DATOS DE USUARIOS</h3></th>
            </tr>
            <td><button type="submit" class="btn btn-default" name="Guardar" onclick="location='Registro.php'">Registrar Usuario</button></td>
            </tr>
          </thead>
          <tbody>     
            <tr>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>Usuario</th>
              <th>Password</th>
              <th>Email</th>
              <th>Direccion</th>
              <th></th>
              <th></th>
            </tr>
          </tbody>

          <?php 

          $consulta = "SELECT * FROM usuario";

          $ejecutar = mysqli_query($conect, $consulta); 

          $i = 0;

          while($fila=mysqli_fetch_array($ejecutar)){    
            $nombre = $fila['nombre']; 
            $apellidos = $fila['apellidos']; 
            $usuario = $fila['nomusuario']; 
            $password = $fila['pass']; 
            $email = $fila['correo'];
            $domi = $fila['direccion'];

            $i++; 

            ?>
            <tr >
              <td><?php echo $nombre; ?></td>
              <td><?php echo $apellidos; ?></td>
              <td><?php echo $usuario; ?></td>
              <td><?php echo $password; ?></td>
              <td><?php echo $email; ?></td>
              <td><?php echo $domi; ?></td>
              <td><a href="index2.php?editar=<?php echo $usuario; ?>">Editar</a></td>
              <td><a href="index2.php?borrar=<?php echo $usuario; ?>">Borrar</a></td>
            </tr>
          <?php } ?>
        </table>

        <?php
        if(isset($_GET['editar'])){
          include("editar.php");        }
          ?> 

          <?php 
          if(isset($_GET['borrar'])){

            $borrar_nomusuario = $_GET['borrar'];

            $borrar = "DELETE FROM usuario WHERE nomusuario='$borrar_nomusuario'";

            $ejecutar = mysqli_query($conect,$borrar); 

            if($ejecutar){  

              echo "<script>alert('El usuario ha sido borrado!')</script>";
              echo "<script>window.open('index2.php','_self')</script>";
            }

          }

          ?>
        </div>




        <section>
          <h1 align="center">ADMINISTRAR MEDICAMENTOS</h1>
        </section>

        <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th><h3>DATOS DE MEDICAMENTOS</h3></th>
            </tr>
            <td><button type="submit" class="btn btn-default" name="Guardar" onclick="location='RegistroMedic.php'">Registrar Medicamentos</button></td>
          </thead>
          <tbody>     
            <tr>
              <th>No.</th>
              <th>NOMBRE</th>
              <th>PRECIO</th>
              <th>CATEGORIA</th>
              <th>N. EXISTENCIA</th>
              <th>UNIDADES GRAMOS</th>
              <th></th>
              <th></th>
            </tr>
          </tbody>
          <?php 


          $consulta = "SELECT * FROM medicamento";

          $ejecutar = mysqli_query($conect, $consulta); 

          $i = 0;

          while($fila=mysqli_fetch_array($ejecutar)){ 
            $id = $fila['id_medicamento'];    
            $nombreM = $fila['nombre']; 
            $precio = $fila['precio']; 
            $categoria = $fila['categoria']; 
            $existencia = $fila['num_existencia']; 
            $unidades = $fila['unidades'];

            $i++; 

            ?>
            <tr >
              <td><?php echo $id; ?></td>
              <td><?php echo $nombreM; ?></td>
              <td><?php echo $precio; ?></td>
              <td><?php echo $categoria; ?></td>
              <td><?php echo $existencia; ?></td>
              <td><?php echo $unidades; ?></td>
              <td><a href="index2.php?editarM=<?php echo $id; ?>">Editar</a></td>
              <td><a href="index2.php?borrarM=<?php echo $id; ?>">Borrar</a></td>
            </tr>
          <?php } ?>
        </table>

        <?php
        if(isset($_GET['editarM'])){
          include("editarmedic.php");        }
          ?> 

          <?php 
          if(isset($_GET['borrarM'])){

            $borrar_medic = $_GET['borrarM'];

            $borrar = "DELETE FROM medicamento WHERE id_medicamento='$borrar_medic'";

            $ejecutar = mysqli_query($conect,$borrar); 

            if($ejecutar){  

              echo "<script>alert('El medicamento ha sido borrado!')</script>";
              echo "<script>window.open('index2.php','_self')</script>";
            }

          }

          ?>
        </div>

      </body>
      </html>