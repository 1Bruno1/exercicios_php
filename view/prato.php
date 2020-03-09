<div class="corpo-prato">

    <form action="../src/verificar_calorias.php" method="POST">
    

        <select name="prato"> 
        
        <option value="pratos"> PRATOS </option>
        <option value="vegetariano"> Vegetariano </option>
        <option value="peixe"> Peixe </option>
        <option value="frango"> Frango </option>
        <option value="carne"> Carne </option>
        
        </select>

        <p></p>

        <select name="bebida"> 
        
        <option value="babidas">  BEBIDAS </option>
        <option value="chá"> Chá </option>
        <option value="suco de laranja"> Suco de laranja </option>
        <option value="suco de melão"> Suco de melão </option>
        <option value="refri diet"> Refri diet </option>
        
        </select>
    
        <p></p>

        <select name="sobremesa"> 
        
        <option value="sobremesas">  SOBREMESAS </option>
        <option value="abacaxi"> Abacaxi </option>
        <option value="sorvete diet"> Sorvete diet </option>
        <option value="mouse diet"> Mouse diet </option>
        <option value="mouse chocolate"> Mouse chocolate </option>
        
        </select>
    
        <p></p>

        <input type="submit" class="botao" value=" CONFIRMAR ">

        <?php if (isset($_GET['resultado'])) { ?>
            <span> <?php echo "Quantidade de calorias das escolhas = ".$_GET['resultado'] ?></span>
        <?php } ?>

    </form>





</div>