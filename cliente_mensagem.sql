-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 28-Ago-2019 às 18:37
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cliente_mensagem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `email`, `senha`) VALUES
(4, 'wagneramaro@certasolusoes.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'rafael.ribeiro@certasolucoes.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_cliente`
--

DROP TABLE IF EXISTS `dados_cliente`;
CREATE TABLE IF NOT EXISTS `dados_cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `telefone` varchar(25) NOT NULL,
  `nome_empresa` varchar(255) NOT NULL,
  `razao_social` varchar(255) NOT NULL,
  `cnpj` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dados_cliente`
--

INSERT INTO `dados_cliente` (`id`, `email`, `nome`, `telefone`, `nome_empresa`, `razao_social`, `cnpj`) VALUES
(7, '$email', '$nome', '$telefone', '$nome_empresa', '$razao_social', '$cnpj'),
(8, 'rafael.ribeiro@certasolucoes.com', 'joao', '456879456', 'lojas joao', 'lojas-joao', '123456/45854.45'),
(9, 'joao@gilberto', 'joao', '456879456', 'lojas joao', 'lojas-joao', '123456/45854.45'),
(10, 'rafael.ribeiro@certasolucoes.com', 'joao', '456879456', 'lojas joao', 'lojas-joao', '123456/45854.45'),
(11, 'rafael.ribeiro@certasolucoes.com', 'joao', '456879456', 'lojas joao', 'lojas-joao', '123456/45854.45'),
(12, 'rafael.ribeiro@certasolucoes.com', 'joao', '456879456', 'lojas joao', 'lojas-joao', '123456/45854.45'),
(13, 'joao@gilberto', 'o novo cliente', '444444444', 'nova empresa', 'empresa nova', '77777777777'),
(14, 'rafael.ribeiro@certasolucoes.com', 'o novo cliente', '456879456', 'lojas joao', 'lojas-joao', '123456/45854.45'),
(15, 'luciano@email.com', 'luciano', '555555555', 'lumoveis', 'lumoveisecia', '123456789/45'),
(16, 'emaildeteste@email.com', 'Antonio', '123456789', 'antonioempresa', 'Certa SoluÃ§Ãµes Informatica Ltda.', '123456789/111.65');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

DROP TABLE IF EXISTS `orcamento`;
CREATE TABLE IF NOT EXISTS `orcamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcliente` int(8) NOT NULL,
  `tipo_site` varchar(50) NOT NULL,
  `desc_site` text NOT NULL,
  `mod_site` varchar(150) NOT NULL,
  `domin_empresa` varchar(150) NOT NULL,
  `cidade_empresa` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `orcamento`
--

INSERT INTO `orcamento` (`id`, `idcliente`, `tipo_site`, `desc_site`, `mod_site`, `domin_empresa`, `cidade_empresa`) VALUES
(24, 10, 'eu quero um site moderno e atraente.', 'as imagens que ficam passando como slides.', 'www.empresa.com', 'domin_empresa', 'rodeiro'),
(22, 0, 'tipo aquele', 'todos os pontos', 'www.empresa.com', 'domin_empresa', 'uba'),
(23, 0, 'eu quero um site moderno e atraente.', 'as imagens que ficam passando como slides.', 'www.slideshow.com', 'domin_empresa', 'juiz de fora.'),
(27, 0, 'eu quero um site moderno e atraente.', 'as imagens que ficam passando como slides.', 'www.empresa.com', 'domin_empresa', 'juiz de fora.'),
(26, 0, 'eu quero um site moderno e atraente.', 'as imagens que ficam passando como slides.', 'www.empresa.com', 'domin_empresa', 'juiz de fora.'),
(25, 0, 'tipo aquele', 'as imagens que ficam passando como slides.', 'www.slideshow.com', 'domin_empresa', 'juiz de fora.'),
(28, 0, 'outro tipo de site que me de alegria', 'aqueles pontos ', 'www.floresocampo.com', 'domin_empresa', 'uba'),
(29, 0, 'eu quero um site moderno e atraente.', 'aqueles pontos ', 'www.empresa.com', 'www.docarmoflores.com', 'juiz de fora.'),
(30, 11, 'quem envio foi o joao', 'quem envio foi o joao', 'quem envio foi o joao', 'quem envio foi o joao', 'quem envio foi o joao'),
(31, 12, 'quem envio foi o joao', 'quem envio foi o joao', 'certasolucoes.com', 'quem envio foi o joao', 'quem envio foi o joao'),
(32, 13, 'o melhor site possivel', 'todos os pontos que sÃ£o bonitos.', 'www.site.com', 'www.minhaempresanova.com', 'cataguases'),
(33, 14, 'quem envio foi o joao', 'todos os pontos que sÃ£o bonitos.', 'quem envio foi o joao', 'www.minhaempresanova.com', 'quem envio foi o joao'),
(34, 15, 'qualquer um', 'todos as imagens', 'www.site.com', 'www.minhaempresanova.com', 'cataguases'),
(35, 16, 'eu quero um site moderno e atraente.', 'as imagens que ficam passando como slides.', 'www.empresa.com', 'www.antonioempresa.com.br', 'juiz de fora.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
