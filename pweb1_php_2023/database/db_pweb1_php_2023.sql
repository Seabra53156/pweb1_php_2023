-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `db_aula_pweb1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_aula_pweb1`;

-- Copiando estrutura para tabela db_aula_pweb1.aluno
CREATE TABLE IF NOT EXISTS `aluno` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `cpf` varchar(14) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `telefone` varchar(20) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela db_aula_pweb1.aluno: ~6 rows (aproximadamente)
INSERT INTO `aluno` (`id`, `nome`, `cpf`, `telefone`) VALUES
	(1, 'Jackson', '1231230', '123123'),
	(2, 'Aluno Teste', '55500055599', '49 8800-5500'),

