-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 jan 2022 om 01:34
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
(3, '<p class=\"fab fa-instagram\"></p> <b>khalid_alouat</b>', '<b>335 volgers</b>'),
(5, '<p class=\"fab fa-snapchat\"></p> <b>alouat_719</b>', '<b>-</b>'),
(7, '<p class=\"fab fa-spotify\"></p> <b>khalid_alouat</b>', '<b>9 volgers</b>'),
(11, '<p class=\"fab fa-github\"></p> <b>https://github.com/KhalidAlouat1</b>', '<b>-</b>'),
(12, '<p class=\"fa fa-envelope\"></p> <b>khalidalouat@hotmail.com</b>', '<b>-</b>');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
