<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="estilos.css">
</head>

<body>
<?php
if (
    isset($_POST['nombre'], $_POST['apellidoP'], $_POST['apellidoM'], $_POST['rfc'],
          $_POST['tel'], $_POST['correo'], $_POST['colonia'], $_POST['num'],
          $_POST['muni'], $_POST['estado'], $_POST['calle'])
) {
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $rfc = $_POST['rfc'];
    $tel = $_POST['tel'];
    $correo = $_POST['correo'];
    $num = $_POST['num'];
    $colonia = $_POST['colonia'];
    $muni = $_POST['muni'];
    $estado = $_POST['estado'];
    $calle = $_POST['calle'];
} else {
    die("Faltan datos");
}

if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
    echo "Correo no válido";
    exit;
}

include("conexion.php");
$link = Conectarse();

mysqli_query($link, "INSERT INTO cliente 
(nombre, ap_paterno, ap_materno, rfc, telefono, correo, numero, id_colonia, id_municipio, id_estado, calle) 
VALUES ('$nombre', '$apellidoP', '$apellidoM', '$rfc', '$tel', '$correo', '$num', '$colonia', '$muni', '$estado', '$calle')");
?>
<div class="container">
<form name="form1" method="post" action="">
  <h2 class="titulo">Cliente Grabado</h2>
  <h3 class="titulo_2">Datos personales</h3>
  <div class="form-row">
    <div class="form-group">
      <label>Nombre completo</label> 
      <input type="text" size="50" value="<?php echo $nombre ?> <?php echo $apellidoP ?> <?php echo $apellidoM ?>" readonly="true">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group">
      <label>RFC</label> 
      <input type="text" size="13" value="<?php echo $rfc ?>" readonly="true">
    </div>
    <div class="form-group">
      <label>Telefono</label> 
      <input type="text" size="12" value="<?php echo $tel ?>" readonly="true">
    </div>
    <div class="form-group">
    <label>Correo electronico</label>
    <input type="text" size="30" value="<?php echo $correo ?>" readonly="true">
    </div>
  </div>
  <h3 class="titulo_2">Direccion</h3>
  <div class="form-row">
    <div class="form-group">
      <label>Calle</label> 
      <input type="text" size="13" value="<?php echo $calle ?>" readonly="true">
    </div>
    <div class="form-group">
      <label>Numero de domicilio</label> 
      <input type="text" size="12" value="<?php echo $num ?>" readonly="true">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group">
      <label>ID Colonia</label> 
      <input type="text" size="13" value="<?php echo $colonia ?>" readonly="true">
    </div>
    <div class="form-group">
      <label>ID Municipio</label> 
      <input type="text" size="12" value="<?php echo $muni ?>" readonly="true">
    </div>
    <div class="form-group">
    <label>ID Estado</label>
    <input type="text" size="30" value="<?php echo $estado ?>" readonly="true">
    </div>
  </div>
  <p>&nbsp; </p>
</form>
</div>
</body>
</html>
