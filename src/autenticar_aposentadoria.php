<?php

if (($_POST['sexo'] == "masculino") || ($_POST['sexo'] == "MASCULINO")){

    if(($_POST['idade'] >= 65) && ($_POST['contribuicao'] >= 10)){
        $aposentadoria = "Aposentadoria confirmada!";
    }

    if(($_POST['idade'] >= 63) && ($_POST['contribuicao'] >= 15)){
        $aposentadoria = "Aposentadoria confirmada!";
    }
    
    else{
        $aposentadoria = "Falha na aposentadoria!";
    }
    
}


if (($_POST['sexo'] == "feminino") || ($_POST['sexo'] == "FEMININO")){

    if(($_POST['idade'] >= 63) && ($_POST['contribuicao'] >= 10)){
        $aposentadoria = "Aposentadoria confirmada!";
    }

    else if(($_POST['idade'] >= 61) && ($_POST['contribuicao'] >= 15)){
        $aposentadoria = "Aposentadoria confirmada!";
    }

    else{
        $aposentadoria = "Falha na aposentadoria!";
    }
}

header("location: ../view/aposentadoria.php?resultado= $aposentadoria");




?>