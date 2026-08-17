<?php
$notas = [7.5, 8.0, 4.5, 9.5, 6.0];

$soma = 0;
$maiorNota = $notas[0];
$menorNota = $notas[0];

foreach ($notas as $nota) {
    $soma += $nota;

    if ($nota > $maiorNota) {
        $maiorNota = $nota;
    }

    if ($nota < $menorNota) {
        $menorNota = $nota;
    }
}

$media = $soma / count($notas);

echo "Média da turma: " . number_format($media, 2, ',', '.') . "\n";
echo "Maior nota: " . $maiorNota . "\n";
echo "Menor nota: " . $menorNota . "\n";
?>