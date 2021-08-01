<?php

//contante é um identificador para um valor único

define ("NOME", "Iuri Salgado");  //priimeiro parametro é o nome, segundo o valor

echo NOME; // sempre em letras maiusculas e sempre são globais

define ("CARROS", ['Lancer','Picasso']);

echo "<br>";
echo CARROS[0];

echo "<hr>";
var_dump (NOME);
echo "<hr>";
var_dump (CARROS);