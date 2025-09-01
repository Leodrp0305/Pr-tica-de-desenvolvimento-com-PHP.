<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25185655-2 - Leonardo Kenji Tanida Soares
Data: 01 de Setembro de 2025
Descritivo: Faça um programa que converta temperatura entre Celsius e Fahrenheit baseado em uma escolha
*******************************************************************************/
$Temperatura = 240;
$Medida = "F"; //Coloque F para Fahrenheit e C para Celsius.
if ($Medida == "F"){
   $r = ($Temperatura-32)/9;
   $r = number_format($r, 2);
   echo $r . "°C é a temperatura de $Temperatura °F em celsius";
} elseif ($Medida == "C") {
    $r = ($Temperatura/5);
    $r = number_format($r, 2);
    echo $r . "°F é a temperatura de $Temperatura °C em Fahrenheit";
} else {
    echo "Medida desconhecida";
}
    ?>