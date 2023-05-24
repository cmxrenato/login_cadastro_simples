-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 24/05/2023 às 19:42
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Renato`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `nome` text NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `login`
--

INSERT INTO `login` (`nome`, `email`, `senha`) VALUES
('administrador', 'adm@email.com', '1234554321'),
('Renato Leal', 'renato@email.com', '1357997531'),
('Sam', 'sam@email.com', '1234554321'),
('jose', 'jose@email.com', '23443211'),
('joao', 'joao@gmail.com', '12345543211'),
('Julia', 'julia@email.com', 'julia1992');

-- --------------------------------------------------------

--
-- Estrutura para tabela `novos_membros`
--

CREATE TABLE `novos_membros` (
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` text NOT NULL,
  `data_de_nascimento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `novos_membros`
--

INSERT INTO `novos_membros` (`nome`, `telefone`, `email`, `data_de_nascimento`) VALUES
('joao joao', '03333333333', 'joao@email.com', '2001-01-01'),
('maria maria', '01234567890', 'maria@email.com', '2002-02-02'),
('Renato', '01234567890', 'renato@email.com', '1991-10-11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
