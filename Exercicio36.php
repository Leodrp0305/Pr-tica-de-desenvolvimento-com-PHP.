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
Descritivo: Escreva um código que calcule o IMC e classifique o resultado
*******************************************************************************/
 $Peso = 54.6;
 $Altura =1.73;
 
 $IMC = $Peso/($Altura*$Altura);
 $IMC = number_format($IMC, 2);
 if ($IMC < 18.5){ 
    Echo  $IMC . ", Abaixo do peso";
 } elseif ($IMC >= 18.5 && $IMC <= 24.9) {
    Echo $IMC . ", Peso Normal";
 } elseif ($IMC >= 25 && $IMC<= 29.9) {
    Echo $IMC . ", Sobrepeso";
 } else {   
    Echo $IMC . ", Obesidade";
 }
    

    ?>
