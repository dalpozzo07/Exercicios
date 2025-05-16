<?php

// Dado um número de três dígitos no 
// formato CDU, mostre como resultado a sua
//  inversão (formato UDC) (por exemplo, 
// para 123, o resultado será 321). Dica: 
// não utilize de funções prontas, é possível
//  resolver utilizando matemática e operadores
//  de divisão (/) e resto da divisão (%).

$Numero = readline("Digite um número com 3 dígitos: ");

$C = $Numero%10;
$D = intval(($Numero % 100) / 10); 
$U = intval($Numero / 100);

$NumeroSomado = ($C*100 + $D*10 +$U)+$Numero;
$Mult = ($NumeroSomado%10)*3 + intval((($NumeroSomado%100)/10)*2) + intval(($NumeroSomado/100)*1);
$Verif = intval($Mult%10);

echo "O número invertido é $C$D$U \n";
echo "O número somado é $NumeroSomado \n";
echo "O número multiplicado é $Mult \n";
echo "O número verificador é: $Verif \n";
