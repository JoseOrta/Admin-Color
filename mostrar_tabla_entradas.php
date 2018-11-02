<!DOCTYPE html>
<html>
<head>
	<title>Mostrar tabla</title>
</head>
<body>

<?php  

    include ("conexion.php");
	$query = "SELECT * FROM tabla_inventario_inicial";
	$resultado  = $conexion -> query ($query);
	while ($row = $resultado -> fetch_assoc()) {
		
?><!--Fin php-->	

<tbody id="myTable">
<tr>
	<td> <?php echo $row['id'];		   ?></td>
	<td> <?php echo $row['nombre'];	   ?></td>	
	<td> <?php echo $row['entradas'];  ?></td>	

	<td> 	
		<a href="formulario_entradas.php?id=<?php echo $row['id'];?>">
			<button type="submit" class="btn btn-primary">Nueva entrada</button>
		</a>
	</td>
</tr>

</tbody>


<?php  //otro php
} //fin while
?> <!--Fin php-->


</body>
</html>