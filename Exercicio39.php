<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25185655-2 - Leonardo Kenji Tanida Soares
Data: 01 de Setembro de 2025
Descritivo: Escreva um script que determine o maior entre três números
*******************************************************************************/
$num1 = rand(0,10);
$num2 = rand(0,10);
$num3 = rand(0,10);
 
switch (true) {
    case ($num1 > $num2 && $num1 > $num3):
    echo "$num1 é maior que $num2 e $num3";
    break;
    case ($num2 > $num3 && $num2 > $num1):
    echo "$num2 é maior que $num1 e $num3";
    break;
    case ($num3 > $num2 && $num3 > $num1):
    echo "$num3 é maior que $num1 e $num2";
    break;
    default:
    echo "É um empate numerico entre $num1, $num2, $num3";
    break;
}
    ?>