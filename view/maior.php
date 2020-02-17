<div class="body">

    <form action="../src/autenticar_maior.php" method="POST" class="form-maior">

    <input type="int" name="num1" placeholder="DIGITE UM NÚMERO">

    <input type="text" name="num2" placeholder="DIGITE OUTRO NÚMERO">

    <input class="botao" type="submit" value="CONFIRMAR" id="input-botao">


    </form>


    <?php if(isset($_GET['pagina'])){ ?>

        <span><?php echo "MAIOR NÚMERO = ".$_GET['pagina']?></span>

    <?php    } ?>


</div>