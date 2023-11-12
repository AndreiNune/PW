-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/08/2023 às 04:04
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
-- Banco de dados: `bd_autoria`
--

create database bd_autoria;
use bd_autoria;

-- --------------------------------------------------------

--
-- Estrutura para tabela `autor`
--

-- User Table --

CREATE TABLE 'usuario'(
  'Login' varchar(12)NOT NULL,
  'Senha' int(11) NOT NULL
)
INSERT INTO 'usuario' (`Login`, `Senha`) VALUES ('kazuy', 123), ('adam', 321);

-- End user table --

CREATE TABLE `autor` (
  `Cod_autor` int(11) NOT NULL,
  `NomeAutor` varchar(25) NOT NULL,
  `Sobrenome` varchar(50) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Nasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `autor`
--

INSERT INTO `autor` (`Cod_autor`, `NomeAutor`, `Sobrenome`, `Email`, `Nasc`) VALUES
(1, 'Vanessa', 'Jaqueline', 'vanessque@gmail.com', '1998-02-15'),
(2, 'Mariah', 'Mariana', 'mmhlc@gmail.com', '1964-01-26'),
(3, 'Lucas', 'Marquez', 'elmarquez@gmail.com', '2008-05-15'),
(4, 'Gustavo', 'Anderson', 'gamoraes@gmail.com', '1943-06-10'),
(5, 'Juan', 'Castro', 'jcastro@outlook.com', '1965-05-15'),
(6, 'Stella', 'Liz', 'astelix@gmail.com', '1981-03-18'),
(7, 'Raimundo', 'Eríck', 'rayworld@outlook.com', '1953-08-04');

-- --------------------------------------------------------

--
-- Estrutura para tabela `autoria`
--

CREATE TABLE `autoria` (
  `Cod_autor` int(11) NOT NULL,
  `Cod_livro` int(11) NOT NULL,
  `DataLancamento` date NOT NULL,
  `Editora` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `autoria`
--

INSERT INTO `autoria` (`Cod_autor`, `Cod_livro`, `DataLancamento`, `Editora`) VALUES
(1, 1, '2008-11-03', 'TSC'),
(2, 1, '2008-11-03', 'TSC'),
(6, 1, '2008-11-03', 'TSC'),
(5, 5, '2011-07-23', 'DelFoss'),
(6, 5, '2006-04-21', 'DelFoss'),
(4, 3, '1999-01-20', 'OldScrolls'),
(3, 3, '1999-01-20', 'OldScrolls'),
(7, 2, '2010-03-14', 'Crazylibrary');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

CREATE TABLE `livro` (
  `Cod__Livro` int(11) NOT NULL,
  `Título` varchar(120) NOT NULL,
  `Categoria` varchar(15) NOT NULL,
  `ISBN` varchar(15) NOT NULL,
  `Idioma` varchar(12) NOT NULL,
  `QtdePag` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`Cod__Livro`, `Título`, `Categoria`, `ISBN`, `Idioma`, `QtdePag`) VALUES
(1, 'Make the abyss in your heart disappeared', 'Psícologia', '9782457627009', 'English', 219),
(2, 'Canções da estrela e o vagalume', 'Fantasia', '9786176248002', 'Português ', 193),
(3, 'The normal abnormal', 'Realismo Mágico', '9783875472004', 'Português ', 346),
(4, 'Strong lights', 'Horror', '9786545651006', 'English', 666),
(5, 'Unrequited Love', 'Romance', '9780811201100', 'English', 637);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`Cod__Livro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
