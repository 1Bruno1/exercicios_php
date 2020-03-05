<?php

if($_POST['curso'] == "info"){
    $sala = 22;
}

if($_POST['curso'] == "alm"){
    $sala = 21;
}

if($_POST['curso'] == "agro"){
    
    $arrayLetra = Array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "X", "W", "Y", "Z");
  
    $letra = substr($_POST['nome'],0,1);

    for ($i = 0; $i < sizeof($arrayLetra); $i++){

        if(strcasecmp($letra,$arrayLetra[$i]) == 0){

            if(($i >= 0) && ($i <= 10)){

            $sala = 11;
            break;
            }

            else if(($i >= 11) && ($i <= 13)){

            $sala = 12;
            break;
            }

            else if(($i >= 14) && ($i <= 25)){

                $sala = 13;
                break;
            }
            
     

        }
    }

     
}



header("location: ../view/curso.php?resultado= $sala");

?>

