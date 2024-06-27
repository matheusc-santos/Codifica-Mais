<?php

$vetor_original = array();
$vetor_duplicado = array();


for ($numeros = 1; $numeros <= 6; $numeros++) {

    echo "Digite um número: ";

    $vetor_original[$numeros] = intval(trim(fgets(STDIN)));
}


for ($numeros = 1; $numeros <= 6; $numeros++) {

    $vetor_duplicado[$numeros] = $vetor_original[$numeros] * 2;
}


echo "Vetor duplicado:\n";

for ($numeros = 1; $numeros <= 6; $numeros++) {

    echo $vetor_duplicado[$numeros] . "\n";
}

?>
