<?php

$categorias = [];

$categorias [] = 'infantil';
$categorias [] = 'adolecente';
$categorias [] = 'adulto';

print_r($categorias);

$nome = 'Iuri';
$idade = 8;

var_dump($nome);
var_dump($idade);

if ($idade >= 6 && $idade <= 12){
    echo "O nadador ", $nome, ' compete na categoria infantil';
}

else if ($idade >= 13 && $idade <= 18){
    echo 'adolecente';
}
else {
    echo 'adulto';
}