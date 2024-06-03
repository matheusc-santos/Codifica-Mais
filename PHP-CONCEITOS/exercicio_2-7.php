<?php
echo "Digite um número para saber a sua tabela de multiplicação: ";
$numero = trim(fgets(STDIN));

for ($i = 1; $i <= 10; $i++) {
    $resultado = $i * $numero;
    echo "$numero x $i = $resultado\n";
}
