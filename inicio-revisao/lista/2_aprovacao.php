<?php
//Variaveis 
$media = 6.0;
$faltas = 10;

// O operadorngarante que AMBAS as regras sejam verdadeiras
if ($media >= 6.0 && $faltas <= 15) {
    echo "Aluno APROVADO! Média: $media | Faltas: $faltas";
} else {
    echo "Aluno REPROVADO! Média: $media | Faltas: $faltas";
}
?>