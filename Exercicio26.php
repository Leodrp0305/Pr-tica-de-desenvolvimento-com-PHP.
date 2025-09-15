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
Descritivo: Verifique se um número está entre 10 e 20
*******************************************************************************/
$Num1 = rand(0, 30);

 if ($Num1 > 10 && $Num1 < 20) {
  echo $Num1 . " Está entre 10 e 20";
 } else {
    echo $Num1 . " Não está entre 10 e 20";
}

?>
