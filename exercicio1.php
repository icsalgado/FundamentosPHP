<?php

/**Calcular 10% de desconto em um produto */

$preco = $_GET["p"];

echo $preco. "<br>"; 

$preco -= ($preco * 0.1); #calculo de desconto

echo number_format($preco, 2);


/*Variaveis referenciadas */


$variavelA = 3;
$variavelB = &$variavelA; #variavelB é referenciada a variavelA
echo "<br>". $variavelA. "<br>";
echo $variavelB. "<br>";
$variavelB += 5; //neste ponto variavelA também vai assumir o valor de variavelB
echo $variavelA. "<br>";
echo $variavelB. "<br>";

//variaveis de variaveis

$site = "cursoemvideo";
$$site = "cursodePHP";
echo $$site. "<br>";