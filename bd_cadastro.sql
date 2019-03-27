-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Jun 06, 2011 as 02:57 AM
-- Versão do Servidor: 5.5.10
-- Versão do PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `bd_cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fut`
--

CREATE TABLE IF NOT EXISTS `tb_fut` (
  `p_cod` int(11) NOT NULL AUTO_INCREMENT,
  `p_nome` varchar(55) NOT NULL,
  `p_endereco` varchar(50) NOT NULL,
  `p_numero` int(4) NOT NULL,
  `p_complemento` varchar(12) DEFAULT NULL,
  `p_idade` int(2) NOT NULL,
  `p_peso` int(3) NOT NULL,
  `p_altura` varchar(4) NOT NULL,
  `p_rg` varchar(12) NOT NULL,
  `p_cpf` varchar(14) DEFAULT NULL,
  `p_dddtelr` int(2) NOT NULL,
  `p_telr` varchar(9) NOT NULL,
  `p_dddtelc` int(2) DEFAULT NULL,
  `p_telc` varchar(9) DEFAULT NULL,
  `p_dddtelcel` int(2) DEFAULT NULL,
  `p_telcel` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`p_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin7 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_fut`
--

INSERT INTO `tb_fut` (`p_cod`, `p_nome`, `p_endereco`, `p_numero`, `p_complemento`, `p_idade`, `p_peso`, `p_altura`, `p_rg`, `p_cpf`, `p_dddtelr`, `p_telr`, `p_dddtelc`, `p_telc`, `p_dddtelcel`, `p_telcel`) VALUES
(1, 'Carlos Henrique Diniz Ferreira', 'Rua Capitao Oliveira Carvalho', 411, NULL, 17, 74, '1,72', '43.283.338-9', '431.793.838-36', 11, '3974-3356', NULL, NULL, 11, '6740-6371'),
(2, 'Salete Maria Silva Diniz', 'Rua Capitao Oliveira Carvalho', 411, NULL, 36, 66, '1,63', '36.865.592-1', '523.863.843-49', 11, '3974-3356', NULL, NULL, 11, '6740-6371'),
(3, 'Beatriz de Lima Souza', 'Av. Dep. cant?dio Sampaio', 4670, 'Rua 15 Casa ', 18, 60, '1,78', '34.453.354-5', '453.785.234-86', 11, '4536-6545', NULL, NULL, 11, '2343-6432');
