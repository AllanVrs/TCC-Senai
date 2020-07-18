-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Jul-2020 às 04:58
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_prod` int(11) NOT NULL,
  `nome_prod` varchar(85) COLLATE latin1_general_ci NOT NULL,
  `preco_prod` decimal(10,0) NOT NULL,
  `imagem_prod` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nomecomusu` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nomeusu` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `cpfusu` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `enderecousu` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `complementousu` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `numerousu` int(20) NOT NULL,
  `celularusu` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `sexousu` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `emailusu` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `senhausu` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `telefoneusu` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nomecomusu`, `nomeusu`, `cpfusu`, `enderecousu`, `complementousu`, `numerousu`, `celularusu`, `sexousu`, `emailusu`, `senhausu`, `id_usuario`, `telefoneusu`) VALUES
('Allan Victor da Silva Rodrigues', 'AllanVictor', '15115151511', 'Rua Pioneiro JosÃ© Alves Filho', 'Casa', 66, '4432411136', 'masculino', 'allan_vrs@hotmail.com', '91440106oi', 3, '44998139852');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_prod`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
