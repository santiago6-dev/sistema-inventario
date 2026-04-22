<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="estilos.css"> 
</head>

<body>
<?php
$marca = $_POST['marca']; 
include("conexion.php");
$link = Conectarse();

mysqli_query($link, "INSERT INTO marca (d_marca) VALUES ('$marca')");
?>
<div class="container">
  <form name="form1" method="post" action="">
    <h2 class="titulo">Marca registrada</h2>
    <div class="form-row">
      <div class="form-group">
        <label>Marca</label>
        <input type="text" value="<?php echo $marca ?>" readonly="true">
      </div>
  </form>
</div>
</body>
</html>
