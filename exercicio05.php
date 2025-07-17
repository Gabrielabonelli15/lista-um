<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <form method = "POST" action="">
        <label for = "numero">verificar numero</label>
        <input type = "number" id = "numero" name = "numero">
        <button type = "submit" name = "verificar">Verificar</button>
    </form>

    <?php
    $num2 = '6';
    $num2 = '9';

    function numeroAmigo($num1, $num2){
        $somaDivisoresNum1 = 0;
        $somaDivisoresNum2 = 0;

    for ($i = 1; $i < $num1; $i++) {
        if ($num1 % $i === 0) {
            $somaDivisoresNum1 += $i;
        }
    }

    for ($i = 1; $i < $num2; $i++) {
        if ($num2 % $i === 0) {
            $somaDivisoresNum2 += $i;
        }
    }

    return $somaDivisoresNum1 === $num2 && $somaDivisoresNum2 === $num1;
    }
    ?>


</body>
</html>