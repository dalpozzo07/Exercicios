<?php

$verifica = (int) readline("Digite um número para verificar (par e múltiplo de 4): \n");
$divisor = (int) readline("Digite um número divisor: \n");
$inicio = (int) readline("Digite o número inicial do intervalo: \n");
$fim = (int) readline("Digite o número final do intervalo: \n");
$altura = 0;

function verificarMultiploDe4($num) {
    if ($num % 4 == 0) {
        echo "$num é múltiplo de 4 \n";
    } else {
        echo "$num não é múltiplo de 4 \n";
    }
}

function verificarPar($num) {
    if ($num % 2 == 0) {
        echo "$num é par \n";
    } else {
        echo "$num é ímpar \n";
    }
}

function somarEntre($num1, $num2) {
    $soma = 0;
    $menor = min($num1, $num2);
    $maior = max($num1, $num2);

    for ($i = $menor + 1; $i < $maior; $i++) {
        $soma += $i;
    }

    echo "A soma dos números entre $menor e $maior é $soma \n";
}

function somarMultiplos($divisor, $inicio, $fim) {
    if ($divisor <= 1) {
        echo "O divisor deve ser maior que 1 \n";
        return;
    }

    $soma = 0;
    for ($i = $inicio; $i <= $fim; $i++) {
        if ($i % $divisor == 0) {
            $soma += $i;
        }
    }

    echo "A soma dos múltiplos de $divisor entre $inicio e $fim é $soma \n";
}

function MulherEhomem($altura) {
    $opcao = readline("Digite 1 para mulher ou 2 para homem: \n");
    switch($opcao){
        case '1': 
        $altura = (float) readline("Digite a altura: \n");
        $pesoideal = 62.1 * $altura - 44.7;
        echo "O peso ideal é $pesoideal kg \n";
        break;

        case '2': 
        $altura = (float) readline("Digite a altura: \n");
        $pesoideal = 72.7 * $altura - 58;
        echo "O peso ideal é $pesoideal kg \n";
        break;
        default: 
        echo "Opção inválida \n";   
    }
}



verificarMultiploDe4($verifica);
verificarPar($verifica);
somarEntre($divisor, $inicio);
somarMultiplos($divisor, $inicio, $fim);
MulherEhomem($altura);

?>