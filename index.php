<!DOCTYPE html>
<html>
<head>
	<title>Página principal</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="estilo.css">
  <?php  include "vendors.php";  ?>

  

</head>
<body>

<div class="container">

<?php //include "barra_navegacion.php"; ?>
<!--Navbar-->
<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-primary navbar-dark ">
  <ul class="navbar-nav">
    <li class="nav-item ">
      <a class="nav-link active" href="index.php">Inventario inicial</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index_entradas.php">Entradas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index_disponible.php">Disponible</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index_inventario_final.php">Inventario final</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index_consumo.php">Consumo</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index_reportes.php">Reportes</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link disabled" href="">Disabled</a>
    </li>
  </ul>
</nav>

  <p>
    <div class="jumbotron bg-primary text-light">
      <h1 >Inventario inicial</h1>
      <p>Leyenda...</p>
      
    </div>
  </p>
</div>


  <div class="container">
  
    <div class="row">
     
      <div class="col "><!--Central-->

       <a href="formulario_guardar.php">  <button type="button" class="btn btn-success">Añadir</button> <br><br></a>

       <input class="form-control" id="myInput" type="text" placeholder="Buscar..."> <br> 

        <table class="table table-hover">
          <thead class="bg-primary text-light" >
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Cantidad</th>
              <th>Fecha</th>
              <th>Precio de compra</th>
              <th>Grupo</th>

              <th colspan="2">Opciones</th>
            </tr>
          </thead>

          <?php include "mostrar_tabla.php"; ?>
        </table>           
      
      </div><!--/Central-->      
    </div>
  </div>

<!-- Script para buscar elementos en la tabla-->
<script> 
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


</body>
</html>