<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25185655-2 - Leonardo Kenji Tanida Soares
Data: 28 de Agosto de 2025
Descritivo: Compare se duas variáveis são iguais em valor
*******************************************************************************/
$ABC = rand(1,2);
$CBA = rand(1,2);
echo $ABC.$CBA . "\n";
echo ($ABC == $CBA) ?"Ambas as variaveis são iguais":" Elas são diferentes";
 // geralmente eu faria o negócio do if/elseif/else, mas eu vi isso, achei intrigante e quis tentar
?>