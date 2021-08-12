<?php

$numero = 10;

if ($numero == 9):
    echo "igual a 10";
elseif($numero <= 20):
    echo "não é 10 mas é menor ou igual a 20";
else:
    echo "diferente de 10";
endif;

echo ($numero > 10)?"<br>maior que 10":"<br>ou é 10 ou menor";

$cor = 'amarelo';

switch ($cor):
    case 'vermelho':
        echo "<br>vermelho";
        break;
    case 'azul':
        echo "<br>azul";
        break;
    default:
        echo "<br>nem vermelho nem azul";
        break;
    endswitch;