<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!--Se conecta a css -->
<link rel="stylesheet" href="estilos.css"> 
</head>

<body>
<div class="container">
<form name="form1" method="post" action="g_cliente.php">
  <h2 class="titulo">Captura de clientes</h2>
  <h3 class="titulo_2">Datos personales</h3>
  <div class="form-row"> <!-- Es una fila horizontal -->
    <div class="form-group"> <!-- Campo individual -->
      <label>Nombre</label> <!-- Texto que describe al input -->
      <input type="text" name="nombre"> <!-- Donde escribe el usuario -->
    </div>
    <div class="form-group">
      <label>Apelldio Paterno</label>
      <input type="text" name="apellidoP">
    </div>
    <div class="form-group">
      <label>Apellido Materno</label>
      <input type="text" name="apellidoM">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group">
      <label>RFC</label>
      <input type="text" name="rfc">
    </div>
    <div class="form-group">
      <label>Telefono</label>
      <input type="text" name="tel">
    </div>
    <div class="form-group">
      <label>Correo</label>
      <input type="text" name="correo">
    </div>
  </div>
  <h3 class ="titulo_2">Direccion</h3>
  <div class="form-row">
    <div class="form-group">
      <label>Calle</label>
      <input type="text" name="calle">
    </div>
    <div class="form-group">
      <label>Num. Domicilio</label>
      <input type="text" name="num">
    </div>
    <div class="form-group">
      <label>ID Colonia</label>
      <input type="text" name="colonia">
    </div>
    <div class="form-group">
      <label>ID Municipio</label>
      <input type="text" name="muni">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group small">
      <label>ID Estado</label>
      <input type="text" name="estado">
    </div>
  </div>
  <div class="btn-container">
    <button type="submit">GRABAR</button>
  </div>
</form>
</div>
</body>
</html>
