-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 26 okt 2021 om 02:10
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthone`
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
(1, 'Roeitrainer', 'https://fitwinkel.nl/resize/vf-roeitrainer-ergometer-semppro-bestreviewed-7-keer_1945012576023.jpg/500/500/True/virtufit-ergometer-roeitrainer-semi-pro-gratis-trainingsschema.jpg', 'Meer dan 80% van je spieren wordt bij 1 haal gebruikt. Vandaar dat roeien ook wel een full body work-out wordt genoemd. Het helpt je niet alleen met het verliezen van je zwembandjes en het verbeteren van je conditie, maar ook bij het vergroten van je spie'),
(2, 'Crosstrainer', 'https://fitwinkel.nl/resize/bestreviewed-x1-virtufit-ctr-30i-img_9904_8151263209962.png/500/500/True/virtufit-ctr-30i-ergometer-crosstrainer-gratis-trainingsschema.png', 'Een groot voordeel van een crosstrainer in vergelijking met veel andere fitnessapparaten, is dat je met een crosstrainer je hele lichaam traint. Je traint namelijk je rugspieren, schouder- en armspieren, buikspieren en je bil- en beenspieren.'),
(3, 'Hometrainer', 'https://fitwinkel.nl/resize/bestreviewed-htr-10-3_3176262562588.jpg/500/500/True/virtufit-htr-10-hometrainer-gratis-trainingsschema.jpg', 'Het fietsen op een hometrainer verkleint namelijk de kans op hart-en-vaatziekten. Dit komt omdat je hart efficiënter te werk gaat. Dit houdt in dat je hart per slag meer bloed transporteert, maar wel minder slagen maakt.'),
(4, 'Loopband', 'https://fitwinkel.nl/resize/bestreviewed-tr-500-6_18801263228223.jpg/500/500/True/virtufit-elite-tr-500i-loopband-zwift-compatible.jpg', 'Voor het lopen op de loopband hoef je niet naar buiten en kun je jezelf elke training weer opnieuw uitdagen. Met een hoge hellingshoek verbrand je meer calorieën. Daarnaast train je ook alle spieren in je benen, waardoor je meer vet verbrand in je rustper');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(600) NOT NULL,
  `category_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`product_id`, `name`, `image`, `description`, `category_id`) VALUES
