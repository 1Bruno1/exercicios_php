<?php


if($_POST['num1'] > $_POST['num2']){
    $maior = $_POST['num1'];
}

else if($_POST['num2'] > $_POST['num1']){
    $maior = $_POST['num2'];
}

else if($_POST['num1'] == $_POST['num2']){
    $maior = 0;
}


header("location: ../view/maior.php?pagina= $maior");

?>