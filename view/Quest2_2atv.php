<div class="corpo">

    <form action="../src/imc_2Quest.php" method="POST" class="form-a">
    
    <input type="text" name="nome" placeholder=" NOME "><p></p>

    <select name="sexo">
    
    <option value="m"> Masculino </option>
    <option value="f"> Feminino </option>
    
    </select>
    <p></p>
    
    <input type="number" step="0.01" name="peso" placeholder=" PESO "> <p></p>
    
    <input type="number" step="0.01" name="altura" placeholder=" ALTURA "> <p></p>
    
    <input type="submit" class="botao" value=" ENVIAR ">
    
    
    </form>

    <?php if(isset($_GET['resultado'])){ ?>
        <span><?php echo "Condição = ".$_GET['resultado'] ?></span>
    <?php } ?>

</div>