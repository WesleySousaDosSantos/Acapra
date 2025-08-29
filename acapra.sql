-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/08/2025 às 00:21
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
-- Banco de dados: `acapra`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `duvidas`
--

CREATE TABLE `duvidas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `descricao` varchar(450) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `duvidas`
--

INSERT INTO `duvidas` (`id`, `titulo`, `descricao`) VALUES
(1, 'Como funciona o processo de adoção?', 'O processo de adoção começa com uma visita ao nosso abrigo, onde você pode conhecer os animais disponíveis. Após escolher seu novo amigo, realizamos uma entrevista e visita à sua residência para garantir um ambiente adequado. Aprovado, você assina um termo de adoção responsável e leva seu novo companheiro para casa.\n'),
(2, 'Quais são os requisitos para adotar um animal?', 'Para adotar, você precisa ser maior de 18 anos, apresentar documento de identidade e comprovante de residência. Também avaliamos se o ambiente é adequado para o animal e se toda a família está de acordo com a adoção. Nosso objetivo é garantir que o animal tenha um lar amoroso e seguro.\n'),
(3, 'Como posso ajudar se não posso adotar?\n', 'Existem várias formas de ajudar! Você pode fazer doações financeiras, doar ração, medicamentos ou itens de limpeza. Também pode se tornar voluntário, ajudando nos cuidados com os animais, eventos de adoção ou divulgação nas redes sociais. Cada contribuição faz diferença na vida dos nossos animais.\n'),
(4, 'Os animais são castrados e vacinados?\n', 'Sim! Todos os nossos animais são entregues castrados, vacinados e vermifugados. Também realizamos exames para garantir que estão saudáveis antes da adoção. Esse cuidado é essencial para o bem-estar do animal e tranquilidade do adotante.\n'),
(5, 'teste', 'teste');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `ultimo_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `password`, `data_criacao`, `ultimo_login`) VALUES
(1, 'Wesley Sousa', 'wesley@email.com', '$2y$10$U6fq0hDi6UDAr.EXjRaAZe3WpDdV.5EW.UQZYME8tmB3pQ8X9uIuu', '2025-08-26 22:06:37', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `duvidas`
--
ALTER TABLE `duvidas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `duvidas`
--
ALTER TABLE `duvidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
