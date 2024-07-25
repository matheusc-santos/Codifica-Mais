<?php

function calcularValorComDesconto($valorOriginal, $percentualDesconto) {

    $valorDesconto = $valorOriginal * ($percentualDesconto / 100);
    

    $valorFinalComDesconto = $valorOriginal - $valorDesconto;
    

    return $valorFinalComDesconto;
}


echo "Digite o valor original do produto: ";
$valorOriginal = (float) trim(fgets(STDIN));

echo "Digite a porcentagem de desconto: ";
$percentualDesconto = (float) trim(fgets(STDIN));


$valorFinal = calcularValorComDesconto($valorOriginal, $percentualDesconto);


echo "O valor final com desconto é: R$" . number_format($valorFinal, 2, ',', '.') . "\n";

?>

