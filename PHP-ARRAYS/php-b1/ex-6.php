<?php

$vet = array();
$maior = 0;
$menor = 0;


for ($numeros = 0; $numeros < 10; $numeros++) {

    echo "Digite um número: ";

    $vet[$numeros] = intval(trim(fgets(STDIN)));
    

    if ($vet[$numeros] > $vet[$maior]) {
        $maior = $numeros;
    }

    if ($vet[$numeros] < $vet[$menor]) {
        $menor = $numeros;
    }
}


echo "O maior número digitado foi: " . $vet[$maior] . "\n";
echo "O menor número digitado foi: " . $vet[$menor] . "\n";

?>
