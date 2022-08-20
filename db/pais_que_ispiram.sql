-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Ago-2022 às 17:20
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
(20, 'uploads/6300f8065007b.jpg'),
(21, 'uploads/6300f82872b02.jpg'),
(23, 'uploads/6300f85f45e0f.jpg'),
(24, 'uploads/6300f88264368.jpg'),
(25, 'uploads/6300f8d224f81.jpg'),
(26, 'uploads/6300f92b3e246.jpg');

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
(28, 'uploads/6300f7c9b64cf.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `molduras`
--
ALTER TABLE `molduras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
