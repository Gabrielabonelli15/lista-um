<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST" action="">
        <label for = "numero">verificar se é par ou ímpar</label>
        <input type = "number" id = "numero" name = "numero">
        <button type = "submit" name = "verificar">Verificar</button>
    </form>

<?php
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar'])){
        $numero = $_POST['numero'];
        echo "Numero escolhido: " . $numero;
        echo "<br>";

        $par = true;

        if($numero % 2 != 0){
            $par = false;
        } else{
            $par = true;
             echo "O número $numero é " . ($par ? "par" : "ímpar") . ".";
        echo "<br>";
        }
    };
   };

?>
</body>
</html>