<?php

$Alt = readline("Digite o valor da altura: ");
$Base = readline("Digite o valor da base: ");

$Area = $Alt * $Base;
$Per = 2 *($base + $Alt);
$Diag = sqrt($Base*$Base + $Alt*$Alt);

echo "A área do retângulo é $Area\n";
echo "O perímetro é $Per\n";
echo "A diagonal é: " . round($Diag, 2) . "\n";

?>
