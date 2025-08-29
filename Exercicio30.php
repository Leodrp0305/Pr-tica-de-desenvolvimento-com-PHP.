<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25185655-2 - Leonardo Kenji Tanida Soares
Data: 29 de Agosto de 2025
Descritivo: Verifique se NÃO é fim de semana (usando operador lógico NOT)
*******************************************************************************/
/*Gostaria de deixar claro que utilizei de inteligencia artificial para aprender coisas que serão
ultilizadas, no entanto, o codigo é autoral.*/

date_default_timezone_set("America/Sao_Paulo"); //Fuso certo
$dias = [
    "Domingo",
    "Segunda-feira",
    "Terça-feira",
    "Quarta-feira",
    "Quinta-feira",
    "Sexta-feira",
    "Sábado"
];

$hoje = date("w");
$dia_da_semana = $dias[date("w")];
 if ($hoje != 6 && $hoje != 0) {
    echo "Não é final de semana, hoje é " . ($dia_da_semana);
 } else {
    echo "É final de semana, hoje é " . ($dia_da_semana);
 }
?>