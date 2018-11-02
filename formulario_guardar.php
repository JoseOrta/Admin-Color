<!DOCTYPE html>
<html>
	<head>
		<title>Guardar</title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<body>

		<center>
			<form action="operacion_guardar.php" method="post">
				<p>
					<h3>Ingrese datos</h3> <br> 
					<input type="text" required name="nombre" placeholder="Nombre">
					<br><br>
					<input type="text" required name="cantidad" placeholder="Cantidad"> <label for="">Gramos</label>
					<br><br>
					<input type="text" required name="precio_compra" placeholder="Precio de compra"> <label for="">Bs.S</label>
					<br><br>					
					<input type="date" required name="fecha" >				
					<br><br>	
					
					<label>Grupo: </label>
					<select name="grupo" class="custom-select-sm">						
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