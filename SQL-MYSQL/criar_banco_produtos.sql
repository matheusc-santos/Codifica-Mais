CREATE DATABASE gestao_produtos;

USE gestao_produtos;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    sku VARCHAR(100) NOT NULL,
    descricao TEXT,
    categoria VARCHAR(100),
    preco DECIMAL(10, 2) NOT NULL,
    unidade_medida VARCHAR(50),
    peso DECIMAL(10, 2),
    quantidade_estoque INT,
    fabricante VARCHAR(255),
    fornecedor VARCHAR(255),
    deleted_at TIMESTAMP NULL DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);