<?php

echo "Digite a sua idade: ";

$idade = trim(fgets(STDIN));

if ($idade >= 18) {

    echo "Você é maior de idade.";
} else {

    echo "Você é menor de idade.";
};
