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
Descritivo: Crie um ternário que retorne "Frio" se temperatura < 15, "Agradável" se entre 15-25, "Quente" se >
25
*******************************************************************************/
$temperatura = 27;
echo ($temperatura < 15)? "Frio":
    (($temperatura >=15 && $temperatura <25) ? "Agradável":"Quente");

    ?>
