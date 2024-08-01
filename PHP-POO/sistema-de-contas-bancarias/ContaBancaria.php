<?php

class ContaBancaria {
    
    private $numeroConta;
    private $nomeTitular;
    private $saldo;

    public function __construct($numeroConta, $nomeTitular, $saldoInicial = 0) {
        $this->numeroConta = $numeroConta;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = $saldoInicial;
    }

    public function depositar($quantia) {
        if ($quantia > 0) {
            $this->saldo += $quantia;
            echo "Depósito de R$ $quantia realizado com sucesso.\n";
        } else {
            echo "Quantia de depósito inválida.\n";
        }
    }

    public function sacar($quantia) {
        if ($quantia > 0 && $quantia <= $this->saldo) {
            $this->saldo -= $quantia;
            echo "Saque realizado.\n";
        } elseif ($quantia > $this->saldo) {
            echo "Saldo insuficiente.\n";
        } else {
            echo "Saque inválido.\n";
        }
    }

    public function exibirSaldo() {
        echo "Saldo atual: R$ $this->saldo\n";
    }
}
