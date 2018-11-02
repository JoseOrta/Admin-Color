<?php 	

	include("conexion.php");

	$nombre = $_POST['nombre'];
	$cantidad = $_POST['cantidad'];
	$fecha = $_POST['fecha'];
	$precioC= $_POST['precio_compra'];
	$grupo = $_POST['grupo'];

	$query = "INSERT INTO tabla_inventario_inicial (nombre, cantidad, fecha, precio_compra, grupo, disponible)
	VALUES('$nombre','$cantidad','$fecha','$precioC','$grupo', '$cantidad')";

	$resultado = $conexion -> query($query);

	if ($resultado) {		
		header("location: index.php");
		//echo "Exito al guardar";
	} else {
		echo "Fallido al guardar";
	}
?>
























	
</body>
</html>




























