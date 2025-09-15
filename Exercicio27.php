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
Descritivo: Teste se uma variável é maior que 100 OU menor que 50
*******************************************************************************/
$Num1 = rand(0, 150);
if ($Num1 > 100 || $Num1 <50) {
 echo $Num1 . " é maior que 100 ou menor que 50";
} else {
 echo $Num1 . " não é maior que 100 ou menor que 50";
}


?>
