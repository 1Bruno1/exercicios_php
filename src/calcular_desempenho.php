<?php

if($_POST['nota'] >= 0 && $_POST['nota'] <= 49){
    $desempenho = "Insuficiente";
}

else if($_POST['nota'] >= 50 && $_POST['nota'] <=64){
    $desempenho = "Regular";
}

else if($_POST['nota'] >= 65 && $_POST['nota'] <=84){
    $desempenho = "Bom";
}

else if($_POST['nota'] >= 85 && $_POST['nota'] <=100){
    $desempenho = "ótimo";
}



header("location: ../view/desempenho.php?result= $desempenho");

?>