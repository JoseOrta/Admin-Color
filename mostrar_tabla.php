

<?php  

    include ("conexion.php");
	$query = 
	
	"SELECT	
	id, nombre, cantidad, precio_compra, grupo,
	DATE_FORMAT(fecha, '%d-%m-%y') as fecha	
	FROM tabla_inventario_inicial";

	$resultado  = $conexion -> query ($query);
	while ($row = $resultado -> fetch_assoc()) {
?><!--Fin php-->

<tbody  id="myTable">
	<tr>
		<td> <?php echo $row['id'];				?></td>
		<td> <?php echo $row['nombre'];			?></td>
		<td> <?php echo $row['cantidad'];		?></td>
		<td> <?php echo $row['fecha'];			?></td>
		<td> <?php echo $row['precio_compra'];	?></td>
		<td> <?php echo $row['grupo'];			?></td>

		<td> 	
			<a href="formulario_modificar.php?id=<?php echo $row['id'];?>">
				<button type="submit" class="btn btn-primary">Modificar</button>
			</a>
		</td>

		<td>
			<a href="operacion_eliminar.php?id=<?php echo$row['id'];?>">
			<button type="submit" class="btn btn-danger">Eliminar</button></a>
		</td>		
			
	</tr>
</tbody>


<?php  
} //fin while
?> <!--Fin php-->
    


