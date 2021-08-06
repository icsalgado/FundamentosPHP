<?php

$categorias = [];

$categorias [] = 'infantil';
$categorias [] = 'adolecente';
$categorias [] = 'adulto';

//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){ //empty verifica se a string está vazia
    echo 'O nome não pode ser vazio';
    return;
}

if(strlen($nome)<3){//tamanho do nome não pode ser menor que 3
    echo 'O nome precisa ter mais de 3 caracteres';
    return;
}

if(strlen($nome)>40){//nome não pode ser maior que 40
    echo 'Nome muito extenso';
    return;
}

if(!is_numeric($idade)){//verifica se é não é uma string numérica
    echo 'idade inválida, insira um numero inteiro!';
    return; 
}

//var_dump($nome);
//var_dump($idade);

if ($idade >= 6 && $idade <= 12){
    echo "O nadador ", $nome, ' compete na categoria infantil';
}

else if ($idade >= 13 && $idade <= 18){
    echo "O nadador ", $nome, ' compete na categoria adolescente';
}
else {
    echo "O nadador ", $nome, ' compete na categoria adulto';
}