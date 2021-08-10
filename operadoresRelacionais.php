<?php

//operador unario ... ? ...true... : ...false... 

$numero1 = $_GET["a"];
$numero2 = $_GET["b"];
$operacao = $_GET['op'];

$total = ($operacao == "s")?$numero1+$numero2:$numero1*$numero2;

echo $total;

/**
 * && ou and
 * || ou or
 * xor
 * ! 
 * 
 */



