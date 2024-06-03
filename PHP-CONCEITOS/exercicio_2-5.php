<?php
echo "Digite um número: ";
$numero = trim(fgets(STDIN));

if ($numero % 2 == 0) {
    echo "Este número e par!";
} else {
    echo "Este número e impar";
}
