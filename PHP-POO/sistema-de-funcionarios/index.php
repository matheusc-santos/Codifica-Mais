<?php

require 'Funcionario.php';

$funcionario = new Funcionario("Gabriela Santos", "Contadora", 4500);

$funcionario->exibirDetalhes();
$funcionario->ajustarSalario(5000);
$funcionario->alterarCargo("Desenvolvedora Sênior");
$funcionario->exibirDetalhes();
$funcionario->ajustarSalario(-3000);
$funcionario->alterarCargo("");
$funcionario->exibirDetalhes();
