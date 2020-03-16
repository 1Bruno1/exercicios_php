<div class="corpo">

    <form action="../src/operacao_1Quest.php" method="POST" class="form">
    
    <input type="int" name="A" placeholder="INFORME UM NÚMERO"><p></p>
    
    <input type="int" name="B" placeholder="INFORME OUTRO NÚMERO"><p></p>
    
    <input type="text" name="C" placeholder="INFORME UMA LETRA"><p></p>

    <input type="submit" class="botao" value=" CONFIRMAR" >
    
    
    
    </form>

    <?php if (isset($_GET['resultado'])){ ?>

        <span> <?php echo "Operação: ".$_GET['resultado'] ?> </span>

   <?php } ?>



</div>