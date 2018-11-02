<?php 
	
	include("conexion.php");

	$id = $_REQUEST['id'];	
		
	$variable_entrada = $_POST['variable_entrada'];	
	$entrada = $_POST['entrada'];	
	$totalEntradas = $variable_entrada + $entrada;

	$inventarioInicial = $_POST['inventarioInicial'];
	$totalDisponible =   $entrada  +  $inventarioInicial + $variable_entrada;

	//Ejemplo: nombre es el campo en la tabla y $nombre es el valor que se le va a insertar 
	$query = 	
	" UPDATE `tabla_inventario_inicial` 
	  SET `variable_entrada`= ". $variable_entrada ." , `entradas`= ". $totalEntradas ." , 
	  	  `disponible`= ". $totalDisponible ."
		   
			WHERE id ='$id'
	";



	$resultado = $conexion -> query($query);

	


	if ($resultado) {
		header("location: index_entradas.php");
		//echo "Exito al guardar";
	} else {
		echo "Fallido al guardar";
	}
?>