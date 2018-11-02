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
	<td> <?php echo $row['disponible'];  ?></td>	
</tr>

</tbody>


<?php  //otro php
} //fin while
?> <!--Fin php-->


</body>
</html>