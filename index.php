<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body{
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>
<body>
  <form action="login.php" method="post">
    <label for="">Nombre de usuario</label>
    <br>
    <input type="text" name="usuario" id="usuario">
    <br>
    <label for="">Contraseña</label>
    <br>
    <input type="text" name="contrasenia" id="contrasenia">
    <br><br>
    <input type="submit" value="Iniciar sesion">
  </form>
</body>
</html>