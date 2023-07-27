-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jul-2023 às 02:23
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ong_sp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `RG` varchar(255) NOT NULL,
  `CNPJ` varchar(255) NOT NULL,
  `instituicao` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `conhecimento` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `telefone`, `endereco`, `RG`, `CNPJ`, `instituicao`, `descricao`, `conhecimento`, `email`, `password`) VALUES
(1, 'AAAAAAAAAAAAAAAAA', '99999999999', 'ruaa casa sua', '1111111111111111111111111111', '1111111111111111111111111111111', 'AAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAAAAA', 'abv@@gmail.com', '1234'),
(2, '22222222222222', '222222222', '222222222222222', '222222222', '22222222222222', '222222222222', '22222222', ' 22222222222', '222@gmail.com', '1234'),
(3, 'rogerio silva ', '333333333', '333343', '333333333', '33333333333333', 'asa', 'teste 1', '   asdfasfd', 'silva000@gmail.com', '1234'),
(4, 'asdasfsaf', '444444444', 'asda', '444444444', '44444444444444', 'asdfa', 'asdf', ' asdfa', '4444444444@gmail.com', '1234'),
(5, 'rogerio pinto ', '444444444', '44444444444444444444444444', '444444444', '44444444444444', 'sem nome ', 'aaaaaaaaaaaaa', 'kkkkkkkkkkkkkkkkkk ', 'rogerio@gmai.com', '1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
