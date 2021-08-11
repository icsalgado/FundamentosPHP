<?php

$valor = $_GET["valor"];
$confirma = isset($_GET["confirma"])?$_GET["confirma"]:"não confirmado";

$raiz_quadrada = sqrt ($valor);

echo "O valor é $valor <br>";
echo "A raiz quadrada é $raiz_quadrada <br>";
echo "$confirma<br>";



?>
<html><body><a href="integracaoPhpHtml.html">Voltar</a></body></html>
