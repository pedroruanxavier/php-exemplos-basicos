<?php

// Laço FOR - Exemplos  alinhado em Tabuada
for ($i = 1; $i <= 10; $i++) {
    echo "8 x $i = " . (8 * $i) . "<br>";
}

// While - (Enquanto) Contagem regressiva
echo "<br>";
$n = 10;
while ($n >= 0) {
    echo $n . "<br>";
    $n--;
}

// Do While - (Faça Enquanto) Execute pelo menos uma vez
echo "<br>";
$j = 0;
do {
    echo $j . "j vale: $j <br>";
    $j++;
} while ($j <= 10);

?>