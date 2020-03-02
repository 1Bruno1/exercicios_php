<div class="corpo">

    <form action="../src/calcular_pagamento.php" method="POST" class="form-apartamento">

        <input type="text" name="nome" placeholder="INFORME O NOME DO PROPRIETÁRIO">

        <input type="number" name="numero" placeholder="INFORME O NÚMERO DO APARTAMENTO">

        <input type="radio" name="animal" value="cão">
        <label for="cão"> Cão </label> <br>

        <input type="radio" name="animal" value="gato">
        <label for="gato"> Gato </label> <br>

        <input type="radio" name="animal" value="papagaio">
        <label for="papagaio"> Papagaio</label> <br>

        <input type="radio" name="animal" value="nenhum">
        <label for="nenhum"> Nenhum </label> <br>

        <input type="submit" class="botao" value="CONFIRMAR">
    
    
    </form>

    <?php if(isset($_GET['resultado'])) { ?>

    <span><?php echo " ".$_GET['resultado'] ?></span>

    <?php } ?>




</div>