<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n1 = $_GET["a"];//pegar um valor da URL
        $n2 = $_GET["b"];//para passar os valor na url tem que colocar ? depois de .php [valor1]&[valor2]

        echo $n1 + $n2. "<br>";//soma
        echo $n1 - $n2. "<br>";//subtração
        echo $n1 * $n2. "<br>";//multiplicação
        echo $n1 / $n2. "<br>";//divisão
        echo $n1 % $n2. "<br>";//resto da divisão
        echo abs($n2). "<br>";//valor absoluto
        echo pow ($n1, $n2). "<br>";//potenciação
        echo sqrt ($n1). "<br>";//raiz quadrada
        echo round ($n1). "<br>";//arredondamento (ceil floor)
        echo intval ($n1). "<br>";//parte inteira
        echo number_format ($n1, 2, ",", "."). "<br>";//parte inteira duas casas decimais, separador decimal por virgula, separador milhar com ponto


    ?>
</body>
</html>