CREATE DATABASE gestao_produtos;

USE gestao_produtos;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    sku VARCHAR(30) NOT NULL,
    descricao VARCHAR(200),
    categoria VARCHAR(40),
    preco DECIMAL(10, 2) NOT NULL,
    unidade_medida VARCHAR(50),
    peso DECIMAL(10, 2),
    quantidade_estoque INT,
    fabricante VARCHAR(50),
    fornecedor VARCHAR(50),
    deleted_at TIMESTAMP DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT NULL
);