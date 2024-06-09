<?php

echo "Digite a temperatura: ";
$temperatura = floatval(trim(fgets(STDIN)));


echo "Digite a unidade de medida (C para Celsius, F para Fahrenheit): ";
$unidade = strtoupper(trim(fgets(STDIN)));

if ($unidade == 'C') {

    $fahrenheit = ($temperatura * 9/5) + 32;

    echo "Temperatura: " . $temperatura . "°C\n";

    echo "Temperatura em Fahrenheit: " . $fahrenheit . "°F\n";

} elseif ($unidade == 'F') {

    $celsius = ($temperatura - 32) * 5/9;

    echo "Temperatura: " . $temperatura . "°F\n";

    echo "Temperatura em Celsius: " . $celsius . "°C\n";

} else {

    echo "Unidade de medida inválida. Por favor, insira 'C' para Celsius ou 'F' para Fahrenheit.\n";
    
}
?>
