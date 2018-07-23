-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 23-Jul-2018 às 19:43
-- Versão do servidor: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cursopdo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

DROP TABLE IF EXISTS `artigos`;
CREATE TABLE IF NOT EXISTS `artigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conteudo` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`id`, `titulo`, `conteudo`, `created`, `modified`) VALUES
(1, 'artigo 1', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, ', '2018-07-23 00:00:00', NULL),
(2, 'artigo 2', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, ', '2018-07-23 00:00:00', NULL),
(3, 'artigo 3', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, ', '2018-07-23 00:00:00', NULL),
(4, 'artigo 4', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, ', '2018-07-23 00:00:00', NULL),
(5, 'artigo 4', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, ', '2018-07-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`, `foto`, `created`, `modified`) VALUES
(5, 'luciana1', 'lucianamarques745@gmail.com', 'luciana', '123', NULL, '2018-07-20 18:01:17', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
