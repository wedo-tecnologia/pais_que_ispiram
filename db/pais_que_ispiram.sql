-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Ago-2022 às 16:48
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pais_que_ispiram`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `img_edit`
--

CREATE TABLE `img_edit` (
  `id` int(11) NOT NULL,
  `dir` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `img_edit`
--

INSERT INTO `img_edit` (`id`, `dir`) VALUES
(4, 'uploads/62f6638b8b3db.jpg'),
(5, 'uploads/62f66410aabab.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `molduras`
--

CREATE TABLE `molduras` (
  `id` int(11) NOT NULL,
  `dir` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `molduras`
--

INSERT INTO `molduras` (`id`, `dir`) VALUES
(8, 'uploads/62ee6e4420f4d.png'),
(9, 'uploads/62ee6e48b32c0.png'),
(10, 'uploads/62ee6e4dc703b.png'),
(11, 'uploads/62ee6e5650435.png'),
(14, 'uploads/62ee727bb7258.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `senha` varchar(640) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `senha`, `email`) VALUES
(1, 'F', '5b3bdc02b13795f923e5cd9a586767d0', 'fabio.adler@wedotecnologia.com.br'),
(2, 'wedo', 'e10adc3949ba59abbe56e057f20f883e', 'wedo@wedotecnologia.com.br');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `img_edit`
--
ALTER TABLE `img_edit`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `molduras`
--
ALTER TABLE `molduras`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `img_edit`
--
ALTER TABLE `img_edit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `molduras`
--
ALTER TABLE `molduras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
