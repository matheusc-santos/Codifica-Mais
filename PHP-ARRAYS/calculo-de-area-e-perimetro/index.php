<?php

echo "Digite a largura do retângulo: ";
$largura = floatval(trim(fgets(STDIN)));

echo "Digite a altura do retângulo: ";
$altura = floatval(trim(fgets(STDIN)));

$area = $largura * $altura;

$perimetro = 2 * ($largura + $altura);

echo "Área: " . $area . " m²\n";
echo "Perímetro: " . $perimetro . " metros\n";
?>
