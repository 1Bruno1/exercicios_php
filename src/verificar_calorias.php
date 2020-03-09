<?php

$prato = isset($_POST['prato']);
$bebida = isset($_POST['bebida']);
$sobremesa = isset($_POST['sobremesa']);

$arrayPrato = Array(

    $arrayPrato['vegetariano'] = 180,
    $arrayPrato['peixe'] = 230,
    $arrayPrato['frango'] = 250,
    $arrayPrato['Carne'] = 350,

);

$arrayBebida = Array(

    $arrayBebida['chá'] = 20,
    $arrayBebida['suco de laranja'] = 70,
    $arrayBebida['frango'] = 100,
    $arrayBebida['Carne'] = 65,

);

$arraySobremesa = Array(

    $arraySobremesa['abacaxi'] = 75,
    $arraySobremesa['sorvete diet'] = 110,
    $arraySobremesa['mouse diet'] = 170,
    $arraySobremesa['mouse chocolate'] = 200,

);

foreach ($arrayPrato as $prato => $valor){
   
    return $valor;

}

foreach ($arrayBebida as $bebida => $valor){
    
    return $valor;
    
}

foreach ($arraySobremesa as $sobremesa => $valor){
    
    return $valor;


}

$calorias = $valor+$valor+$valor;

header("location: ../view/prato.php?resultado= $calorias");


?>