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
Data: 29 de Agosto de 2025
Descritivo: Verifique se um número é par E positivo
*******************************************************************************/
$Num1 = rand(-100, 100);

if ( $Num1 % 2 == 0 || $Num1 > 0) {
    if ( $Num1 % 2 == 0 && $Num1 > 0){
    echo $Num1 . " é par e positivo";
    } elseif ($Num1 % 2 == 0) {
        echo $Num1 . " é par";
    } elseif ($Num1 > 0) {
        echo $Num1 . " é positivo";
    }
} else {
    echo $Num1 . " não é par nem positivo";
}

?>
