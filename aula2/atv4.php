4 – Calcular 5% e 50% de um valor.
Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor.


<?php

$porc5 =5;
$porc50 = 50;
$num1 = 0;
$num2 = 0;
$valorpercentual5 = 0;
$valorpercentual50 = 0;

$num1=readline("digite um numero: ");
$num2=readline("digite um numero: ");

$som = $num1 + $num2;

echo "a soma é: " . $som;
$valorpercentual5=($som * $porc5) /100; 
$valorpercentual50=($som * $porc50) /100;
echo " 50% desse vslor é " . $valorpercentual50 . "\n\n";
echo " 5% desse vslor é: " . $valorpercentual5 .  "\n\n";
?>