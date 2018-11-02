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

	<!--Consumo = Cantidad - cantidad_final -->	

<tbody id="myTable">
<tr>
	<td> <?php echo $row['id'];		   ?></td>
	<td> <?php echo $row['nombre'];	   ?></td>
	<td> <?php echo $row['consumo'];	?></td>	
</tr>
</tbody>


<?php  
} //fin while
?> <!--Fin php-->


</body>
</html>