<?php include("encabezado.php")?>
<?php
//} else {

    
    echo "<table class='table table-bordered'><tr>";
    foreach ($_POST as $idConte=>$conte){
        echo"<td>".strtoupper($idConte)."</td>";
    }
    echo "</tr><tr>";
    foreach ($_POST as $idConte=>$conte){
        if($idConte=='observaciones'){
            echo"<td>".nl2br($conte)."</td>";
        }else{
        echo"<td>".$conte."</td>";
        }
    }
    echo "</tr></table>";
//}




?>
