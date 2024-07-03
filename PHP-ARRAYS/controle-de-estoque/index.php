<?php

$estoque = [
    [
        'sku' => 'GRA-001',
        'nome' => 'Arroz 5kg',
        'unidade_medida' => '5kg',
        'quantidade' => 50,
        'preco' => 37.95
    ],
    [
        'sku' => 'GRA-002',
        'nome' => 'Feijão Preto 1kg',
        'unidade_medida' => '1kg',
        'quantidade' => 30,
        'preco' => 8.99
    ],
    [
        'sku' => 'MAS-003',
        'nome' => 'Macarrão Espaguete 500g',
        'unidade_medida' => '500g',
        'quantidade' => 100,
        'preco' => 9.99
    ],
    [
        'sku' => 'MAN-004',
        'nome' => 'Óleo de Soja 900ml',
        'unidade_medida' => '900ml',
        'quantidade' => 60,
        'preco' => 6.98
    ],
    [
        'sku' => 'GRA-005',
        'nome' => 'Açúcar Refinado 1kg',
        'unidade_medida' => '1kg',
        'quantidade' => 80,
        'preco' => 4.98
    ],
    [
        'sku' => 'GRA-006',
        'nome' => 'Sal Refinado 1kg',
        'unidade_medida' => '1kg',
        'quantidade' => 40,
        'preco' => 4.5
    ],
    [
        'sku' => 'GRA-007',
        'nome' => 'Café Torrado e Moído 500g',
        'unidade_medida' => '500g',
        'quantidade' => 20,
        'preco' => 16.98
    ],
    [
        'sku' => 'BEB-008',
        'nome' => 'Leite UHT Integral 1L',
        'unidade_medida' => '1L',
        'quantidade' => 70,
        'preco' => 6.99
    ],
    [
        'sku' => 'GRA-009',
        'nome' => 'Farinha de Trigo 1kg',
        'unidade_medida' => '1kg',
        'quantidade' => 90,
        'preco' => 5.45
    ],
    [
        'sku' => 'PRO-010',
        'nome' => 'Molho de Tomate',
        'unidade_medida' => '340g',
        'quantidade' => 50,
        'preco' => 3.99
    ]
];

function exibirMenu() {
    echo "Menu:\n";
    echo "1. Adicionar um produto\n";
    echo "2. Deletar um produto\n";
    echo "3. Verificar o estoque de um produto\n";
    echo "4. Atualizar o estoque de um produto\n";
    echo "5. Listar o estoque\n";
    echo "6. Total de tipos e quantidade total de itens\n";
    echo "7. Sair\n";
}

function adicionarProduto(&$estoque, $sku, $nome, $unidade_medida, $quantidade, $preco) {
    foreach ($estoque as $produto) {
        if ($produto['sku'] == $sku) {
            echo "Produto com o mesmo SKU já existe.\n";
            return;
        }
    }
    $estoque[] = [
        'sku' => $sku,
        'nome' => $nome,
        'unidade_medida' => $unidade_medida,
        'quantidade' => $quantidade,
        'preco' => $preco
    ];
    echo "Produto adicionado com sucesso!\n";
}

function venderProduto(&$estoque, $sku, $quantidade) {
    foreach ($estoque as &$produto) {
        if ($produto['sku'] == $sku) {
            if ($produto['quantidade'] >= $quantidade) {
                $produto['quantidade'] -= $quantidade;
                echo "Venda realizada com sucesso!\n";
                if ($produto['quantidade'] == 0) {
                    echo "Produto esgotado.\n";
                }
                return;
            } else {
                echo "Quantidade insuficiente em estoque.\n";
                return;
            }
        }
    }
    echo "Produto não encontrado no estoque.\n";
}

function verificarEstoque($estoque, $sku) {
    foreach ($estoque as $produto) {
        if ($produto['sku'] == $sku) {
            echo "Produto disponível:\n";
            echo "SKU: " . $produto['sku'] . "\n";
            echo "Nome: " . $produto['nome'] . "\n";
            echo "Unidade de medida: " . $produto['unidade_medida'] . "\n";
            echo "Quantidade: " . $produto['quantidade'] . "\n";
            echo "Preço: " . $produto['preco'] . "\n";
            return;
        }
    }
    echo "Produto não disponível no estoque.\n";
}

function atualizarEstoque(&$estoque, $sku) {
    foreach ($estoque as &$produto) {
        if ($produto['sku'] == $sku) {
            $quantidade = readline("Quantidade a ser adicionada: ");
            $produto['quantidade'] += $quantidade;
            echo "Estoque atualizado com sucesso!\n";
            return;
        }
    }
    echo "Produto não encontrado no estoque.\n";
}

function listarEstoque($estoque) {
    if (!empty($estoque)) {
        usort($estoque, function($a, $b) {
            return strcmp($a['nome'], $b['nome']);
        });
        foreach ($estoque as $produto) {
            echo "SKU: " . $produto['sku'] . "\n";
            echo "Nome: " . $produto['nome'] . "\n";
            echo "Unidade de medida: " . $produto['unidade_medida'] . "\n";
            echo "Quantidade: " . $produto['quantidade'] . "\n";
            echo "Preço: " . $produto['preco'] . "\n";
            echo "-------------------------\n";
        }
    } else {
        echo "Estoque vazio.\n";
    }
}

function deletarProduto(&$estoque, $sku) {
    foreach ($estoque as $index => $produto) {
        if ($produto['sku'] == $sku) {
            if ($produto['quantidade'] > 0) {
                $confirmacao = readline("O produto ainda tem estoque. Tem certeza que deseja deletá-lo? (s/n): ");
                if (strtolower($confirmacao) !== 's') {
                    echo "Operação cancelada.\n";
                    return;
                }
            }
            unset($estoque[$index]);
            $estoque = array_values($estoque);
            echo "Produto deletado do estoque.\n";
            return;
        }
    }
    echo "Produto não encontrado no estoque.\n";
}

function totalTiposEQuantidades($estoque) {
    $totalTipos = count($estoque);
    $quantidadeTotal = array_sum(array_column($estoque, 'quantidade'));

    echo "Total de tipos diferentes de itens no estoque: $totalTipos\n";
    echo "Quantidade total de todos os itens: $quantidadeTotal\n";
}

do {
    exibirMenu();
    $opcao = readline("Escolha uma opção: ");
    
    switch ($opcao) {
        case 1:
            $sku = readline("SKU do produto: ");
            $nome = readline("Nome do produto: ");
            $unidade_medida = readline("Unidade de medida: ");
            $quantidade = readline("Quantidade do produto: ");
            $preco = readline("Preço do produto: ");
            adicionarProduto($estoque, $sku, $nome, $unidade_medida, $quantidade, $preco);
            break;
        case 2:
            $sku = readline("SKU do produto a ser deletado: ");
            deletarProduto($estoque, $sku);
            break;
        case 3:
            $sku = readline("SKU do produto a verificar: ");
            verificarEstoque($estoque, $sku);
            break;
        case 4:
            $sku = readline("SKU do produto a atualizar: ");
            atualizarEstoque($estoque, $sku);
            break;
        case 5:
            listarEstoque($estoque);
            break;
        case 6:
            totalTiposEQuantidades($estoque);
            break;
        case 7:
            echo "Saindo...\n";
            break;
        default:
            echo "Opção inválida. Tente novamente.\n";
    }
} while ($opcao != 7);

?>
