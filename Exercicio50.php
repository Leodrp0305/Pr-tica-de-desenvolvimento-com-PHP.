<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25185655-2 - Leonardo Kenji Tanida Soares
Data: 01 de Setembro de 2025
Descritivo: Crie uma expressão ternária que verifique se um ano é bissexto
*******************************************************************************/
$ano = 2022;
 echo ($ano%400 == 0)? "O ano de $ano é bissexto" :
 (($ano%4 == 0 && $ano%100 != 0) ? "O ano é bissexto":"O ano não é bissexto");
    ?>