<!DOCTYPE html>
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

        <h1>Bienvenido a tu cuenta <?php echo $user->getNombre(); ?> </h1>

    </section>
</div>

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th><p align="center"> DATOS DE USUARIO</p></th>
      </tr>
    </thead>
    <tbody>     
      <tr class="table-primary">
        <td>Nombre(s):</td>
        <td><?php echo $user->getNombre(); ?></td>
        <td><button>Editar</button></td>
      </tr>
      <tr class="table-success">
        <td>Apellidos(s):</td>
        <td></td>
        <td><button>Editar</button></td>
      </tr>
      <tr class="table-danger">
        <td>Usuario:</td>
        <td></td>
        <td><button>Editar</button></td>
      </tr>
      <tr class="table-info">
        <td>Correo Electronico:</td>
        <td></td>
        <td><button>Editar</button></td>
      </tr>
      <tr class="table-warning">
        <td>Contraseña:</td>
        <td></td>
        <td><button>Editar</button></td>
      </tr>
      <tr class="table-active">
        <td>Direccion:</td>
        <td></td>
        <td><button>Editar</button></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>