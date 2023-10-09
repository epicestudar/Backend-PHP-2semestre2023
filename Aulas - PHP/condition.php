<?php


echo "Insira um número ";$num1=readline();
echo "Insira outro número ";$num2=readline();
echo "Agora escolha uma operação: \n";
echo "1 - Somar\n";
echo "2 - Subtrair\n";
echo "3 - Multiplicar\n";
echo "4 - Dividir\n";

$condicao = readline();

switch ($condicao) {
    case 1:
        echo "Resultado: ".($num1 + $num2)."\n";
        break;
        $condicao = false;

    case 2:
        echo "Resultado: ".($num1 - $num2)."\n";
        break;
        $condicao = false;
    
    case 3:
        echo "Resultado: ".($num1 * $num2)."\n";
        break;
        $condicao = false;

    case 4:
        echo "Resultado: ".($num1 / $num2)."\n";
        break;
        $condicao = false;
        
    default:
        # code...
        break;
}