<?php

$media_ponderada = (($_POST['prova1']*2) + ($_POST['prova2']*3) + ($_POST['prova3']*5))/10;


header("location: ../view/mediaPonderada.php?resultado= $media_ponderada");


?>