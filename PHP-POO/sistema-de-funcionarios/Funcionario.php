<?php

class Funcionario {
    private $nome;
    private $cargo;
    private $salario;

    public function __construct($nome, $cargo, $salario) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function ajustarSalario($novoSalario) {
        if ($novoSalario > 0) {
            $this->salario = $novoSalario;
            echo "Salário ajustado para R$ $novoSalario.\n";
        } else {
            echo "Salário inválido.\n";
        }
    }

    public function alterarCargo($novoCargo) {
        if (!empty($novoCargo)) {
            $this->cargo = $novoCargo;
            echo "Cargo alterado para $novoCargo.\n";
        } else {
            echo "Cargo inválido.\n";
        }
    }

    public function exibirDetalhes() {
        echo "Nome: {$this->nome}, Cargo: {$this->cargo}, Salário: R$ {$this->salario}\n";
    }
}
