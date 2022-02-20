-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 04, 2020 alle 10:53
-- Versione del server: 10.4.10-MariaDB
-- Versione PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stati`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `stato`
--

CREATE TABLE `stato` (
  `nome_Stato` varchar(20) NOT NULL,
  `popolazione` bigint(20) NOT NULL,
  `emissioni_di_co2` double NOT NULL,
  `consumo_energia_elettrica` double NOT NULL,
  `emissioni_di_co2_per_elettricita` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `stato`
--

INSERT INTO `stato` (`nome_Stato`, `popolazione`, `emissioni_di_co2`, `consumo_energia_elettrica`, `emissioni_di_co2_per_elettricita`) VALUES
('Francia', 6154000000, 389.55, 469.2, 1.44),
('Italia', 5810000000, 453.36, 323.96, 2.5),
('Russia', 14343000000, 1526.75, 792.4, 2.39);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `stato`
--
ALTER TABLE `stato`
  ADD PRIMARY KEY (`nome_Stato`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
