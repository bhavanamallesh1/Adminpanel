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
-- Database: `teamlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `teamlogin`
--

CREATE TABLE `teamlogin` (
  `id` int(100) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` char(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` char(10) NOT NULL,
  `image` longblob NOT NULL,
  `workid` varchar(30) DEFAULT NULL,
  `assigndate` date DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `datasetlength` bigint(100) NOT NULL,
  `completed` bigint(100) NOT NULL,
  `pc` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teamlogin`
--

INSERT INTO `teamlogin` (`id`, `username`, `password`, `email`, `contact`, `image`, `workid`, `assigndate`, `deadline`, `datasetlength`, `completed`, `pc`) VALUES
(1, 'Mani Sai Yalavarthipati', '123', 'manisaiyalavarthipati459@gmail.com', '6309337144', 0x496e737069726174696f6e616c2051756f7465732057616c6c70617065722054686520417274204d61642057616c6c7061706572732e6a7067, 'AP23', '2023-06-21', '2023-06-27', 40, 8, 20),
(14, 'Nikitha', '123', 'nikitha@gmail.com', '7894561238', 0x696d672d72656d6f766562672d707265766965772e706e67, '45asd', '2023-06-26', '2023-06-28', 50, 0, 0),
(15, 'mallesh', '123', 'mallesh@gmail.com', '1234567899', 0x32303233303631365f3133323231372e6a7067, 'AQ123', '2023-06-26', '2023-06-29', 34, 0, 0),
(17, 'manoj pennada', '123', 'manoj@gmail.com', '9876543212', 0x426c61636b204d696e696d616c697374204d6f7469766174696f6e2051756f7465204c696e6b6564496e2042616e6e65725f706167652d303030312e6a7067, '3M454', '2023-06-27', '2023-06-29', 12, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teamlogin`
--
ALTER TABLE `teamlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `workid` (`workid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teamlogin`
--
ALTER TABLE `teamlogin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
