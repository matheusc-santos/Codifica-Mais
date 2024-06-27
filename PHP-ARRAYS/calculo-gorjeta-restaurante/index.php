<?php

echo "Digite o valor total da conta: R$ ";
$valor_conta = floatval(trim(fgets(STDIN)));


echo "Digite a porcentagem da gorjeta: ";
$porcentagem_gorjeta = floatval(trim(fgets(STDIN)));


$valor_gorjeta = ($valor_conta * $porcentagem_gorjeta) / 100;


$valor_total = $valor_conta + $valor_gorjeta;


echo "Valor da gorjeta: R$ " . number_format($valor_gorjeta, 2, ',', '.') . "\n";

echo "Valor total a ser pago: R$ " . number_format($valor_total, 2, ',', '.') . "\n";
?>
