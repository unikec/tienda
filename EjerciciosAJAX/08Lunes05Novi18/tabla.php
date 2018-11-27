<?php
function showTablePHP(){
	
	$filas=$_GET['filas'];
	$cols=$_GET['columnas'];
	
	echo "<table border='1'>";
	
	for($i=0;$i<$cols;$i++){
		
		echo "<tr> ";
		for($j=0;$j<$filas;$j++){
			
			echo "<th> </th>";
		}
		echo "</tr>";
	}
	echo "</table>";
	
}

showTablePHP();

/*$fi=$_GET['filas'];
$col=$_GET['columnas'];
echo $fi;
echo $col;
function creaTabla($F,$C){
   for ($i = 0; $i < $F; $i++) { //for1
    echo "<table border='1'><tr>";
    for ($j = 0; $j < $C; $j++) {//for2
       echo "<td> </td>";
       
   }//end for2
   echo "</tr>";   
}//end for1
echo "</table>"; 
}//end funcion creaTabla



creaTabla($fi,$col);*/
?>
