-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 08:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `immobilier`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartement`
--

CREATE TABLE `apartement` (
  `refernce` int(10) NOT NULL,
  `propriete` varchar(10) NOT NULL,
  `localite` varchar(10) NOT NULL,
  `surface` float NOT NULL,
  `nbpices` int(11) NOT NULL,
  `domaineusage` varchar(22) NOT NULL,
  `surfaceespacecommun` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apartement`
--

INSERT INTO `apartement` (`refernce`, `propriete`, `localite`, `surface`, `nbpices`, `domaineusage`, `surfaceespacecommun`) VALUES
(8, 'a', 'aa', 9, 3, 'aaaaaaa', 6),
(9, 'lkjgh', 'ffkkf', 2, 3, 'jghhjfhg', 9),
(1, ' ahmed kha', 'tunis', 32, 3, 'informatique ', 1),
(2, ' ahmed kha', 'tunis', 83, 3, 'informatique ', 2),
(3, ' ahmed kha', 'tunis', 24, 3, 'informatique ', 95),
(4, ' ahmed kha', 'tunis', 42, 2, 'informatique ', 57),
(5, ' ahmed kha', 'tunis', 40, 5, 'informatique ', 90),
(6, ' ahmed kha', 'tunis', 64, 4, 'informatique ', 41),
(7, ' ahmed kha', 'tunis', 51, 0, 'informatique ', 72),
(8, ' ahmed kha', 'tunis', 37, 1, 'informatique ', 67),
(9, ' ahmed kha', 'tunis', 24, 5, 'informatique ', 83),
(10, ' ahmed kha', 'tunis', 21, 3, 'informatique ', 46);

-- --------------------------------------------------------

--
-- Table structure for table `immobilier`
--

CREATE TABLE `immobilier` (
  `refernce` int(10) NOT NULL,
  `propriete` varchar(10) NOT NULL,
  `localite` varchar(10) NOT NULL,
  `surface` float NOT NULL,
  `nbpices` int(11) NOT NULL,
  `domaineusage` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `villa`
--

CREATE TABLE `villa` (
  `refernce` int(10) NOT NULL,
  `propriete` varchar(10) NOT NULL,
  `localite` varchar(10) NOT NULL,
  `surface` date NOT NULL,
  `nbpices` int(11) NOT NULL,
  `domaineusage` varchar(22) NOT NULL,
  `nbetage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
