<?php

// Declaração das Variáveis
$preco = 2000;
$quantidade = 6;


$valorTotal = $preco * $quantidade;

if ($valorTotal >= 200.00) {
   
    $desconto = $valorTotal * 0.10; // Calcula os 10% de desconto
    $valorFinal = $valorTotal - $desconto;
    
    // Exibindo o resultado da compra, do desconto e o total a ser pago
    echo "Valor Total: R$ " . number_format($valorTotal, 2, ',', '.') . "<br>";
    echo "Desconto (10%): R$ " . number_format($desconto, 2, ',', '.') . "<br>";
    echo "Valor Final a pagar: R$ " . number_format($valorFinal, 2, ',', '.');

} else {
    
    $valorFinal = $valorTotal; 
    
    
    echo "Valor Total: R$ " . number_format($valorTotal, 2, ',', '.') . "<br>";
    echo "Aviso: Sem desconto aplicado (compras abaixo de R$ 200,00)." . "<br>";
    echo "Valor Final a pagar: R$ " . number_format($valorFinal, 2, ',', '.');
}

?>