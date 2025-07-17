<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular o fatorial de um número</title>
</head>
<body>

    <form method = "POST" action="">
        <label for = "numero">verificar numero</label>
        <input type = "number" id = "numero" name = "numero">
        <button type = "submit" name = "verificar">Verificar</button>
    </form>

    <?php

    $fat = $_POST['fatorial'];
    $x = 1;

    while($fat > 1) {
    echo $x = $x * $fat.",";
    $fat--;
    }

    echo "<br>Rsultado: ".$x;

    ?>

</body>
</html>