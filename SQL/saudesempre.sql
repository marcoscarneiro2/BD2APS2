-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/06/2023 às 22:16
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
-- Banco de dados: `saudesempre`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `atendente`
--

CREATE TABLE `atendente` (
  `idAtendente` int(11) NOT NULL,
  `Nome` varchar(45) DEFAULT NULL,
  `Senha` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `Medico_CRM` int(11) NOT NULL,
  `Paciente_CPF` int(11) NOT NULL,
  `idAtendimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `marcar_consulta`
--

CREATE TABLE `marcar_consulta` (
  `id` int(11) NOT NULL,
  `data_consulta` date DEFAULT NULL,
  `horario` char(5) DEFAULT NULL,
  `tipoPlano` varchar(10) DEFAULT NULL,
  `cpf` char(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `observacao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `marcar_consulta`
--

INSERT INTO `marcar_consulta` (`id`, `data_consulta`, `horario`, `tipoPlano`, `cpf`, `nome`, `observacao`) VALUES
(1, '2023-06-29', '12:54', 'particular', '55555', 'marcos paulo', 'teste 2');

-- --------------------------------------------------------

--
-- Estrutura para tabela `medico`
--

CREATE TABLE `medico` (
  `CRM` int(11) NOT NULL,
  `Nome` varchar(45) DEFAULT NULL,
  `Especialidade` varchar(45) DEFAULT NULL,
  `CPF` varchar(45) DEFAULT NULL,
  `CNPJ` varchar(45) DEFAULT NULL,
  `DataNascimento` varchar(45) DEFAULT NULL,
  `Endereco` varchar(45) DEFAULT NULL,
  `Telefone` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Senha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `medico`
--

INSERT INTO `medico` (`CRM`, `Nome`, `Especialidade`, `CPF`, `CNPJ`, `DataNascimento`, `Endereco`, `Telefone`, `Email`, `Senha`) VALUES
(1223131, 'marcos paulo', 'oncologia', '1234567898', NULL, '12021994', '113 Rua Carbonita', '991370475', 'vasco-mp@hotmail.com', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `paciente`
--

CREATE TABLE `paciente` (
  `CPF` int(11) NOT NULL,
  `Nome` varchar(45) DEFAULT NULL,
  `DataNascimento` varchar(45) DEFAULT NULL,
  `TipoPlano` varchar(45) DEFAULT NULL,
  `Telefone` varchar(45) DEFAULT NULL,
  `Endereco` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `paciente`
--

INSERT INTO `paciente` (`CPF`, `Nome`, `DataNascimento`, `TipoPlano`, `Telefone`, `Endereco`) VALUES
(555555, 'marcos teste', '12021994', 'SaudeFamiliar', '991370252', '452 Rua Carbonita'),
(2147483647, 'paulo silva', '12081995', 'Odontológico', '(111) 11111-1111', '143 Rua Carbonita');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `atendente`
--
ALTER TABLE `atendente`
  ADD PRIMARY KEY (`idAtendente`);

--
-- Índices de tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`Medico_CRM`,`Paciente_CPF`,`idAtendimento`),
  ADD KEY `fk_Medico_has_Paciente_Paciente1_idx` (`Paciente_CPF`),
  ADD KEY `fk_Medico_has_Paciente_Medico_idx` (`Medico_CRM`);

--
-- Índices de tabela `marcar_consulta`
--
ALTER TABLE `marcar_consulta`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`CRM`);

--
-- Índices de tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`CPF`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `marcar_consulta`
--
ALTER TABLE `marcar_consulta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `atendimento`
--
ALTER TABLE `atendimento`
  ADD CONSTRAINT `fk_Medico_has_Paciente_Medico` FOREIGN KEY (`Medico_CRM`) REFERENCES `medico` (`CRM`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Medico_has_Paciente_Paciente1` FOREIGN KEY (`Paciente_CPF`) REFERENCES `paciente` (`CPF`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
