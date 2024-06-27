<?php

$vet = array();
$numeros = 0;

for ($numeros = 1; $numeros <= 5; $numeros++) {

    echo "Digite um número: ";

    $vet[$numeros] = intval(trim(fgets(STDIN)));
}

echo "Ordem invertida:\n";

for ($numeros = 5; $numeros >= 1; $numeros--) {

    echo $vet[$numeros] . "\n";
}

?>
