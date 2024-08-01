<?php

require './ContaBancaria.php';

$conta = new ContaBancaria("123456", "João Silva", 500);

$conta->exibirSaldo();
$conta->depositar(300);
$conta->exibirSaldo();
$conta->sacar(200);
$conta->exibirSaldo();
$conta->sacar(700);
$conta->exibirSaldo();
$conta->depositar(-50);
$conta->sacar(-100);
