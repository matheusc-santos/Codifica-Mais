<?php

function exibirMenu() {
    echo "Menu:\n";
    echo "1. Adicionar um produto\n";
    echo "2. Remover um produto\n";
    echo "3. Verificar o estoque\n";
    echo "4. Listar o estoque\n";
    echo "5. Sair\n";
}


function adicionarProduto(&$estoque, $codigo, $nomeProduto, $tamanho, $cor, $quantidade) {
    $estoque[$codigo] = [
        'codigo' => $codigo,
        'nome' => $nomeProduto,
        'tamanho' => $tamanho,
        'cor' => $cor,
        'quantidade' => $quantidade
    ];
    echo "Produto adicionado com sucesso!\n";
}


function venderProduto(&$estoque, $codigo, $quantidade) {
    if (isset($estoque[$codigo])) {
        if ($estoque[$codigo]['quantidade'] >= $quantidade) {
            $estoque[$codigo]['quantidade'] -= $quantidade;
            if ($estoque[$codigo]['quantidade'] == 0) {
                unset($estoque[$codigo]);
                echo "Produto esgotado e removido do estoque.\n";
            } else {
                echo "Venda realizada com sucesso!\n";
            }
        } else {
            echo "Quantidade insuficiente em estoque.\n";
        }
    } else {
        echo "Produto não encontrado no estoque.\n";
    }
}

function verificarEstoque($estoque, $codigo) {
    if (isset($estoque[$codigo])) {
        echo "Produto disponível:\n";
        echo "Código: " . $estoque[$codigo]['codigo'] . "\n";
        echo "Nome: " . $estoque[$codigo]['nome'] . "\n";
        echo "Tamanho: " . $estoque[$codigo]['tamanho'] . "\n";
        echo "Cor: " . $estoque[$codigo]['cor'] . "\n";
        echo "Quantidade: " . $estoque[$codigo]['quantidade'] . "\n";
    } else {
        echo "Produto não disponível no estoque.\n";
    }
}


function listarEstoque($estoque) {
    if (!empty($estoque)) {
        foreach ($estoque as $produto) {
            echo "Código: " . $produto['codigo'] . "\n";
            echo "Nome: " . $produto['nome'] . "\n";
            echo "Tamanho: " . $produto['tamanho'] . "\n";
            echo "Cor: " . $produto['cor'] . "\n";
            echo "Quantidade: " . $produto['quantidade'] . "\n";
            echo "-------------------------\n";
        }
    } else {
        echo "Estoque vazio.\n";
    }
}


$estoque = [];


do {
    exibirMenu();
    $opcao = readline("Escolha uma opção: ");
    
    switch ($opcao) {
        case 1:
            $codigo = readline("Código do produto: ");
            $nome = readline("Nome do produto: ");
            $tamanho = readline("Tamanho do produto: ");
            $cor = readline("Cor do produto: ");
            $quantidade = readline("Quantidade do produto: ");
            adicionarProduto($estoque, $codigo, $nome, $tamanho, $cor, $quantidade);
            break;
        case 2:
            $codigo = readline("Código do produto a ser removido: ");
            $quantidade = readline("Quantidade a ser removida: ");
            venderProduto($estoque, $codigo, $quantidade);
            break;
        case 3:
            $codigo = readline("Código do produto a verificar: ");
            verificarEstoque($estoque, $codigo);
            break;
        case 4:
            listarEstoque($estoque);
            break;
        case 5:
            echo "Saindo...\n";
            break;
        default:
            echo "Opção inválida. Tente novamente.\n";
    }
} while ($opcao != 5);
?>
