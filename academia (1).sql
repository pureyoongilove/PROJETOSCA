-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Nov-2018 às 17:17
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anamnese`
--

CREATE TABLE `anamnese` (
  `id_anamnese` int(11) NOT NULL,
  `peso` float NOT NULL,
  `altura` float NOT NULL,
  `fuma` varchar(3) NOT NULL,
  `bebe` varchar(3) NOT NULL,
  `hstrabalho` varchar(5) NOT NULL,
  `faz_exercicio` varchar(3) NOT NULL,
  `exercicio_qual` varchar(30) DEFAULT NULL,
  `horas_sono` varchar(5) NOT NULL,
  `problema_familia` varchar(3) NOT NULL,
  `familia_qual` varchar(30) DEFAULT NULL,
  `doenca` varchar(3) NOT NULL,
  `doenca_qual` varchar(30) DEFAULT NULL,
  `cirurgia` varchar(3) NOT NULL,
  `cirurgia_qual` varchar(30) DEFAULT NULL,
  `medicamento` varchar(3) NOT NULL,
  `medi_qual` varchar(30) DEFAULT NULL,
  `medi_quant` varchar(30) DEFAULT NULL,
  `estresse` varchar(20) NOT NULL,
  `dor` varchar(3) NOT NULL,
  `dor_qual` varchar(30) DEFAULT NULL,
  `dor_local` varchar(30) DEFAULT NULL,
  `alergia` varchar(3) NOT NULL,
  `alergia_qual` varchar(30) DEFAULT NULL,
  `restri_exerc` varchar(3) NOT NULL,
  `restric_qual` varchar(30) DEFAULT NULL,
  `objetivo` varchar(100) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(5) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `rg` varchar(14) NOT NULL,
  `data_nas` date NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `data_cadastro` date NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`, `rg`, `data_nas`, `sexo`, `endereco`, `email`, `telefone`, `data_cadastro`, `senha`) VALUES
(5, 'jeon', '12345', '54854', '1997-02-04', 'm', 'avenida 202', 'jeonggukk@gmail.com', '40028922', '0000-00-00', '123'),
(6, 'jimin', '54321', '854652', '1998-10-10', 'm', 'avenida 502', 'jimin@gmail.com', '21548875', '0000-00-00', '123'),
(7, 'rose', '44212', '22154', '1995-03-11', 'f', 'avenida 412', 'rose@gmail.com', '8847597', '0000-00-00', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha`
--

CREATE TABLE `ficha` (
  `id_ficha` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `exercicio` varchar(50) NOT NULL,
  `serie` int(5) DEFAULT NULL,
  `repeticao` int(5) DEFAULT NULL,
  `carga` float DEFAULT NULL,
  `id_professor` int(11) NOT NULL,
  `bloco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ficha`
--

INSERT INTO `ficha` (`id_ficha`, `usuario`, `exercicio`, `serie`, `repeticao`, `carga`, `id_professor`, `bloco`) VALUES
(6, 5, 'zumba', 5, 4, 6, 3, 1),
(8, 5, 'musculaÃ§Ã£o', 4, 5, 4, 3, 2),
(9, 5, 'aerÃ³bica', 7, 4, 2, 3, 3),
(10, 5, 'balÃ©', 3, 7, 8, 3, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `privilegio` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `cpf`, `senha`, `privilegio`) VALUES
(1, '54321', '123', 1),
(3, '98765', '123', 2),
(4, '65789', '123', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensalidade`
--

CREATE TABLE `mensalidade` (
  `id_mensalidade` int(11) NOT NULL,
  `data` date NOT NULL,
  `valor` float NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `rg` varchar(14) NOT NULL,
  `data_nasc` date NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome`, `cpf`, `rg`, `data_nasc`, `sexo`, `endereco`, `cargo`, `email`, `telefone`, `senha`) VALUES
(3, 'lisa', '98765', '44216', '1993-05-02', 'f', 'centro', 'prof de zumba', 'lisaaa@gmail.com', '44541121', '123\r\n'),
(6, 'joy', '548.484.141-4', '54 811 417-4', '1994-10-10', 'F', 'centro', 'prof de musculação', 'hoseoksol@hotmail.com', '(26) 5654-9484', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anamnese`
--
ALTER TABLE `anamnese`
  ADD PRIMARY KEY (`id_anamnese`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Indexes for table `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`id_ficha`),
  ADD KEY `usuario` (`usuario`),
  ADD KEY `id_professor` (`id_professor`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Indexes for table `mensalidade`
--
ALTER TABLE `mensalidade`
  ADD PRIMARY KEY (`id_mensalidade`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anamnese`
--
ALTER TABLE `anamnese`
  MODIFY `id_anamnese` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ficha`
--
ALTER TABLE `ficha`
  MODIFY `id_ficha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mensalidade`
--
ALTER TABLE `mensalidade`
  MODIFY `id_mensalidade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `anamnese`
--
ALTER TABLE `anamnese`
  ADD CONSTRAINT `anamnese_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `ficha`
--
ALTER TABLE `ficha`
  ADD CONSTRAINT `ficha_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ficha_ibfk_2` FOREIGN KEY (`id_professor`) REFERENCES `professor` (`id`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `mensalidade`
--
ALTER TABLE `mensalidade`
  ADD CONSTRAINT `mensalidade_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
