<div class="corpo">

    <form action="../src/calcular_desempenho.php" method="POST" class="form-conceito">
    
        <input type="int" name="nota" placeholder="INFORMA SUA NOTA">

        <input class="botao" type="submit" value="CONFIRMAR" id="input-botao">
    

    </form>

    <?php if(isset($_GET['result'])){ ?>

        <span><?php echo "SITUAÇÃO DO ALUNO = ".$_GET['result']?></span>

    <?php    } ?>


</div>