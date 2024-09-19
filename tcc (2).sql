-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/09/2024 às 13:13
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agenda`
--

CREATE TABLE `agenda` (
  `Nome` varchar(255) NOT NULL,
  `Id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agenda`
--

INSERT INTO `agenda` (`Nome`, `Id`) VALUES
('Abertura', 32),
('Palestra 1', 33),
('Coffee Break', 34),
('Workshop 1', 35),
('Painel de Discussão', 36),
('Almoço', 37),
('Palestra 2', 38),
('Workshop 2', 39),
('Sessão de Perguntas', 40),
('Coffee Break', 41),
('Dinâmica de Grupo', 42),
('Palestra 3', 43),
('Mesa Redonda', 44),
('Encerramento', 45),
('Networking', 46);

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `Id` int(5) NOT NULL,
  `Quantia` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentario`
--

CREATE TABLE `comentario` (
  `Id` int(55) NOT NULL,
  `Nome` varchar(255) DEFAULT NULL,
  `Comentario` varchar(800) DEFAULT NULL,
  `hora` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(4) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`Id`, `email`, `senha`) VALUES
(1, '', ''),
(6, 'raphaelselias@gmail.com', 'ad'),
(7, 'adasd', 'asdasd');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`Id`);

--
-- Índices de tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`Id`);

--
-- Índices de tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`Id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `Id` int(55) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

DELIMITER $$
--
-- Eventos
--
CREATE DEFINER=`root`@`localhost` EVENT `Deletar` ON SCHEDULE EVERY 1 SECOND STARTS '2024-08-30 07:49:41' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM horario WHERE Nome IS NULL$$

CREATE DEFINER=`root`@`localhost` EVENT `del` ON SCHEDULE EVERY 1 SECOND STARTS '2024-09-05 08:47:00' ON COMPLETION PRESERVE ENABLE DO DELETE from horario WHERE Nome is null$$

CREATE DEFINER=`root`@`localhost` EVENT `deleta` ON SCHEDULE EVERY 1 SECOND STARTS '2024-08-30 07:49:41' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM horario WHERE Nome IS NULL$$

CREATE DEFINER=`root`@`localhost` EVENT `Deletaar` ON SCHEDULE EVERY 1 SECOND STARTS '2024-08-30 07:49:41' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM horario WHERE Horario IS NULL$$

CREATE DEFINER=`root`@`localhost` EVENT `deleta espa` ON SCHEDULE EVERY 1 SECOND STARTS '2024-09-05 09:26:39' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM horario WHERE nome is null$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
