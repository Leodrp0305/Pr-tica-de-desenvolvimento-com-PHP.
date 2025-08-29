<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25185655-2 - Leonardo Kenji Tanida Soares
Data: 29 de Agosto de 2025
Descritivo: Escreva um script que determine se um número é par ou ímpar
*******************************************************************************/
  $num = rand(0, 20);
 if ($num % 2 == 0) {
 echo $num . " é par";
} else {
 echo $num . " é impar";
}
?>