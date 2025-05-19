<?php 

$Num = readline("Digite um número: ");

if($Num >= 10){
    echo "O número é maior que 10.\n";
}
 else{
    echo "O número é menor que 10.\n";
}

// <?php  2

$Num1 = readline("Digite um número: ");

if($Num1 >=0){
    echo "O número é positivo.\n";
}else{
    echo "O número é negativo.\n";
}

// <?php 3

$Apple = readline("Digite quantas maçãs foram compradas: ");

if($Apple <= 11){

    $Menos = $Apple * 1.30;
    echo "O preço de cada maçã é de R$ " . $Menos . "\n";

}else if($Apple >= 11){

    $Mais = $Apple * 1;
    echo "O preço de cada maçã é de R$ " . $Mais . "\n";

}

//<?php 4

$Nota1A = readline("Digite a nota 1 do aluno: ");
$Nota2A = readline("Digite a nota 2 do aluno: ");

$Media = ($Nota1A + $Nota2A) / 2;

if($Media >= 6){
echo "O aluno está aprovado,\n";
echo "com a nota de $Media. \n";
}else{
    echo "O aluno não está aprovado,\n";
    echo "com a nota de $Media. \n";
}

// <?php 5

$AnoNas = readline("Digite o ano de nascimento: ");

$Idade = 2025 - $AnoNas;

if($Idade >= 18){
    echo "Você tem $Idade anos\n";
    echo "Você pode votar e tirar habilitação\n";
}else if($Idade >= 16 && $Idade < 18){
    echo "Você tem $Idade anos\n";
    echo "Você pode votar mas não pode tirar habilitação\n";
}else{
    echo "Você tem $Idade anos\n";
    echo "Você não pode votar nem tirar habilitação\n";
}

// <?php 6

$Num1 = readline("Digite um número: ");
$Num2 = readline("Digite outro número: ");

if($Num1 != $Num2){

   $Num3 = $Num1 + 1;
   $Num4 = $Num2 + 1;

   echo "O maior de $Num1 e $Num3 \n";
   echo "O maior de $Num2 e $Num4 \n";

}else if($Num1 == $Num2){
    echo "Os números são iguais, digite outros número. \n";
}

// <?php 7

$
$Idade = readline("Digite a idade: ");

If($Idade >= 5 && $Idade <= 7){
    echo "Você está na categoria Infantil A. \n";
}else if($Idade >= 8 && $Idade <= 10){
    echo "Você está na categoria Infantil B. \n";
}else if($Idade >= 11 && $Idade <= 13){
    echo "Você está na categoria Juvenil A. \n";
}else if($Idade >= 14 && $Idade <= 17){
    echo "Você está na categoria Juvenil B. \n";
}else if($Idade >= 18){
    echo "Você está na categoria Sênior. \n";
}else{
    echo "Você ainda não pode nadar F. \n";
}

//<?php 8

$Vasp = readline("Digite o valor a ser pago: ");
$Option = readline("Escolha a forma de pagamento (1 - à vista com 10% de desconto, 2 - à vista com 5% de desconto, 3 - em 2x sem juros, 4 - em 3x com 10% de juros): ");

switch($Option){
 

    case 1: $Vasp = $Vasp - ($Vasp * 0.1);
    echo "O valor a ser pago é de R$ " . $Vasp . "\n";
    break;
    case 2: $Vasp = $Vasp - ($Vasp * 0.05);
    echo "O valor a ser pago é de R$ " . $Vasp . "\n";
    break;
    case 3: $Vasp = $Vasp;
    echo "O valor a ser pago em duas vezes é de R$ " . $Vasp . "\n";
    break;
    case 4: $Vasp = $Vasp + ($Vasp * 0.1);
    echo "O valor a ser pago em 3 vezes é de R$ " . $Vasp . "\n";
    break;
}

// <?php 9

$Num1 = readline("Digite um número: ");

if($Num1 >= 30 && $Num1 <= 90){
    echo "O número está entre 30 e 90 \n";
}else if($Num1 >= 120){
    echo "O número é maior que 120 \n";
}else{
    echo "O número não está entre 30 e 90, e nem é maior que 120 \n";
}

// <?php 10

$Valor = readline("Digite o valor do produto: ");

if($Valor <= 20){
    $Valor += ($Valor * 0.45);
    echo "O preço da venda é de R$ " . $Valor . "\n";
}else{
    $Valor += ($Valor * 0.3);
    echo "O preço da venda é de R$ " . $Valor . "\n";
}