(1, 'VirtuFit Ergometer Roeitrainer Semi-Pro', 'https://fitwinkel.nl/resize/vf-roeitrainer-ergometer-semppro-bestreviewed-7-keer_1945012576023.jpg/500/500/True/virtufit-ergometer-roeitrainer-semi-pro-gratis-trainingsschema.jpg', 'De VirtuFit Ultimate Pro 2 Ergometer Roeitrainer is een populaire roeitrainer onder professionele gebruikers, in de sportschool en bij thuisgebruikers die graag kwaliteit in huis halen. Train kwalitatief én met plezier met de VirtuFit Ultimate Pro 2 Ergom', 1),
(2, 'VirtuFit CTR 3.0i Ergometer Crosstrainer', 'https://fitwinkel.nl/resize/bestreviewed-x1-virtufit-ctr-30i-img_9904_8151263209962.png/500/500/True/virtufit-ctr-30i-ergometer-crosstrainer-gratis-trainingsschema.png', 'Train op een van de meest effectieve manieren met de VirtuFit CTR 3.0i Crosstrainer. Met deze crosstrainer train je je gehele lichaam, van je benen en armen tot je core. En dat op een fijne en soepele manier. Met 32 weerstandsniveaus en 18 verschillende t', 2),
(3, 'Matrix U50 Hometrainer', 'https://fitwinkel.nl/resize/matrix-u50-hometrainer-xr_8157511982337.jpg/500/500/True/matrix-u50-hometrainer-xr-gratis-trainingsschema.jpg', 'De Matrix U50 Hometrainer - XR biedt alles wat je gewend bent van een professionele hometrainer in de sportschool, maar dan voor gebruik in je eigen huis. De fitnessapparaten van Matrix zijn krachtig, innovatief, stijlvol en hebben een lange levensduur. D', 3),
(4, 'Bowflex Loopband 56 ', 'https://fitwinkel.nl/resize/56-1_5638763194646.jpg/500/500/True/bowflex-loopband-56-met-decline-en-touchscreen-gratis-montage.jpg', 'Met een extra groot loopoppervlak van maar liefst 56 x 152 cm en de mogelijkheid om zowel bergafwaarts- als bergopwaarts (-5% tot +20%) te trainen is de Bowflex Loopband 56 een unieke loopband waarbij je alle mogelijkheden hebt om je prestaties te verbete', 4),
(8, 'VirtuFit Ultimate Pro 2 Ergometer Roeitrainer', 'https://fitwinkel.nl/resize/best-reviewed1400x1400px-ultimate-pro-2_2538762570442.jpg/500/500/True/virtufit-ultimate-pro-2-ergometer-roeitrainer-gratis-trainingsschema.jpg', 'De VirtuFit Ultimate Pro 2 Ergometer Roeitrainer is een populaire roeitrainer onder professionele gebruikers, in de sportschool en bij thuisgebruikers die graag kwaliteit in huis halen. Train kwalitatief én met plezier met de VirtuFit Ultimate Pro 2 Ergometer Roeitrainer. Op het eerste gezicht lijkt hij op andere roeitrainers, maar het gebruik ervan zal je verbazen. Deze VirtuFit roeitrainer is namelijk ontworpen met de beste materialen. De roeitrainer bevat meer staal dan andere vergelijkbare roeitrainers. Niet alleen in het frame, maar ook in bijvoorbeeld de massieve roestvrij stalen ketting', 1),
(9, 'VirtuFit Row 1.0 Roeitrainer', 'https://fitwinkel.nl/resize/bestreviewed-vf-row10-1400x1400_1951262606411.jpg/500/500/True/virtufit-row-10-roeitrainer-gratis-trainingsschema.jpg', 'De VirtuFit Row 1.0 is een eenvoudige roeitrainer die makkelijk in gebruik is. De roeitrainer met verstelbare elastomeer weerstand maakt een fijne roeibeweging. De ergonomisch gevormde zitting glijdt soepel over een stevig aluminium rail. De anti-slip pedalen met verstelbare voetriemen zorgen voor een stevige positie van de voeten. Deze anti-slip pedalen draaien tijdens je beweging mee om je voeten altijd de juiste steun te bieden om je af te zetten.\r\n', 1),
(10, 'VirtuFit Row 450 Roeitrainer', 'https://fitwinkel.nl/resize/fw-best-reviewed-1400x1400px_645013212946.jpg/500/500/True/virtufit-row-450-roeitrainer-gratis-trainingsschema.jpg', 'De VirtuFit Row 450 heeft een “silent magnetic” weerstandssysteem waardoor je flexibel de weerstand kunt aanpassen. Daarnaast maakt het schakelen tussen de 10 verschillende weerstanden nauwelijks geluid. Dit maakt het apparaat ideaal om thuis mee te sporten zonder dat de rest van het gezin er iets van hoort.\r\n', 1),
(11, 'VirtuFit Ultimate Pro 2i Roeitrainer Bluetooth/ANT', 'https://fitwinkel.nl/resize/virtufit-ultimate-pro-2-ergometer-roeitrainer_10701261951156.jpg/500/500/True/virtufit-ultimate-pro-2i-roeitrainer-bluetooth-antplus-gratis-trainingsschema.jpg', 'De VirtuFit Ultimate Pro 2i Roeitrainer met Bluetooth en ANT+ is een populaire roeitrainer onder professionele gebruikers, in de sportschool en bij thuisgebruikers die graag kwaliteit in huis halen. Train kwalitatief én met plezier met de VirtuFit Ultimate Pro 2i Roeitrainer. Op het eerste gezicht lijkt hij op andere roeitrainers, maar het gebruik ervan zal je verbazen. Deze VirtuFit roeitrainer is namelijk ontworpen met de beste materialen. De roeitrainer bevat meer staal dan andere vergelijkbare roeitrainers. Niet alleen in het frame, maar ook in bijvoorbeeld de massieve roestvrij stalen ket', 1),
(12, 'VirtuFit Water Resistance Compact Row 800', 'https://fitwinkel.nl/resize/bestreviewed-row800-3_2513763212849.jpg/500/500/True/virtufit-water-resistance-compact-row-800-roeitrainer-gratis-trainingsschema.jpg', 'Bij het unieke ontwerp van de VirtuFit Water Compact Resistance Row 800 roeitrainer is de watertank onder de zitting geplaatst waardoor de roeitrainer een stuk compacter is. De verhoogde zitting van deze sterke constructie zit op 50 cm van de grond. Dit is hoger dan de meeste andere roeitrainers, waardoor je gemakkelijker opstapt en afstapt. De zitting zelf is extra groot en comfortabel wat goed is voor een stevige en prettige zitpositie. De roeitrainer glijdt vloeiend met kogellagers over de rail. De rail is 105 cm lang en daarmee geschikt voor mensen met een lengte tot 2 meter. Iedere roeisl', 1),
(13, 'VirtuFit Elite FDR 2.5i Semi-Pro Crosstrainer', 'https://fitwinkel.nl/resize/virtufit-elite-fdr-25i-crosstrainer_8776262594826.jpg/500/500/True/virtufit-elite-fdr-25i-semi-pro-crosstrainer-gratis-trainingsschema.jpg', 'De stevige en slijtbestendige VirtuFit Elite FDR 2.5i Semi-Pro Crosstrainer geeft je een stille, vloeiende oefening, zelfs op de hoogste snelheid. Dit apparaat heeft alles in huis om optimaal te trainen. Het zware vliegwiel zorgt voor een vloeiende en prettige beweging. De VirtuFit Elite FDR 2.5i Semi-Pro Crosstrainer is voorzien van een dubbele geleiding wat zorgt voor een stille en stabiele training. De wielen van de dubbele geleiding zijn slijtvast en gelagerd en hierdoor onderhoudsvrij.\r\n', 2),
(14, 'VirtuFit CTR 1.2i Crosstrainer', 'https://fitwinkel.nl/resize/vf-ctr12i-bestreviewed-1400x1400px_4382513190265.jpg/500/500/True/virtufit-ctr-12i-crosstrainer-gratis-trainingsschema.jpg', 'De VirtuFit CTR 1.2i is een ideale crosstrainer als je niet zoveel ruimte tot beschikking hebt en toch wilt profiteren van de vele voordelen van een crosstrainer. Dit apparaat is niet alleen ruimtebesparend, maar is na je training ook nog eens eenvoudig met de transportwielen te verplaatsen om optimaal gebruik van jouw ruimte te maken. Een goede eerste stap om vet te verbranden en de conditie te verbeteren.\r\n', 2),
(15, 'VirtuFit iConsole Total Fit Ergometer Crosstrainer', 'https://fitwinkel.nl/resize/total-fit-bestreviewed-3x-1400x1400px_1313762597286.jpg/500/500/True/virtufit-iconsole-total-fit-ergometer-crosstrainer-gratis-trainingsschema.jpg', 'De VirtuFit iConsole Total Fit Crosstrainer geeft je een natuurlijk gevoel met een ergonomische elliptische stapbeweging. De grote anti-slip pedalen zijn instelbaar en maken het gemakkelijk om een goede sporthouding te vinden. Nadat je deze stevige, 52,6 kg zware crosstrainer waterpas stelt, staat hij volkomen stabiel en geeft de crosstrainer ook bij een stevige training niet mee. Hij is belastbaar tot 150 kg, wat al aangeeft dat hij goed bestand is tegen intensieve oefeningen. De zware 22 kg roterende massa daagt je dan ook uit om te trainen met een hoge intensiteit en zorgt mede voor een soe', 2),
(16, 'VirtuFit iConsole CTR 2.1 Ergometer Crosstrainer', 'https://fitwinkel.nl/resize/virtufit-iconsole-ctr-21-crosstrainer_8776262594887.jpg/500/500/True/virtufit-iconsole-ctr-21-ergometer-crosstrainer-gratis-trainingsschema.jpg', 'Haal de beste prestaties uit jezelf met een fitnessapparaat dat vertrouwd en gemakkelijk te gebruiken is. Bijvoorbeeld met de VirtuFit iConsole CTR 2.1 Ergometer Crosstrainer. De crosstrainer bestaat uit materialen van de hoogste kwaliteit. Het is stevig, tot 150kg gewicht belastbaar en lang bruikbaar. De bewegingen van het apparaat zijn ook betrouwbaar. Met lagers op ieder draaipunt, een beweging die soepel loopt en de weerstand is zeer precies in te stellen. De weerstanden zijn in te stellen op 32 verschillende niveau\'s en op een wattage tussen de 10 en 350 Watt. Door al deze mogelijkheden i', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `shophours`
--

CREATE TABLE `shophours` (
  `id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `opening_time` varchar(255) NOT NULL,
  `closing_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `shophours`
--

INSERT INTO `shophours` (`id`, `day`, `opening_time`, `closing_time`) VALUES
(1, 'Maandag', '07:00', '20:00'),
(2, 'Dinsdag', '08:00', '20:00'),
(3, 'Woensdag', '07:00', '20:00'),
(4, 'Donderdag', '08:00', '20:00'),
(5, 'Vrijdag', '07:00', '20:30'),
(6, 'Zaterdag', '08:00', '13:00'),
(7, 'Zondag', '08:00', '13:00');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexen voor tabel `shophours`
--
ALTER TABLE `shophours`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT voor een tabel `shophours`
--
ALTER TABLE `shophours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
