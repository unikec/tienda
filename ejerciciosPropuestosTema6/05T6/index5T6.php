<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>TablaCCAAProvincias</title>
   <style>
        th{
            text-align: center;
        }
        tr {
            border-style: solid;
        } 
        </style>
</head>

<body>
<div class="jumbotron text-center">
  <h1>Ejercicios mysqli</h1> 
</div>
<div class="container mx-10">
  <h2>Tabla Comunidades Provincias</h2>          
  <table class="table table-bordered w-75 mx-auto">
    <thead>
      <tr>
        <th>CCAA</th>
        <th>Provincias</th>
      </tr>
    </thead>
    <tbody>

    <?php 
    include 'trataDatos5T6.php';
    ?>
</body>
</html>
