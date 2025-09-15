<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25185655-2 - Leonardo Kenji Tanida Soares
 25011023-2 - Lucas Coelho Suero
 25125961-2 - Elias Borges Neckel
Data: 01 de Setembro de 2025
Descritivo: Crie uma calculadora simples com switch case
*******************************************************************************/
$num1 = 24;
$num2 = 2;
$calculo = "D"; //D de Divisão, M de Multiplicação, Soma e  Sub de Subtração
switch ($calculo) {
    case "D":
        if  ($num2 == 0){ //pois é impossível dividir um número por zero
            echo "Numero 2 não pode ser 0";
        } else {
      $r= $num1/$num2;
    echo $r;}
    break;
    case "M":
      $r= $num1*$num2;
    echo $r;
    break;
    case "Soma":
      $r= $num1+$num2;
    echo $r;
    break;
    case "Sub":
      $r= $num1-$num2;
    echo $r;
    break;
    default:
    echo "Operação desconhecida";
    break;
}


    ?>
