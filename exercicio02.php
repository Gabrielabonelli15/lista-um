<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calcular a tabuada de um número informado</title>
</head>
<body>
    
    <form method = "POST" action="">
        <label for = "numero">verificar se é par ou ímpar</label>
        <input type = "number" id = "numero" name = "numero">
        <button type = "submit" name = "verificar">Verificar</button>
    </form>
    
    <?php

    if(!empty($_GET['num']))
    {
        $number = $_GET['num'];
        for($i=1; $i <= 10; $i++)
        {
            echo "$i * $number = ".($i * $number);
            echo"<br><br>";
        }
    }
    ?>   

</body>
</html>