<!DOCTYPE html>
<html>
<head>
	<title>Guardar</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body >

	
	<center>
		<?php

			$id = $_REQUEST['id'];

			include ("conexion.php");			
			
			$query = "SELECT * FROM tabla_inventario_inicial WHERE id = '$id' ";
			$resultado = $conexion -> query ($query);
			$row = $resultado -> fetch_assoc();

		?><!--Fin php-->

		<form action="operacion_usar.php?id=<?php echo $row['id'];?>" method="POST">
			<p>
				<h3>Producto: <?php echo $row['nombre']; ?> </h3>				
				<br>
				<label>Peso final: </label>
				<input type="text" required name="cantidad_final" placeholder="Peso final"value =""> <label for="">gramos</label>
				<br><br>
				<label>Fecha de pesaje: </label>
				<input type="date" required name="fecha_PesoFin" value =""> <label for=""></label>
				<br><br>

				
				<input type="hidden" required name="disponible" value ="<?php echo $row['disponible']; ?>"> 

				<button type="hidden" class="btn btn-success">Guardar</button>
			</p>
		</form>
	</center>

	

</body>
</html>