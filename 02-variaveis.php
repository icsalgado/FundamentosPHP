<html>
    <body>
        As Variaveis em PHP não precisam ser declaradas com o tipo e são
        case sensitive <br>
        Não podem ser iniciadas com números, espaço em branco ou caracteres especiais<br><br>
    </body>
</html>

<?php
echo "<br>"; //aqui temos uma quebra de linha e comentário
echo "<hr>"; //aqui uma linha horizontal

$nome = "Iuri";
$idade = 30;
$altura = 1.72;

// exemplo de concatenação de variaveis 
echo "Meu nome é $nome, tenho $idade e $altura de altura";