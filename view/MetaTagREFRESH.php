<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title> Refresh </title>

    <meta charset="UTF-8">
    <meta name="author" content="Bruno Silva Albuquerque">
    <meta http-equiv="refresh" content="4">

    <script>
        function sorteioNumero(){
            resultado.innerHTML=Math.random() * 50;
        }
        window.onload = sorteioNumero;
    
    </script>


    <title> Meta tag REFRESH </title>


</head>

<body>
    
        <p> Minha primeira Página utilizando Meta Refresh... !! </p>

        <p id="resultado"> </p>

</body>


</html>