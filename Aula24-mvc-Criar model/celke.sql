-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/04/2018 às 19:41
-- Versão do servidor: 5.7.14
-- Versão do PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `artigos`
--

CREATE TABLE `artigos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `conteudo` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `artigos`
--

INSERT INTO `artigos` (`id`, `titulo`, `conteudo`, `created`, `modified`) VALUES
(1, 'Artigo 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non feugiat erat. Aliquam est lorem, tempus in purus vel, sagittis rutrum lectus. Sed sit amet faucibus mauris. Pellentesque efficitur nec libero a congue.', '2018-04-23 00:00:00', NULL),
(2, 'Artigo 2', 'In placerat sapien at accumsan iaculis. Nam eget pretium augue, eget placerat sapien. Fusce mattis turpis sed rutrum auctor.', '2018-04-23 00:00:00', NULL),
(3, 'Artigo 3', 'In placerat sapien at accumsan iaculis. Nam eget pretium augue, eget placerat sapien. Fusce mattis turpis sed rutrum auctor.', '2018-04-23 00:00:00', NULL),
(4, 'Artigo 4', 'In placerat sapien at accumsan iaculis. Nam eget pretium augue, eget placerat sapien. Fusce mattis turpis sed rutrum auctor.', '2018-04-23 00:00:00', NULL),
(5, 'Artigo 5', 'Curabitur ultricies porttitor egestas. Sed sagittis, ligula et vulputate fermentum, felis nisl varius tortor, et euismod nibh nisl ornare justo. ', '2018-04-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`, `foto`, `created`, `modified`) VALUES
(1, 'Cesar', 'cesar@celke.com.br', 'cesar', '123', NULL, '2018-04-20 16:58:04', NULL),
(2, 'Cesar 2', 'cesar2@celke.com.br', 'cesar2', '222', NULL, '2018-04-20 17:41:06', '2018-04-21 12:32:43');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `artigos`
--
ALTER TABLE `artigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
