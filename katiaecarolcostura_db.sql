-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Out-2023 às 17:54
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `katiaecarolcostura_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conserto`
--

CREATE TABLE `conserto` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `telefone` varchar(15) NOT NULL,
  `tempo` varchar(25) NOT NULL,
  `service` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `conserto`
--

INSERT INTO `conserto` (`id`, `nome`, `telefone`, `tempo`, `service`) VALUES
(2, 'sdlakd', '(96) 99999-9999', '15:30:00', 'Costura Criativa'),
(3, 'asdlçads', '(99) 99999-9999', '15:30:00', 'Costura Criativa'),
(4, 'sadad', '(99) 99999-9999', '15:30:00', 'Costura Criativa'),
(5, 'sadad', '(99) 99999-9999', '15:30:00', 'Costura Criativa'),
(6, 'admsad', '(55) 55555-5555', '15:30:00', 'Roupas sob medida'),
(25, 'adaskld', '2123132', '14:30:00', 'Roupas sob medida'),
(26, '_aklsmdkad', '66666666666', '15:30:00', 'Roupas sob medida'),
(27, '_aklsmdkaaskldmkadd', '66666666666', '15:30:00', 'Roupas sob medida'),
(28, '_asjdn', '6874674867', '14:30:00', 'Roupas sob medida'),
(29, '_aksd', '8555555', '14:30:00', 'Conserto de Roupas'),
(31, '', '', '00:00:00', 'Costura Criativa'),
(32, '', '', '00:00:00', 'Costura Criativa'),
(33, '', '', '', 'Roupas sob medida'),
(34, 'Adrian', '(23) 42343-2432', '14:30', 'Roupas sob medida'),
(35, 'Vitor', '(12) 41242-4124', '15:30', 'Roupas sob medida'),
(36, '', '', '', ''),
(37, 'Adrian', '(41) 24214-1242', '', 'Costura Criativa'),
(38, 'Vitor', '(51) 99924-2942', '', ''),
(39, 'Lucas', '(23) 53252-3525', '15:30', 'Costura Criativa'),
(40, 'Zeca', '(23) 42352-3525', '14:30', 'Costura Criativa'),
(41, 'Pato', '(42) 14141-2424', '15:30', 'Roupas sob medida'),
(42, 'jawoidjoaw', '(23) 53252-3523', '14:30', 'Roupas sob medida'),
(43, 'Vitor', '(12) 41241-2512', '15:30', 'Roupas sob medida'),
(44, 'Abacate', '(24) 14125-1254', '15:30', 'Roupas sob medida'),
(47, 'Pinto', '(12) 42141-2412', '16:30', 'Roupas sob medida'),
(48, 'Adrian', '(52) 35235-2352', '15:30', ''),
(49, 'Vitor', '(11) 25125-1241', '15:30', 'Costura Criativa'),
(50, 'Vitor Hugo', '(12) 41241-2414', '14:30', 'Costura Criativa'),
(51, 'Adrian', '(12) 41241-2412', '16:30', 'Costura Criativa'),
(52, 'wjowjefoiwe', '(23) 53252-3532', '14:30', 'Costura Criativa'),
(53, 'regergergeg', '(63) 46346-3463', '15:30', 'Costura Criativa'),
(54, 'dgsgsgwegweg', '(35) 23523-6236', '16:30', 'Costura Criativa'),
(55, 'regergergerg', '(52) 62363-5322', '', 'Costura Criativa'),
(56, 'Vitor', '(23) 52352-3523', '16:30', 'Roupas sob medida'),
(57, 'VItor Hugo', '(11) 25121-2412', '15:30', ''),
(58, 'Vitor', '(12) 45125-1241', '15:30', 'Costura Criativa'),
(59, 'Vitor', '(25) 12541-2415', '14:30', 'Costura Criativa'),
(60, 'Rola', '(12) 12412-2411', '17:30', ''),
(61, 'Puto', '(12) 41242-5214', '14:30', 'Costura Criativa'),
(62, 'Joao', '(12) 45125-1221', '17:30', 'Costura Criativa'),
(63, 'Vitor', '(53) 52352-3523', '15:30', 'Costura Criativa'),
(64, 'Vitor', '(12) 41251-2514', '16:30', 'Costura Criativa'),
(65, 'Vitor', '(51) 99924-2942', '', 'Costura Criativa'),
(66, 'Vitor', '(23) 52352-3523', '15:30', 'Roupas sob medida'),
(67, 'Vitor', '(51) 99924-2942', '', 'Roupas sob medida'),
(68, 'Vitor', '(51) 99924-2942', '', 'Roupas sob medida'),
(69, 'Vitor', '(51) 99924-2942', '', 'Conserto de Roupas'),
(70, 'Vitor', '(51) 99924-2942', '', ''),
(71, 'admad', '', '14:30', 'Roupas sob medida'),
(72, 'Vitor', '(51) 99924-2942', '', 'Roupas sob medida'),
(73, 'asdnadj', '(55) 55555-5555', '15:30', 'Roupas sob medida'),
(74, '', '', '', 'Costura Criativa'),
(75, '', '', '', ''),
(76, '', '', '', ''),
(77, '', '', '', ''),
(78, '', '', '', ''),
(79, '', '', '', ''),
(80, '', '', '', ''),
(81, '', '', '', ''),
(82, '', '', '', ''),
(83, '', '', '', ''),
(84, '', '', '', ''),
(85, '', '', '', 'Roupas sob medida'),
(86, 'dsiuhfeuhfuwe', '(23) 52356-2362', '15:30', 'Costura Criativa'),
(87, 'Vitor', '(51) 23515-1241', '16:30', 'Costura Criativa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_contato`
--

CREATE TABLE `dados_contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `dados_contato`
--

INSERT INTO `dados_contato` (`id`, `nome`, `email`, `mensagem`) VALUES
(1, 'adrianmiguel', 'adriandalpont@gmail.com', 'asdnasjldnalsd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `tipo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `email`, `password`, `tipo`) VALUES
(10, 'Nome do Administrador 1', 'adriandalpont@gmail.com', 'admin1', 'admin'),
(11, 'Nome do Administrador 2', 'm1gu3ldalpont@gmail.com', 'admin2', 'admin'),
(12, 'Nome do Administrador 1', 'adriandalpont@gmail.com', 'senha_admin1', 'admin'),
(13, 'Nome do Administrador 2', 'm1gu3ldalpont@gmail.com', 'senha_admin2', 'admin'),
(14, 'Marco', 'marco.souza@ifc.edu.br', '123456789', ''),
(15, 'Arthur', 'arthurdalpontestevam@gmail.com', '123456789', ''),
(16, 'Adrian', 'adriandalpont@gmail.com', '123456789', ''),
(17, 'miguelzin', 'soares1357900@gmail.com', '123456789', ''),
(18, 'arthur', 'arthurovelha06@gmail.com', '123456789', ''),
(20, 'carol', 'caroldalpont@gmail.com', '123456789', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `conserto`
--
ALTER TABLE `conserto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `dados_contato`
--
ALTER TABLE `dados_contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conserto`
--
ALTER TABLE `conserto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de tabela `dados_contato`
--
ALTER TABLE `dados_contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
