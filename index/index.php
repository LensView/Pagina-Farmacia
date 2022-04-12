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
        <li><a href="../vistas/Registro.php"><span class="glyphicon glyphicon-user "></span> Crear Cuenta</a></li>
        <li><a href="../vistas/index2.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesion</a></li>
    </ul>
	</div>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Igiene Personal</a></li>
          <li><a href="#">Antidiarreicos</a></li>
          <li><a href="#">Desinflamatorios</a></li>
        </ul>
      </li>
      <li><a href="#">Ofertas</a></li>
      <li><a href="#"></a></li>
      <li><a href="#">Historial</a></li>
      <li><a href="#"></a></li>
      <li><a href="#">Pago</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="fa fa-heart" style="font-size:20px;color:red"></a></li>
        <li><a href="#" class="fa fa-shopping-cart" style="font-size:22px;color:black"></a></li>
  </div>
</nav>
</div>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="../imgs/Duphalac.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="../imgs/expertos.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="../imgs/Motrin.jpg" alt="New york" style="width:100%;">
      </div>

      <div class="item">
        <img src="../imgs/Colgate.jpg" alt="New york" style="width:100%;">
      </div>
      <div class="item">
        <img src="../imgs/Histiacil.jpg" alt="New york" style="width:100%;">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>  
</div>

<div>
  <hr>
  <hr>
</div>

<?php 


          $consulta = "SELECT * FROM medicamento";

          $ejecutar = mysqli_query($conect, $consulta); 

          $i = 0;

          while($fila=mysqli_fetch_array($ejecutar)){
            $nombreM2 = $fila['nombre'];     
            $nombreM = $fila['nombre']; 

            $i++; 

            ?>
<?php } ?>

<section >
<div class="row container" >
  <div class="section-header">
    <h3>PRODUCTOS EN STOCK</h3>
  </div>

  <div >
    <div class="col-sm-2 col-md-2" style="left:5%;" >
      <div class="thumbnail">
        <img id="tamaño" src="../imgs/parac.jpg" alt="...">
        <div class="caption">
          <h4><?php echo $nombreM2; ?></h4>
          <p>Caja con 40 comprimidos de paracetamol de 1g</p>
          <p>
          <a href="#" class="btn btn-primary" role="button">Comprar</a>
          <a href="#" class="fa fa-heart" style="font-size:20px;color:red"></a>
          <a href="#" class="fa fa-shopping-cart" style="font-size:22px;color:black"></a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-2 col-md-2" style="left:10%;">
      <div class="thumbnail">
        <img id="tamaño" src="../imgs/stock/alin.jpg" alt="...">
        <div class="caption">
          <h4><?php echo $nombreM; ?></h4>
          <p>Alin Oftalmico 5 Ml. Solucion</p>
          <p>
          <a href="#" class="btn btn-primary" role="button">Comprar</a>
          <a href="#" class="fa fa-heart" style="font-size:20px;color:red"></a>
          <a href="#" class="fa fa-shopping-cart" style="font-size:22px;color:black"></a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-2 col-md-2" style="left:15%;">
      <div class="thumbnail">
        <img id="tamaño" src="../imgs/stock/alivinplus.jpg" alt="...">
        <div class="caption">
          <h4>Alivin Plus Adulto 5 Ml. </h4>
          <p>Consulte a su medico</p>
          <p>
          <a href="#" class="btn btn-primary" role="button">Comprar</a>
          <a href="#" class="fa fa-heart" style="font-size:20px;color:red"></a>
          <a href="#" class="fa fa-shopping-cart" style="font-size:22px;color:black"></a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-2 col-md-2" style="left:20%;">
      <div class="thumbnail">
        <img id="tamaño" src="../imgs/stock/allegra.png" alt="...">
        <div class="caption">
          <h4>Allegra 600 Mg.</h4>
          <p>Allegra 600 Mg. Oral 150 Ml. Suspension Consulte a su med.</p>
          <p>
          <a href="#" class="btn btn-primary" role="button">Comprar</a>
          <a href="#" class="fa fa-heart" style="font-size:20px;color:red"></a>
          <a href="#" class="fa fa-shopping-cart" style="font-size:22px;color:black"></a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-2 col-md-2"style="left:25%;">
      <div class="thumbnail">
        <img id="tamaño" src="../imgs/stock/bioflolac.png" alt="...">
        <div class="caption">
          <h4>Bioflolac</h4>
          <p>Simbiótico para el tratamiento del estreñimiento </p>
          <p>
          <a href="#" class="btn btn-primary" role="button">Comprar</a>
          <a href="#" class="fa fa-heart" style="font-size:20px;color:red"></a>
          <a href="#" class="fa fa-shopping-cart" style="font-size:22px;color:black"></a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<div>
  <hr>
  <hr>
