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
Descritivo: Escreva um script que converta minutos em horas e minutos
*******************************************************************************/
 $Minutos = rand(1, 1000); //Aqui eu decidi experimentar o rand que vi no w3school
 $horas = $Minutos/60;
 $min_sobrando = $Minutos%60;
 echo (int)$horas . " Horas e " . $min_sobrando . " Minutos";


?>
