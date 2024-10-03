-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/10/2024 às 16:59
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
-- Banco de dados: `pegarnoticia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `sua_tabela`
--

CREATE TABLE `sua_tabela` (
  `id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `noticia` text NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `data_criacao` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sua_tabela`
--

INSERT INTO `sua_tabela` (`id`, `titulo`, `noticia`, `imagem`, `data_criacao`) VALUES
(3, 'Senhora', 'Um livro de jose', 'uploads/tigre.jpg', NULL),
(4, 'Iracema', 'Um livro de jose', 'uploads/chapeu.png', NULL),
(5, 'abacaxi', 'Usem quando vcs virem um post muito ruim. To postando num OP pq não quis usar em ninguém, seria selvageria demais. Aqui vai:\r\n\r\nMeu avô fumou a vida inteira. Eu tinha uns 10 anos quando minha mãe lhe disse, \"Se você pensa em ver seus netos se formarem, você tem que parar imediatamente\". Uma lágrima escorreu dos olhos dele quando entendeu exatamente o que estava em jogo. Ele parou na hora. Três anos depois ele faleceu de câncer de pulmão. Foi muito triste e me deixou completamente sem chão. Minha mãe me disse \"Nunca fume. Por favor, não faça sua família sofrer do jeito que seu avô nos fez\". Eu obedeci. Aos 28, eu nunca sequer encostei num cigarro. Mas devo dizer, eu sinto um leve arrependimento por nunca ter feito isso, por que seu post me deu câncer mesmo assim.', 'uploads/tints.png', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `sua_tabela`
--
ALTER TABLE `sua_tabela`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `sua_tabela`
--
ALTER TABLE `sua_tabela`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
