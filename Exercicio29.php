<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25185655-2 - Leonardo Kenji Tanida Soares
Data: 29 de Agosto de 2025
Descritivo: Teste se uma string não está vazia E tem mais de 3 caracteres
*******************************************************************************/
$String_qualquer = "Eu Amo Minha Namorada";

if (strlen($String_qualquer) > 0) {
    echo $String_qualquer . " é a string, ela não está vazia";
    if (strlen($String_qualquer) > 3) {
    echo " e tem mais de 3 caracteres";
    } else {
    echo " e tem menos de 3 caracteres";
    }
} else {
    echo "A string está vazia";
}
?>