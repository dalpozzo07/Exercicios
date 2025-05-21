<?php

$arr = [];

for ($i = 1; $i <11; $i++) {
    
    $arr[] = $i*5;
}

print_r($arr);

// php 2

$Arr = [];
$Pos = 0;
$Imp = 0;
$Par = 0;
$Neg = 0;

for($i = 0; $i <10; $i++){
    $Nums = readline("Digite um numero: ");
    $Arr[] = $Nums;
}

foreach($Arr as $num){
if($num %2 == 0){
    $Par++;
}else{
    $Imp++;
}
if($num > 0){
    $Pos++;
}elseif($num < 0){
    $Neg++;
}
}


echo "Numero de pares: " . $Par . "\n";
echo "Numero de impares: " . $Imp . "\n";
echo "Numero de positivos: " . $Pos . "\n";
echo "Numero de negativos: " . $Neg . "\n";



// php 3

$Arr = [];


for ($i = 0; $i < 10; $i++) {
    $Nums = readline("Digite um numero: ");
    $Arr[] = (int)$Nums;
}

$Maior = $Arr[0];


foreach ($Arr as $num) {
   if($num > $Maior){
       $Maior = $num;
}else if($num < 0){
    echo "Valor negativo, digite numeros positivos! \n";
    exit;
}
}


echo "Maior numero: " . $Maior . "\n";

foreach($Arr as $num => $Maior ){
    echo "Posição $num: $Maior  \n";
}

//php 4


$VetorA = [];
$VetorC = [];

for ($i = 0; $i < 10; $i++) {
    $Nums = readline("Digite um numero: ");
    $VetorA[] = (int)$Nums;
}

$B  = readline("Digite outro numero: ");   

for($i = 0; $i < count($VetorA); $i++){
     $VetorC[$i] = $VetorA[$i] * $B;
}


print_r($VetorC);

// php 5 

$VetorA = [];

for ($i = 0; $i < 10; $i++) {
    $VetorA[] = readline("Digite um número: ");
}

for($j = 9; $j >= 0; $j--) {
    echo $VetorA[$j] . "\n";
}

// php 6


$VetorA = [];
$VetorB = [];

for ($i = 0; $i < 10; $i++) {
    $Nums = readline("Digite um numero no vetor a: ");
    $VetorA[] = (int)$Nums;
}

for ($i = 0; $i < 10; $i++) {
    $Nums = readline("Digite um numero no vetor b: ");
    $VetorB[] = (int)$Nums;
}

for ($i = 0; $i < 10; $i++) {
    $VetorC[$i] = $VetorA[$i] * $VetorB[$i];
}

print_r($VetorC);

