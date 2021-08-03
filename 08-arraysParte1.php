<?php

$carros = array("Lancer", "Picasso");
$carros[] = "Santana"; //insere um item ao array
print_r($carros);

$outrosCarros = array(1=>"Gol", 2=>"Corsa");
print_r($outrosCarros);

echo $carros[1];
echo $outrosCarros[1];

echo "<hr>";

echo count($carros);//conta quantos indices tem no array

echo "<br>";

foreach ($carros as $valor){//varredura do array
    echo $valor."<br>";
}

echo "<hr>";

//array associativo

$cliente = array ("Nome" => "Iuri", "Idade" => 30, "Altura" => 1.72);
$cliente ["Cidade"] = "Porto Alegre";

foreach ($cliente as $indice => $valor){
    echo $valor."<br>";
}