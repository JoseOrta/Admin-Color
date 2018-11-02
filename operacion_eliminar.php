<?php  
	
	include("conexion.php");

	$id = $_REQUEST['id'];
	
	$nombre = $_POST['nombre'];
	$cantidad = $_POST['cantidad'];
	$fecha = $_POST['fecha'];
	$precioC= $_POST['precioc'];
	$grupo = $_POST['grupo'];

	//Ejemplo: nombre es el campo en la tabla y $nombre es el valor que se le va a insertar 
	$query = "DELETE FROM tabla_inventario_inicial WHERE id='$id'  
	";

	$resultado = $conexion -> query($query);

	if ($resultado) {

		header("location: index.php");
		//echo "Exito al guardar";
	} else {
		echo "Fallido al guardar";
	}


?>