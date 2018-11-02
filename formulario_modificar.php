<!DOCTYPE html>
<html>
<head>
	<title>Guardar</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

	<center>

		<?php

			$id = $_REQUEST['id'];

			include ("conexion.php");			
			
			$query = 
			
			"SELECT * FROM 		
			tabla_inventario_inicial WHERE id = '$id' ";
			$resultado = $conexion -> query ($query);
			$row = $resultado -> fetch_assoc();

		?><!--Fin php-->

		<form action="operacion_modificar.php?id=<?php echo $row['id'];?>" method="POST">
			<p>
				<h3>Ingrese datos</h3> <br> 
				<label>Nombre</label><br>
				<input type="text" required name="nombre" placeholder="Nombre"value = "<?php echo $row['nombre']; ?>">
				<br><br>
				<label>Cantidad</label><br>
				<input type="text" required name="cantidad" placeholder="cantidad"value = "<?php echo $row['cantidad']; ?>"> 
				<br><br>			
				<label>Precio compra</label><br>
				<input type="text" required name="precio_compra" placeholder="precio_compra" value = "<?php echo $row['precio_compra']; ?>">
				<br><br>
				
				<label>Grupo: </label>
					<select name="grupo" class="custom-select-sm">
					<option value="grupoa"><?php echo $row['grupo']; ?></option>						
						<option value="grupoa">GrupoA</option>
						<option value="grupob">GrupoB</option>
						<option value="grupoc">GrupoC</option>
					</select>	
				<br><br>


				<button type="submit" class="btn btn-success">Guardar</button>
			</p>
		</form>

	</center>


</body>
</html>