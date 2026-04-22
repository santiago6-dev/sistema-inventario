<html>
<head>
<title>Producto Guardado</title>
<meta charset="utf-8">
<link rel="stylesheet" href="estilos.css"> 
</head>

<body>

<?php
// Recibir datos del formulario
$prod = $_POST['prod'];
$precio = $_POST['precio'];
$cant = $_POST['cant'];
$id_marca = $_POST['id_marca'];

// Conexi�n
include("conexion.php");
$link = Conectarse();

#Validaciones
if(empty($prod)){
    echo "El nombre es obligatorio";
    exit;
}
if($precio <= 0){
    echo "El precio debe ser mayor a 0";
    exit;
}
if($cant < 0){
    echo "El stock no puede ser negativo";
    exit;
}
#Validar si no es duplicado
$sql = "SELECT * FROM productos WHERE d_producto = '$prod'";
$resultado = mysqli_query($link, $sql);

if(mysqli_num_rows($resultado) > 0){
    echo "El producto ya existe";
    exit;
}


// Insertar producto
$query_insert = "INSERT INTO producto (d_producto, id_marca, precio, stock) 
                 VALUES ('$prod', '$id_marca', '$precio', '$cant')";
mysqli_query($link, $query_insert);

// Obtener descripci�n de la marca
$query_marca = "SELECT d_marca FROM marca WHERE id_marca = '$id_marca'";
$result = mysqli_query($link, $query_marca);
$row = mysqli_fetch_assoc($result);

$d_marca = $row['d_marca'];
?>

<div class="container">
  <h2 class="titulo">Producto Capturado</h2>
  <div class="form-row">
    <div class="form-group">
      <label>Producto</label>
      <input type="text" value="<?php echo $prod ?>" readonly>
    </div>
    <div class="form-group">
      <label>Marca</label>
      <input type="text" value="<?php echo $d_marca ?>" readonly>
    </div>
    <div class="form-group">
      <label>Precio</label>
      <input type="text" value="<?php echo $precio ?>" readonly>
    </div>
    <div class="form-group">
      <label>Cantidad</label>
      <input type="text" value="<?php echo $cant ?>" readonly>
    </div>
  </div>
</div>
<?php
mysqli_close($link);
?>

</body>
</html>