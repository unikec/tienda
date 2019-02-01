<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla ciudades</title>

</head>
<body>
    <?php
    $cabecera=[];
    $ciudades = [ 
        ["Ciudad" => "Huelva","Habitantes"=> "145114", "Superficie"=>"151.33km","Alcande"=>"Gabriel Ruiz"],
        ["Ciudad" => "Aljaraque","Habitantes"=>"20836","Altitud"=>"35msmn", "Alcande"=>"Yolanda María Rubio", "patron"=>"San Sebastian"],
        ["Ciudad" => "Lepe", "Habitantes"=>"20836","Gentilicio"=>"Lepero/a"],
    ];
    
    function cabeceraTabla($cabecera){
        for ($i=0; $i <$ciudades.length() ; $i+=2) { 
            if($cabecera[i]!=$cuidades[i]){
               array_push ( $cabecera ,$cuidades[i] );
            }//end if
        }//end for
      return $cabecera;  
    }
    
    function MuestraInformacionEnTabla($ciudades){
        $html='<table ><tr>';
        foreach ($cabecera as $atributo => $campo) {
            $html.= '<th>'.$atributo.'</th>';
        }
      
        $html='</tr><tr>';
        foreach ($ciudades as $atributo => $campo) {
            $html.= '<td>'.$campo.'</td>';
        }
        $html.='</tr>';
        return $html;
    
    }
   
    echo MuestraInformacionEnTabla($ciudades)
    ?>
</body>
</html>