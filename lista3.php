<?php  

for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
}

// <?php 2

$soma = 0;

for($i = 1; $i <= 10; $i++){
    $entrada = (int) readline("Digite o $iº número inteiro: ");
    $soma += $entrada;
}

$media = $soma / 10;

echo "A média dos números digitados é: " . number_format($media, 2, ',', '.') . "\n";

// <?php 3

$Nums = [];
$soma = 0;

for ($i = 1; $i <= 10; $i++) {
    $num = (int) readline("Digite o $i número inteiro: ");
    $Nums[] = $num; 
    $soma += $num;  
}

$media = $soma / count($Nums); 

echo "O número de números digitados é: " . count($Nums) . "\n";
echo "A média dos números digitados é: " . number_format($media, 2, ',', '.') . "\n";

// <?php 4

$Soma = [];

for ($i = 50; $i <= 70; $i++) {
    if ($i % 2 == 0) { // verifica se é par
        $Soma[] = $i;
    }
}

$Media = array_sum($Soma) / count($Soma);

echo "A soma é: " . array_sum($Soma) . "\n";
echo "A média é: " . number_format($Media, 2, ',', '.') . "\n";

// <?php 5

$maior = null;
$menor = null;

while (true) {
    $entrada = (int) readline("Digite um número inteiro (0 para encerrar): ");
    
    if ($entrada === 0) {
        break;
    }
    if ($maior === null || $entrada > $maior) {
        $maior = $entrada;
    }

    if ($menor === null || $entrada < $menor) {
        $menor = $entrada;
    }
}

if ($maior !== null && $menor !== null) {
    echo "O maior número digitado foi: $maior\n";
    echo "O menor número digitado foi: $menor\n";
} else {
    echo "Nenhum número válido foi digitado.\n";
}
