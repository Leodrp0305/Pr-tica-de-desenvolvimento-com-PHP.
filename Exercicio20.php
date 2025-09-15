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
Data: 28 de Agosto de 2025
Descritivo: Verifique se uma variável é maior ou igual a 100
*******************************************************************************/
 $Uma_Variavel = rand(0 , 200);
 if ($Uma_Variavel >= 100) {
    echo  $Uma_Variavel . " é maior que 100";
 } elseif ( $Uma_Variavel <= 100) {
    echo  $Uma_Variavel . " é menor que 100";
 } else {
    echo "Error";
 }


?>
