<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    form method = "POST" action="">
        <label for = "numero">verificar numero</label>
        <input type = "number" id = "numero" name = "numero">
        <button type = "submit" name = "verificar">Verificar</button>
    </form>
    
    <?php
    function mensagemPersonalizada($nome, $mensagem = 'Olá!') {
        echo $mensagem ;
        echo $nome;
    }

    mensagemPersonalizada('Ana');
    mensagemPersonalizada('Lucas', 'Oi');
    ?>

</body>
</html>