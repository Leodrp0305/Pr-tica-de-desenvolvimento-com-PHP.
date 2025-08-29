<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25185655-2 - Leonardo Kenji Tanida Soares
Data: 29 de Agosto de 2025
Descritivo: Faça um programa que classifique notas (A, B, C, D, F)
*******************************************************************************/
$nota = 100;
if ($nota < 0 || $nota > 100 || !is_numeric($nota)) {
 echo "Algo deu errado, digite novamente a nota";
} else {
   switch (true) {
      case ($nota >= 90):
      echo "Nota A";
      break;
      case ($nota >= 80):
      echo "Nota B";
      break;
      case ($nota >= 70):
      echo "Nota C";
      break;
      case ($nota >= 60):
      echo "Nota D";
      break;
      default:
      echo "Nota F";
   }
}
  
?>