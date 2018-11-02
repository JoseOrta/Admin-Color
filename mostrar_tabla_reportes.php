<!DOCTYPE html>
<html>
<head>
	<title>Reportes</title>
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
		<td> <?php echo $row['id'];				?></td>
		<td> <?php echo $row['nombre'];			?></td>	

		<td> <?php echo $row['cantidad'];			?></td>	
		<td> <?php echo $row['entradas'];			?></td>	
		<td> <?php echo $row['cantidad_final'];			?></td>	
		<td> <?php echo $row['consumo'];			?></td>	

	</tr>
</tbody>


<?php  
} //fin while
?> <!--Fin php-->
    



</body>
</html>