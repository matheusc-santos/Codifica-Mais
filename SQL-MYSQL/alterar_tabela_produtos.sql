USE gestao_produtos;

ALTER TABLE produtos
DROP COLUMN categoria,
DROP COLUMN unidade_medida,
DROP COLUMN fabricante,
DROP COLUMN fornecedor;

ALTER TABLE produtos
ADD COLUMN categoria_id INT,
ADD COLUMN unidade_medida_id INT,
ADD COLUMN fabricante_id INT,
ADD COLUMN fornecedor_id INT;

ALTER TABLE produtos
ADD CONSTRAINT fk_categoria FOREIGN KEY (categoria_id) REFERENCES categorias(id),
ADD CONSTRAINT fk_unidade_medida FOREIGN KEY (unidade_medida_id) REFERENCES unidades_medida(id),
ADD CONSTRAINT fk_fabricante FOREIGN KEY (fabricante_id) REFERENCES fabricantes(id),
ADD CONSTRAINT fk_fornecedor FOREIGN KEY (fornecedor_id) REFERENCES fornecedores(id);
