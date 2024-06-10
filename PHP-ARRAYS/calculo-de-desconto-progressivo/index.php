<?php

function aplicarDesconto($valorCompra, $percentualDesconto) {
    $desconto = $valorCompra * ($percentualDesconto / 100);
    $valorFinal = $valorCompra - $desconto;
    return array(
        "valorFinal" => $valorFinal,
        "percentualDesconto" => $percentualDesconto,
        "valorDesconto" => $desconto
    );
}

function calcularDescontoProgressivo($valorCompra) {
    if ($valorCompra < 100.00) {
        return array(
            "valorFinal" => $valorCompra,
            "percentualDesconto" => 0,
            "valorDesconto" => 0
        ); // Sem desconto
    } elseif ($valorCompra >= 100.00 && $valorCompra <= 500.00) {
        return aplicarDesconto($valorCompra, 10);
    } else {
        return aplicarDesconto($valorCompra, 20);
    }
}


echo "Digite o valor da compra: ";
$valorCompra = floatval(fgets(STDIN));


$resultado = calcularDescontoProgressivo($valorCompra);

echo "O valor final da compra com desconto progressivo é: R$ " . number_format($resultado["valorFinal"], 2) . "\n";
echo "Percentual de desconto aplicado: " . $resultado["percentualDesconto"] . "%\n";
echo "Valor do desconto aplicado: R$ " . number_format($resultado["valorDesconto"], 2);

?>
