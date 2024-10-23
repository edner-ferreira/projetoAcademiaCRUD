-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 15/06/2024 às 21:38
-- Versão do servidor: 10.1.36-MariaDB
-- Versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `academia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `acad_user`
--

CREATE TABLE `acad_user` (
  `id_user` int(11) NOT NULL,
  `nome_user` varchar(200) NOT NULL,
  `email_user` varchar(200) NOT NULL,
  `telefone_user` varchar(100) NOT NULL,
  `password_user` varchar(200) NOT NULL,
  `profile_user` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `acad_user`
--

INSERT INTO `acad_user` (`id_user`, `nome_user`, `email_user`, `telefone_user`, `password_user`, `profile_user`) VALUES
(1, 'edner da silva', 'edner@gmail.com', '1199999-9991', '123admin', 'admin'),
(2, 'joao da silva', 'joao@gmail.com', '7676567576', '123', 'user');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `acad_user`
--
ALTER TABLE `acad_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `acad_user`
--
ALTER TABLE `acad_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
