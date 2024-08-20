-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 26-Jun-2021 às 16:57
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pesquisa`
--
CREATE DATABASE IF NOT EXISTS `pesquisa` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pesquisa`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dev`
--

CREATE TABLE IF NOT EXISTS `dev` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `idade` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dev`
--

INSERT INTO `dev` (`id`, `nome`, `genero`, `idade`) VALUES
(1, 'Kendro', 'Masculino', 22),
(27, 'Vandro', 'Masculino', 22),
(28, 'Eva', 'Feminino', 22),
(29, 'Alexandra', 'Feminino', 20),
(30, 'Pedro', 'Masculino', 20),
(31, 'Ana', 'Feminino', 30),
(32, 'Ana', 'Feminino', 30),
(33, 'Orlando', 'Masculino', 12),
(34, 'Kelcia', 'Feminino', 24),
(35, 'Helder', 'Masculino', 22),
(36, 'Nandinho', 'Masculino', 88),
(39, 'Viviane', 'Feminino', 19),
(40, 'Kelson', 'Masculino', 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
