<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/Registro.css">
    <title>Registro</title>
</head>
<body>
<body background ="../imgs/fondo.jpg">
    <h2 align="center">Registro de Usuario</h2>

  <form role="form" method="post" action="altas.php">

    <div class="container">
      <label for="uname"><b>Nombre(s)*</b></label>
      <input type="text" class="form-control" placeholder="Ingresa Nombre(s)" id="nombre" name="nombre" required>

      <label for="uname"><b>Apellido(s)*</b></label>
      <input type="text" class="form-control" placeholder="Ingresa Apellido(s)" name="apellidos" required>

      <label for="uname"><b>Nombre de Usuario*</b></label>
      <input type="text" class="form-control" placeholder="Ingresa tu nombre de usuario" name="nomusuario" required>

      <label for="uname"><b>Correo Electronico*</b></label>
      <input type="text" class="form-control" placeholder="Ingresa tu correo electronico" id="correo" name="correo" required>

      <label for="psw"><b>Crear una contraseña*</b></label>
      <input type="password" placeholder="Ingresa Contraseña" id="password" name="pass" required>

      <label for="psw"><b>Confirmar contraseña*</b></label>
      <input type="password" placeholder="Ingresa Contraseña" id="password" name="pass" required>

      <label for="numero"><b>Direccion</b></label>
      <input type="text" class="form-control" placeholder="Ingresa direccion" id="direccion" name="direccion" required>
    </div>

      <button type="submit" class="btn btn-default" name="Guardar" onclick="location='inicio.php'">Crear cuenta</button>
    </form>
</body>
</html>