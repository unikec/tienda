<?php
include_once 'control08T6.php';
if (!$_POST) {
    

?>

<form method="post">
	<label>Provincia</label> <input type='text' name='nuevoNombre'>
	<input type="hidden" name="provincia" value="<?php echo $_GET['provincia']?>"> 
	<input type="submit" value="cambiar" >
</form>
<?php
}else{
    modificarNombre($_POST['nuevoNombre'], $_POST['provincia']);
}
//echo "<a href='formulario08T6.php'>Volver</a>";
?>
<a href="../05T6/index5T6.php">Lista Todas la provincias</a>
<a href="muestraProvincias8T6.php">Lista las provincias nuevas</a>
<a href='formulario08T6.php'>Volver</a>


