<?php

class Produto {
    private $nome;
    private $preco;
    private $quantidadeEmEstoque;

    public function __construct($nome, $preco, $quantidadeEmEstoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidadeEmEstoque = $quantidadeEmEstoque;
    }

    public function alterarPreco($novoPreco) {
        if ($novoPreco > 0) {
            $this->preco = $novoPreco;
            echo "Preço alterado para R$ $novoPreco.\n";
        } else {
            echo "Preço inválido.\n";
        }
    }

    public function ajustarEstoque($quantidade) {
        if ($quantidade >= 0) {
            $this->quantidadeEmEstoque = $quantidade;
            echo "Quantidade em estoque ajustada para $quantidade unidades.\n";
        } else {
            echo "Quantidade em estoque inválida.\n";
        }
    }

    public function exibirDetalhes() {
        echo "Nome: {$this->nome}, Preço: R$ {$this->preco}, Quantidade em Estoque: {$this->quantidadeEmEstoque}\n";
    }
}
