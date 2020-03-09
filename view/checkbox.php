<div class="corpo-checkbox">

    <form action="" method="POST">
    
        <font size="5"><b> Escolha os números de sua preferência: </b> </font><p></p>

        <input type="checkbox" name="numeros[]" value=90> 90 <br>
        <input type="checkbox" name="numeros[]" value=50> 50 <br>
        <input type="checkbox" name="numeros[]" value=30> 30 <br>
        <input type="checkbox" name="numeros[]" value=15> 15 <br>
    
        <input type="submit" value=" CONFIRMAR ">

    </form>

<?php
    $checkbox = $_POST['numeros'];
    foreach($checkbox as $valor){
    echo $valor."<br>"; 
} 
?>


</div>