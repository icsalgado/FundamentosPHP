<?php

$nomes = array("fulano", "beltrano", "fulana");

//isarray
if(is_array($nomes)):
    echo "é array";
else:
    echo "não é array";
endif;


echo "<br><hr>";

//inarray retorna booleano
echo in_array("fulano", $nomes);
echo in_array("jose", $nomes);

echo "<br><hr>";
//array keys

$keys = array_keys($nomes);
print_r($keys);


echo "<br><hr>";
//array values
$values = array_values($nomes);
print_r($values);


echo "<br><hr>";
//array merge
$maisNomes = array ("titia", "menor", "chapa");

$todos = array_merge($nomes, $maisNomes);
print_r($todos);


echo "<br><hr>";
//array pop
array_pop($todos);
print_r($todos);
echo "<br>";
echo array_pop($todos);
echo "<br>";
print_r($todos);


echo "<br><hr>";
//array unshift
array_unshift($todos, "titia", "menor", "chapa");
print_r($todos);


echo "<br><hr>";
//array push
array_push($todos, "creusa");
print_r($todos);


echo "<br><hr>";
//array combine
$combina = array_combine($keys, $values);
print_r($combina);


echo "<br><hr>";

//array_sum > soma elementos do array


echo "<br><hr>";
//explode implode
$nome = "f_u_l_a_n_o";
$nomeArray = explode('_', $nome);
print_r($nomeArray);
echo "<br>";
echo $nome;
$nome = implode($nomeArray);
echo "<br>";
echo $nome;