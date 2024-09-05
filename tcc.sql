-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/09/2024 às 15:37
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
  `Id` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agenda`
--

INSERT INTO `agenda` (`Id`, `Nome`, `Data`) VALUES
(3, 'Raphael', '2024-09-08'),
(7, 'Raphael', '2024-09-30'),
(8, '', '0000-00-00'),
(9, 'Raphael', '2024-09-22'),
(11, 'Camilo', '2024-09-16'),
(12, 'Leonardo', '2024-10-07'),
(14, 'caua', '2025-02-05'),
(19, 'Raphael', '2024-09-02'),
(22, 'Camilo', '2024-08-13'),
(24, 'Camilo', '1515-01-27'),
(25, 'Raphael', '2400-02-01');

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
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Data` (`Data`);

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
