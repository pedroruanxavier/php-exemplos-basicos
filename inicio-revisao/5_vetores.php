<?php

//Vetores - (Arrays simpes - "1 linha")
$frutas = ["Banana", "Maçã", "Uva"];

// Exibindo vetores com laço
foreach ($frutas as $indice => $fruta) {
    echo "Posição $indice: $fruta <br>";
}
// Array (Linhas e Colunas)

$matriz = [
    ["Max Verstappen", "Oscar Piastri", "Lando Norris"],
    ["Charles Leclerc", "Lewis Hamilton", "George Russell"],
    ["Fernando Alonso", "Carlos Sainz", "Gabriel Bortoleto"],
];

echo "<br><br>";
echo"Lista de Pilotos de Fórmula (Dica: O 1° é o melhor.) <br><br>";

// Exibindo os valores da matriz
foreach ($matriz as $linha) {
    foreach ($linha as $piloto) {
        echo $piloto . " | ";
    }
    echo "<br>";
}
?>