<?php

do{


$SalFixo = readline("Digite o valor do salário fixo: ");
$Car = readline("Digite quantos carros foram vendidos: ");

$CarFixo = 100*$Car;
$Comissao = $CarFixo * 0.05;
$SalTotal = $SalFixo + $Comissao + $CarFixo;


if ($Car < 0 || $SalFixo < 0){
    echo "Não é possível calcular o valor total do salário, 
    pois o salário fixo e o número de carros vendidos
     não podem ser negativos.\n";
}else{
    echo "O valor total do salário é R$: " . round($SalTotal, 2) . "\n";
    break;
}

}while  (true);


