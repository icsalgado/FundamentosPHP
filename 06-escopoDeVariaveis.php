<?php
//contexto onde a variavel foi definida

$nome = "Iuri Salgado";//escopo global
$a = 1;
$b = 2;
$c = 3;

function exibirNome(){
    global $nome;
    echo $nome;
}

exibirNome();
echo "<hr>";
/////////////////

function exibirCidade(){
    //global $cidade;
    $cidade = "Porto Alegre";//escopo local
    echo $cidade;
}

exibirCidade();
//echo $cidade;
echo "<hr>";

function exibirNovaCidade(){
    global $cidade;//definindo a variavel em escopo global
    $cidade = "Lisboa";//escopo local
    //echo $cidade;
}

exibirNovaCidade();
echo $cidade;

echo "<hr>";

function soma(){
    //array especial GLOBALS, acessa variaveis globais dentro da função
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();