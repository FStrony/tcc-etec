-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Jun 14, 2011 as 05:49 PM
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
-- Estrutura da tabela `tb_art`
--

CREATE TABLE IF NOT EXISTS `tb_art` (
  `p_cod` int(3) NOT NULL,
  `p_nome` varchar(55) NOT NULL,
  `p_endereco` varchar(60) NOT NULL,
  `p_numero` int(4) NOT NULL,
  `p_complemento` varchar(10) NOT NULL,
  `p_idade` int(2) NOT NULL,
  `p_rg` varchar(12) NOT NULL,
  `p_cpf` varchar(14) NOT NULL,
  `p_dddtelr` int(2) NOT NULL,
  `p_telr` varchar(9) NOT NULL,
  `p_dddtelc` int(2) NOT NULL,
  `p_telc` varchar(9) NOT NULL,
  `p_dddtelcel` int(2) NOT NULL,
  `p_telcel` int(9) NOT NULL,
  `p_habi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

--
-- Extraindo dados da tabela `tb_art`
--

INSERT INTO `tb_art` (`p_cod`, `p_nome`, `p_endereco`, `p_numero`, `p_complemento`, `p_idade`, `p_rg`, `p_cpf`, `p_dddtelr`, `p_telr`, `p_dddtelc`, `p_telc`, `p_dddtelcel`, `p_telcel`, `p_habi`) VALUES
(1, 'Carlos Henrique', 'Rua Dos Tolos', 1232, '', 17, '23.123.124-4', '342.342.342-34', 11, '4234-234', 0, '', 0, 0, 'NAO'),
(1, 'Carlos Henrique Diniz Ferreira', 'Rua capit?£o Oliveira Carvalho', 411, '', 17, '43.283.338-9', '431.793.838-36', 11, '3974-3356', 0, '', 0, 0, 'NAO'),
(3, 'HAhA', 'ausdhausdhuhas', 411, '', 11, '23.423.423-4', '234.234.234-23', 11, '1231-2312', 0, '', 0, 0, 'NAO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fut`
--

CREATE TABLE IF NOT EXISTS `tb_fut` (
  `p_id` int(3) NOT NULL AUTO_INCREMENT,
  `p_nome` varchar(55) NOT NULL,
  `p_end` varchar(60) NOT NULL,
  `p_num` int(4) NOT NULL,
  `p_comp` varchar(10) NOT NULL,
  `p_idade` int(2) NOT NULL,
  `p_peso` int(3) NOT NULL,
  `p_altura` varchar(4) NOT NULL,
  `p_rg` varchar(12) NOT NULL,
  `p_cpf` varchar(14) NOT NULL,
  `p_dddtelr` int(2) NOT NULL,
  `p_telr` varchar(9) NOT NULL,
  `p_dddtelc` int(2) NOT NULL,
  `p_telc` varchar(9) NOT NULL,
  `p_dddtelcel` int(2) NOT NULL,
  `p_telcel` varchar(9) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin7 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_fut`
--

INSERT INTO `tb_fut` (`p_id`, `p_nome`, `p_end`, `p_num`, `p_comp`, `p_idade`, `p_peso`, `p_altura`, `p_rg`, `p_cpf`, `p_dddtelr`, `p_telr`, `p_dddtelc`, `p_telc`, `p_dddtelcel`, `p_telcel`) VALUES
(1, 'Carlos Henrique Diniz Ferreira', 'Rua Capit?£o Oliveira Carvalho', 411, '', 17, 72, '1,73', '43.283.338-9', '431.793.838-36', 11, '3974-3356', 0, '', 0, ''),
(2, 'Fernando Augusto', 'Favela ?© NOIS', 1, '', 16, 78, '1,73', '21.341.231-2', '234.234.234-34', 11, '3242-3423', 0, '', 0, ''),
(3, 'Carlos Henrique Diniz Ferreira', 'Rua Capit?£o Oliveira carvalho', 411, '', 17, 73, '1,73', '23.423.423-4', '234.234.234-5', 11, '2323-1231', 0, '', 0, '');
