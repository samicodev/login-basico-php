<?php
session_start();

if(!isset($_SESSION['nombre'])){
  header("Location: login.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenida</title>
</head>
<body>
  <h1>Bienvenido <?php echo $_SESSION['nombre'] ?></h1>
  <p>Has iniciado sesion correctamente!</p>
  <a href="logout.php">Cerrar sesion</a>
</body>
</html>