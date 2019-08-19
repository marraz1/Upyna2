-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 08:43 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upyna`
--

-- --------------------------------------------------------

--
-- Table structure for table `darbuotojai`
--

CREATE TABLE `darbuotojai` (
  `vardas` varchar(20) COLLATE utf8_lithuanian_ci NOT NULL,
  `pavarde` varchar(20) COLLATE utf8_lithuanian_ci NOT NULL,
  `pareigos` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `adresas` varchar(100) COLLATE utf8_lithuanian_ci NOT NULL,
  `telefonas` bigint(20) NOT NULL,
  `faksas` bigint(20) NOT NULL,
  `internetinis_adresas` varchar(100) COLLATE utf8_lithuanian_ci NOT NULL,
  `el_pastas` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `darbuotojai`
--

INSERT INTO `darbuotojai` (`vardas`, `pavarde`, `pareigos`, `adresas`, `telefonas`, `faksas`, `internetinis_adresas`, `el_pastas`) VALUES
('Stefa', 'Kažukauskienė', 'Seniūnė', 'Dariaus ir Girėno g. 2, Upynos mstl., LT-75246 Šilalės r.', 37044946632, 37044946632, 'http://www.silale.lt ', 'stefa.kazukauskiene@silale.lt'),
('Rima', 'Macijauskienė', 'Seniūno pavaduotoja', 'Dariaus ir Girėno g. 2, Upynos mstl., LT-75246 Šilalės r.', 37044946674, 37044946632, 'http://www.silale.lt ', 'rima.macijauskiene@silale.lt'),
('Laura', 'Pundinienė', 'Vyriausioji buhalterė', 'Dariaus ir Girėno g. 2, Upynos mstl., LT-75246 Šilalės r.', 37044946667, 37044946632, 'http://www.silale.lt', 'laura.pundiniene@silale.lt'),
('Stasys', 'Rukas', 'Žemės ūkio specialistas', 'Dariaus ir Girėno g. 2, Upynos mstl., LT-75246 Šilalės r.', 37044946674, 37044946632, 'http://www.silale.lt ', 'stasys.rukas@silale.lt'),
('Rita', 'Tverijonienė', 'Socialinė darbuotoja', 'Dariaus ir Girėno g. 2, Upynos mstl., LT-75246 Šilalės r.', 37044946667, 37044946632, 'http://www.silale.lt ', 'rima.tverijoniene@silale.lt'),
('Vilija', 'Bambalienė', 'Socialinė darbuotoja', 'Dariaus ir Girėno g. 2, Upynos mstl., LT-75246 Šilalės r.', 37044946667, 37044946632, 'http://www.silale.lt', 'vilija.bambaliene@silale.lt'),
('Monika', 'Kinderienė', 'Socialinė darbuotoja (vaiko priežiūra)', 'Dariaus ir Girėno g. 2, Upynos mstl., LT-75246 Šilalės r.', 0, 0, 'http://www.silale.lt', ''),
('Vitalija', 'Šimkutė', 'Socialinė darbuotoja', 'Dariaus ir Girėno g. 2, Upynos mstl., LT-75246 Šilalės r.', 37044946667, 37044946632, 'http://www.silale.lt', 'vitalija.simkute@silale.lt');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
