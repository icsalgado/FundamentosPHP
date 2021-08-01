<?php
/*****dados escalares*****/

//strings

$frase = "Olá mundo";

var_dump($frase);

if (is_string($frase)):
    echo "é string";
else:
    echo "não é string";
endif;
echo "<hr>";

//inteiros

$numeroInteiro = 40;

var_dump($numeroInteiro);

if (is_int($numeroInteiro)):
    echo "é inteiro";
else:
    echo "não é inteiro";
endif;
echo "<hr>";

//float

$numeroReal = 40.4;

var_dump($numeroReal);

if (is_float($numeroReal)):
    echo "é float";
else:
    echo "não é float";
endif;
echo "<hr>";

//boolean

$booleano = true;

var_dump($booleano);

if (is_bool($booleano)):
    echo "é booleano";
else:
    echo "não é booleano";
endif;
echo "<hr>";

/***********Compostos **************/

//array

$carros = array("Gol", "Corsa", "Lancer", "Picasso", 10, 10.5, true);

var_dump($carros);
echo "<hr>";

//object

class Cliente{
    public $nome;//atributo
    public function atribuirNome($nome){//metodo
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();//instanciada classe Cliente, torna a variavel cliente em um objeto

//usando o metodo
$cliente->atribuirNome("Iuri");

var_dump($cliente);
echo "<hr>";

/**************** especiais **************/
//null
$nula = NULL;

var_dump($nula);

echo "<hr>";

//Resource

echo "Faz referencia a recursos externos, manipulação de arquivos, acesso a banco de dados etc.";
echo "<hr>";


?>

<html>
    <body>
        Os tipos de dados podem ser verificados atraves do var_dump
    </body>
</html>

