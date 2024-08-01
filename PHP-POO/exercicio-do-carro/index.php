<?php

require 'Carro.php';

$meuCarro = new Carro("Civic", "Honda", 2020);

$meuCarro->exibirDetalhes();


$meuCarro->ligar();
$meuCarro->acelerar();
$meuCarro->frear();
$meuCarro->desligar();
$meuCarro->acelerar();

?>
