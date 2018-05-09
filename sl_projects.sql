-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Mai 2018 um 13:52
-- Server-Version: 10.1.28-MariaDB
-- PHP-Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `crud`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sl_projects`
--

CREATE TABLE `sl_projects` (
  `id` int(11) NOT NULL,
  `sl_nr` varchar(150) NOT NULL,
  `project` varchar(150) NOT NULL,
  `sl_budget` int(10) NOT NULL,
  `is_intern` tinyint(1) NOT NULL,
  `project_order` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `sl_projects`
--

INSERT INTO `sl_projects` (`id`, `sl_nr`, `project`, `sl_budget`, `is_intern`, `project_order`) VALUES
(129, 'intern', 'Externes Projekt', 231, 0, 0),
(130, 'intern', 'intern', 3500, 1, 3),
(125, 'SA-1805', 'Externes Projekt', 7000, 0, 4);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `sl_projects`
--
ALTER TABLE `sl_projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `sl_projects`
--
ALTER TABLE `sl_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
