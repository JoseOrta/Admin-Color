<?php  
	
	include("conexion.php");

	$id = $_REQUEST['id'];
	
	

	
		
	$cantidad_final = $_POST['cantidad_final'];		
	$disponible = $_POST['disponible'];	
	$fecha_pesofin = $_POST['fecha_PesoFin'];	


	//consumo = disponible - inventario_final
	$consumoTotal = $disponible - $cantidad_final;
	

	//Este es el disponible luego de hacer el inventario final, este arrojará la cantidad disponible
	$disponibleFinal =  $disponible - $consumoTotal;
		



	//Ejemplo: nombre es el campo en la tabla y $nombre es el valor que se le va a insertar 
	$query = "UPDATE tabla_inventario_inicial 
																									
	SET	cantidad_final='$cantidad_final' , consumo='$consumoTotal' , disponible='$disponibleFinal', fecha_pesofin='$fecha_pesofin'

	WHERE id='$id'  
    ";    

	$resultado = $conexion -> query($query);

	if ($resultado) {
		header("location: index_inventario_final.php");
		//echo "Exito al guardar";
	} else {
		echo "Fallido al guardar";
	}
?>