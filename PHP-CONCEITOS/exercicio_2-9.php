<?php

function numero_primo()
{

    echo "Digite um número: ";
    $numero = intval(trim(fgets(STDIN)));
    echo "\n";

    $contador = 0;
    $divisor = 1;

    while ($divisor <= $numero) {
        if ($numero % $divisor == 0) {
            $contador++;
        }
        $divisor++;
    }

    if ($contador == 2) {
        echo "O número digitado $numero é primo\n";
    } else {
        echo "O número digitado $numero não é primo\n";
    }
}

numero_primo();
