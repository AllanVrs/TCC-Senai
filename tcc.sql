-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Jul-2020 às 00:04
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
  `idusu` int(11) NOT NULL,
  `telefoneusu` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nomecomusu`, `nomeusu`, `cpfusu`, `enderecousu`, `complementousu`, `numerousu`, `celularusu`, `sexousu`, `emailusu`, `senhausu`, `idusu`, `telefoneusu`) VALUES
('Allan Victor da Silva Rodrigues', 'AllanVictor', '15115151511', 'Rua Pioneiro JosÃ© Alves Filho', 'Casa', 66, '4432411136', 'masculino', 'allan_vrs@hotmail.com', '91440106oi', 3, '44998139852');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `idvend` int(11) NOT NULL,
  `nomevend` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `estabelecimentovend` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `cnpjvend` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `enderecovend` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `celularvend` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `telefonevend` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `complementovend` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `numerovend` int(11) NOT NULL,
  `infovend` text COLLATE latin1_general_ci,
  `emailvend` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `senhavend` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `vendedor`
--

INSERT INTO `vendedor` (`idvend`, `nomevend`, `estabelecimentovend`, `cnpjvend`, `enderecovend`, `celularvend`, `telefonevend`, `complementovend`, `numerovend`, `infovend`, `emailvend`, `senhavend`) VALUES
(1, 'Allan', 'Carnes Ribeiro', '132131213123', 'Rua Pioneiro JosÃ© Alves Filho', '44998139852', '44998139852', 'PrÃ©dio', 66, 'idsakdgasdaskdhkashdlahoadhodasjdasd', 'allan_vrs@hotmail.com', '91440106oi'),
(2, 'Allan', 'Carnes ', '213141413131231', 'Rua Pioneiro JosÃ© Alves Filho', '44998139852', '44998139852', 'PrÃ©dio', 66, 'daljdlsajlqweqwjelqjwejqwklelqw', 'allanvictor817@gmail.com', '39075806allan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusu`);

--
-- Indexes for table `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`idvend`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `idvend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
