<?php

do {
    echo "Digite o primeiro número (A): ";

    $a = trim(fgets(STDIN));

    if (!is_numeric($a) || intval($a) != $a) {

        echo "Por favor, digite um número inteiro.\n";

        $a = null;
    }
} while (!isset($a));

$a = intval($a);

do {
    echo "Digite o segundo número (B): ";

    $b = trim(fgets(STDIN));

    if (!is_numeric($b) || intval($b) != $b || intval($b) <= $a) {

        if (!is_numeric($b) || intval($b) != $b) {

            echo "Por favor, digite um número inteiro.\n";
        } else {

            echo "O segundo número (B) precisa ser maior que o primeiro (A)!\n";
        }

        $b = null;
    }
} while (!isset($b));

$b = intval($b);

$soma = 0;

for ($i = $a; $i <= $b; $i++) {

    if ($i % 2 != 0) {

        $soma += $i;
    }
}

echo "A soma dos números ímpares no intervalo [$a, $b] é: $soma\n";
