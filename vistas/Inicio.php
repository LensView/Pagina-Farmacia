<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Document</title>
</head>
<body background ="../imgs/fondo.jpg">
  
  <h2 align="center">Iniciar Sesion</h2>

  <form action="" method="POST">
  <?php
          if(isset($errorLogin)){
              echo $errorLogin;
          }
      ?>
    <div class="imgcontainer">
      <img src="../imgs/equipo.png" alt="Avatar" class="avatar">
    </div>
  
    <div class="container">
      <label for="uname"><b>Usuario</b></label>
      <input type="text" placeholder="Ingresa Usuario" name="nomusuario" required>
  
      <label for="psw"><b>Contraseña</b></label>
      <input type="password" placeholder="Ingresa Contraseña" name="pass" required>
          
      <button type="submit" >Iniciar</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Recordar
      </label>
      </div>
  
      <div class="container">
        <span class="psw"><a href="https://accounts.google.com/signin/v2/recoveryidentifier?continue=https%3A%2F%2Fwww.google.com.mx%2F_%2Fchrome%2Fnewtab%3Fei%3DxYsLW8H5MMuWtQXzn5aoCA%26yv%3D3&Email=lensangelr%40gmail.com&ignoreShadow=0&hl=es-419&flowName=GlifWebSignIn&flowEntry=ServiceLogin">Recuperar Contraseña?</a></span>
      </div>

      <div class="container">
        <span class="reg"><a href="Registro-user.html">Registrarse</a></span>
      </div>

  </form>
  
</body>

</html>