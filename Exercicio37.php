<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25185655-2 - Leonardo Kenji Tanida Soares
Data: 01 de Setembro de 2025
Descritivo: Crie uma condição que verifique se um triângulo é válido
*******************************************************************************/
//Lados do triangulo abaixo 
$a = 2;
 $b = 3;
 $c = 3;
 echo ($a + $b > $c && $a + $c > $b && $b + $c > $a) ? 
"Triângulo ($a, $b, $c) é válido" : "Triângulo ($a, $b, $c) é inválido";

    ?>