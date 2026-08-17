<?php

// Funcao simples com retorno
function somar(int $a, int $b): int {
    return $a + $b;
}

//Exibindo resultado
echo somar (8, 15.6);
echo "<br>";

// Procedimento (Funcao sem retorno)
function saudaca($nome = "aluno") {
    echo "Ola, $nome! Bem-Vindo ao PHP.
    <br>";
}

// Exibindo a saudação
saudacao();
saudacao("Maria");

// Outros procedimento
function mostrarLinhas() {
    echo "-------------------- <br>";
}

mostrarLinhas();