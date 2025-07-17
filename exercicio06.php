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

   $numero = '73';

   function exibirDivisores($numero){
         $resultado = '';
         for ($i = '1'; $i <= $numero / '2'; $i++) {
                if ($numero % $i === '0'){
                    $resultado .= "$i é divisor de $numero <br>";
                }
         }
         return $resultado;
   }


    ?>


</body>
</html>