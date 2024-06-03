<?php
echo "Digite um número (ou -1 para terminar): ";

$num = intval(trim(fgets(STDIN)));

if ($num == -1) {

    echo "Nenhum número foi digitado.\n";

    exit;
}

$maiorNum = $num;
$menorNum = $num;

while (true) {
    echo "Digite um número (ou -1 para terminar): ";

    $num = intval(trim(fgets(STDIN)));

    if ($num == -1) {
        break;
    }

    if ($num > $maiorNum) {
        $maiorNum = $num;
    }

    if ($num < $menorNum) {
        $menorNum = $num;
    }
}

echo "O maior valor digitado foi: $maiorNum\n";
echo "O menor valor digitado foi: $menorNum\n";
