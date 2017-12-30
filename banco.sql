-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 30-Dez-2017 às 21:01
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `banco`
--
CREATE DATABASE IF NOT EXISTS `banco` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `banco`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabelaimg`
--

CREATE TABLE IF NOT EXISTS `tabelaimg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(11) NOT NULL,
  `produto` varchar(80) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `data` date NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `tabelaimg`
--

INSERT INTO `tabelaimg` (`id`, `codigo`, `produto`, `descricao`, `data`, `valor`, `imagem`, `id_usuario`) VALUES
(12, 22, 'god of war', 'jogo daora play 4', '2017-12-30', '250.00', 'GOW-OG-image.jpg', 1),
(13, 21, 'Mortal Kombat', 'ps3', '2017-12-30', '200.00', 'mortal.jpg', 1),
(17, 24, 'teste', 'teste', '2017-12-30', '20.00', 'GOW-OG-image.jpg', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabelausuario`
--

CREATE TABLE IF NOT EXISTS `tabelausuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nome` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tabelausuario`
--

INSERT INTO `tabelausuario` (`id`, `email`, `senha`, `nome`) VALUES
(1, 'karen.lara@outlook.com', 'karen', 'Karen'),
(2, 'karen.lara1607@gmail.com', 'teste', 'testeKaren');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tabelaimg`
--
ALTER TABLE `tabelaimg`
  ADD CONSTRAINT `tabelaimg_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tabelausuario` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
