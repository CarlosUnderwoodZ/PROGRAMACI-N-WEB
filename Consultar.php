<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'/>
	<title>Consultar</title>
</head>
<body>
	<?php 

	// EJEMPLO DE CONSULTA DE SELECCIÓN DE REGISTROS
	require_once "biblioteca.php";
	$db = conectaDB();

	$dbTabla="persona";

	$consulta = "SELECT * FROM $dbTabla";
	$result = $db->query($consulta);
	if (!$result) {
	    print "    <p>Error en la consulta.</p>\n";
	} else {
	    foreach ($result as $valor) {
	        print "    <p>$valor[id] $valor[nombre] $valor[apellidos] $valor[sexo] $valor[edad] $valor[direccion]</p>\n";
	    }
	}

	$db = null;
	?>
	</br><a href='vinculos.html'>Regresar</a>
</body>
</html>