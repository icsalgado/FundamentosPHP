<?php
session_start(); //iniciar uma sessão http dentro do script

$categorias = [];

$categorias [] = 'infantil';
$categorias [] = 'adolecente';
$categorias [] = 'adulto';

//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){ //empty verifica se a string está vazia
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, preencha-o novamente';//['array associativo'] 
    header ("location: formulario.php"); //mantem o fluxo dentro do formulário mesmo executando o script.php
}

if(strlen($nome)<3){//tamanho do nome não pode ser menor que 3
    $_SESSION['mensagem-de-erro'] = 'O nome precisa ter mais de 3 caracteres';
    header ("location: formulario.php");
}

if(strlen($nome)>40){//nome não pode ser maior que 40
    $_SESSION['mensagem-de-erro'] = 'Nome muito extenso';
    header ("location: formulario.php");
}

if(!is_numeric($idade)){//verifica se é não é uma string numérica
    $_SESSION['mensagem-de-erro'] = 'idade inválida, insira um numero inteiro!';
    header ("location: formulario.php");
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