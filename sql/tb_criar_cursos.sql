-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Jun-2018 às 04:32
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbprocedimentos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_criar_cursos`
--

CREATE TABLE `tb_criar_cursos` (
  `id` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tipo_atividade` int(255) NOT NULL,
  `centro_custo` int(255) NOT NULL,
  `conta_caixa` int(255) NOT NULL,
  `certificado` tinyint(1) NOT NULL,
  `presenca` tinyint(1) NOT NULL,
  `etiqueta` tinyint(1) NOT NULL,
  `data_inicio_curso` date NOT NULL,
  `data_fim_curso` date NOT NULL,
  `hora_inicio_curso` time DEFAULT NULL,
  `hora_fim_curso` time DEFAULT NULL,
  `data_inicio_inscricoes` date NOT NULL,
  `data_fim_inscricoes` date NOT NULL,
  `vagas` int(255) NOT NULL,
  `carga_horaria` int(255) DEFAULT NULL,
  `categorias` varchar(255) NOT NULL,
  `janelas_pagamento` tinyint(3) NOT NULL DEFAULT '1',
  `data_inicio_lote1` date NOT NULL,
  `data_fim_lote1` date NOT NULL,
  `valor_lote1` int(255) NOT NULL,
  `valor_cbr_lote1` int(255) NOT NULL,
  `valor_abcdi_lote1` int(255) NOT NULL,
  `valor_nao_quite_lote1` int(255) NOT NULL,
  `valor_parceiro_lote1` int(255) NOT NULL,
  `tipo_vencimento_lote1` tinyint(3) NOT NULL,
  `n_dias_lote1` int(255) DEFAULT NULL,
  `limite_vencimento_lote1` date DEFAULT NULL,
  `data_inicio_lote2` date DEFAULT NULL,
  `data_fim_lote2` date DEFAULT NULL,
  `valor_lote2` int(255) DEFAULT NULL,
  `valor_cbr_lote2` int(255) DEFAULT NULL,
  `valor_abcdi_lote2` int(255) DEFAULT NULL,
  `valor_nao_quite_lote2` int(255) DEFAULT NULL,
  `valor_parceiro_lote2` int(255) DEFAULT NULL,
  `tipo_vencimento_lote2` tinyint(3) DEFAULT NULL,
  `n_dias_lote2` int(255) DEFAULT NULL,
  `limite_vencimento_lote2` date DEFAULT NULL,
  `data_inicio_lote3` date DEFAULT NULL,
  `data_fim_lote3` date DEFAULT NULL,
  `valor_lote3` int(255) DEFAULT NULL,
  `valor_cbr_lote3` int(255) DEFAULT NULL,
  `valor_abcdi_lote3` int(255) DEFAULT NULL,
  `valor_nao_quite_lote3` int(255) DEFAULT NULL,
  `valor_parceiro_lote3` int(255) DEFAULT NULL,
  `tipo_vencimento_lote3` tinyint(3) DEFAULT NULL,
  `n_dias_lote3` int(255) DEFAULT NULL,
  `limite_vencimento_lote3` date DEFAULT NULL,
  `data_inicio_lote4` date DEFAULT NULL,
  `data_fim_lote4` date DEFAULT NULL,
  `valor_lote4` int(255) DEFAULT NULL,
  `valor_cbr_lote4` int(255) DEFAULT NULL,
  `valor_abcdi_lote4` int(255) DEFAULT NULL,
  `valor_nao_quite_lote4` int(255) DEFAULT NULL,
  `valor_parceiro_lote4` int(255) DEFAULT NULL,
  `tipo_vencimento_lote4` tinyint(3) DEFAULT NULL,
  `n_dias_lote4` int(255) DEFAULT NULL,
  `limite_vencimento_lote4` date DEFAULT NULL,
  `criado_em` datetime DEFAULT CURRENT_TIMESTAMP,
  `criado_por` varchar(255) DEFAULT NULL,
  `criado_no_icase` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_criar_cursos`
--

INSERT INTO `tb_criar_cursos` (`id`, `nome`, `tipo_atividade`, `centro_custo`, `conta_caixa`, `certificado`, `presenca`, `etiqueta`, `data_inicio_curso`, `data_fim_curso`, `hora_inicio_curso`, `hora_fim_curso`, `data_inicio_inscricoes`, `data_fim_inscricoes`, `vagas`, `carga_horaria`, `categorias`, `janelas_pagamento`, `data_inicio_lote1`, `data_fim_lote1`, `valor_lote1`, `valor_cbr_lote1`, `valor_abcdi_lote1`, `valor_nao_quite_lote1`, `valor_parceiro_lote1`, `tipo_vencimento_lote1`, `n_dias_lote1`, `limite_vencimento_lote1`, `data_inicio_lote2`, `data_fim_lote2`, `valor_lote2`, `valor_cbr_lote2`, `valor_abcdi_lote2`, `valor_nao_quite_lote2`, `valor_parceiro_lote2`, `tipo_vencimento_lote2`, `n_dias_lote2`, `limite_vencimento_lote2`, `data_inicio_lote3`, `data_fim_lote3`, `valor_lote3`, `valor_cbr_lote3`, `valor_abcdi_lote3`, `valor_nao_quite_lote3`, `valor_parceiro_lote3`, `tipo_vencimento_lote3`, `n_dias_lote3`, `limite_vencimento_lote3`, `data_inicio_lote4`, `data_fim_lote4`, `valor_lote4`, `valor_cbr_lote4`, `valor_abcdi_lote4`, `valor_nao_quite_lote4`, `valor_parceiro_lote4`, `tipo_vencimento_lote4`, `n_dias_lote4`, `limite_vencimento_lote4`, `criado_em`, `criado_por`, `criado_no_icase`) VALUES
(1, 'Curso de GestÃ£o de ClÃ­nicas- Garantindo Sustentabilidade Financeira das ClÃ­nicas', 1, 98, 591, 1, 1, 0, '2018-09-20', '2018-09-21', '14:00:00', '21:00:00', '2018-05-15', '2018-09-15', 40, 18, '1,2,3,4,5,6,7,8,9,10,11', 1, '2018-05-15', '2018-09-15', 2859, 2859, 2143, 2859, 2859, 1, 2, '2018-09-15', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 1, 0, '0000-00-00', '2018-05-24 07:37:00', 'kingsway', 1),
(2, 'III Curso de FormaÃ§Ã£o de Auditor Interno do Padi 2018', 1, 98, 288, 1, 1, 0, '2018-07-05', '2018-07-07', '08:30:00', '17:30:00', '2018-05-14', '2018-07-02', 40, 24, '1,2,3,4,5,6,7,8,9,10,11', 1, '2018-05-14', '2018-07-02', 2768, 2076, 2076, 2768, 2491, 1, 2, '2018-07-02', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 1, 0, '0000-00-00', '2018-05-24 07:53:40', 'kingsway', 1),
(3, 'Curso GestÃ£o de ClÃ­nicas - Efetividade da relaÃ§Ã£o comercial com as operadoras', 1, 98, 591, 1, 1, 0, '2018-06-28', '2018-06-29', '00:00:00', '00:00:00', '2018-05-01', '2018-06-25', 40, 18, '1,2,3,4,5,6,7,8,9,10,11', 1, '2018-05-01', '2018-06-25', 2859, 2859, 2143, 2859, 2859, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 1, 0, '0000-00-00', '2018-06-16 12:35:43', 'kingsway', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_criar_cursos`
--
ALTER TABLE `tb_criar_cursos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_criar_cursos`
--
ALTER TABLE `tb_criar_cursos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
