<?php

if($_POST['animal'] == "cão"){
    $pagamento = 350+50;
}

else if($_POST['animal'] == "gato"){
    $pagamento = 350+30;
}

else if($_POST['animal'] == "Papagaio"){
    $pagamento = 350+12;
}

else if($_POST['animal'] == "nenhum"){
    $pagamento = 350-20;
}

header("location: ../view/apartamento.php?resultado= $pagamento");


?>