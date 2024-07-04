USE gestao_produtos;

INSERT INTO produtos (nome, sku, descricao, categoria, preco, unidade_medida, peso, quantidade_estoque, fabricante, fornecedor, created_at) VALUES
('Coca-Cola 350ml', 'SKU001', 'Refrigerante Coca-Cola de 350ml', 'Refrigerante', 3.50, 'ml', 0.35, 500, 'Coca-Cola', 'Distribuidora XYZ', CURRENT_TIMESTAMP),
('Skol Pilsen 350ml', 'SKU002', 'Cerveja Skol Pilsen de 350ml', 'Cerveja', 2.50, 'ml', 0.35, 1000, 'Ambev', 'Distribuidora XYZ', CURRENT_TIMESTAMP),
('Gin Tanqueray 750ml', 'SKU003', 'Gin Tanqueray de 750ml', 'Gin', 120.00, 'ml', 0.75, 200, 'Diageo', 'Distribuidora XYZ', CURRENT_TIMESTAMP),
('Tônica Schweppes 350ml', 'SKU004', 'Água Tônica Schweppes de 350ml', 'Tônica', 4.00, 'ml', 0.35, 300, 'Schweppes', 'Distribuidora XYZ', CURRENT_TIMESTAMP),
('Red Bull 250ml', 'SKU005', 'Energético Red Bull de 250ml', 'Energético', 8.00, 'ml', 0.25, 400, 'Red Bull', 'Distribuidora XYZ', CURRENT_TIMESTAMP),
('Heineken 330ml', 'SKU006', 'Cerveja Heineken de 330ml', 'Cerveja', 5.00, 'ml', 0.33, 800, 'Heineken', 'Distribuidora XYZ', CURRENT_TIMESTAMP),
('Gin Beefeater 750ml', 'SKU007', 'Gin Beefeater de 750ml', 'Gin', 110.00, 'ml', 0.75, 150, 'Beefeater', 'Distribuidora XYZ', CURRENT_TIMESTAMP),
('Água Tônica Antarctica 350ml', 'SKU008', 'Água Tônica Antarctica de 350ml', 'Tônica', 3.50, 'ml', 0.35, 600, 'Antarctica', 'Distribuidora XYZ', CURRENT_TIMESTAMP),
('Monster Energy 473ml', 'SKU009', 'Energético Monster de 473ml', 'Energético', 10.00, 'ml', 0.47, 250, 'Monster', 'Distribuidora XYZ', CURRENT_TIMESTAMP),
('Guaraná Antarctica 350ml', 'SKU010', 'Refrigerante Guaraná Antarctica de 350ml', 'Refrigerante', 3.00, 'ml', 0.35, 700, 'Antarctica', 'Distribuidora XYZ', CURRENT_TIMESTAMP);
