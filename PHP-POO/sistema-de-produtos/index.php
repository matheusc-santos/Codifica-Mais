<?php

require 'Produto.php';

$produto = new Produto("Notebook", 2500, 10);

$produto->exibirDetalhes();
$produto->alterarPreco(2700);
$produto->ajustarEstoque(15);
$produto->exibirDetalhes();
$produto->alterarPreco(-100);
$produto->ajustarEstoque(-5);
$produto->exibirDetalhes();
