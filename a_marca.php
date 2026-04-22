<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="estilos.css"> 
</head>

<body>
<?php
// 1. Conexi�n a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "venta");

// 2. Consulta SQL
$query = "SELECT id_marca, d_marca FROM marca";
$resultado = mysqli_query($conexion, $query);
?>
<div class="container">
  <form name="form1" method="post" action="g_marca.php">
    <h2 class="titulo">Captura de marcas</h2>
    <div class="form-row">
      <div class="form-group">
        <label>Marca</label>
        <input name="marca" type="text"> 
      </div>
    </div>
  
    <div class="btn-container">
      <button type="submit">GRABAR</button>
    </div>
    <h3 class="titulo_2">Marcas registradas:</h3>
	  <ul>
	  <?php
	  while ($row = mysqli_fetch_assoc($resultado)) {
    	echo "<li>".$row['d_marca']."</li>";
	  }
	  ?>
	  </ul>
</form>
</div>
</body>
</html>
