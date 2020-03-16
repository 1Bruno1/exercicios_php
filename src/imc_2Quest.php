<?php

$imc = $_POST['peso'] / ($_POST['altura'] * $_POST['altura']);

if (($_POST['sexo'] == 'f') && ($imc < 19.1)){
    $condicao = "abaixo do peso";
}

if (($_POST['sexo'] == 'm') && ($imc < 20.7)){
    $condicao = "abaixo do peso";
}

if (($_POST['sexo'] == 'f') && ($imc >= 19.1) && ($imc < 25.8)) {
    $condicao = "peso normal";
}

if (($_POST['sexo'] == 'm') && ($imc >= 20.7) && ($imc < 26.4)) {
    $condicao = "peso normal";
}

if (($_POST['sexo'] == 'f') && ($imc >= 25.8) && ($imc < 27.3)) {
    $condicao = "marginalmente acima do peso";
}

if (($_POST['sexo'] == 'm') && ($imc >= 26.4) && ($imc < 27.8)) {
    $condicao = "marginalmente acima do peso";
}

if (($_POST['sexo'] == 'f') && ($imc >= 27.3) && ($imc < 32.3)) {
    $condicao = "acima do peso ideal";
}

if (($_POST['sexo'] == 'm') && ($imc >= 27.8) && ($imc < 31.1)) {
    $condicao = "acima do peso ideal";
}

if (($_POST['sexo'] == 'f') && ($imc > 32.3)) {
    $condicao = "obeso";
}

if (($_POST['sexo'] == 'm') && ($imc >= 31.1)) {
    $condicao = "obeso";
}

    header("location: ../view/Quest2_2atv.php?resultado= $condicao");

?>