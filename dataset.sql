-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 07:05 AM
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
-- Database: `dataset`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(255) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `mail1` varchar(50) NOT NULL,
  `mail2` varchar(50) DEFAULT NULL,
  `contact1` varchar(13) NOT NULL,
  `contact2` varchar(13) DEFAULT NULL,
  `contact3` varchar(13) DEFAULT NULL,
  `pguniversityname` varchar(100) DEFAULT NULL,
  `pgstate` varchar(100) DEFAULT NULL,
  `pgcountry` varchar(100) DEFAULT NULL,
  `pgprogtype` varchar(100) DEFAULT NULL,
  `pgpassyear` varchar(100) DEFAULT NULL,
  `pgspec` varchar(100) DEFAULT NULL,
  `uguniversityname` varchar(50) NOT NULL,
  `ugstate` varchar(100) NOT NULL,
  `ugcountry` varchar(100) NOT NULL,
  `ugprogtype` varchar(30) NOT NULL,
  `ugpassyear` varchar(4) NOT NULL,
  `ugspecialization` varchar(50) NOT NULL,
  `githubid` varchar(30) DEFAULT NULL,
  `behance` varchar(255) CHARACTER SET ascii COLLATE ascii_general_ci DEFAULT NULL,
  `dribble` varchar(255) CHARACTER SET ascii COLLATE ascii_general_ci DEFAULT NULL,
  `portfolio` varchar(500) CHARACTER SET ascii COLLATE ascii_general_ci DEFAULT NULL,
  `plink` varchar(600) NOT NULL,
  `address` varchar(500) DEFAULT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(20) NOT NULL,
  `appliedrole` varchar(30) NOT NULL,
  `profiletype` varchar(20) NOT NULL,
  `excompany` varchar(100) DEFAULT NULL,
  `exrole` varchar(100) DEFAULT NULL,
  `exfdate` date DEFAULT NULL,
  `extodate` date DEFAULT NULL,
  `skill` varchar(200) DEFAULT NULL,
  `certifications` varchar(40) DEFAULT NULL,
  `clink` varchar(500) DEFAULT NULL,
  `workid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `fname`, `lname`, `mail1`, `mail2`, `contact1`, `contact2`, `contact3`, `pguniversityname`, `pgstate`, `pgcountry`, `pgprogtype`, `pgpassyear`, `pgspec`, `uguniversityname`, `ugstate`, `ugcountry`, `ugprogtype`, `ugpassyear`, `ugspecialization`, `githubid`, `behance`, `dribble`, `portfolio`, `plink`, `address`, `state`, `country`, `appliedrole`, `profiletype`, `excompany`, `exrole`, `exfdate`, `extodate`, `skill`, `certifications`, `clink`, `workid`) VALUES
(1, 'MANI', 'YALAVARTHIPATI', 'manisaiyalavarthipati459@gail.com', 'manisaiyalavarthipati459@gail.com', '06309337144', '', '', '', '', '', '', '', '', 'SRM', 'Antwerpen', 'Belgium', 'wdascx', '7894', 'wdw', '', '', '', ' and ', ' and ', 'Near vijayalakshmi theater', 'Christ Church', 'Barbados', 'Django_Developer', 'Fresher', '', '', '0000-00-00', '0000-00-00', ' and ', ' and ', ' and ', 'AP23'),
(2, 'MANI', 'YALAVARTHIPATI', 'manisaiyalavarthipati459@gail.com', 'manisaiyalavarthipati459@gail.com', '06309337144', '', '', '', '', '', '', '', '', 'SRM', 'Andhra Pradesh', 'India', 'wdwf', '202', 'AI And ML', '', '', '', ' and ', ' and ', '1-13/A,PUSULUR POST, PEDANANDIPADU MANDAL,GUNTUR', 'Brest', 'Belarus', 'PHP_Developer', 'Fresher', '', '', '0000-00-00', '0000-00-00', ' and ', ' and ', ' and ', 'AP23'),
(7, 'kqkq', 'qkkq', '54rtgf@gma.com', '', '1000000000', '', '', '', '', '', '', '', '', 'ghj', 'Warwick', 'Bermuda', 'wds', '234', 'edwcax', '', '', '', ' and ', ' and ', 'Near vijayalakshmi theater', 'Alibori', 'Benin', 'Python_Developer', 'Experienced', 'eads', '3wdsxz', '2023-06-23', '2023-06-29', ' and ', ' and ', ' and ', 'AP23'),
(8, 'mama', 'sacx', 'man@gmail.com', '', '1000000000', '', '', '', '', '', '', '', '', 'ed', 'Antwerpen', 'Belgium', 'wsxd', '2345', 'sxz', '', '', '', ' , ', ' , ', 'pkn', 'Brest', 'Belarus', 'Django_Developer', 'Fresher', '', '', '0000-00-00', '0000-00-00', '23 , c , ', 'ds and ', 'https://twitter.com/search?q=%23WIvIND&src=trend_click&vertical=trends , ', 'AP23'),
(9, 'lala', 'wefe', 'laaa@gmail.com', '', '1000000001', '', '', '', '', '', '', '', '', 'rf', 'Belize', 'Belize', 'dscx', '4188', 'rfv', '', '', '', ' , ', ' , ', 'pkn', 'Saint Michael', 'Barbados', 'FrontEnd_Developer', 'Fresher', '', '', '0000-00-00', '0000-00-00', 'C', ' and ', ' , ', 'AP23'),
(10, 'tgn', 'tgb', 'tgh@gmail.com', '', '7894561235', '', '', '', '', '', '', '', '', 'rf', 'Belize', 'Belize', 'er', '7894', 'sd', '', '', '', ' , ', ' , ', '74', 'Belize', 'Belize', 'PHP_Developer', 'Fresher', '', '', '0000-00-00', '0000-00-00', 'ef , ', ' and ', ' , ', 'AP23'),
(11, 'Nikitha', 'Linganeni', 'nikitha@gmail.com', '', '7894561235', '', '', 'SRM', 'Andhra Pradesh', 'India', 'CSE', '2027', 'AI and ML', 'SRM', 'Andhra Pradesh', 'India', 'CSE', '2025', 'AI and ML', 'https://github.com/Manisai-459', '', '', 'https://github.com/Manisai-459/Semester-Projects/blob/main/sem-3-class_room_management_system.cpp , https://github.com/Manisai-459/Semester-Projects/blob/main/sem2%20-%20Polynomials.c , ', 'https://github.com/Manisai-459/Semester-Projects/blob/main/sem-3-class_room_management_system.cpp , https://github.com/Manisai-459/Semester-Projects/blob/main/sem2%20-%20Polynomials.c , ', 'vijayawada , kankipadu', 'Andhra Pradesh', 'India', 'Django_Developer', 'Experienced', 'agumentik', 'PHP', '2023-06-01', '2023-06-30', 'C , C++ , Java , HTML , Python , CSS , Java Script , ', 'Web developemnt and ', 'https://twitter.com/search?q=%23WIvIND&src=trend_click&vertical=trends , ', 'AP23'),
(12, 'rushitha', 'cherukuri', 'rushi@gmail.com', '', '1234567892', '', '', 'SRM', 'Andhra Pradesh', 'India', 'CSE', '2027', 'AI and ML', 'SRM', 'Andhra Pradesh', 'India', 'CSE', '2025', 'AI and ML', 'https://github.com/Manisai-459', '', '', 'https://manisaiportfolio.netlify.app/', 'https://github.com/Manisai-459/Semester-Projects/blob/main/sem-3-class_room_management_system.cpp , https://github.com/Manisai-459/Semester-Projects/blob/main/sem2%20-%20Polynomials.c , ', 'vijayawada , kankipadu', 'Andhra Pradesh', 'India', 'Django_Developer', 'Experienced', 'agumentik', 'PHP', '2023-06-27', '2023-07-29', 'C , C++ , Java , python , HTML , ', 'Web developemnt and Machine Learning and', 'https://twitter.com/search?q=%23WIvIND&src=trend_click&vertical=trends , https://docs.github.com/en/get-started/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax , ', 'AP23');

-- --------------------------------------------------------

--
-- Table structure for table `disparency`
--

CREATE TABLE `disparency` (
  `id` int(255) NOT NULL,
  `wid` varchar(600) NOT NULL,
  `issue` varchar(600) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `disparency`
--

INSERT INTO `disparency` (`id`, `wid`, `issue`, `status`) VALUES
(3, 'AP23', 'ewv', 1),
(6, 'AP23', 'kjqefnn iojewrfo pw pokw owk ipofjrwipovjiporjr09r09 vi0rv r[0rwi0orwi0 jri0ovjr', 1),
(7, 'AQ123', 'jefjewhriuh eiurh iu ehhf iuh iuciuh iuht iuoerghriughrg riughdghghiughriuoriuoghiu ', 0),
(8, 'AP23', 'ure iug eiu ciu iuwefiuguyg wec ', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disparency`
--
ALTER TABLE `disparency`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `disparency`
--
ALTER TABLE `disparency`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