</div>

<section>
<div class="row container" >
  <div class="section-header">
    <h3>PRODUCTOS MAS VENDIDOS</h3>
  </div>

  <div >
    <div class="col-sm-2 col-md-2" style="left:5%;" >
      <div class="thumbnail">
        <img id="tamaño" src="../imgs/parac.jpg" alt="...">
        <div class="caption">
          <h4>Paracetamol 1g</h4>
          <p>Esta descripcion es de prueba</p>
          <p>
          <a href="#" class="btn btn-primary" role="button">Comprar</a>
          <a href="#" class="fa fa-heart" style="font-size:20px;color:red"></a>
          <a href="#" class="fa fa-shopping-cart" style="font-size:22px;color:black"></a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-2 col-md-2" style="left:10%;">
      <div class="thumbnail">
        <img id="tamaño" src="../imgs/parac.jpg" alt="...">
        <div class="caption">
          <h4>Paracetamol 1g</h4>
          <p>Esta descripcion es de prueba</p>
          <p>
          <a href="#" class="btn btn-primary" role="button">Comprar</a>
          <a href="#" class="fa fa-heart" style="font-size:20px;color:red"></a>
          <a href="#" class="fa fa-shopping-cart" style="font-size:22px;color:black"></a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-2 col-md-2" style="left:15%;">
      <div class="thumbnail">
        <img id="tamaño" src="../imgs/parac.jpg" alt="...">
        <div class="caption">
          <h4>Paracetamol 1g</h4>
          <p>Esta descripcion es de prueba</p>
          <p>
          <a href="#" class="btn btn-primary" role="button">Comprar</a>
          <a href="#" class="fa fa-heart" style="font-size:20px;color:red"></a>
          <a href="#" class="fa fa-shopping-cart" style="font-size:22px;color:black"></a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-2 col-md-2" style="left:20%;">
      <div class="thumbnail">
        <img id="tamaño" src="../imgs/parac.jpg" alt="...">
        <div class="caption">
          <h4>Paracetamol 1g</h4>
          <p>Esta descripcion es de prueba</p>
          <p>
          <a href="#" class="btn btn-primary" role="button">Comprar</a>
          <a href="#" class="fa fa-heart" style="font-size:20px;color:red"></a>
          <a href="#" class="fa fa-shopping-cart" style="font-size:22px;color:black"></a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-2 col-md-2"style="left:25%;">
      <div class="thumbnail">
        <img id="tamaño" src="../imgs/parac.jpg" alt="...">
        <div class="caption">
          <h4>Paracetamol 1g</h4>
          <p>Esta descripcion es de prueba</p>
          <p>
          <a href="#" class="btn btn-primary" role="button">Comprar</a>
          <a href="#" class="fa fa-heart" style="font-size:20px;color:red"></a>
          <a href="#" class="fa fa-shopping-cart" style="font-size:22px;color:black"></a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<div>
  <hr>
  <hr>
</div>

