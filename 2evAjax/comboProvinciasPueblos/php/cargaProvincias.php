<?php 
function getProvincias(){
	
    $database = mysqli_connect("localhost", "root", "", "ejercicios");
    
    mysqli_set_charset($database,'utf8');
    
        $query="SELECT * FROM provincias";
        
        $result=mysqli_query($database,$query);
        
        echo "<select id='sel1'>";
        
        while ($datos = mysqli_fetch_row($result)) {
            
            echo "<option value='".$datos[0]."'>".$datos[2]."</option>";
                
        }
        echo "</select>";
    }
    
    getProvincias();