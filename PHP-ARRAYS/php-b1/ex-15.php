<?php

$vet = array();
$presente = false;


for ($numeros = 1; $numeros <= 7; $numeros++) {

    echo "Digite um número: ";

    $vet[$numeros] = intval(trim(fgets(STDIN)));
}


echo "Digite o número a ser verificado: ";

$numero = intval(trim(fgets(STDIN)));


for ($numeros = 1; $numeros <= 7; $numeros++) {
    if ($vet[$numeros] == $numero) {
        $presente = true;
        echo "O número $numero está presente na posição $numeros.\n";
    }
}

if (!$presente) {
    echo "O número $numero não foi identificado no array.\n";
}

?>
