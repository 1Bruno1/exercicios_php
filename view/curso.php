<div class="corpo">


    <form action="../src/verificar_sala.php." method="POST" class="form-curso">
    
    <input type="text" name="nome" class="input-nome" placeholder="NOME"> <p></p>
    
    <input type="radio" name="curso" value="info">
    <label for="info">Curso Técnico em Informática</label> <p></p>

    <input type="radio" name="curso" value="alm">
    <label for="alm">Curso Técnico em Alimentos </label> <p></p>

    <input type="radio" name="curso" value="agro">
    <label for="agro">Curso Técnico em Agropecuária </label> <p></p>

    <input type="submit" class="botao" value="Consultar">
    
    

    
    </form>

    <?php if(isset($_GET['resultado'])) { ?>

        <span> <?php echo "Sala = ".$_GET['resultado'] ?> </span>

   <?php } ?>


</div>