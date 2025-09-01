<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25185655-2 - Leonardo Kenji Tanida Soares
Data: 01 de Setembro de 2025
Descritivo: Use operador ternário aninhado para classificar um número como positivo, negativo ou zero
*******************************************************************************/
$num1 = rand(-10, 10);

echo ($num1 > 0) ? "$num1 é maior que zero":
     (($num1 < 0) ? "$num1 é menor que zero" : "$num1 é zero"); 
 // é o mesmo codigo do exercicio 41, pois ele atende aos requisitos
    ?>