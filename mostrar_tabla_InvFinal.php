<!DOCTYPE html>
<html>
<head>
	<title>Mostrar tabla</title>
</head>
<body>

<?php  

    include ("conexion.php");
	$query = 
	"SELECT 
	id, nombre, cantidad_final,
	DATE_FORMAT(fecha_pesofin, '%d-%m-%y') as fecha_pesofin	
	FROM tabla_inventario_inicial "; 
	
	
	
	$resultado  = $conexion -> query ($query);
	while ($row = $resultado -> fetch_assoc()) {
?><!--Fin php-->

<tbody id="myTable">
<tr>
	<td> <?php echo $row['id'];			    ?></td>
	<td> <?php echo $row['nombre'];		    ?></td>
	<td> <?php echo $row['cantidad_final'];	?></td>
	<td> <?php echo $row['fecha_pesofin'];	?></td>


	<td> 	
		<a href="formulario_usar.php?id=<?php echo $row['id'];?>">
			<button type="submit" class="btn btn-primary">Agregar cantidad</button>
		</a>
	</td>
	
		
</tr>
</tbody>


<?php  
} //fin while
?> <!--Fin php-->
    



</body>
</html>