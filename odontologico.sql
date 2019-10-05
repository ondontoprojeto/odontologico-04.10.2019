-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Set-2019 às 00:32
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odontologico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `id_atendimento` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `dentista` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendproced`
--

CREATE TABLE `atendproced` (
  `id_atend_proced` int(11) NOT NULL,
  `valor` double DEFAULT NULL,
  `id_atendimento` int(11) DEFAULT NULL,
  `id_procedimento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id_estoque` int(11) NOT NULL,
  `numeroproduto` int(11) DEFAULT NULL,
  `nomeproduto` varchar(200) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `fornecedor` varchar(100) DEFAULT NULL,
  `vencimento` date NOT NULL,
  `complemento` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id_estoque`, `numeroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`, `vencimento`, `complemento`) VALUES
(1, 1, 'Gaze', 'K', 5, 'Se', '2019-08-05', 'gjdfhgsdfgjks');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `perfil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(11) NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `id_pessoa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `administrador` varchar(50) NOT NULL,
  `dentista` varchar(30) NOT NULL,
  `secretaria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id_pessoa` int(11) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `rg` varchar(15) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `orcamento` varchar(3) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cep` varchar(15) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `bairro` varchar(50) NOT NULL,
  `nascimento` date NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `uf` varchar(5) DEFAULT NULL,
  `situacaoficha` varchar(20) DEFAULT NULL,
  `doencabase` varchar(255) DEFAULT NULL,
  `alergia` varchar(255) DEFAULT NULL,
  `medicamentos` varchar(255) DEFAULT NULL,
  `cirurgia` varchar(255) DEFAULT NULL,
  `internacoes` varchar(255) DEFAULT NULL,
  `pa` varchar(255) DEFAULT NULL,
  `queixaprinc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `cpf`, `rg`, `nome`, `orcamento`, `telefone`, `celular`, `email`, `cep`, `endereco`, `complemento`, `bairro`, `nascimento`, `cidade`, `uf`, `situacaoficha`, `doencabase`, `alergia`, `medicamentos`, `cirurgia`, `internacoes`, `pa`, `queixaprinc`) VALUES
(1, '17362020732', '12345678', 'Matheus Ribeiro Figueiredo', 'NÃ£', '26627474', '994606169', 'matheusribeirofg1@gmail.com', '25550590', 'Rua belkiss', '', 'Coelho da Rocha', '1999-11-16', 'Rio de Janeiro', 'RJ', 'ativa', 'NÃ£o', 'nÃ£o', 'nÃ£o', 'NÃ£o', 'NÃ£o', 'nÃ£o', 'Clareamento'),
(2, '13195313772', '12345678', 'Marcus Vinicius', 'NÃ£', '12345678', '994606169', 'marcus@gmail.com', '25550590', 'Rua do catete', '', 'Catete', '1995-11-07', 'Rio de Janeiro', 'RJ', 'ativa', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'Clareamento'),
(3, '12345678912', '102345678', 'matheus', 'nao', '103245678', '123456789', 'matheusribeirofg1@gmail.com', '25550590', 'Rua belkiss', '', 'Catete', '1900-11-11', 'Rio de Janeiro', 'RJ', 'ativa', 'NÃ£o', 'nÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'NÃ£o', 'Dor de dente'),
(4, '17362020732', '12345678', 'leandro', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(5, '17362020732', '12345678', 'matheus', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `procedimento`
--

CREATE TABLE `procedimento` (
  `id_procedimento` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`id_atendimento`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indexes for table `atendproced`
--
ALTER TABLE `atendproced`
  ADD PRIMARY KEY (`id_atend_proced`),
  ADD KEY `id_atendimento` (`id_atendimento`),
  ADD KEY `id_procedimento` (`id_procedimento`);

--
-- Indexes for table `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id_estoque`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`),
  ADD KEY `id_pessoa` (`id_pessoa`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD KEY `id_perfil` (`id_perfil`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- Indexes for table `procedimento`
--
ALTER TABLE `procedimento`
  ADD PRIMARY KEY (`id_procedimento`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atendimento`
--
ALTER TABLE `atendimento`
  MODIFY `id_atendimento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `atendproced`
--
ALTER TABLE `atendproced`
  MODIFY `id_atend_proced` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id_estoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `procedimento`
--
ALTER TABLE `procedimento`
  MODIFY `id_procedimento` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD CONSTRAINT `atendimento_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`);

--
-- Limitadores para a tabela `atendproced`
--
ALTER TABLE `atendproced`
  ADD CONSTRAINT `atendproced_ibfk_1` FOREIGN KEY (`id_atendimento`) REFERENCES `atendimento` (`id_atendimento`),
  ADD CONSTRAINT `atendproced_ibfk_2` FOREIGN KEY (`id_procedimento`) REFERENCES `procedimento` (`id_procedimento`);

--
-- Limitadores para a tabela `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`);

--
-- Limitadores para a tabela `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `login` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
