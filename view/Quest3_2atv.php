<div class="corpo-cardapio">

<h1><font color="green"> Net lanches - fast food </font></h1>

    <form action="../src/conta_3Quest.php" method="POST">
    
    <label for="nome"><font color="blue"><b> Nome do cliente: </b></font></label>
    <input type="text" name="nome"><p></p>
    
    <label style="margin-right: 80px;"><b> Lanches: </b></label>
    <label style="margin-right: 80px;"><b> Valor: </b></label>
    <label style="margin-right: 80px;"><b> Quantidade: </b></label>
    <p></p>
    
    <label for="valor-cq"><font color="blue"><b> Cachorro-quente: </b></font></label>
    <input type="number" name="valor-cq" value=1.50 style="width:45px; margin-left: 20px;">
    <label style="margin-right:80px;"> </label>
    <input type="number" name="quantidade-cq" min="0"; style="width:50px;"><p></p>

    <label for="valor-cq"><font color="blue"><b> X-Salada: </b></font></label>
    <input type="number" name="valor-salada" value=3.00 style="width:45px; margin-left: 73px;">
    <label style="margin-right:80px;"> </label>
    <input type="number" name="quantidade-salada" min="0"; style="width:50px;"><p></p>

    <label for="valor-cq"><font color="blue"><b> X-Burguer: </b></font></label>
    <input type="number" name="valor-burguer" value=2.00 style="width:45px; margin-left: 61px;">
    <label style="margin-right:80px;"> </label>
    <input type="number" name="quantidade-burgur" min="0"; style="width:50px;"><p></p>

    <label for="valor-cq"><font color="blue"><b> Batata frita: </b></font></label>
    <input type="number" name="valor-batata" value=2.50 style="width:45px; margin-left: 57px;">
    <label style="margin-right:80px;"> </label>
    <input type="number" name="quantidade-batata" min="0"; style="width:50px;"><p></p>

    <label for="valor-cq"><font color="blue"><b> X-Tudo: </b></font></label>
    <input type="number" name="valor-tudo" value=4.50 style="width:45px; margin-left: 85px;">
    <label style="margin-right:80px;"> </label>
    <input type="number" name="quantidade-tudo" min="0"; style="width:50px;"><p></p>

    <label for="valor-cq"><font color="blue"><b> Refrigerante lata: </b></font></label>
    <input type="number" name="valor-refri" value=2.00 style="width:45px; margin-left: 20px;">
    <label style="margin-right:80px;"> </label>
    <input type="number" name="quantidade-refri" min="0"; style="width:50px;"><p></p>

    <input type="submit" class="botao" value="Limpar Comanda" style="margin-left: 120px;">
    <input type="submit" class="botao" value="Enviar Pedido" style="margin-left: 10px;">
    

    </form>
    

    <?php if(isset($_GET['resultado'])){ ?>
        <span><?php echo $_GET['resultado'] ?></span>
    <?php } ?>


</div>