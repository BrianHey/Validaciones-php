<?php
  if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
     $edad = $_POST['edad'];
      $correo = $_POST['correo'];
  }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<form method="post">
      <h1>Registro</h1>
      <label>Nombre:</label>
      <input type="text" name="nombre" value="<?php if(isset($nombre)) echo $nombre; ?>">
      <label>Edad:</label>
      <input type="text" name="edad" value="<?php if(isset($edad)) echo $edad; ?>">
      <label>Correo:</label>
      <input type="text" name="correo" value="<?php if(isset($correo)) echo $correo; ?>">
      <input type="submit" name="submit">

      <?php include("validar.php"); ?>
    </form>
</body>
</html>


<!-- value="<?php if(isset($nombre))echo $nombre; ?>" -->