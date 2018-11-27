<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>insert Provincias</title>
   
</head>

<body>
<div class="jumbotron text-center">
  <h1>Ejercicio 7 inserta provincias</h1> 
</div>
<?php  if ($errores): ?> <!-- compruebo que es la primera llamada -->

	<div style="border: 1px solid #ccc; color: red">
	<?php foreach($errores as $textoError) {
		echo "<li>".$textoError."</li>";
	}
	?>
	
	</div>
<?php endif;?>


<div class="container mx-10">
   <form method="post" >
   <label>Provincia</label>
   <input type='text' name='nuevaProvincia'>
   <input type="submit" value="anadir">
  </form>
  
  <a href="../05T6/index5T6.php">Lista Todas la provincias</a>
  <a href="listadoProvinciasNuevas07T6.php">Lista las provincias nuevas</a>
  <?php 
if($_POST) {
  //  $patron="/^[[:digit:]]+$/";
 // print_r($_POST);
 $vale=true;
    if(empty($_POST['nuevaProvincia']) || (!isset($_POST['nuevaProvincia'])) || is_null($_POST['nuevaProvincia'])){
       
         // echo " No has introducido ninguna provincia";
          $vale=false;
   }
   if( esRepetida($_POST['nuevaProvincia'])){
       
        // echo "La provincia indicada ya está introducida";
         $vale=false;
   }
   if(preg_match("/[0-9]+/i", $_POST['nuevaProvincia'])){
       
       //  echo "No has introducido una provincia válida";
         $vale=false;
    
   }
   if($vale){
       insert($_POST['nuevaProvincia']);
       $vale=true;
   }
   
        
   
 
   }
  ?>
</div>
</body>
</html>
