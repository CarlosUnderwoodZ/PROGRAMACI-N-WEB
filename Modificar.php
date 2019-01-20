<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'/>
    <title>Modificar</title>	
  </head>
  <body>
	<?php 

  require_once "biblioteca.php";
  $db = conectaDB();

  $dbTabla="persona";

  $consulta = "UPDATE $dbTabla SET nombre=?,apellidos=?,sexo=?,edad=?,direccion=? WHERE id=?";

  if ($result->execute(array($_REQUEST[nombre],$_REQUEST[apellido],$_REQUEST[sexo],$_REQUEST[edad],$_REQUEST[direccion],$_REQUEST[id]))) {
    echo "Modificación de persona ejecutada correctamente";
  } else {
    echo "No se pudo modificar persona";
  }

  $db = null;
?>
	</br><a href='vinculos.html'>Regresar</a>
  </body>
</html>