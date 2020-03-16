<?php

    $c = $_POST['C'];

    if (strcasecmp($c, 's')==0) {
        $operacao = "Soma = ".($_POST['A'] + $_POST['B']);

        header("location: ../view/Quest1_2atv.php?resultado= $operacao");
    }

    else if (strcasecmp($c, 'm')==0) {
        $operacao = "Multiplicação = ".($_POST['A'] * $_POST['B']);

        header("location: ../view/Quest1_2atv.php?resultado= $operacao");
    }

    else if (strcasecmp($c, 'b')==0) {
        $operacao = "Subtração = ".($_POST['B'] - $_POST['A']);

        header("location: ../view/Quest1_2atv.php?resultado= $operacao");
    }

    else if (strcasecmp($c, 'd')==0) {
        $operacao = "Divisão = ".($_POST['A']/$_POST['B']);

        header("location: ../view/Quest1_2atv.php?resultado= $operacao");
    }

    else{
        $operacao = "Caracter inválido! ";

        header("location: ../view/Quest1_2atv.php?resultado= $operacao");
    }



?>