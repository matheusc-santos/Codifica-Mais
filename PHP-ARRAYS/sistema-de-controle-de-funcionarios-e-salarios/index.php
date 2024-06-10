<?php

function calcularSalarioTotal($salarioBase, $horasExtras, $valorHoraExtra) {

    $horaNormal = $salarioBase / 160;
    $salarioExtra = $horasExtras * $valorHoraExtra;
    $salarioTotal = $salarioBase + $salarioExtra;
    return $salarioTotal;
}

function listarFuncionarios($funcionarios) {
    echo "------------------------------------------------------------\n";
    echo "|   Nome   | Salário Base | Horas Extras | Salário Total |\n";
    echo "------------------------------------------------------------\n";
    
    foreach ($funcionarios as $funcionario) {
        $salarioTotal = calcularSalarioTotal($funcionario['salarioBase'], $funcionario['horasExtras'], 1.5);
        printf("| %-9s| R$ %-10.2f| %-13s| R$ %-12.2f|\n", $funcionario['nome'], $funcionario['salarioBase'], $funcionario['horasExtras'], $salarioTotal);
    }
    echo "------------------------------------------------------------\n";
}


$funcionarios = array(
    array("nome" => "Pedro", "salarioBase" => 2500.00, "horasExtras" => 10),
    array("nome" => "Renata", "salarioBase" => 3000.00, "horasExtras" => 5),
    array("nome" => "Sérgio", "salarioBase" => 2800.00, "horasExtras" => 8),
    array("nome" => "Vanessa", "salarioBase" => 3200.00, "horasExtras" => 12),
    array("nome" => "André", "salarioBase" => 1700.00, "horasExtras" => 0)
);


echo "Lista inicial de funcionários, salários base e horas extras:\n";
listarFuncionarios($funcionarios);


?>
