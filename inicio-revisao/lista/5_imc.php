<?php
function calcularIMC($peso, $altura) {
    return $peso / ($altura * $altura);
}

// Valores de teste
$peso = 75.0;
$altura = 1.75;

$imc = calcularIMC($peso, $altura);

echo "IMC Calculado: " . number_format($imc, 2, ',', '.') . "\n";

if ($imc < 18.5) {
    echo "Classificação: Abaixo do peso\n";
} elseif ($imc < 25.0) {
    echo "Classificação: Peso normal\n";
} elseif ($imc < 30.0) {
    echo "Classificação: Sobrepeso\n";
} else {
    echo "Classificação: Obesidade\n";
}
?>