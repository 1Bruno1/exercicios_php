<div class="body">

    <form action="../src/autenticar_temp.php" method="POST" class="form-temp">

    <input type="int" name="temperatura" placeholder="TEMPERATURA (Fahrenheit)">

    <input style="float: right; margin-top: 20px" class="botao" type="submit" value="CONFIRMAR" id="input-botao">

    </form>

    <?php if(isset($_GET['pagina'])){ ?>

        <span><?php echo $_GET['pagina']?></span>

    <?php    } ?>

</div>