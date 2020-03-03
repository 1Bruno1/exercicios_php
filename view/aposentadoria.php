<div class="corpo">

    <form action="../src/autenticar_aposentadoria.php" method="POST" class="form-aposentadoria">
    
        <input type="text" name="nome" placeholder="INFORME O NOME"> <p></p>

        <input type="radio" name="sexo" value="feminino">
        <label for="feminino"> Feminino </label> <p></p>

        <input type="radio" name="sexo" value="masculino">
        <label for="masculino"> Masculino </label> <p></p>

        <input type="number" name="idade" placeholder="INFORME A IDADE"><p></p>

        <input type="number" name="contribuicao" placeholder="CONTRIBUIÇÃO"><p></p>

        <input type="submit" class="botao" value=" CONFIRMAR "> <p></p>
    
    
    </form>

    <?php if(isset($_GET['resultado'])) { ?>
    <span><?php echo "Situação = ".$_GET['resultado'] ?></span>
    <?php } ?>



</div>