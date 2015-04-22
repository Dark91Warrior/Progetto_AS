-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2015 alle 11:59
-- Versione del server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `orunesos`
--
CREATE DATABASE IF NOT EXISTS `orunesos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `orunesos`;

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE IF NOT EXISTS `prodotti` (
`codP` int(11) NOT NULL,
  `tipoP` varchar(20) NOT NULL,
  `nomeP` varchar(40) NOT NULL,
  `propr` varchar(32) DEFAULT NULL,
  `prezzo` decimal(10,2) NOT NULL,
  `quant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(32) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `cognome` varchar(32) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `COD` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `user`
--

INSERT INTO `user` (`username`, `nome`, `cognome`, `mail`, `password`, `COD`) VALUES
('Azazel', 'Azazel', 'Azazel', 'azazel@hell.hl', 'inferno90', 'VENDITORE'),
('Dark Warrior', 'Dark', 'Warrior', 'darkwarrior51@hotmail.cia', 'darkwarrior51', 'VENDITORE'),
('Federico70', 'Federico', 'Ingrosso', 'fe.ingrosso@gmail.lol', 'ingrosso70', 'UTENTE'),
('Luca91', 'Luca', 'Puggioninu', 'wlapedde@tiscali.it', 'ciaomongo91', 'UTENTE'),
('Pinco Pallino', 'Pinco', 'Pallino', 'pincopa@lino.it', 'pallino89', 'VENDITORE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodotti`
--
ALTER TABLE `prodotti`
 ADD PRIMARY KEY (`codP`), ADD FULLTEXT KEY `nomeP` (`nomeP`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`), ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodotti`
--
ALTER TABLE `prodotti`
MODIFY `codP` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
