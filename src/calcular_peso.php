<?php

if(($_POST['sexo'] == "masculino") || ($_POST['sexo'] == "MASCULINO")){
    $pesoideal = (72.6 * $_POST['altura']) - 58;
} 

else if(($_POST['sexo'] == "feminino") || ($_POST['sexo'] == "FEMININO")){
    $pesoideal = (62.1 * $_POST['altura']) - 44.7;
} 

header("location: ../view/pesoideal.php?resultado= $pesoideal");

?>