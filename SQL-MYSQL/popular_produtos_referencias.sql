USE gestao_produtos;

INSERT INTO produtos (nome, sku, descricao, preco, peso, quantidade_estoque, categoria_id, unidade_medida_id, fabricante_id, fornecedor_id, created_at) VALUES
('Coca-Cola 350ml', 'SKU001', 'Refrigerante Coca-Cola de 350ml', 3.50, 0.35, 500, 1, 1, 1, 1, CURRENT_TIMESTAMP),
('Skol Pilsen 350ml', 'SKU002', 'Cerveja Skol Pilsen de 350ml', 2.50, 0.35, 1000, 2, 1, 2, 1, CURRENT_TIMESTAMP),
('Gin Tanqueray 750ml', 'SKU003', 'Gin Tanqueray de 750ml', 120.00, 0.75, 200, 3, 1, 3, 1, CURRENT_TIMESTAMP),
('Tônica Schweppes 350ml', 'SKU004', 'Água Tônica Schweppes de 350ml', 4.00, 0.35, 300, 4, 1, 4, 1, CURRENT_TIMESTAMP),
('Red Bull 250ml', 'SKU005', 'Energético Red Bull de 250ml', 8.00, 0.25, 400, 5, 1, 5, 1, CURRENT_TIMESTAMP),
('Heineken 330ml', 'SKU006', 'Cerveja Heineken de 330ml', 5.00, 0.33, 800, 2, 1, 6, 1, CURRENT_TIMESTAMP),
('Gin Beefeater 750ml', 'SKU007', 'Gin Beefeater de 750ml', 110.00, 0.75, 150, 3, 1, 7, 1, CURRENT_TIMESTAMP),
('Água Tônica Antarctica 350ml', 'SKU008', 'Água Tônica Antarctica de 350ml', 3.50, 0.35, 600, 4, 1, 8, 1, CURRENT_TIMESTAMP),
('Monster Energy 473ml', 'SKU009', 'Energético Monster de 473ml', 10.00, 0.47, 250, 5, 1, 9, 1, CURRENT_TIMESTAMP),
('Guaraná Antarctica 350ml', 'SKU010', 'Refrigerante Guaraná Antarctica de 350ml', 3.00, 0.35, 700, 1, 1, 8, 1, CURRENT_TIMESTAMP);
