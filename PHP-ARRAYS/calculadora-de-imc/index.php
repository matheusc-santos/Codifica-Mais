<?php

function calcularIMC($peso, $altura) {

    $imc = $peso / ($altura * $altura);

    return $imc;
}

function classificarIMC($imc) {

    if ($imc < 18.5) {
        return "Magreza";
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        return "Normal";
    } elseif ($imc >= 25 && $imc <= 29.9) {
        return "Sobrepeso";
    } elseif ($imc >= 30 && $imc <= 34.9) {
        return "Obesidade grau I";
    } elseif ($imc >= 35 && $imc <= 39.9) {
        return "Obesidade grau II";
    } else {
        return "Obesidade grau III";
    }
}


echo "Digite seu peso (kg): ";
$peso = trim(fgets(STDIN));

echo "Digite sua altura (m): ";
$altura = trim(fgets(STDIN));


if (is_numeric($peso) && is_numeric($altura) && $peso > 0 && $altura > 0) {
    
    $imc = calcularIMC($peso, $altura);

    $classificacao = classificarIMC($imc);

    echo "Seu IMC é: " . number_format($imc, 2) . " kg\n";
    echo "Classificação: " . $classificacao . "\n";
} else {
    echo "Por favor, insira valores válidos para peso e altura.\n";
}
?>
