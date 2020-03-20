<?php

$conta = ($_POST['quantidade-cq'] * 1.50) + ($_POST['quantidade-salada'] * 3.00) + ($_POST['quantidade-burguer'] * 2.00) + ($_POST['quantidade-batata'] * 2.50) + ($_POST['quantidade-tudo'] * 4.50) + ($_POST['quantidade-refri'] * 2.00);

$nomec = $_POST['nome'];



header("location: ../view/Quest3_2atv.php?resultado= Nome do Cliente = $nomec  |  Total da conta = $conta");

?>