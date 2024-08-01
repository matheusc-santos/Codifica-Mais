<?php

class Carro {
    private $modelo;
    private $marca;
    private $ano;
    private $ligado;

    public function __construct($modelo, $marca, $ano) {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->ano = $ano;
        $this->ligado = false;
    }

    public function ligar() {
        if (!$this->ligado) {
            $this->ligado = true;
            echo "O carro está ligado.<br>";
        } else {
            echo "O carro já está ligado.<br>";
        }
    }

    public function desligar() {
        if ($this->ligado) {
            $this->ligado = false;
            echo "O carro está desligado.<br>";
        } else {
            echo "O carro já está desligado.<br>";
        }
    }

    public function acelerar() {
        if ($this->ligado) {
            echo "O carro está acelerando.<br>";
        } else {
            echo "Você precisa ligar o carro primeiro.<br>";
        }
    }

    public function frear() {
        if ($this->ligado) {
            echo "O carro está freando.<br>";
        } else {
            echo "Você precisa ligar o carro primeiro.<br>";
        }
    }

    public function exibirDetalhes() {
        echo "Modelo: {$this->modelo}<br>";
        echo "Marca: {$this->marca}<br>";
        echo "Ano: {$this->ano}<br>";
    }
}
?>
