<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25185655-2 - Leonardo Kenji Tanida Soares
Data: 01 de Setembro de 2025
Descritivo: Faça um programa que mostre mensagem diferente para manhã, tarde e noite
*******************************************************************************/
date_default_timezone_set("America/Sao_Paulo");
 $Horario = date("H:i");
 if ($Horario > "06:00" && $Horario < "12:00") {
    echo "Bom dia! Agora é " . $Horario;
 } elseif ($Horario > "12:00" && $Horario < "18:00") {
    echo "Boa Tarde! Agora é " . $Horario;
 } elseif ($Horario > "18:00"&& $Horario < "23:00") {
    echo "Boa Noite! Agora é " . $Horario;
 } else {
    echo "Vai dormir, olha o horário é " . $Horario . " já";
 }
?>