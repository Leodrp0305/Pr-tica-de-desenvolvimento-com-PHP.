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
Descritivo: Crie uma condição que verifique se um ano é bissexto
*******************************************************************************/
 $ano = (rand(0,3000));
 echo $ano;
if ($ano%400 == 0) {
   echo " é um ano bissexto";
} elseif ($ano % 100 == 0) {
    echo " não é um ano bissexto";
} elseif ($ano % 4 == 0) {
    echo " é um ano bissexto";
} else {
    echo " não é um ano bissexto";
}

?>
