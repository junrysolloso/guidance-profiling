-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2018 at 03:30 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guidanceprofiling`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_info`
--

CREATE TABLE `active_info` (
  `ActiveNo` int(11) NOT NULL,
  `ActiveStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `active_info`
--

INSERT INTO `active_info` (`ActiveNo`, `ActiveStatus`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1);

-- --------------------------------------------------------

--
-- Table structure for table `drop_info`
--

CREATE TABLE `drop_info` (
  `DropNo` int(11) NOT NULL,
  `DropOutDate` date NOT NULL,
  `DropOutDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drop_info`
--

INSERT INTO `drop_info` (`DropNo`, `DropOutDate`, `DropOutDesc`) VALUES
(1, '2018-10-08', 'jfkgjhbfjhlk'),
(2, '2018-10-11', 'Dropped-out due to flunking of grades.'),
(3, '2019-08-09', 'dropped- out due to pregnancy'),
(4, '2018-12-31', 'missing'),
(5, '2018-12-31', 'missing no2'),
(6, '2018-12-01', 'dfaf'),
(7, '2017-12-31', 'missing'),
(8, '1222-12-12', 'hkhkhvsx'),
(9, '1111-12-12', 'fjefhakefhkehfkhd'),
(10, '7453-06-07', 'gjsgkjsfzszcb'),
(11, '2018-12-31', 'dsgsdgfsd'),
(12, '0000-00-00', 'sdfg'),
(13, '2018-11-16', 'bahog itlog maong na drop.....'),
(14, '2018-11-17', 'naka butis '),
(15, '2018-11-18', 'kgkgiyrftry4r');

-- --------------------------------------------------------

--
-- Table structure for table `educjunc_info`
--

CREATE TABLE `educjunc_info` (
  `EducjuncNo` int(11) NOT NULL,
  `EducNo` int(11) NOT NULL,
  `ProgramNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educjunc_info`
--

INSERT INTO `educjunc_info` (`EducjuncNo`, `EducNo`, `ProgramNo`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 1, 4),
(5, 2, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 1, 12),
(13, 1, 13),
(14, 0, 14),
(15, 2, 14),
(16, 2, 15),
(17, 2, 16),
(18, 2, 17),
(19, 2, 18),
(20, 2, 19),
(21, 2, 20),
(22, 2, 21),
(23, 2, 25),
(24, 2, 26),
(25, 2, 27);

-- --------------------------------------------------------

--
-- Table structure for table `educ_info`
--

CREATE TABLE `educ_info` (
  `EducNo` int(11) NOT NULL,
  `EducName` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educ_info`
--

INSERT INTO `educ_info` (`EducNo`, `EducName`) VALUES
(1, 'CL'),
(2, 'HS');

-- --------------------------------------------------------

--
-- Table structure for table `entrance_info`
--

CREATE TABLE `entrance_info` (
  `EntranceNo` int(11) NOT NULL,
  `EntranceStatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entrance_info`
--

INSERT INTO `entrance_info` (`EntranceNo`, `EntranceStatus`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `exit_info`
--

CREATE TABLE `exit_info` (
  `ExitNo` int(11) NOT NULL,
  `ExitStatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exit_info`
--

INSERT INTO `exit_info` (`ExitNo`, `ExitStatus`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `expelled_info`
--

CREATE TABLE `expelled_info` (
  `ExpelledNo` int(11) NOT NULL,
  `ExpelledDate` date NOT NULL,
  `ExpelledDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expelled_info`
--

INSERT INTO `expelled_info` (`ExpelledNo`, `ExpelledDate`, `ExpelledDesc`) VALUES
(1, '2018-10-07', 'fghjklghjkhgh'),
(2, '2018-12-01', 'bagsakpresyo'),
(3, '0000-00-00', 'jfgjsedbsbvdb'),
(4, '7483-06-05', 'fgiksdhkvhhk '),
(5, '0000-00-00', 'dasdf'),
(6, '2018-11-14', 'ipwdojwqdaodj'),
(7, '2018-11-16', 'ihrqw0uodke0ude'),
(8, '2018-11-17', 'wepdefpkasfpefpqwd'),
(9, '2018-11-16', 'ufufyjfffkugtfy'),
(10, '2018-11-17', '7t7ruytoioueta'),
(11, '2018-11-18', 'hlhh;k;l''l''h'),
(12, '2018-11-19', 'jhhlajdsl;j;l');

-- --------------------------------------------------------

--
-- Table structure for table `father_info`
--

CREATE TABLE `father_info` (
  `FatherNo` int(11) NOT NULL,
  `FatherName` varchar(64) NOT NULL,
  `FatherAge` int(11) NOT NULL,
  `FatherOccu` varchar(20) NOT NULL,
  `FatherAdd` varchar(128) NOT NULL,
  `FatherPhone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `father_info`
--

INSERT INTO `father_info` (`FatherNo`, `FatherName`, `FatherAge`, `FatherOccu`, `FatherAdd`, `FatherPhone`) VALUES
(1, 'Marco Polo', 232, 'Farming', 'Don Ruben, San Jose, Dinagat Islands', 4569),
(2, 'Ankol Poe', 23, 'Farming', 'Don Ruben, San Jose, Dinagat Islands', 2147483647),
(3, 'Pedro san Juan', 56, 'Farmer', 'San Jose Dinagat Islands', 2147483647),
(4, 'park syun sook', 66, 'Teacher', 'p-2 magsaysay, dinagat, dinagat islands', 12345678),
(5, 'Jhon navarro', 0, '', '', 2147483647),
(6, 'Drew Maleman', 56, 'Farming', 'Don Ruben, San Jose, Dinagat Islands', 2147483647),
(7, 'Jhon navarro', 50, 'Carpinter', 'P-4 don ruben San jose', 2147483647),
(8, 'sito', 68, 'farmer', 'san jose', 945748575),
(9, 'kim soke yol', 33, 'Teacher', 'P-5 mabini san jose, dinagat islands', 123456789),
(10, 'jose', 75, 'fisher', 'Cadianao', 986754455),
(11, 'Anton Jade Marsbane', 23, 'Fishing', 'Don Ruben, San Jose, Dinagat Islands', 2147483647),
(12, 'oh jong dee', 60, 'artist', 'p-5 poblacion, san jose, dinagat islands', 123456789),
(13, 'Vhong Pratz', 50, 'Carpinter', 'P-4 Ruben San Jose ', 927828552),
(14, 'quido', 47, 'employee', 'Ferdinand', 91234556),
(15, 'Forman Manslate', 54, 'Sae Man', 'Don Ruben, San Jose, Dinagat Islands', 2147483647),
(16, 'byun hyun hook', 55, 'artist', 'p-2 san juan, san jose, dinagat islands', 123456789),
(17, 'Cat', 56, 'tig-kaon', 'kusina', 2147483647),
(18, 'kim hung in', 66, 'artist', 'p-2 aurelio san jose dinagat islands', 123456789),
(19, 'Antro Marts', 56, 'Farming', 'Don Ruben, San Jose, Dinagat Islads', 2147483647),
(20, 'tito', 56, 'farmer', '', 946555545),
(21, 'huang hae hi', 66, 'artist', 'p-1 r e ecleo sr cagdianao dinagat islands', 123456789),
(22, 'james', 23, 'farmer', 'Patag', 2147483647),
(23, 'kin ja ja', 66, 'Teacher', 'p-5 nahayahay san jose dinagat islands', 123456789),
(24, 'mark long', 48, 'carpenter', 'P- DON RUBEN SAN JOSE', 982845526),
(25, 'jhon navaro', 62, 'Farming', 'P-1 Luna, San Jose, Dinagat Islands', 9097346),
(26, 'googo', 46, 'farmer', 'japan', 9755665),
(27, 'kim ha haa ', 66, 'artist', 'p-2 mahayahay san jose dinagat islands', 123456789),
(28, 'Richard jhones', 69, 'Farming', '3433 1st Avenue\r\nUnit A', 96767486),
(29, 'dada', 22, 'kwekkwek', 'dabao', 2147483647),
(30, 'do hye nyun', 66, 'artist', 'p-2 mahayahay san jose dinagat islands', 2147483647),
(31, 'mouse jerry', 56, 'Farming', 'P-1 Luna, San Jose, Dinagat Islands', 953754),
(32, 'deta', 20, 'farmer', 'Zebra', 2147483647),
(33, 'Richard Ho', 66, 'Farming', '3433 1st Avenue\r\nUnit A', 9823329),
(34, 'Xiu lu xing', 66, 'artist', 'p-6 poblacion san jose dinagat islands', 123456789),
(35, 'mark jhones', 67, 'Farming', 'P-1 Luna, San Jose, Dinagat Islands', 2147483647),
(36, 'dong young', 66, 'Farming', 'P-1 Luna, San Jose, Dinagat Islands', 9261164),
(37, 'love heartz', 54, 'Farming', 'PoBox 3434', 923112345),
(38, 'BOO Lu', 56, 'Farming', 'P-1 Luna, San Jose, Dinagat Islands', 2147483647),
(39, 'von Park', 66, 'Farming', 'P-1 Luna, San Jose, Dinagat Islands', 909135847),
(40, 'wu shao nai', 66, 'artist', 'p-7 mabini san jse dinagat islands', 123456789),
(41, 'broce Lee', 54, 'Farming', '3433 1st Avenue\r\nUnit A', 909135846),
(42, 'Zhang hae hu', 66, 'artist', 'p-2 mahayahay san jose dinagat islands', 123456789),
(43, 'Jones bogbog', 66, 'Farming', 'PoBox 3434', 909135888),
(44, 'zel god', 54, 'Farming', 'P-1 Luna, San Jose, Dinagat Islands', 2147483647),
(45, 'Samuel D. Obingke', 52, 'Teacher', 'p-2 mahayahay san jose dinagat islands', 2147483647),
(46, 'long black', 66, 'Farming', 'P-1 Luna, San Jose, Dinagat Islands', 2147483647),
(47, 'Samuel D. Obingke', 52, 'Teacher', 'p-2 mahayahay san jose dinagat islands', 2147483647),
(48, 'Samuel D. Obingke', 52, 'Teacher', 'p-2 mahayahay san jose dinagat islands', 2147483647),
(49, 'Mr. been', 66, 'Farming', '898 Woodbride Drive', 2147483647),
(50, 'sam mea', 55, 'Farming', '3433 1st Avenue\r\nUnit A', 9285379),
(51, 'wertyu', 66, 'Teacher', 'p-1 mahayahay san jose dinagat islands', 123456789),
(52, 'qwert', 66, 'artist', 'p-3 mahayahay san jose dinagat islands', 2147483647),
(53, 'blingk sam', 55, 'Farming', '1202 Silver Lake Trail', 945678732),
(54, 'Wew', 0, 'sdf', 'dsfds', 3),
(55, 'werthj', 52, 'Teacher', 'p-2 mahayahay san jose dinagat islands', 123456789),
(56, 'rtdrydy', 52, 'Teacher', 'p-1 sta cruz san jose dinagat islands', 123456789),
(57, 'drydyughuh', 52, 'Teacher', 'p-6 aurelio san jose dinagat islands', 123456789),
(58, 'Roger Mamac', 52, 'Teacher', 'p-5 poblacion san jose dinagat islands', 2147483647),
(59, 'Romeo Casin', 52, 'Deceased', 'san Juan', 123456789),
(60, 'chef boy logro', 1992, 'us navy captain', 'san juan', 3290),
(61, 'swdg', 33, 'qfefe', 'p-7 mabini san jose dinagat slands', 123456789),
(62, 'wgwuwek', 60, 'Deceased', 'p-2 mahayahay san jose dinagat islands', 123456789),
(63, 'kim soke yol', 66, 'Teacher', 'p-2 mahayahay san jose dinagat islands', 123456789),
(64, 'sfgsg', 60, 'sdgsd', 'p-2 mahayahay san jose dinagat islands', 123456789),
(65, 'gduse', 52, 'fysjkwdgkdhke', 'p-2 mahayahay san jose dinagat islands', 123456789),
(66, 'sdfgsfdg', 52, 'Teacher', 'p-2 mahayahay san jose dinagat islands', 123456789),
(67, 'kim soke yol', 345, 'Deceased', 'p-2 mahayahay san jose dinagat islands', 2147483647),
(68, 'rye5y6', 60, 'erger', 'p-6 mabini san jose dinagat islands', 12345678),
(69, 'servando', 58, 'Coop employer', 'Aurelio', 2147483647),
(70, 'gfgeuaqgfk', 52, 'Teacher', 'p-6 mabini san jose dinagat islands', 2147483647),
(71, 'servando', 68, 'Coop employer', 'Tag-abaca', 2147483647),
(72, 'sdfgsfdg', 66, 'fysjkwdgkdhke', 'p-6 mabini san jose dinagat islands', 123456789),
(73, 'servando', 68, 'Coop employer', 'Ferdinand', 2147483647),
(74, 'Servando', 68, 'Coop employer', 'Ferdinand', 2147483647),
(75, 'Servando', 68, 'Coop employer', 'Poblacion', 2147483647),
(76, 'Servando', 68, 'Coop employer', 'addssef', 2147483647),
(77, 'Servando', 68, 'Coop employer', 'queue', 2147483647),
(78, '', 66, 'sdgsd', 'p-6 mabini san jose dinagat islands', 123456789),
(79, 'kim soke yol', 52, 'Deceased', 'p-6 mabini san jose dinagat islands', 123456789),
(80, 'ponds men', 56, 'facial cleanser', 'san juan', 6575757),
(81, 'Servando', 58, 'Coop employer', 'YYIYU', 2147483647),
(82, 'mernil', 23, 'student', 'san juan', 88980),
(83, 'junry solloso', 78, 'student charity pres', 'san juan', 678768),
(84, '', 0, '', '', 0),
(85, 'sfgsg', 4535, 'Deceased', 'p-6 mabini san jose dinagat islands', 123456789),
(86, 'Servando', 75, 'Coop employer', 'Tagaytay', 2147483647),
(87, 'Servando', 75, 'Coop employer', 'dabao', 2147483647),
(88, 'Servando', 75, 'Coop employer', 'Hongkong', 2147483647),
(89, 'Servando', 73, 'Farmer', 'kiki do you love me', 2147483647),
(90, 'Servando', 75, 'Farmer', 'Lureto', 2147483647),
(91, 'Servando', 58, 'Farmer', 'Dalandan', 2147483647),
(92, 'sfgsg', 66, 'fysjkwdgkdhke', 'p-1 mahayahay san jose dinagat islands', 123456789),
(93, 'sdfgsfdg', 345, 'sdgsd', 'p-1 mahayahay san jose dinagat islands', 123456789),
(94, 'sdfgsfdg', 345, 'fghfgh', 'p-2 mahayahay san jose dinagat islands', 123456789),
(95, 'sfgsg', 52, 'Deceased', 'p-3 mahayahay san jose dinagat islands', 123456789),
(96, 'sdfgsfdg', 52, 'fghfgh', 'p-1 mahayahay san jose dinagat islands', 123456789),
(97, 'sfgsg', 345, 'sdgsd', 'p-1 mahayahay san jose dinagat islands', 2147483647),
(98, 'sfgsg', 4535, 'Deceased', 'p-1 mahayahay san jose dinagat islands', 123456789),
(99, 'sdfgsfdg', 52, 'fysjkwdgkdhke', 'p-1 mahayahay san jose dinagat islands', 2147483647),
(100, 'sdfgsfdg', 345, 'fysjkwdgkdhke', 'p-1 mahayahay san jose dinagat islands', 123456789),
(101, 'dghj', 60, 'sdgh', 'p-1 mahayahay san jose dinagat islands', 2147483647),
(102, 'park syun sook', 33, 'Teacher', ' San jose', 2147483647),
(103, 'Servando', 58, 'Coop employer', 'poajdoJD[d', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `graduate_info`
--

CREATE TABLE `graduate_info` (
  `GraduateNo` int(11) NOT NULL,
  `GraduateStatus` int(11) NOT NULL,
  `GraduateYear` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graduate_info`
--

INSERT INTO `graduate_info` (`GraduateNo`, `GraduateStatus`, `GraduateYear`) VALUES
(1, 1, '2018-2019'),
(2, 1, '2019'),
(3, 1, '2018-2019'),
(4, 1, '2018-2019'),
(5, 1, '2018-2019'),
(6, 1, '2018-2019'),
(7, 1, '2018-2019'),
(8, 1, '2018-2019'),
(9, 1, '2018-2019'),
(10, 1, '2018-2019'),
(11, 1, '2018-2019'),
(12, 1, '2018-2019'),
(13, 1, '2018-2019');

-- --------------------------------------------------------

--
-- Table structure for table `level_info`
--

CREATE TABLE `level_info` (
  `LevelNo` int(11) NOT NULL,
  `LevelName` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level_info`
--

INSERT INTO `level_info` (`LevelNo`, `LevelName`) VALUES
(1, '1st Year'),
(2, '2nd Year'),
(3, '3rd Year'),
(4, '4th Year'),
(5, 'Grade 11'),
(6, 'Grade 12'),
(7, 'Grade 7'),
(8, 'Grade 8'),
(9, 'Grade 9'),
(10, 'Grade 10');

-- --------------------------------------------------------

--
-- Table structure for table `mother_info`
--

CREATE TABLE `mother_info` (
  `MotherNo` int(11) NOT NULL,
  `MotherName` varchar(64) NOT NULL,
  `MotherAge` int(11) NOT NULL,
  `MotherOccu` varchar(20) NOT NULL,
  `MotherAdd` varchar(128) NOT NULL,
  `MotherPhone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mother_info`
--

INSERT INTO `mother_info` (`MotherNo`, `MotherName`, `MotherAge`, `MotherOccu`, `MotherAdd`, `MotherPhone`) VALUES
(1, 'Maria', 23, 'House Keeping', 'Don Ruben, San Jose, Dinagat Islands', 456789),
(2, 'Manwin Ong', 23, 'House Keeping', 'Don Ruben, San Jose, Dinagat Islands', 2147483647),
(3, 'Ellen Tamad Sya', 54, 'House Keeper', 'San Jose Dinagat Islands', 2147483647),
(4, 'park yen see', 60, 'HouseWife', 'p-2 magsaysay, dinagat, dinagat islands', 123456789),
(5, 'Jean navarro', 45, 'House wife', 'P-4 don ruben San jose', 909452783),
(6, 'Wofarm Ganern', 23, 'Farming', 'Don Ruben, San Jose, Dinagat Islands', 2147483647),
(7, 'Jean navarro', 45, 'House wife', 'P-4 don ruben San jose', 909452783),
(8, 'Sitang', 67, 'house keeper', 'Basilisa Dinagat', 2147483647),
(9, 'kim hyun nee', 30, 'HouseWife', 'P-5 mabini san jose, dinagat islands', 123456789),
(10, 'Rita', 67, 'house wife', 'dinagat', 946584756),
(11, 'Amy Mands', 23, 'House Keeping', 'Don Ruben, San Jose, Dinagat Islands', 2147483647),
(12, 'oh jee na', 55, 'artist', 'p-5 poblacion, san jose, dinagat islands', 123456789),
(13, 'Mea Pratz', 43, 'House wife', 'P-4 don ruben San jose', 947282225),
(14, 'joseta', 45, 'house wife', 'Justiniana', 933456755),
(15, 'Mother Earth Saile', 45, 'House Keeping', 'Don Ruben, San Jose, Dinagat Islands', 2147483647),
(16, 'byun jin nae', 50, 'artist', 'p-2 san juan, san jose, dinagat islands', 123456789),
(17, 'dog', 54, 'house keeper', 'Santo nino', 2147483647),
(18, 'kim sen shen', 60, 'artist', 'p-2 aurelio san jose dinagat islands', 123456789),
(19, 'Anrtmer Sands', 23, 'House Keeping', 'Don  Ruben, San Jose, Dinagat Islands', 2147483647),
(20, 'humer', 45, 'farmer', 'iloilo', 2147483647),
(21, 'huang zin zi', 60, 'HouseWife', 'p-1 r e ecleo sr cagdianao dinagat islands', 123456789),
(22, 'patricia', 21, 'driver', 'sheep', 933334555),
(23, 'kim je je', 60, 'HouseWife', 'p-5 nahayahay san jose dinagat islands', 123456789),
(24, 'rose long', 46, 'House Keeping', 'P-4 DON RUBEN SAN JOSE', 9456775),
(25, 'mea navaro', 60, 'House Keeping', 'P-1 Luna, San Jose, Dinagat Islands', 998475),
(26, 'gigi', 44, 'house wife', 'Laguna', 945666456),
(27, 'kim wa awa', 60, 'HouseWife', 'p-2 mahayahay san jose dinagat islands', 123456789),
(28, 'vina jhones', 65, 'House Keeping', '3433 1st Avenue\r\nUnit A', 964745337),
(29, 'dede', 20, 'wawak', 'abra', 2147483647),
(30, 'do shin hye', 60, 'artist', 'p-2 mahayahay san jose dinagat islands', 2147483647),
(31, 'kim jerry', 45, 'House wife', 'P-1 Luna, San Jose, Dinagat Islands', 98637452),
(32, 'teodora', 23, 'farmer', 'taguig', 2147483647),
(33, 'Jean Ho', 65, 'House Keeping', '3433 1st Avenue\r\nUnit A', 94673664),
(34, 'Xiu quing quing', 60, 'artist', 'p-6 poblacion san jose dinagat islands', 123456789),
(35, 'Cindy Jones', 55, 'House Keeping', 'P-1 Luna, San Jose, Dinagat Islands', 2147483647),
(36, 'dina young', 44, 'Hous wife', 'P-1 Luna, San Jose, Dinagat Islands', 9345663),
(37, 'break heartz', 45, 'House Keeping', 'PoBox 3434', 988743256),
(38, 'ana Lu', 50, 'House Keeping', 'P-1 Luna, San Jose, Dinagat Islands', 933557321),
(39, 'rose Park', 56, 'House Keeping', 'P-1 Luna, San Jose, Dinagat Islands', 952738552),
(40, 'wu wie wie', 60, 'artist', 'p-7 mabini san jse dinagat islands', 123456789),
(41, 'mea Lee', 45, 'House Keeping', '3433 1st Avenue\r\nUnit A', 2147483647),
(42, 'Zhang nae hin', 60, 'artist', 'p-2 mahayahay san jose dinagat islands', 123456789),
(43, 'Cindy bogbog', 65, 'House Keeping', 'PoBox 3434', 2147483647),
(44, 'criz god', 45, 'House Keeping', 'P-1 Luna, San Jose, Dinagat Islands', 2147483647),
(45, 'Annabel S. Obingke', 43, 'HouseWife', 'p-2 mahayahay san jose dinagat islands', 123456789),
(46, 'heel black', 45, 'House Keeping', 'P-1 Luna, San Jose, Dinagat Islands', 2147483647),
(47, 'Annabel S. Obingke', 43, 'HouseWife', 'p-2 mahayahay san jose dinagat islands', 2147483647),
(48, 'Annabel S. Obingke', 43, 'HouseWife', 'p-2 mahayahay san jose dinagat islands', 2147483647),
(49, 'nancy been', 65, 'House Keeping', '898 Woodbride Drive', 98276368),
(50, 'bea mea', 45, 'House Keeping', '3433 1st Avenue\r\nUnit A', 988737364),
(51, 'strdhgf', 60, 'HouseWife', 'p-1 mahayahay san jose dinagat islands', 123456789),
(52, 'qwertyui', 60, 'HouseWife', 'p-3 mahayahay san jose dinagat islands', 123456789),
(53, ' Black sam', 45, 'House Keeping', '1202 Silver Lake Trail', 96728358),
(54, 'adas', 4, 'House Keeper', 'dsfsdf', 9090909),
(55, 'qwertyjk', 43, 'HouseWife', 'p-2 mahayahay san jose dinagat islands', 123456789),
(56, 'asrth', 43, 'HouseWife', 'p-1 sta cruz san jose dinagat islands', 123456789),
(57, 'stryui', 43, 'HouseWife', 'p-6 aurelio san jose dinagat islands', 123456789),
(58, 'Julieta R. Mamac', 43, 'HouseWife', 'p-5 poblacion san jose dinagat islands', 2147483647),
(59, 'Violy Casin', 60, 'Mechanic', 'San Juan, SDI', 2147483647),
(60, 'carbonara with chicken', 98, 'superstar', 'san juan san jose', 9233532),
(61, 'qrtyt', 60, 'gsdfgs', 'p-7 mabini san jose dinagat slands', 123456789),
(62, 'srddtgth', 43, 'HouseWife', 'p-2 mahayahay san jose dinagat islands', 123456789),
(63, 'fhihfklvggw', 60, 'artist', 'p-2 mahayahay san jose dinagat islands', 123456789),
(64, 'dfgsd', 435, 'artist', 'p-2 mahayahay san jose dinagat islands', 123456789),
(65, 'dfgsd', 43, 'artist', 'p-2 mahayahay san jose dinagat islands', 123456789),
(66, 'fgfsfgs', 43, 'HouseWife', 'p-2 mahayahay san jose dinagat islands', 123456789),
(67, 'fgfsfgs', 43, 'sdfgs', 'p-2 mahayahay san jose dinagat islands', 123456789),
(68, 'ddef', 30, 'ggv', 'p-6 mabini san jose dinagat islands', 123456789),
(69, 'josefina', 57, 'house wife', 'Aurelio', 912164576),
(70, 'fdja', 60, 'artist', 'p-6 mabini san jose dinagat islands', 123456789),
(71, 'josefina', 57, 'house wife', 'tag-abaca', 912164576),
(72, 'eguieuishef', 132, 'gdkage', 'p-6 mabini san jose dinagat islands', 2147483647),
(73, 'josefina', 57, 'house wife', 'San jose, dinagat Island', 2147483647),
(74, 'josefina', 57, 'house wife', 'Dinagat', 2147483647),
(75, 'josefina', 57, 'house wife', 'wewe', 2147483647),
(76, 'josefina', 57, 'house wife', 'taguig', 2147483647),
(77, 'josefina', 57, 'house wife', 'sewsew', 2147483647),
(78, 'fgfsfgs', 60, 'gsdfgs', 'p-6 mabini san jose dinagat islands', 123456789),
(79, 'fgfsfgs', 43, 'HouseWife', 'p-6 mabini san jose dinagat islands', 123456789),
(80, 'Nivea', 343, 'hostess', 'san juan', 7777),
(81, 'josefina', 67, 'house wife', 'GJK', 2147483647),
(82, 'gleanamay', 57, 'actress', 'san juan', 989),
(83, 'Maneja', 565, 'actress', 'san juan', 78979),
(84, 'reszil russi', 46, 'actress', 'san juan', 346),
(85, 'fgfsfgs', 60, 'HouseWife', 'p-6 mabini san jose dinagat islands', 123456789),
(86, 'josefina', 67, 'house wife', 'Tagaytay', 2147483647),
(87, 'josefina', 57, 'house wife', 'surigao', 2147483647),
(88, 'josefina', 57, 'house wife', 'San Jose, Dinagat Islands', 2147483647),
(89, 'Josefina', 66, 'house keeper', 'kiki do you love me', 912164576),
(90, 'Josefina', 55, 'house keeper', 'hehehehe', 912164576),
(91, 'Josefina', 57, 'house keeper', 'TanTan', 2147483647),
(92, 'fgfsfgs', 43, 'gsdfgs', 'p-1 mahayahay san jose dinagat islands', 123456789),
(93, 'fgfsfgs', 60, 'HouseWife', 'p-1 mahayahay san jose dinagat islands', 123456789),
(94, 'fgfsfgs', 60, 'artist', 'p-2 mahayahay san jose dinagat islands', 123456789),
(95, 'fgfsfgs', 43, 'gsdfgs', 'p-3 mahayahay san jose dinagat islands', 123456789),
(96, 'fgfsfgs', 43, 'gsdfgs', 'p-1 mahayahay san jose dinagat islands', 123456789),
(97, 'fgfsfgs', 43, 'gsdfgs', 'p-1 mahayahay san jose dinagat islands', 123456789),
(98, 'fgfsfgs', 435, 'gsdfgs', 'p-1 mahayahay san jose dinagat islands', 123456789),
(99, 'fgfsfgs', 43, 'gsdfgs', 'p-1 mahayahay san jose dinagat islands', 123456789),
(100, 'asdgh', 49, 'Mechanic', 'p-1 mahayahay san jose dinagat islands', 123456789),
(101, 'asdgh', 43, 'HouseWife', 'p-1 mahayahay san jose dinagat islands', 123456789),
(102, 'asdgh', 30, 'artist', 'San jose', 123456789),
(103, 'Josefina', 55, 'house wife', 'jaujudu', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `program_info`
--

CREATE TABLE `program_info` (
  `ProgramNo` int(11) NOT NULL,
  `ProgramName` text NOT NULL,
  `ProgramDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_info`
--

INSERT INTO `program_info` (`ProgramNo`, `ProgramName`, `ProgramDesc`) VALUES
(1, 'BSIT', 'Bachelor of Science in Information Technology'),
(2, 'BSBA', 'Bachelor of Science in Business Administration'),
(4, 'BSED', 'Bachelor of Science in Elementary Education'),
(5, 'TVL', 'Technical Vocational Livelihood'),
(6, 'BSCRIM', 'Bachelor of Science in Criminology '),
(7, 'CAS', 'College of arts an sciences'),
(8, 'BEED', 'Bachelor of Elementary Education Department'),
(13, 'BSTM', 'Bachelor of Science in Tourism Management'),
(14, 'STEM', 'Science Technology Engineering Mathematics '),
(15, 'ABM', 'Accountancy business management'),
(18, 'JUNIOR HIGH', 'Junior High');

-- --------------------------------------------------------

--
-- Table structure for table `psychology_info`
--

CREATE TABLE `psychology_info` (
  `PsychologyNo` int(11) NOT NULL,
  `OlsatOne` int(1) NOT NULL,
  `OlsatTwo` int(1) NOT NULL,
  `OlsatThree` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psychology_info`
--

INSERT INTO `psychology_info` (`PsychologyNo`, `OlsatOne`, `OlsatTwo`, `OlsatThree`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 1),
(3, 1, 1, 1),
(4, 1, 1, 1),
(5, 1, 0, 0),
(6, 1, 1, 1),
(7, 1, 0, 0),
(8, 1, 0, 0),
(9, 1, 1, 1),
(10, 1, 1, 1),
(11, 1, 1, 0),
(12, 1, 0, 0),
(13, 1, 1, 1),
(14, 1, 1, 1),
(15, 1, 1, 1),
(16, 1, 1, 1),
(17, 1, 1, 1),
(18, 1, 1, 1),
(19, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reciept_info`
--

CREATE TABLE `reciept_info` (
  `RecieptNo` int(11) NOT NULL,
  `RecieptCode` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reciept_info`
--

INSERT INTO `reciept_info` (`RecieptNo`, `RecieptCode`) VALUES
(1, '1234'),
(2, '456546'),
(3, '123'),
(4, '123'),
(5, '9023'),
(6, '9420'),
(7, '03345'),
(8, 'c45245'),
(9, '3455'),
(10, '23424'),
(11, '333445'),
(12, '45555'),
(13, '333224'),
(14, '73534'),
(15, '45636'),
(16, '563'),
(17, '76868'),
(18, '4848'),
(19, '848468'),
(20, '6557567'),
(21, '444444444'),
(22, '12'),
(23, '123'),
(24, '1414'),
(25, '1414'),
(26, '2134'),
(27, '3324'),
(28, '3452'),
(29, '232331');

-- --------------------------------------------------------

--
-- Table structure for table `shift_info`
--

CREATE TABLE `shift_info` (
  `ShiftNo` int(11) NOT NULL,
  `StudentFrom` int(11) NOT NULL,
  `StudentTo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift_info`
--

INSERT INTO `shift_info` (`ShiftNo`, `StudentFrom`, `StudentTo`) VALUES
(1, 2, 1),
(2, 1, 6),
(3, 1, 2),
(4, 6, 2),
(5, 8, 1),
(6, 1, 8),
(7, 2, 6),
(8, 6, 1),
(9, 6, 2),
(10, 7, 6),
(11, 1, 7),
(12, 4, 7),
(13, 1, 4),
(14, 13, 6),
(15, 2, 1),
(16, 6, 2),
(17, 2, 1),
(18, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `studentjunc_info`
--

CREATE TABLE `studentjunc_info` (
  `StudentJunc` int(11) NOT NULL,
  `StudentNo` int(11) NOT NULL,
  `ActiveNo` int(11) NOT NULL,
  `DropNo` int(11) NOT NULL,
  `EntranceNo` int(11) NOT NULL,
  `ExitNo` int(11) NOT NULL,
  `ExpelledNo` int(11) NOT NULL,
  `GraduateNo` int(11) NOT NULL,
  `FatherNo` int(11) NOT NULL,
  `LevelNo` int(11) NOT NULL,
  `MotherNo` int(11) NOT NULL,
  `ProgramNo` int(11) NOT NULL,
  `PsychologyNo` int(11) NOT NULL,
  `ShiftNo` int(11) NOT NULL,
  `RecieptNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentjunc_info`
--

INSERT INTO `studentjunc_info` (`StudentJunc`, `StudentNo`, `ActiveNo`, `DropNo`, `EntranceNo`, `ExitNo`, `ExpelledNo`, `GraduateNo`, `FatherNo`, `LevelNo`, `MotherNo`, `ProgramNo`, `PsychologyNo`, `ShiftNo`, `RecieptNo`) VALUES
(1, 1, 1, 0, 1, 1, 0, 1, 1, 3, 1, 1, 1, 0, 1),
(2, 2, 0, 1, 0, 0, 0, 0, 2, 1, 2, 1, 0, 0, 0),
(3, 3, 2, 0, 3, 2, 0, 2, 3, 5, 3, 16, 2, 0, 3),
(4, 4, 3, 0, 4, 3, 0, 3, 4, 6, 4, 16, 3, 0, 4),
(5, 5, 0, 0, 19, 0, 11, 0, 5, 3, 5, 1, 0, 0, 19),
(6, 6, 18, 0, 17, 0, 9, 0, 6, 1, 6, 2, 0, 1, 17),
(7, 7, 26, 0, 29, 0, 0, 0, 7, 3, 7, 1, 0, 0, 29),
(8, 8, 4, 0, 5, 4, 0, 4, 8, 6, 8, 5, 4, 0, 5),
(9, 9, 9, 0, 11, 9, 0, 9, 9, 5, 9, 5, 10, 0, 11),
(10, 10, 0, 8, 0, 0, 0, 0, 10, 5, 10, 5, 0, 0, 0),
(11, 11, 0, 0, 0, 0, 0, 0, 11, 1, 11, 2, 0, 17, 0),
(12, 12, 0, 0, 0, 0, 0, 0, 12, 5, 12, 16, 0, 0, 0),
(13, 13, 0, 0, 0, 0, 0, 0, 13, 2, 13, 2, 0, 0, 0),
(14, 14, 0, 0, 0, 0, 0, 0, 14, 6, 14, 16, 0, 0, 0),
(15, 15, 0, 0, 0, 0, 0, 0, 15, 1, 15, 1, 0, 0, 0),
(16, 16, 8, 11, 9, 0, 0, 0, 16, 6, 16, 5, 6, 0, 9),
(17, 17, 0, 0, 0, 0, 0, 0, 17, 5, 17, 5, 0, 0, 0),
(18, 18, 0, 0, 0, 0, 0, 0, 18, 5, 18, 16, 0, 0, 0),
(19, 19, 0, 0, 0, 0, 0, 0, 19, 1, 19, 1, 0, 0, 0),
(20, 20, 0, 0, 0, 0, 0, 0, 20, 6, 20, 16, 0, 0, 0),
(21, 21, 0, 0, 0, 0, 0, 0, 21, 5, 21, 16, 0, 0, 0),
(22, 22, 0, 0, 0, 0, 0, 0, 22, 6, 22, 16, 0, 0, 0),
(23, 23, 0, 0, 0, 0, 0, 0, 23, 5, 23, 16, 0, 0, 0),
(24, 24, 0, 0, 0, 0, 0, 0, 24, 6, 24, 16, 0, 0, 0),
(25, 25, 0, 0, 0, 0, 0, 0, 25, 4, 25, 9, 0, 0, 0),
(26, 26, 0, 0, 0, 0, 0, 0, 26, 5, 26, 16, 0, 0, 0),
(27, 27, 16, 0, 2, 0, 0, 0, 27, 5, 27, 16, 0, 0, 2),
(28, 28, 0, 0, 0, 0, 0, 0, 28, 4, 28, 6, 0, 0, 0),
(29, 29, 0, 0, 0, 0, 0, 0, 29, 5, 29, 5, 0, 0, 0),
(30, 30, 0, 0, 0, 0, 5, 0, 30, 6, 30, 5, 0, 0, 0),
(31, 31, 0, 0, 0, 0, 1, 0, 31, 4, 31, 1, 0, 0, 0),
(32, 32, 0, 0, 0, 0, 3, 0, 32, 5, 32, 5, 0, 0, 0),
(33, 33, 22, 0, 22, 10, 0, 10, 33, 3, 33, 1, 16, 13, 22),
(34, 34, 0, 0, 0, 0, 0, 0, 34, 6, 34, 5, 0, 0, 0),
(35, 35, 0, 0, 0, 0, 0, 0, 35, 3, 35, 6, 0, 16, 0),
(36, 36, 0, 0, 0, 0, 0, 0, 36, 2, 36, 1, 0, 0, 0),
(37, 37, 0, 0, 0, 0, 0, 0, 37, 3, 37, 10, 0, 0, 0),
(38, 38, 0, 0, 0, 0, 0, 0, 38, 3, 38, 9, 0, 0, 0),
(39, 39, 0, 0, 0, 0, 0, 0, 39, 1, 39, 10, 0, 0, 0),
(40, 40, 0, 0, 0, 0, 0, 0, 40, 6, 40, 5, 0, 0, 0),
(41, 41, 0, 0, 0, 0, 0, 0, 41, 2, 41, 6, 0, 0, 0),
(42, 42, 0, 0, 0, 0, 0, 0, 42, 6, 42, 5, 0, 0, 0),
(43, 43, 12, 13, 12, 0, 0, 0, 43, 1, 43, 6, 8, 0, 12),
(44, 44, 0, 0, 18, 0, 10, 0, 44, 4, 44, 1, 0, 0, 18),
(45, 45, 0, 0, 0, 0, 0, 0, 45, 6, 45, 5, 0, 0, 0),
(46, 46, 14, 14, 15, 0, 0, 0, 46, 3, 46, 1, 0, 2, 15),
(47, 47, 0, 4, 0, 0, 0, 0, 47, 0, 47, 5, 0, 0, 0),
(48, 48, 0, 0, 0, 0, 0, 0, 48, 6, 48, 16, 0, 0, 0),
(49, 49, 0, 0, 0, 0, 0, 0, 49, 3, 49, 7, 0, 0, 0),
(50, 50, 0, 0, 0, 0, 0, 0, 50, 4, 50, 1, 0, 0, 0),
(51, 51, 24, 0, 27, 12, 0, 12, 51, 1, 51, 1, 18, 6, 27),
(52, 52, 23, 0, 26, 11, 0, 11, 52, 2, 52, 13, 17, 14, 26),
(53, 53, 0, 0, 0, 0, 0, 0, 53, 4, 53, 6, 0, 0, 0),
(54, 54, 0, 0, 0, 0, 0, 0, 54, 5, 54, 16, 0, 0, 0),
(55, 55, 0, 0, 0, 0, 0, 0, 55, 6, 55, 16, 0, 0, 0),
(56, 56, 0, 0, 0, 0, 0, 0, 56, 6, 56, 5, 0, 0, 0),
(57, 57, 0, 0, 0, 0, 0, 0, 57, 5, 57, 5, 0, 0, 0),
(58, 58, 0, 0, 0, 0, 0, 0, 58, 6, 58, 16, 0, 0, 0),
(59, 59, 5, 2, 6, 0, 0, 0, 59, 4, 59, 1, 0, 0, 6),
(60, 60, 6, 3, 7, 0, 0, 0, 60, 5, 60, 16, 0, 0, 7),
(61, 61, 0, 9, 0, 0, 0, 0, 61, 5, 61, 5, 0, 0, 0),
(62, 62, 0, 0, 0, 0, 0, 0, 62, 5, 62, 16, 0, 0, 0),
(63, 63, 11, 12, 13, 0, 0, 0, 63, 6, 63, 5, 7, 0, 13),
(64, 64, 0, 0, 0, 0, 0, 0, 64, 5, 64, 16, 0, 0, 0),
(65, 65, 0, 0, 0, 0, 0, 0, 65, 6, 65, 16, 0, 0, 0),
(66, 66, 0, 5, 0, 0, 0, 0, 66, 5, 66, 5, 0, 0, 0),
(67, 67, 0, 0, 0, 0, 0, 0, 67, 6, 67, 5, 0, 0, 0),
(68, 68, 0, 0, 0, 0, 0, 0, 68, 6, 68, 16, 0, 0, 0),
(69, 69, 0, 0, 0, 0, 0, 0, 69, 6, 69, 16, 0, 0, 0),
(70, 70, 0, 0, 0, 0, 0, 0, 70, 5, 70, 5, 0, 0, 0),
(71, 71, 0, 0, 0, 0, 0, 0, 71, 6, 71, 16, 0, 0, 0),
(72, 72, 0, 0, 0, 0, 0, 0, 72, 3, 72, 2, 0, 0, 0),
(73, 73, 0, 6, 0, 0, 0, 0, 73, 5, 73, 5, 0, 0, 0),
(74, 74, 0, 0, 0, 0, 0, 0, 74, 6, 74, 16, 0, 0, 0),
(75, 75, 10, 0, 10, 8, 0, 8, 75, 6, 75, 5, 9, 0, 10),
(76, 76, 0, 0, 0, 0, 0, 0, 76, 5, 76, 5, 0, 0, 0),
(77, 77, 15, 15, 16, 0, 0, 0, 77, 4, 77, 13, 0, 0, 16),
(78, 78, 0, 0, 20, 0, 12, 0, 78, 4, 78, 2, 0, 0, 20),
(79, 79, 0, 0, 0, 0, 0, 0, 79, 1, 79, 7, 0, 18, 0),
(80, 80, 7, 0, 8, 0, 2, 0, 80, 5, 80, 18, 0, 0, 8),
(81, 81, 25, 0, 28, 13, 0, 13, 81, 2, 81, 4, 19, 0, 28),
(82, 82, 0, 7, 0, 0, 0, 0, 82, 5, 82, 15, 0, 0, 0),
(83, 83, 13, 0, 14, 0, 0, 0, 83, 5, 83, 15, 11, 0, 14),
(84, 84, 0, 0, 0, 0, 4, 0, 84, 0, 84, 15, 0, 0, 0),
(85, 85, 0, 10, 0, 0, 0, 0, 85, 5, 85, 16, 0, 0, 0),
(86, 86, 0, 0, 0, 0, 0, 0, 86, 6, 86, 16, 0, 0, 0),
(87, 87, 21, 0, 25, 7, 0, 7, 87, 6, 87, 15, 15, 0, 25),
(88, 88, 0, 0, 0, 0, 0, 0, 88, 6, 88, 14, 0, 0, 0),
(89, 89, 0, 0, 0, 0, 0, 0, 89, 5, 89, 14, 0, 0, 0),
(90, 90, 0, 0, 0, 0, 0, 0, 90, 6, 90, 14, 0, 0, 0),
(91, 91, 0, 0, 0, 0, 0, 0, 91, 6, 91, 15, 0, 0, 0),
(92, 92, 19, 0, 23, 5, 0, 5, 92, 0, 92, 18, 13, 0, 23),
(93, 93, 17, 0, 21, 0, 7, 0, 93, 8, 93, 18, 12, 0, 21),
(94, 94, 0, 0, 0, 0, 8, 0, 94, 7, 94, 18, 0, 0, 0),
(95, 95, 0, 0, 0, 0, 0, 0, 95, 8, 95, 18, 0, 0, 0),
(96, 96, 20, 0, 24, 6, 0, 6, 96, 9, 96, 18, 14, 0, 24),
(97, 97, 0, 0, 0, 0, 0, 0, 97, 9, 97, 18, 0, 0, 0),
(98, 98, 0, 0, 0, 0, 0, 0, 98, 0, 98, 18, 0, 0, 0),
(99, 99, 0, 0, 0, 0, 0, 0, 99, 9, 99, 18, 0, 0, 0),
(100, 100, 0, 0, 0, 0, 0, 0, 100, 9, 100, 18, 0, 0, 0),
(101, 101, 0, 0, 0, 0, 6, 0, 101, 0, 101, 18, 0, 0, 0),
(102, 102, 0, 0, 0, 0, 0, 0, 102, 9, 102, 5, 0, 0, 0),
(103, 103, 0, 0, 0, 0, 0, 0, 103, 9, 103, 18, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `StudentNo` int(11) NOT NULL,
  `IdNumber` varchar(20) NOT NULL,
  `Firstname` varchar(32) NOT NULL,
  `Middlename` varchar(32) NOT NULL,
  `Lastname` varchar(32) NOT NULL,
  `CivilStatus` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Age` int(11) NOT NULL,
  `DateBirth` date NOT NULL,
  `Citizenship` varchar(20) NOT NULL,
  `Religion` varchar(50) NOT NULL,
  `EmailAdd` varchar(64) NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `Image` varchar(128) NOT NULL,
  `Address` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`StudentNo`, `IdNumber`, `Firstname`, `Middlename`, `Lastname`, `CivilStatus`, `Gender`, `Age`, `DateBirth`, `Citizenship`, `Religion`, `EmailAdd`, `PhoneNo`, `Image`, `Address`) VALUES
(1, 'C-2014-34567', 'Ace', 'Case', 'Pail', 'Single', 'Male', 23, '0000-00-00', 'Filipino', 'filipinista', 'acepail@gmail.com', 34567890, 'HEADER1.png', 'akjdakjlajlka'),
(2, 'C-2014-0001', 'Ankor Mile', 'Pane', 'Dane', 'Single', 'Male', 23, '2018-11-08', 'Filipino', 'filipinista', 'ankormile@gmail.com', 2147483647, 'donjose.jpg', 'Don Ruben, San Jose, Dinagat Islands'),
(3, 'c-2018-100', 'Madhel ', 'tan', 'Patricio', 'Single', 'Female', 20, '2018-11-06', 'Fil', 'catholic', 'jkgkfhkdf@gmail.com', 2147483647, '20480017_321844988273010_5277306951950894689_n.jpg', 'P-5 San jose'),
(4, 'C-2015-200', 'chan', 'yeol', 'park', 'Single', 'Male', 27, '1992-11-27', 'korean', 'korean', 'parkchanyeol@gmail.com', 2147483647, '43725889_198869524335901_2151166797204684800_n.jpg', 'p-2 magsaysay, dinagat, dinagat islands'),
(5, 'C-2015-500', 'Jhon', 'Kim', 'Hays', 'Single', 'Male', 23, '2018-11-08', 'Pilino', 'Pilipinista', 'mark@yahoo.com', 909426628, 'efe6cd3d-3fd8-4e48-8993-b09cefab85aa_Army_gibarch_image.png', 'P-4 don ruben San jose'),
(6, 'C-2014-1002', 'Wew', 'Paler', 'Ganern', 'Single', 'Male', 23, '2018-11-12', 'Filipino', 'filipinista', 'wewganern@gmail.com', 2147483647, 'donjose.jpg', 'Don Ruben, San Jose, Dinagat Islands'),
(7, 'C-2015-500', 'Mark', 'Yo', 'Navarro', 'Single', 'Male', 23, '2018-11-08', 'Pilino', 'Pilipinista', 'mark@yahoo.com', 909426628, 'efe6cd3d-3fd8-4e48-8993-b09cefab85aa_Army_gibarch_image.png', 'P-4 don ruben San jose'),
(8, 'c-2018-101', 'Stefhane faye', 'Vallejos', 'dela', 'Single', 'Female', 22, '1997-11-08', 'Fil', 'Catholic', 'stefhane@gmail.com', 94553655, 'IMG_0675.JPG', 'Tag abaca Basilisa'),
(9, 'C-2015-201', 'jong', 'in', 'kim', 'Single', 'Male', 25, '1994-12-01', 'korean', 'korean', 'kimjongin@gmail.com', 123456789, '43877985_105643227088588_4171226981804802048_n.jpg', 'P-5 mabini san jose, dinagat islands'),
(10, 'c-2018-102', 'Daniel', 'padilla', 'jhon furd', 'Married', 'Male', 24, '1979-12-30', 'Fil', 'catholic', 'dgfgrf@gmail.com', 974576375, 'IMG_0680.JPG', 'p-4 dinagat'),
(11, 'C-2018-0003', 'Jaleman', 'Pane', 'Marsbane', 'Single', 'Male', 23, '2018-11-22', 'Filipino', 'filipinista', 'jalemanmarsbane@gmail.com', 2147483647, 'donjose.jpg', 'Don Ruben, San Jose, Dinagat Islands'),
(12, 'C-2015-202', 'se', 'hun', 'oh', 'Single', 'Male', 25, '1994-12-04', 'korean', 'korean', 'ohsehun@gmail.com', 123456789, '44128955_118145335833779_392566826967498752_n.jpg', 'p-5 poblacion, san jose, dinagat islands'),
(13, 'C-2015-501', 'Paul', 'O', 'Pratz', 'Single', 'Male', 21, '1997-10-18', 'Pilino', 'Pilipinista', 'Paul@yahoo.com', 2147483647, 'FB_IMG_15412840773560046.jpg', 'P-4 don ruben San jose'),
(14, 'c-2018-103', 'Padilla', 'Athena faye', 'delos', 'Single', 'Female', 17, '1996-02-12', 'Fil', 'catholic', 'sdfdsf@gmail.com', 2147483647, '20526209_322540464870129_8059220125798074206_n.jpg', 'Basilisa'),
(15, 'C-2018-0004', 'Cristofer', 'Ands', 'Manslate', 'Single', 'Male', 23, '2018-11-09', 'Filipino', 'filipinista', 'cristofermanslate@gmail.com', 2147483647, 'donjose.jpg', 'Don Ruben, San Jose, Dinagat Islands'),
(16, 'C-2015-203', 'Baek', 'Hyun', 'Byun', 'Single', 'Male', 27, '1992-06-05', 'korean', 'korean', 'byunbaekhyun@gmail.com', 123456789, '45102537_130941134558314_839098732598263808_n.jpg', 'p-2 san juan san jose dinagat islands'),
(17, 'c-2018-104', 'Night', 'kako', 'Michella', 'Single', 'Female', 23, '1995-06-01', 'Fil', 'catholic', 'michella@gmail.com', 2147483647, 'asdfad.jpeg', 'tag abaca'),
(18, 'C-2015-204', 'min', 'seok', 'kim', 'Single', 'Male', 28, '1990-03-26', 'korean', 'korean', 'kimminseok@gmail.com', 123456789, '45279165_359735834599647_7469881295288401920_n.jpg', 'p-2 aurelio san jose dinagat islands'),
(19, 'C-2018-0004', 'Maxwell ', 'Barts', 'Marts', 'Single', 'Male', 23, '2018-11-14', 'Filipino', 'filipinista', 'Maxwellmart@gmail.com', 2147483647, 'donjose.jpg', 'Don Ruben, San Jose, Dinagat Islands'),
(20, 'c-2018-105', 'Reyes', 'delos', 'Kenjie', 'Single', 'Male', 20, '1993-09-06', 'Fil', 'Catholic', 'hdjhgkfd@gmail.com', 2147483647, '25594_16.jpg', 'Garcia'),
(21, 'C-2015-205', 'Zi', 'Tao', 'Huang', 'Single', 'Male', 26, '1993-05-02', 'chinese', 'chinese', 'huangzitao@gmail.com', 123456789, 'CGF7lelUMAAShvV.jpg', 'p-1 r e ecleo sr cagdianao dinagat islands'),
(22, 'c-2018-106', 'Pona ', 'Dela', 'Edwin', 'Single', 'Male', 23, '1992-09-28', 'Fil', 'Catholic', 'res@gmail.com', 2147483647, '76438_19.jpg', 'tag-abaca'),
(23, 'C-2015-206', 'jong', 'dae', 'kim', 'Single', 'Male', 27, '1992-09-21', 'korean', 'korean', 'kimjongdae@gmail.com', 123456789, 'IMG_20180424_021451.jpg', 'p-5 nahayahay san jose dinagat islands'),
(24, 'C-2015-502', 'vina', 'de', 'long', 'Single', 'Female', 19, '1998-02-07', 'Filipino', 'filipinista', 'vina@yahoo.com', 95472946, 'HEADER1.png', 'p-4 don ruben san jose'),
(25, 'C-2015-504', 'vhong ', 'G', 'navaro ', 'Single', 'Male', 35, '1889-03-31', 'Filipino', 'Catholic', 'vhong@yahoo.com', 96378457, 'donjose.jpg', 'P-1 Luna, San Jose, Dinagat Islands'),
(26, 'c-2018-107', 'Cabriana', 'Tirong', 'Robelyn', 'Single', 'Female', 21, '1996-10-04', 'Fil', 'Catholic', 'robelyn@gmail.com', 2147483647, '1.jpeg', 'Laguna'),
(27, 'C-2015-207', 'jun', 'myeon', 'kim', 'Single', 'Male', 27, '1991-05-22', 'korean', 'korean', 'kimjunmyoen@gmail.com', 123456789, 'FavoriteIdol_2018-03-11-22-25-49.jpeg', 'p-2 mahayahay san jose dinagat islands'),
(28, 'c-2015-505', 'jhone ', 'T', 'jhones', 'Single', 'Male', 34, '1987-06-23', 'Filipino', 'filipinista', 'jhone@yahoo.com', 96852684, 'donjose.jpg', '3433 1st Avenue\r\nUnit A'),
(29, 'c-2018-108', 'Linga', 'Lig-o', 'Leah', 'Single', 'Female', 22, '1995-11-23', 'F', 'Catholic', 'Leah@gmail.com', 2147483647, '20596995_322540308203478_4999952337886888273_n.jpg', 'hongkong'),
(30, 'C-2015-208', 'Kyung', 'Soo', 'Do', 'Single', 'Male', 26, '1994-01-12', 'korean', 'korean', 'dokyungsoo@gmail.com', 2147483647, 'bhvkiyhikjl.jpg', 'p-2 mahayahay san jose dinagat islands'),
(31, 'c-2015-506', 'tom', 'A', 'jerry', 'Single', 'Male', 23, '1999-03-14', 'Filipino', 'Catholic', 'tom@yahoo.com', 97354742, 'donjose.jpg', 'P-1 Luna, San Jose, Dinagat Islands'),
(32, 'c-2018-109', 'Amatos', 'diega', 'Rusbeth', 'Single', 'Female', 19, '1993-12-05', 'Fil', 'Catholic', 'Rusbeth@gmail.com', 2147483647, 'IMG_0673.JPG', 'cebu'),
(33, 'c-2015-507', 'jemar', 'T', 'Ho', 'Single', 'Male', 24, '1998-06-05', 'Filipino', 'filipinista', 'Jemar@yahoo.com', 93643774, 'donjose.jpg', '3433 1st Avenue\r\nUnit A'),
(34, 'C-2015-209', 'Lu', 'Han', 'Xiu', 'Single', 'Male', 29, '1990-04-20', 'chinese', 'chinese', 'xiuluhan@gmail.com', 123456789, 'IMG_20180420_121751.jpg', 'p-6 poblacion san jose dinagat islands'),
(35, 'c-2015-508', 'cyrus', 'T', 'Jones', 'Single', 'Male', 23, '1996-02-02', 'Filipino', 'filipinista', 'cyrus@yahoo.com', 95536772, 'donjose.jpg', 'PoBox 3434'),
(36, 'c-2015-509', 'Yancy', 'T', 'young', 'Single', 'Female', 23, '1999-02-04', 'Filipino', 'Catholic', 'yancy@yahoo.com', 9234567, 'donjose.jpg', 'P-1 Luna, San Jose, Dinagat Islands'),
(37, 'c-2015-509', 'heartz ', 'Yo', 'love', 'Single', 'Female', 23, '1998-11-06', 'Filipino', 'Catholic', 'heartz@yaho.com', 909887253, 'donjose.jpg', 'PoBox 3434'),
(38, 'c-2015-600', 'kim', 'Scott', 'Lu', 'Single', 'Female', 18, '1999-03-07', 'Filipino', 'Catholic', 'kim@yahoo.com', 974885329, 'donjose.jpg', 'P-1 Luna, San Jose, Dinagat Islands'),
(39, 'c-2015-601', 'angela', 'Ho', 'Park ', 'Single', 'Female', 19, '1999-07-17', 'Filipino', 'filipinista', 'angela@yahoo.com', 922786381, 'donjose.jpg', 'P-1 Luna, San Jose, Dinagat Islands'),
(40, 'C-2015-210', 'Yi', 'Fan', 'Wu', 'Single', 'Male', 29, '1990-11-06', 'chinese', 'chinese', 'wuyifan@gmail.com', 123456789, 'gwtLPwmv54umE5RhtDOEWzahmy.jpg', 'p-7 mabini san jse dinagat islands'),
(41, 'C-2015-602', 'kenzo', 'H', 'Lee', 'Single', 'Male', 23, '1998-05-03', 'Filipino', 'Catholic', 'kenzo@yahoo.com', 982773, 'donjose.jpg', '3433 1st Avenue\r\nUnit A'),
(42, 'C-2015-211', 'Yi', 'Xing', 'Zhang', 'Single', 'Male', 28, '1991-10-07', 'chinese', 'chinese', 'zhangyixing@gmail.com', 123456789, 'FavoriteIdol_2018-03-11-22-36-35.jpeg', 'p-2 mahayahay san jose dinagat islands'),
(43, 'C-2015-603', 'berna', 'Bogbog', 'A', 'Married', 'Female', 34, '1988-05-03', 'Filipino', 'filipinista', 'berna@yahoo.com', 96724782, 'donjose.jpg', 'PoBox 3434'),
(44, 'C-2015-604', 'mike', 'Dealt', 'god', 'Single', 'Male', 23, '1998-03-06', 'Filipino', 'Catholic', 'mike@yahoo.com', 94676636, 'donjose.jpg', 'P-1 Luna, San Jose, Dinagat Islands'),
(45, 'C-2015-213', 'may ann', 'salvaleon', 'obingke', 'Single', 'Female', 21, '1997-09-03', 'filipino', 'IFI', 'mayannobingke@gmail.com', 123456789, 'FavoriteIdol_2018-03-11-22-38-25.jpeg', 'p-2 mahayahay san jose dinagat islands'),
(46, 'C-2015-605', 'Brown', 'A', 'Black', 'Single', 'Male', 24, '1995-03-02', 'Filipino', 'filipinista', 'BROWN@YAHOO.COM', 23456700, 'donjose.jpg', 'P-1 Luna, San Jose, Dinagat Islands'),
(47, 'C-2015-212', 'Gleanmay ', 'Salvaleon', 'Obingke', 'Single', 'Female', 19, '1999-01-18', 'filipino', 'IFI', 'gleanamayobingke@gmail.com', 2147483647, 'FB_IMG_1522400775668.jpg', 'p-2 mahayahay san jose dinagat islands'),
(48, 'C-2015-212', 'Gleanamay', 'Salvaleon', 'Obingke', 'Single', 'Female', 19, '1999-01-18', 'filipino', 'IFI', 'gleanamayobingke@gmail.com', 2147483647, 'FB_IMG_1522400775668.jpg', 'p-2 mahayahay san jose dinagat islands'),
(49, 'C-2015-606', 'Been', 'T', 'Mr.', 'Married', 'Male', 34, '1889-05-04', 'Filipino', 'Catholic', 'been@yahoo.com', 94598597, 'donjose.jpg', '898 Woodbride Drive'),
(50, 'C-2015-607', 'Rose', 'Scott', 'mea', 'Single', 'Female', 23, '1998-05-02', 'Filipino', 'filipinista', 'rose@yahoo.com', 976278965, 'donjose.jpg', '3433 1st Avenue\r\nUnit A'),
(51, 'C-2015-201', 'Baek', 'Byun', 'Hyun', 'Single', 'Male', 27, '1992-05-06', 'korean', 'korean', 'byunbaekhyun@gmail.com', 123456789, '45285534_1042913572580585_5814999261921673216_n.jpg', 'p-1 mahayahay san jose dinagat islands'),
(52, 'C-2015-202', 'Zi', 'Tao', 'Huang', 'Single', 'Male', 26, '1993-05-02', 'chinese', 'chinese', 'huangzitao@gmail.com', 123456789, 'tao_061316_01.jpg', 'p-3 mahayahay san jose dinagat islands'),
(53, 'C-2015-607', 'vinz', 'S', 'Sam', 'Single', 'Male', 23, '1997-03-05', 'Filipino', 'Catholic', 'vinz@yahoo.com', 2147483647, 'donjose.jpg', '1202 Silver Lake Trail'),
(54, 'C-2015-2011', 'jane', 'T', 'Yo', 'Single', 'Gender', 4, '2222-02-22', 'Fillipino', 'sdf', 'sollosoj@gmail.com', 90090909, '8TzKLbnTp.png', 'sdfds'),
(55, 'C-2015-214', 'maria jamica', 'tuquiro', 'silim', 'Single', 'Female', 19, '1999-01-07', 'filipino', 'IFI', 'jhamselim@gmail.com', 123456789, 'download (5).jpg', 'p-2 mahayahay san jose dinagat islands'),
(56, 'C-2015-215', 'apple', 'oriel', 'rebong', 'Single', 'Female', 19, '1998-12-30', 'filipino', 'IFI', 'applerebong@gmail.com', 123456789, 'download (9).jpg', 'p-1 sta cruz san jose dinagat islands'),
(57, 'C-2015-216', 'mae', 'hin', 'lim', 'Single', 'Female', 20, '1998-03-01', 'filipino', 'IFI', 'maehin@gmail.com', 123456789, 'download (21).jpg', 'p-6 aurelio san jose dinagat islands'),
(58, 'C-2015-217', 'jolina ', 'Rabe', 'mamac', 'Single', 'Female', 19, '1999-07-09', 'filipino', 'catholic', 'jolinamamac@gmail.com', 2147483647, 'images (9).jpg', 'p-5 poblacion san jose dinagat islands'),
(59, 'c-2016-0112', 'Mary Queen', 'Tan', 'Casino', 'widow', 'Female', 21, '1997-08-30', 'chinese', 'catholic', 'queen@gmail.com', 2147483647, 'download (9).jpg', 'P- 3 San Juan, SDN'),
(60, 'c-2016-0334', 'kim', 'soup', 'meso', 'widow', 'Female', 19, '1999-10-24', 'korean', 'catholic', 'kim@gmail.com', 9999, 'download (15).jpg', 'san juan, san jose'),
(61, 'C-2015-218', 'adwn', 'Rabe', 'kim', 'Single', 'Female', 123, '0009-09-09', 'korean', 'chinese', 'huangzitao@gmail.com', 123456789, 'C360_2016-10-04-12-08-01-549.jpg', 'p-7 mabini san jose dinagat slands'),
(62, 'C-2015-219', 'bingkaii', 'do', 'kyung', 'Single', 'Female', 28, '1999-12-01', 'korean', 'chinese', 'gleanamayobingke@gmail.com', 123456789, '45101454_340351853386755_8958047984013017088_n.jpg', 'p-2 mahayahay san jose dinagat islands'),
(63, 'C-2015-220', 'christian ', 'kim', 'do', 'Single', 'Male', 19, '1888-12-09', 'korean', 'korean', 'sdfg@gmail.com', 123456789, '44859440_133160650993084_4797804406110158848_n.jpg', 'p-2 mahayahay san jose dinagat islands'),
(64, 'C-2015-221', 'jong', 'chan', 'park', 'Single', 'Male', 25, '1998-12-12', 'filipino', 'IFI', 'byunbaekhyun@gmail.com', 123456789, 'IMG_20180428_170825.jpg', 'p-2 mahayahay san jose dinagat islands'),
(65, 'C-2015-222', 'adas', 'etrfg', 'wff', 'Single', 'Male', 19, '1997-06-09', 'korean', 'chinese', 'sdfg@gmail.com', 123456789, '6e4fd17b8d6b42ea18f33bb6869632141521565257223.jpg', 'p-2 mahayahay san jose dinagat islands'),
(66, 'C-2015-223', 'jong', 'Rabe', 'Obingke', 'Single', 'Male', 28, '1997-04-12', 'korean', 'chinese', 'sdfg@gmail.com', 123456789, '1465174_770300386334618_2478877080756485325_n.jpg', 'p-2 mahayahay san jose dinagat islands'),
(67, 'C-2015-224', 'kim', 'na', 'na', 'Single', 'Female', 26, '1000-12-12', 'korean', 'chinese', 'sdfg@gmail.com', 123456789, 'FB_IMG_1540087426910.jpg', 'p-2 mahayahay san jose dinagat islands'),
(68, 'C-2015-225', 'mark', 'soek', 'kim ', 'Single', 'Male', 26, '1990-12-12', 'korean', 'korean', 'sdfg@gmail.com', 2147483647, 'FavoriteIdol_2018-03-11-22-33-05.jpeg', 'p-6 mabini san jose dinagat islands'),
(69, 'c-2018-110', 'Rusiana', 'Taguran', 'Rey-an', 'Single', 'Female', 16, '2002-03-12', 'Fil', 'Catholic', 'reyan@gmail.com', 2147483647, 'B612_20180328_210306.jpg', 'Aurelio'),
(70, 'C-2015-226', 'jong', 'in', 'park', 'Married', 'Male', 25, '0198-12-12', 'korean', 'korean', 'sdfg@gmail.com', 123456789, 'FB_IMG_1540342769631.jpg', 'p-6 mabini san jose dinagat islands'),
(71, 'c-20108-112', 'Rusiana', 'Taguran', 'Rinan', 'Single', 'Male', 18, '2000-05-27', 'Fil', 'Catholic', 'rinan@gmail.com', 2147483647, 'B612_20180212_085555.jpg', 'ferdinand'),
(72, 'C-2015-227', 'jong', 'in', 'kim', 'Single', 'Male', 26, '1222-12-12', 'korean', 'korean', 'sdfg@gmail.com', 123456789, 'FB_IMG_1540087429454.jpg', 'p-6 mabini san jose dinagat islands'),
(73, 'c-2018-111', 'Rusiana', 'Taguran', 'Ethel', 'Single', 'Male', 22, '1999-05-17', 'Fil', 'Catholic', 'reszil@gmail.com', 2147483647, 'B612_20180305_205152.jpg', 'Basilisa'),
(74, 'c-2018-113', 'Rusiana', 'Taguran', 'Reszil', 'Single', 'Female', 19, '1999-05-17', 'Fil', 'Catholic', 'reszil@gmail.com', 2147483647, 'WIN_20180509_07_25_10_Pro.jpg', 'Ferdinand'),
(75, 'c-2018-114', ' dela torre', 'Curay', 'Ji cee', 'Single', 'Female', 22, '1996-09-17', 'Fil', 'Catholic', 'reszil@gmail.com', 2147483647, 'BeautyPlus_20170712172927_save.jpg', 'Poblacion'),
(76, 'c-2018-115', 'Wuba', 'Wuba', 'Wuba', 'Single', 'Female', 12, '2012-03-03', 'Fil', 'Catholic', 'reszil@gmail.com', 2147483647, 'wuba.jpg', 'dede'),
(77, 'c-2018-116', 'SanSan', 'fito', 'frog', 'Single', 'Gender', 23, '1987-02-05', 'Fil', 'Catholic', 'reszil@gmail.com', 2147483647, 'FB_IMG_14720259914187171.jpg', 'diegas'),
(78, 'C-2015-229', 'hakd', 'sdfg', 'hhhiweede', 'Single', 'Female', 28, '1999-12-12', 'korean', 'korean', 'sdfg@gmail.com', 123456789, 'null1524597106988.jpg', 'p-6 mabini san jose dinagat islands'),
(79, 'C-2015-230', 'jong', 'dae', 'kim', 'Single', 'Male', 28, '1166-12-18', 'korean', 'korean', 'kimjongdae@gmail.com', 123456789, 'FB_IMG_1539146653192.jpg', 'p-6 mabini san jose dinagat islands'),
(80, 'c-2016-0225', 'olay', 'bagsak-presyo', 'for sale', 'widow', 'Male', 34, '2018-12-01', 'filipino', 'sabadism', 'olay@gmail.com', 99999, '76438_19.jpg', 'san juan'),
(81, 'c-2018-118', 'Ligas', 'Kiko', 'Janjan', 'Single', 'Female', 23, '1995-06-24', 'Fil', 'Catholic', 'reszil@gmail.com', 2147483647, 'FB_IMG_14720260370981113.jpg', 'L.A'),
(82, '3535', 'jolina', 't', 'mamac-dangal', 'Married', 'Female', 23, '1992-04-05', 'filipino', 'muslim', 'jol@gmail.com', 9098, 'Fmasuth-Elegante-Traje-de-Las-Mujeres-Traje-de-Negocios-Verano-2-Unids-Corto-Uniformes-de-Oficia.jpg', 'san juan'),
(83, 'c-2016-9342', 'queenie', 'tindok', 'rusiana', 'Single', 'Female', 45, '2014-12-01', 'filipino', 'sabadism', 'tindok@gmail.com', 908412, 'images (1).jpg', 'san juan'),
(84, '8568', 'doly', 'edz', 'pags', 'Married', 'Female', 35, '1999-12-01', 'filipino', 'muslim', 'dol@gmail.com', 8350, '5679_984413174941669_1668928810245619027_n.jpg', 'san juan'),
(85, 'C-2015-231', 'jong', 'in', 'Obingke', 'Single', 'Male', 25, '1212-12-12', 'filipino', 'korean', 'sdfg@gmail.com', 123456789, 'FB_IMG_1539146653192.jpg', 'p-6 mabini san jose dinagat islands'),
(86, 'c-2018-119', 'Timon', 'Galo', 'Renjie', 'Single', 'Female', 19, '1994-05-22', 'Fil', 'Catholic', 'renj@gmail.com', 2147483647, 'FB_IMG_14720259856230920.jpg', 'zzzzzzz'),
(87, 'c-2018-120', 'Cabriana', 'duhhh', 'daine jane', 'Single', 'Female', 18, '1993-05-23', 'Fil', 'Catholic', 'reszil@gmail.com', 2147483647, 'FB_IMG_14720260074069983.jpg', 'cebu'),
(88, 'c-2018-121', 'Siglor', 'Gamo', 'Marimar', 'Single', 'Female', 19, '1993-08-17', 'Fil', 'Catholic', 'reszil@gmail.com', 2147483647, 'FB_IMG_14720260254899377.jpg', 'iloilo'),
(89, 'c-2018-122', 'Olay', 'Sato', 'Mernil jay', 'Single', 'Male', 23, '1992-09-10', 'Fil', 'Catholic', 'resjae@gmail.com', 2147483647, 'FB_IMG_14720260647973157.jpg', 'San jose Dinagat Island'),
(90, 'c-2018-123', 'Durron', 'Lala', 'Rj', 'Single', 'Male', 20, '1995-05-05', 'Fil', 'Catholic', 'resjae@gmail.com', 2147483647, 'FB_IMG_14720261058710779.jpg', 'San Jose'),
(91, 'c-2018-124', 'Mata', 'Rebamonte', 'Michelle', 'Single', 'Female', 22, '1991-03-14', 'Fil', 'Catholic', 'resjae@gmail.com', 2147483647, 'FB_IMG_14720260996747839.jpg', 'San Jose'),
(92, 'C-2015-232', 'jason ', 'aa', 'aliga', 'Single', 'Male', 19, '1111-11-11', 'filipino', 'chinese', 'sdfg@gmail.com', 123456789, 'FB_IMG_1522400794043.jpg', 'p-1 mahayahay san jose dinagat islands'),
(93, 'C-2015-233', 'jason', 'in', 'kim', 'Single', 'Male', 19, '1111-11-11', 'filipino', 'IFI', 'sdfg@gmail.com', 123456789, 'FB_IMG_1538397086303.jpg', 'p-1 mahayahay san jose dinagat islands'),
(94, 'C-2015-234', 'micheal', 'in', 'kim', 'Single', 'Male', 19, '2222-02-22', 'korean', 'korean', 'sdfg@gmail.com', 123456789, 'FB_IMG_1522400794043.jpg', 'p-2 mahayahay san jose dinagat islands'),
(95, 'C-2015-235', 'daniel', 'chan', 'padilla', 'Single', 'Male', 19, '3333-03-31', 'korean', 'korean', 'sdfg@gmail.com', 123456789, 'FB_IMG_1538397088656.jpg', 'p3 mahayahay san jose dinagat islands'),
(96, 'C-2015-236', 'dee', 'jee', 'cee', 'Single', 'Male', 19, '3333-03-31', 'filipino', 'chinese', 'sdfg@gmail.com', 123456789, 'FB_IMG_1538397103991.jpg', 'p-1 mahayahay san jose dinagat islands'),
(97, 'C-2015-237', 'bea', 'lim', 'lee', 'Single', 'Female', 19, '4444-04-04', 'korean', 'korean', 'sdfg@gmail.com', 123456789, 'FB_IMG_1538397106534.jpg', 'p-1 mahayahay san jose dinagat islands'),
(98, 'C-2015-238', 'na', 'dae', 'na', 'Single', 'Female', 19, '5555-05-05', 'korean', 'korean', 'sdfg@gmail.com', 123456789, 'FB_IMG_1538397125910.jpg', 'p-1 mahayahay san jose dinagat islands'),
(99, 'C-2015-239', 'jae', 'ne', 'nani', 'Single', 'Female', 19, '1111-08-08', 'korean', 'korean', 'sdfg@gmail.com', 123456789, 'FB_IMG_1538397121505.jpg', 'p-1 mahayahay san jose dinagat islands'),
(100, 'C-2015-240', 'aasdghj', 'sdghj', 'sdfghj', 'Single', 'Female', 19, '6789-05-31', 'korean', 'korean', 'sdfg@gmail.com', 123456789, 'FB_IMG_1538397114339.jpg', 'p-1 mahayahay san jose dinagat islands'),
(101, 'C-2015-241', 'aasdfgh', 'gege', 'ggghgg', 'Single', 'Female', 27, '4567-03-12', 'filipino', 'korean', 'sdfg@gmail.com', 123456789, 'IMG_20180422_154045.jpg', 'p-1 mahayahay san jose dinagat islands'),
(102, 'C-2015-123', 'wak wak', 'Jesa', 'Si', 'Single', 'Female', 23, '1996-12-08', 'filipino', 'catholic', 'sdfg@gmail.com', 2147483647, '45225060_546436665827700_5560083375127003136_n.jpg', 'San jose'),
(103, 'c-2020-1000', 'manz', 'S', 'lapz', 'Single', 'Male', 16, '0008-05-07', 'pilipino', 'Catholic', 'reszil@gmail.com', 2147483647, 'FB_IMG_14720260074069983.jpg', ';ajdoj');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `UserId` int(11) NOT NULL,
  `UserFull` varchar(32) NOT NULL,
  `UserName` varchar(64) NOT NULL,
  `UserPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`UserId`, `UserFull`, `UserName`, `UserPass`) VALUES
(1, 'Junry S. Solloso', 'gdoffice', 'f10e2821bbbea527ea02200352313bc059445190'),
(21, 'I am a user', 'Syrnuj', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(24, 'user', 'user', '77886a1e559b68d65e4da22518b119212b8c0372');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_info`
--
ALTER TABLE `active_info`
  ADD PRIMARY KEY (`ActiveNo`);

--
-- Indexes for table `drop_info`
--
ALTER TABLE `drop_info`
  ADD PRIMARY KEY (`DropNo`);

--
-- Indexes for table `educjunc_info`
--
ALTER TABLE `educjunc_info`
  ADD PRIMARY KEY (`EducjuncNo`);

--
-- Indexes for table `educ_info`
--
ALTER TABLE `educ_info`
  ADD PRIMARY KEY (`EducNo`);

--
-- Indexes for table `entrance_info`
--
ALTER TABLE `entrance_info`
  ADD PRIMARY KEY (`EntranceNo`);

--
-- Indexes for table `exit_info`
--
ALTER TABLE `exit_info`
  ADD PRIMARY KEY (`ExitNo`);

--
-- Indexes for table `expelled_info`
--
ALTER TABLE `expelled_info`
  ADD PRIMARY KEY (`ExpelledNo`);

--
-- Indexes for table `father_info`
--
ALTER TABLE `father_info`
  ADD PRIMARY KEY (`FatherNo`);

--
-- Indexes for table `graduate_info`
--
ALTER TABLE `graduate_info`
  ADD PRIMARY KEY (`GraduateNo`);

--
-- Indexes for table `level_info`
--
ALTER TABLE `level_info`
  ADD PRIMARY KEY (`LevelNo`);

--
-- Indexes for table `mother_info`
--
ALTER TABLE `mother_info`
  ADD PRIMARY KEY (`MotherNo`);

--
-- Indexes for table `program_info`
--
ALTER TABLE `program_info`
  ADD PRIMARY KEY (`ProgramNo`);

--
-- Indexes for table `psychology_info`
--
ALTER TABLE `psychology_info`
  ADD PRIMARY KEY (`PsychologyNo`);

--
-- Indexes for table `reciept_info`
--
ALTER TABLE `reciept_info`
  ADD PRIMARY KEY (`RecieptNo`);

--
-- Indexes for table `shift_info`
--
ALTER TABLE `shift_info`
  ADD PRIMARY KEY (`ShiftNo`);

--
-- Indexes for table `studentjunc_info`
--
ALTER TABLE `studentjunc_info`
  ADD PRIMARY KEY (`StudentJunc`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`StudentNo`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_info`
--
ALTER TABLE `active_info`
  MODIFY `ActiveNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `drop_info`
--
ALTER TABLE `drop_info`
  MODIFY `DropNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `educjunc_info`
--
ALTER TABLE `educjunc_info`
  MODIFY `EducjuncNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `educ_info`
--
ALTER TABLE `educ_info`
  MODIFY `EducNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `entrance_info`
--
ALTER TABLE `entrance_info`
  MODIFY `EntranceNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `exit_info`
--
ALTER TABLE `exit_info`
  MODIFY `ExitNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `expelled_info`
--
ALTER TABLE `expelled_info`
  MODIFY `ExpelledNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `father_info`
--
ALTER TABLE `father_info`
  MODIFY `FatherNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `graduate_info`
--
ALTER TABLE `graduate_info`
  MODIFY `GraduateNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `level_info`
--
ALTER TABLE `level_info`
  MODIFY `LevelNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mother_info`
--
ALTER TABLE `mother_info`
  MODIFY `MotherNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `program_info`
--
ALTER TABLE `program_info`
  MODIFY `ProgramNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `psychology_info`
--
ALTER TABLE `psychology_info`
  MODIFY `PsychologyNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `reciept_info`
--
ALTER TABLE `reciept_info`
  MODIFY `RecieptNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `shift_info`
--
ALTER TABLE `shift_info`
  MODIFY `ShiftNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `studentjunc_info`
--
ALTER TABLE `studentjunc_info`
  MODIFY `StudentJunc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `StudentNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
