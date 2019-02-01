<p>vista</p>
<?php
 foreach ($provincias -> result() as $row) {
    echo $row->provincia.'<br>';
 }
?>
    
</body>
</html>