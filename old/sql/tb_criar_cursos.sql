CREATE TABLE tb_criar_cursos
(
	id INT(255) NOT NULL AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	tipo_atividade INT(255) NOT NULL, -- 1 - Presencial; 2 - On-line; 3 - Livro
	centro_custo INT(255) NOT NULL,
	conta_caixa INT(255) NOT NULL,
	certificado TINYINT(1) NOT NULL,
	presenca TINYINT(1) NOT NULL,
	etiqueta TINYINT(1) NOT NULL,
	data_inicio_curso DATE NOT NULL,
	data_fim_curso DATE NOT NULL,
	hora_inicio_curso TIME(6),
	hora_fim_curso TIME(6),
	data_inicio_inscricoes DATE NOT NULL,
	data_fim_inscricoes DATE NOT NULL,
	vagas INT(255) NOT NULL,
	carga_horaria INT(255),
	categorias VARCHAR(255) NOT NULL,
	
	data_inicio_lote1 DATE NOT NULL,
	data_fim_lote1 DATE NOT NULL,
	valor_lote1 INT(255) NOT NULL,
	valor_cbr_lote1 INT(255) NOT NULL,
	valor_abcdi_lote1 INT(255) NOT NULL,
	valor_nao_quite_lote1 INT(255) NOT NULL,
	valor_parceiro_lote1 INT(255) NOT NULL,
	tipo_vencimento_lote1 TINYINT(3) NOT NULL, -- 1 - Inscrição + n dias; 2 - Fixo; 3 - Data da Inscrição
	n_dias_lote1 INT(255),
	limite_vencimento_lote1 DATE,
	
	data_inicio_lote2 DATE,
	data_fim_lote2 DATE,
	valor_lote2 INT(255),
	valor_cbr_lote2 INT(255),
	valor_abcdi_lote2 INT(255),
	valor_nao_quite_lote2 INT(255),
	valor_parceiro_lote2 INT(255),
	tipo_vencimento_lote2 TINYINT(3), -- 1 - Inscrição + n dias; 2 - Fixo; 3 - Data da Inscrição
	n_dias_lote2 INT(255),
	limite_vencimento_lote2 DATE,
	
	data_inicio_lote3 DATE,
	data_fim_lote3 DATE,
	valor_lote3 INT(255),
	valor_cbr_lote3 INT(255),
	valor_abcdi_lote3 INT(255),
	valor_nao_quite_lote3 INT(255),
	valor_parceiro_lote3 INT(255),
	tipo_vencimento_lote3 TINYINT(3), -- 1 - Inscrição + n dias; 2 - Fixo; 3 - Data da Inscrição
	n_dias_lote3 INT(255),
	limite_vencimento_lote3 DATE,

	data_inicio_lote4 DATE,
	data_fim_lote4 DATE,
	valor_lote4 INT(255),
	valor_cbr_lote4 INT(255),
	valor_abcdi_lote4 INT(255),
	valor_nao_quite_lote4 INT(255),
	valor_parceiro_lote4 INT(255),
	tipo_vencimento_lote4 TINYINT(3), -- 1 - Inscrição + n dias; 2 - Fixo; 3 - Data da Inscrição
	n_dias_lote4 INT(255),
	limite_vencimento_lote4 DATE,

	criado_em DATE,
	criado_por VARCHAR(255),
	PRIMARY KEY (ID)
);

ALTER TABLE `tb_criar_cursos` CHANGE `criado_em` `criado_em` DATETIME NULL DEFAULT CURRENT_TIMESTAMP;