<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'/>
    <title>Eliminar</title>	
  </head>
  <body>
	<?php 

  require_once "biblioteca.php";
  $db = conectaDB();

  $dbTabla="persona";

  $consulta = "DELETE FROM $dbTabla WHERE id = ?";
  $result = $db->prepare($consulta);

  if ($result->execute(array($_REQUEST[id]))) {
    echo "Persona eliminada correctamente";
  } else {
    echo "No se pudo eliminar persona";
  }

  $db = null;
?>
  </br><a href='vinculos.html'>Regresar</a>
  </body>
</html>