<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio veintiuno Tema 3</title>
</head>
<body>
<?php

function MuestraCoche($coche)
{
   
    foreach ($coche as $idx=>$valor){
        if ($idx!='matricula') {
        echo "Muestra información de : ".$valor."<br>";
        //echo $valor.", ";
        }
      
      
    }
   
} 
function ImprimirCabeceraTabla($tabla){ //solo para arrays no bimensionales
    echo "<table><tr>";
    foreach ($tabla as $valor){

        echo "<th>".$valor."</th>";
        
    }
    echo "</tr>";
}

function MuestraCoches($coches)
{echo "<table>";
    foreach ($coches as $coche) {
       echo "<tr>";
        foreach ($coche as $idx=>$caracteristica) {
            if($idx!="matricula"){//le digo que no me diga la matricula para ver como funciona
            echo "<td>".$caracteristica."</td>";
            }
        }
        echo"</tr>";
    }
    echo"</table>";
}
function MuestraCochesTabla($coches) {// para arrays bidimensionales
        echo "<table><tr><th>Matricula</th><th>Color</th><th>Modelo</th><th>Marca</th></tr>";
   
    foreach ($coches as $coche) {
        echo "<tr>";
        foreach ($coche as $idx=>$caracteristica) {
          //  if($idx=="matricula")//para cuando quiero que solo imprima una caracteristicas
            echo "<td>".$caracteristica."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>
<h1>Trabajando Arrays 21</h1>
	<p>Se desea almacenar información sobre coches, para cada coche se
		almacenaran las siguientes características (atributos):
		 • matrícula
		 • color 
		 • modelo 
		 • marca 
		 Realiza un array que almacene información de 5
		o más coches. Crea la función MuestraCoche($coche), donde $coche será
		un array que contiene los atributos indicados anteriormente que c 
		Realiza la función MuestraCoches($lista) que mostrará por pantalla
		información de los coches almacenados . Añade dos coches adicionales
		al array, después de mostrar, y vuelve a mostrar toda la lista. Nota:
		Se utilizará un array para almacenar la información de cada coche. Los
		indices, serán el nombre de los atributos que deseamos almacenar. Esto
		se puede hacer también utilizando objetos (clases).
	
	
	<p>

<?php
$coche = [
    "matricula",
    "Color",
    "Modelo",
    "Marca"
];
$coches = [
    [
        "matricula" => "1245NMK",
        "color" => "rojo",
        "modelo" => "ateka",
        "marca" => "Seat"
    ],
    [
        "matricula" => "1425KIM",
        "color" => "verde",
        "modelo" => "focus",
        "marca" => "For"
    ],
    [
        "matricula" => "2178LOP",
        "color" => "azul",
        "modelo" => "clase A",
        "marca" => "Mercedez"
    ],
    "8965EDF"=>[
        "matricula" => "8965EDF",
        "color" => "gris",
        "modelo" => "picasso",
        "marca" => "Citroen"
    ],
    [
        "matricula" => "9621PLK",
        "color" => "blanco",
        "modelo" => "picanto",
        "marca" => "Kia"
    ]
];

//alucino se lo come, simplemente SUMANDO me amplia al array bimensional (preguntar si me petará algun día) ???

//$coches+=[["1256HJK","negro","Clio","Renault"],["3214ASD","perla","Corola","Toyota"]];//no va
$coches[]= array("matricula" =>"1256HJK","color" =>"negro","modelo" =>"Clio","marca" =>"Renault") ;
$coches[]= array("matricula" =>"3214ASD","color" =>"perla","modelo" =>"Corola","marca" =>"Toyota");

echo "<pre>";
print_r($coches);
echo"</pre>";
MuestraCoche($coche);
ImprimirCabeceraTabla($coche);
MuestraCoches($coches);
MuestraCochesTabla($coches);


?>







</body>
</html>