<?php
include 'headerEncuesta36T3.php';
// } else {
echo "<h2>Informe</h2>";

echo '<div class="col-sm-10 mx-auto" >';

foreach ($_POST as $idConte => $conte) {

    if ($idConte == 'aficiones' || $idConte == 'estudios') {

        if ($idConte == 'aficiones') {
            echo "<h4>" . ucwords($idConte) . ": </h4>";

            foreach ($_POST['aficiones'] as $selected) {

                echo "<p>" . $selected . "</p>";
            }
        }
        if ($idConte == 'estudios') {
            echo "<h4>" . ucwords($idConte) . ": </h4>";

            foreach ($_POST['estudios'] as $selected) {

                echo "<p>" . $selected . "</p>";
            }
        }
    } elseif ($idConte == 'sexo' || $idConte == 'vacaciones') {
        echo "<h4>" . ucwords($idConte) . ": </h4><p>" . $conte . "</p>";
    }
}

echo '</div>';
// }

include 'footerEncuesta36T3.php';


?>
