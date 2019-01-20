<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'/>
    <title>Crear</title>	
  </head>
  <body>
	<?php 

  require_once "biblioteca.php";
  $db = conectaDB();

  $dbTabla="persona";

  $consulta = "INSERT INTO $dbTabla (id,nombre,apellidos,sexo,edad,direccion) VALUES (NULL,?,?,?,?,?)";
  $result = $db->prepare($consulta);
  if ($result->execute(array($_REQUEST[nombre],$_REQUEST[apellido],$_REQUEST[sexo],$_REQUEST[edad],$_REQUEST[direccion]))) {
    echo "Nueva persona insertada correctamente";
  } else {
    echo "No se pudo insertar persona";
  }

  $db = null;
?>
  </br><a href='vinculos.html'>Regresar</a>
  </body>
</html>