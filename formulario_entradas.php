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

		<form action="operacion_entrada.php?id=<?php echo $row['id'];?>" method="POST">
			<p>
				<h3>Producto: <?php echo $row['nombre']; ?> </h3>				
				<br>
				<input type="text" required name="variable_entrada" placeholder="Cantidad de entrada" value =""> <label for="">gramos</label>
				<br><br>				 
				
				<input type="hidden" required name="entrada" value ="<?php echo $row['entradas'];?>">				
				<input type="hidden" required name="inventarioInicial" value ="<?php echo $row['cantidad'];?>">
				
				<button type="submit" class="btn btn-success">Guardar</button>
			</p>
		</form>
	</center>

	

</body>
</html>