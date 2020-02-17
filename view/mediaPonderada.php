<div class="corpo">

    <form action="../src/calcular_media.php" method="POST" class="form-ponderada">

        <input type="int" name="prova1" placeholder="1º PROVA">

        <input type="int" name="prova2" placeholder="2º PROVA">

        <input type="int" name="prova3" placeholder="3º PROVA">

        <input class="botao" type="submit" value="CONFIRMAR" id="input-botao">

    </form>

     <?php if(isset($_GET['resultado'])){ ?>

        <span><?php echo "MÉDIA PONDERADA = ".$_GET['resultado']?></span>

    <?php    } ?>



</div>