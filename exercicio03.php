<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informar se um número é positivo, negativo ou zero</title>
</head>
<body>
    <form method = "POST" action="">
        <label for = "numero">verificar numero</label>
        <input type = "number" id = "numero" name = "numero">
        <button type = "submit" name = "verificar">Verificar</button>
    </form>

    <?php

    $numero = -9;
    if ($numero > 0) {
    echo "O número é positivo.";
    } elseif ($numero < 0) {
    echo "O número é negativo.";
    } else {
    echo "O número é zero.";
    }

    ?>
</body>
</html>