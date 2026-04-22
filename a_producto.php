<html>
<head>
<title>Captura de productos</title>
<meta charset="utf-8">
<link rel="stylesheet" href="estilos.css"> 
</head>

<body>

<?php
include("conexion.php");
$link = Conectarse();

$query = "SELECT id_marca, d_marca FROM marca";
$resultado = mysqli_query($link, $query);
?>

<div class="container">
  <form method="post" action="g_producto.php">
    <h2 class="titulo">Captura de productos</h2>
    <div class="form-row">
      <div class="form-group">
        <label>Producto</label>
        <input name="prod" type="text" required>
      </div>
      <div class="form-group">
        <label>Cantidad</label>
        <input name="cant" type="text" required min="0">
      </div>
      <div class="form-group">
        <label>Precio</label>
        <input name="precio" type="text" required min="1">
      </div>
      <div class="form-group">
        <label>Marca</label>
        <select name="id_marca" required>
          <option value="0">Seleccione...</option>
          <?php
          while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<option value='".$row['id_marca']."'>".$row['d_marca']."</option>";
          }
          ?>
        </select>
      </div>
    </div>

    <div class="btn-container">
    <button type="submit">GRABAR</button>
    </div>
  </form>
</div>
<?php mysqli_close($link); ?>

</body>
</html>