<section>
<div class="row container" >
  <div class="section-header">
    <h3>PRODUCTOS DE IGIENE PERSONAL</h3>
  </div>

  <div >
    <div class="col-sm-2 col-md-2" style="left:5%;" >
      <div class="thumbnail">
        <img id="tamaño" src="../imgs/parac.jpg" alt="...">
        <div class="caption">
          <h4>Paracetamol 1g</h4>
          <p>Esta descripcion es de prueba</p>
          <p>
          <a href="#" class="btn btn-primary" role="button">Comprar</a>
          <a href="#" class="fa fa-heart" style="font-size:20px;color:red"></a>
          <a href="#" class="fa fa-shopping-cart" style="font-size:22px;color:black"></a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-2 col-md-2" style="left:10%;">
      <div class="thumbnail">
        <img id="tamaño" src="../imgs/parac.jpg" alt="...">
        <div class="caption">
          <h4>Paracetamol 1g</h4>
          <p>Esta descripcion es de prueba</p>
          <p>
          <a href="#" class="btn btn-primary" role="button">Comprar</a>
          <a href="#" class="fa fa-heart" style="font-size:20px;color:red"></a>
          <a href="#" class="fa fa-shopping-cart" style="font-size:22px;color:black"></a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-2 col-md-2" style="left:15%;">
      <div class="thumbnail">
        <img id="tamaño" src="../imgs/parac.jpg" alt="...">
        <div class="caption">
          <h4>Paracetamol 1g</h4>
          <p>Esta descripcion es de prueba</p>
          <p>
          <a href="#" class="btn btn-primary" role="button">Comprar</a>
          <a href="#" class="fa fa-heart" style="font-size:20px;color:red"></a>
          <a href="#" class="fa fa-shopping-cart" style="font-size:22px;color:black"></a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-2 col-md-2" style="left:20%;">
      <div class="thumbnail">
        <img id="tamaño" src="../imgs/parac.jpg" alt="...">
        <div class="caption">
          <h4>Paracetamol 1g</h4>
          <p>Esta descripcion es de prueba</p>
          <p>
          <a href="#" class="btn btn-primary" role="button">Comprar</a>
          <a href="#" class="fa fa-heart" style="font-size:20px;color:red"></a>
          <a href="#" class="fa fa-shopping-cart" style="font-size:22px;color:black"></a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-2 col-md-2"style="left:25%;">
      <div class="thumbnail">
        <img id="tamaño" src="../imgs/parac.jpg" alt="...">
        <div class="caption">
          <h4>Paracetamol 1g</h4>
          <p>Esta descripcion es de prueba</p>
          <p>
          <a href="#" class="btn btn-primary" role="button">Comprar</a>
          <a href="#" class="fa fa-heart" style="font-size:20px;color:red"></a>
          <a href="#" class="fa fa-shopping-cart" style="font-size:22px;color:black"></a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<div>
  <hr>
  <hr>
</div>

<footer class="page-footer font-small mdb-color lighten-3 pt-4">
<div class="container text-center text-md-left">

  <!-- Footer links -->
  <div class="row text-center text-md-left mt-3 pb-3">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">FARMAMIGOS</h6>
      <p>FarmaAmigos es una empresa mexicana dedicada a la venta de productos farmaceuticos y de igiene personal 
      es muy importante para nosotros el poder brindarte nuestro servicio .</p>
    </div>
    <!-- Grid column -->

    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">ACERCA DE </h6>
      <p>
        <a href="#!">FarmAmigos</a>
      </p>
      <p>
        <a href="#!">Mapa del Sitio</a>
      </p>
      <p>
        <a href="#!">FarmaTec de Mexico</a>
      </p>
    </div>
    <!-- Grid column -->

    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">AYUDA</h6>
      <p>
        <a href="#!">Mi Cuenta</a>
      </p>
      <p>
        <a href="#!">Comprar</a>
      </p>
      <p>
        <a href="#!">Terminos y Condiciones</a>
      </p>
      <p>
        <a href="#!">Politicas de Privacidad</a>
      </p>
    </div>

    <!-- Grid column -->
    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">CONTACTO</h6>
      <p>
        <i class="fa fa-home mr-3"></i> Camino a Barranca de Pesos S/N San Lucas Atoyatenco San Martín Texmelucan, Puebla</p>
      <p>
        <i class="fa fa-envelope mr-3"></i>ayuda@farmamigos.com</p>
      <p>
        <i class="fa fa-phone mr-3"></i> + 52 1 248 153 2401</p>
      <p>
        <i class="fa fa-print mr-3"></i> + 52 1 248 158 0658</p>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Footer links -->

  <hr>

  <!-- Grid row -->
  <div class="row d-flex align-items-center">

    <!-- Grid column -->
    <div class="col-md-7 col-lg-8">

      <!--Copyright-->
      <p class="text-center text-md-left">© 2018 Copyright:
          <strong>FARMATEC DE MEXICO</strong>
        </a>
      </p>

    </div>
    <!-- Grid column -->

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

</footer>

</body>
</html>