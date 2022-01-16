-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 jan 2022 om 00:24
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contactgegevens`
--

CREATE TABLE `contactgegevens` (
  `id` int(11) NOT NULL,
  `account` varchar(255) NOT NULL,
  `volgers` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `contactgegevens`
--

INSERT INTO `contactgegevens` (`id`, `account`, `volgers`) VALUES
(3, '<p class=\"fab fa-instagram\"></p> khalid_alouat', '335 volgers'),
(5, '<p class=\"fab fa-snapchat\"></p> alouat_719', ''),
(7, '<p class=\"fab fa-spotify\"></p> khalid_alouat', '8 volgers'),
(11, '<p class=\"fab fa-github\"></p> https://github.com/KhalidAlouat1', ''),
(12, '<p class=\"fa fa-envelope\"></p> khalidalouat@hotmail.com', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contactgegevens`
--
ALTER TABLE `contactgegevens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contactgegevens`
--
ALTER TABLE `contactgegevens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
