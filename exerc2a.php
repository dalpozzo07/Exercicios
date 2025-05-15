<?php

// Dados dois números inteiros (dividendo e divisor), 
// apresentar o quociente e o resto.

$int1 = readline("Digite o primeiro número: ");
$int2 = readline("Digite o segundo número: ");

$quociente = $int1 / $int2;
$resto = $int1 % $int2;

echo "O quociente é $quociente e o resto é $resto";

?>