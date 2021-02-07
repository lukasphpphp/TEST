<?php

/**
 * První řádek
 * viceradkový komentář
 * @author Lukas Nevedel
 */

require 'classes/userLukasNevedel.php';
use LukasNevedelUser as user;

$user = new user\userLukasNevedel();
// set private (8.)
echo "<br>";
echo $user->setBydlistePrivateLukasNevedel( "Praha");
echo "<br>";
echo $user->setSportPrivateLukasNevedel("Nic");
echo "<br>";
echo "<br>";

//set public (9.)
echo $user->getJmenoPublicLukasNevedel();
echo "<br>";
echo $user->getPrijmeniPublicLukasNevedel();
echo "<br>";
echo $user->getVekPublicLukasNevedel();
echo "<br>";
echo $user->getEmailPublicLukasNevedel();
echo "<br>";
echo $user->getDatumNarozeniPublicLukasNevedel();
echo "<br>";

//vypsani instance (10.)
var_dump($user);


echo $cenaLukasNevedel->getPriceLukasNevedel(420123125.215215, 'CZK') . '<br>';



-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `letadla`;
CREATE TABLE `letadla` (
  `Nazev-Lukas-Nevedel` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `Vyrobce-Lukas-Nevedel` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `Vyska-Lukas-Nevedel` float NOT NULL,
  `Delka-Lukas-Nevedel` float NOT NULL,
  `Zivotnost-Lukas-Nevedel` datetime NOT NULL,
  `Ucel-Lukas-Nevedel` text CHARACTER SET utf32 COLLATE utf32_czech_ci NOT NULL,
  `Kapacita-Lukas-Nevedel` int(11) NOT NULL,
  `Motor-Lukas-Nevedel` text COLLATE utf8_czech_ci NOT NULL,
  `ID` int(11) NOT NULL,
  `Cena-Lukas-Nevedel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `letadla` (`Nazev-Lukas-Nevedel`, `Vyrobce-Lukas-Nevedel`, `Vyska-Lukas-Nevedel`, `Delka-Lukas-Nevedel`, `Zivotnost-Lukas-Nevedel`, `Ucel-Lukas-Nevedel`, `Kapacita-Lukas-Nevedel`, `Motor-Lukas-Nevedel`, `ID`, `Cena-Lukas-Nevedel`) VALUES
('Airbus A330-300',	'Airbus',	16.83,	63.69,	'2021-02-07 17:36:14',	'Dopravní',	440,	'Proudový tryskový',	1,	1),
('Airbus A300',	'Airbus',	16.62,	54.08,	'2021-02-07 17:37:37',	'Dopravní',	361,	'Proudový tryskový',	2,	2),
('Boeing 737-300',	'Boeing',	11.07,	33.4,	'2021-02-07 17:39:19',	'Dopravní',	149,	'Proudový tryskový',	3,	3),
('Boeing 757-200',	'Boeing',	13.56,	47.32,	'2021-02-07 17:40:55',	'Dopravní',	239,	'Proudový tryskový',	4,	4),
('ATR-42',	'ATR',	7.59,	22.67,	'2021-02-07 17:42:43',	'Dopravní',	52,	'Turbovrtulový',	5,	5),
('ATR-72',	'ATR',	7.65,	27.17,	'2021-02-07 17:43:47',	'Dopravní',	78,	'Turbovrtulový',	6,	6),
('F-35',	'Lockheed Martin',	4.6,	15.4,	'2021-02-07 17:48:45',	'Bojový',	1,	'Proudový',	7,	197),
('C-130',	'Lockheed Martin',	11.6,	29.8,	'2021-02-07 17:52:53',	'Nákladní',	92,	'turbovrtulový pohon',	8,	8),
('Comac ARJ21',	'Comac',	8.44,	33.46,	'2021-02-07 17:56:49',	'Dopravní',	168,	'Proudový',	9,	9),
('Comac C919',	'Comac',	11.95,	38.9,	'2021-02-07 17:58:29',	'Dopravní',	168,	'Proudový',	10,	10);

-- 2021-02-07 17:26:41