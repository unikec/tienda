<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

</head>
<body>
  <div id='divResultado'>
    <?php include('consulta.php');?>
  </div>
  <br><br>

  <p>Dar de alta nuevo alumno</p>
  <form id="formulario" name="formulario" onsubmit="registrar()" method="POST">
  <input id="codigo" type="text" name="codigo" value="codigo">
  <input id="nombre" type="text" name="nombre" value="nombre">
  <input id="direccion" type="text" name="direccion" value="direccion">
  <!--<input id="provincia" type="text" name="provincia" value="provincia">-->
  <?php include 'selectProvincias.php'; ?>
  <!--  <input id="poblacion" type="text" name="poblacion" value="poblacion">-->
  <select id="selectMunicipio" name="">
  </select>

  <input id="telefono" type="text" name="telefono" value="telefono">
  <button type="submit" name="button">Registrar</button>
  </form>

  <br>
  <p>Dar de baja a usuario</p><br>
  <form name="formulario" method="post" onsubmit="borrar()">
    <input id="codigoB" type="text" name="codigo" value="Codigo a borrar">
    <button type="submit" name="button">Borrar registro</button>
  </form>

  <script src="instituto.js" charset="utf-8"></script>
</body>
</html>
