<?php

$celsius = ($_POST['temperatura'] - 32) * (5/9);


header("location: ../view/fahrenheit.php?pagina= $celsius");



?>