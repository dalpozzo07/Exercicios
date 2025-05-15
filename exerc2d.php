<?php

$Kw =  readline("digite o valor gasto de kw na sua residencia: ");

$a= 1500*(1/7);
$Quilo = $a / 100; // peguei do google o salário

$kw = $Kw * $Quilo;
$Desconto =  $kw*0.10; 
$DescontoFinal = $kw - $Desconto;  

echo "Valor sem desconto: R$" . round($kw, 2) . "\n";
echo "Valor final com desconto: R$" . round($DescontoFinal, 2) . "\n"; 
// tive que procurar como deixar com 2 casas decimais, n sabia como

