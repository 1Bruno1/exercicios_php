<div class="corpo">

<form action="../src/calcular_peso.php" method="POST" class="form-pesoideal">


<input type="double" name="altura" placeholder="INFORME A ALTURA">

<input type="text" name="sexo" placeholder="INFORME O SEXO">

<input type="submit" class="botao" value=" CONFIRMAR ">


</form>


<?php if(isset($_GET['resultado'])){ ?>

    <span><?php echo "PESO IDEAL = ".$_GET['resultado']?></span>

<?php } ?>
  



</div>