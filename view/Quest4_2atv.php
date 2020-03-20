<div class="corpo">


    <form action="../src/comparar_4Quest.php" method="POST">
    
    <label for="num1"> Número entre 1 e 50</label>
    <input type="number" name="num1"><p></p>
    
    <label for="num2"> Número entre 1 e 50</label>
    <input type="number" name="num2"><p></p>

    <label for="num3"> Número entre 1 e 50</label>
    <input type="number" name="num3"><p></p>

    <label for="num4"> Número entre 1 e 50</label>
    <input type="number" name="num4"><p></p>

    <label for="num5"> Número entre 1 e 50</label>
    <input type="number" name="num5"><p></p>
    
    <input type="submit" class="botao" value=" ENVIAR ">
    
    </form>

    <?php

    $randoms = Array();
        $randoms[] = rand(1,50);
        $randoms[] = rand(1,50);
        $randoms[] = rand(1,50);
        $randoms[] = rand(1,50);
        $randoms[] = rand(1,50);

    ?>

    <p></p>

    <?php if(isset($_GET['resultado'])){ ?>
        <span><?php echo $_GET['resultado'] ?></span>
    <?php } ?>

        <p></p>

    <?php
    for ($i = 0; $i < 5; $i++){
        echo $i."º número random = ".$randoms[$i]."<br>";
    }
    ?>

</div>