<?php

function calcularValorIndividual($totalGasto, $numPessoas) {
    return $totalGasto / $numPessoas;
}

echo "Programa para calcular quanto cada pessoa deve pagar no churrasco.\n\n";

$numeroTotalPessoas = (int) readline("Digite o número total de pessoas: ");

if ($numeroTotalPessoas <= 1) {
    echo "O churrasco foi cancelado, todo mundo furou!\n";
    exit;
}

$itensChurrasco = [
    "Picanha" => 80.00,
    "Linguiça" => 40.00,
    "Cerveja" => 100.00,
    "Refrigerante" => 30.00,
    "Farofa" => 20.00,
    "Vinagrete" => 15.00,
    "Pão de Alho" => 25.00,
    "Carvão" => 20.00
];

$totalGastoItens = 0;
$itemMaisCaro = "";
$valorItemMaisCaro = 0;

foreach ($itensChurrasco as $item => $preco) {
    $totalGastoItens += $preco;
    if ($preco > $valorItemMaisCaro) {
        $itemMaisCaro = $item;
        $valorItemMaisCaro = $preco;
    }
}

$valorIndividual = calcularValorIndividual($totalGastoItens, $numeroTotalPessoas);
$valorIndividualFormatado = number_format($valorIndividual, 2, ',', '.');
$valorItemMaisCaroFormatado = number_format($valorItemMaisCaro, 2, ',', '.');

echo "O custo total do churrasco é: R$ " . number_format($totalGastoItens, 2, ',', '.') . "\n";

echo "Cada pessoa deve contribuir com: R$ $valorIndividualFormatado\n";

echo "O item mais caro do churrasco foi $itemMaisCaro, que custou R$ $valorItemMaisCaroFormatado\n";

?>
