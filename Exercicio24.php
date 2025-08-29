<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25185655-2 - Leonardo Kenji Tanida Soares
Data: 28 de Agosto de 2025
Descritivo: Teste se uma variável é diferente de null
*******************************************************************************/

$Variavel_Qualquer = "030525";
$nulo = null;
if ($Variavel_Qualquer !== $nulo) {
    echo $Variavel_Qualquer . " é diferente de null";
} else{
    echo "erro";
}
?>