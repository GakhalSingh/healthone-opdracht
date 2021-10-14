-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 okt 2021 om 15:04
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `image`, `description`) VALUES
(1, 'Roeitrainer', 'https://fitwinkel.nl/resize/roeitrainerhoofd1_1926261339447.jpg/0/1100/True/virtufit-ultimate-pro-2-ergometer-roeitrainer-gratis-trainingsschema-2.jpg', 'Meer dan 80% van je spieren wordt bij 1 haal gebruikt. Vandaar dat roeien ook wel een full body work-out wordt genoemd. Het helpt je niet alleen met het verliezen van je zwembandjes en het verbeteren van je conditie, maar ook bij het vergroten van je spie'),
(2, 'Crosstrainer', 'https://resources.t-fitness.com/bilder/cardiostrong/crosstrainer/ex60/1/cst-ex60-crosstrainer-ex60-blau-002_1600.jpg', 'Een groot voordeel van een crosstrainer in vergelijking met veel andere fitnessapparaten, is dat je met een crosstrainer je hele lichaam traint. Je traint namelijk je rugspieren, schouder- en armspieren, buikspieren en je bil- en beenspieren.'),
(3, 'Hometrainer', 'https://media.s-bol.com/3nZjlAZPW9R/550x638.jpg', 'Het fietsen op een hometrainer verkleint namelijk de kans op hart-en-vaatziekten. Dit komt omdat je hart efficiënter te werk gaat. Dit houdt in dat je hart per slag meer bloed transporteert, maar wel minder slagen maakt.'),
(4, 'Loopband', 'https://media.s-bol.com/YA1XEAXkKoA/550x684.jpg', 'Voor het lopen op de loopband hoef je niet naar buiten en kun je jezelf elke training weer opnieuw uitdagen. Met een hoge hellingshoek verbrand je meer calorieën. Daarnaast train je ook alle spieren in je benen, waardoor je meer vet verbrand in je rustper');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`product_id`, `name`, `image`, `description`) VALUES
(1, 'VirtuFit Ultimate Pr', 'https://fitwinkel.nl/resize/roeitrainerhoofd1_1926261339447.jpg/0/1100/True/virtufit-ultimate-pro-2-ergometer-roeitrainer-gratis-trainingsschema-2.jpg', 'De VirtuFit Ultimate Pro 2 Ergometer Roeitrainer is een populaire roeitrainer onder professionele gebruikers, in de sportschool en bij thuisgebruikers die graag kwaliteit in huis halen. Train kwalitatief én met plezier met de VirtuFit Ultimate Pro 2 Ergom'),
(2, 'VirtuFit CTR 3.0i Er', 'https://fitwinkel.nl/resize/bestreviewed-x1-virtufit-ctr-30i-img_9904_8151263209962.png/500/500/True/virtufit-ctr-30i-ergometer-crosstrainer-gratis-trainingsschema.png', 'Train op een van de meest effectieve manieren met de VirtuFit CTR 3.0i Crosstrainer. Met deze crosstrainer train je je gehele lichaam, van je benen en armen tot je core. En dat op een fijne en soepele manier. Met 32 weerstandsniveaus en 18 verschillende t'),
(3, 'Matrix U50 Hometrain', 'https://fitwinkel.nl/resize/matrix-u50-hometrainer-xr_8157511982337.jpg/500/500/True/matrix-u50-hometrainer-xr-gratis-trainingsschema.jpg', 'De Matrix U50 Hometrainer - XR biedt alles wat je gewend bent van een professionele hometrainer in de sportschool, maar dan voor gebruik in je eigen huis. De fitnessapparaten van Matrix zijn krachtig, innovatief, stijlvol en hebben een lange levensduur. D'),
(4, 'Bowflex Loopband 56 ', 'https://fitwinkel.nl/resize/56-1_5638763194646.jpg/500/500/True/bowflex-loopband-56-met-decline-en-touchscreen-gratis-montage.jpg', 'Met een extra groot loopoppervlak van maar liefst 56 x 152 cm en de mogelijkheid om zowel bergafwaarts- als bergopwaarts (-5% tot +20%) te trainen is de Bowflex Loopband 56 een unieke loopband waarbij je alle mogelijkheden hebt om je prestaties te verbete');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `categories` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
