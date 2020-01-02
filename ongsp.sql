-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 21-Nov-2019 às 01:30
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
-- Database: `ongsp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(100) NOT NULL,
  `TELEFONE` varchar(10) NOT NULL,
  `ENDERECO` varchar(100) NOT NULL,
  `RG` varchar(10) NOT NULL,
  `CNPJ` varchar(14) NOT NULL,
  `INSTITUICAO` varchar(100) NOT NULL,
  `DESCRICAO` varchar(250) NOT NULL,
  `CONHECIMENTO` varchar(250) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `SENHA` varchar(4) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`),
  KEY `ID_2` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID`, `NOME`, `TELEFONE`, `ENDERECO`, `RG`, `CNPJ`, `INSTITUICAO`, `DESCRICAO`, `CONHECIMENTO`, `EMAIL`, `SENHA`) VALUES
(1, 'leo severo', '555555555', 'rua de cima 1122999', '446742358', '32153257000170', 'aa casa dd', 'teste sim ssss TTTT', '      sei fazer nada sfdsf', '10@gmail.com', '1234'),
(2, ' aa', '666666', 'sfasfasf', '888888888', '77777777777777', 'asdfasdfsd', 'asdfasdf', 'asdfasdf', 'asdfa@gmail.com', '1111'),
(3, 'bbbbvv', '777', 'sfasfasf', '888888888', '77777777777777', 'asdfasdfsd', 'eeeeee', 'rrrrrrrrr', 'ssssa@gmail.com', '2222'),
(4, 'ttttttttttttt', '9999', 'sfasfasf', '888888888', '77777777777777', 'asdfasdfsd', 'eeeeee', 'rrrrrrrrr', 'ssssa@gmail.com', '7777'),
(5, 'wwwwwwwwwwwwwwww', '9999', 'sfasfasf', '888888888', '77777777777777', 'asdfasdfsd', 'eeeeee', 'rrrrrrrrr', 'ssssa@gmail.com', 'wwww'),
(14, ' teste', ' 23432423', ' sdfdsf', ' 23423423', ' 4323432423423', ' fdasdfg', ' asdfgsdagsdfg8888888', '    asd', '1@gmail.com', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
