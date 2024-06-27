<?php

$vet = array();
$soma = 0;


for ($numeros = 1; $numeros <= 5; $numeros++) {

    echo "Digite um número: ";

    $vet[$numeros] = intval(trim(fgets(STDIN)));

    if ($vet[$numeros] % 2 == 0) {

        $soma += $vet[$numeros];
    }
}

echo "A soma dos vetores pares é igual a: " . $soma . "\n";

?>
