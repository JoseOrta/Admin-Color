<?php  
	
	include("conexion.php");

	$id = $_REQUEST['id'];
	
	$nombre = $_POST['nombre'];
	$cantidad = $_POST['cantidad'];
	$precioC= $_POST['precio_compra'];
	$grupo = $_POST['grupo'];

	//Ejemplo: nombre es el campo en la tabla y $nombre es el valor que se le va a insertar 
	$query = "UPDATE tabla_inventario_inicial SET 
	
		nombre='$nombre',
		cantidad='$cantidad',
		precio_compra='$precioC',
		grupo='$grupo'

		WHERE id='$id'  
	";

	$resultado = $conexion -> query($query);

	if ($resultado) {
		header("location: index.php");
		//echo "Exito al guardar";
	} else {
		echo "Fallido al guardar";
	}
?>