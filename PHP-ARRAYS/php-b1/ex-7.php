<?php


$multiplicando = 0;
$multiplicador = 0;


echo "Digite um número: ";

$multiplicando = intval(trim(fgets(STDIN)));


for ($multiplicador = 0; $multiplicador <= 10; $multiplicador++) {

    echo $multiplicando . " X " . $multiplicador . " = " . ($multiplicando * $multiplicador) . "\n";
}

?>
