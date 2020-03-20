<?php

$numeros = Array();
    $numeros[] = $_POST['num1'];
    $numeros[] = $_POST['num2'];
    $numeros[] = $_POST['num3'];
    $numeros[] = $_POST['num4'];
    $numeros[] = $_POST['num5'];

$cont = 0;
for ($i = 0; $i < 5; $i++){
    if ($numeros[$i] == $randoms[$i]){
        $cont = ($cont + 1);
    }
}

header("location: ../view/Quest4_2atv.php?resultado= Quantidade de acertos = $cont");


?>