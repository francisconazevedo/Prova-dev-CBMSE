-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Out-2020 às 11:33
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato_pessoa`
--

CREATE TABLE `contato_pessoa` (
  `id` int(11) NOT NULL,
  `contato` varchar(50) NOT NULL,
  `pessoa_id` int(11) NOT NULL,
  `tipo_contato_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contato_pessoa`
--

INSERT INTO `contato_pessoa` (`id`, `contato`, `pessoa_id`, `tipo_contato_id`) VALUES
(7, 'roosewelt@gmail.com', 1, 3),
(8, '5656565655', 1, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `sobrenome`) VALUES
(1, 'julio', 'machado de franca'),
(26, 'Jonas', 'Silva');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_contato`
--

CREATE TABLE `tipo_contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_contato`
--

INSERT INTO `tipo_contato` (`id`, `nome`) VALUES
(1, 'Telefone'),
(2, 'Celular'),
(3, 'E-mail'),
(4, 'Outros');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contato_pessoa`
--
ALTER TABLE `contato_pessoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pessoa_id` (`pessoa_id`),
  ADD KEY `tipo_contato_id` (`tipo_contato_id`);

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipo_contato`
--
ALTER TABLE `tipo_contato`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato_pessoa`
--
ALTER TABLE `contato_pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `tipo_contato`
--
ALTER TABLE `tipo_contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `contato_pessoa`
--
ALTER TABLE `contato_pessoa`
  ADD CONSTRAINT `contato_pessoa_ibfk_1` FOREIGN KEY (`pessoa_id`) REFERENCES `pessoa` (`id`),
  ADD CONSTRAINT `contato_pessoa_ibfk_2` FOREIGN KEY (`tipo_contato_id`) REFERENCES `tipo_contato` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
