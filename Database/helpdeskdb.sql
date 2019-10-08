-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 08:07 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdeskdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `requestID` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `telephone` varchar(13) NOT NULL,
  `dpartment` tinytext NOT NULL,
  `priority` tinytext NOT NULL,
  `description` longtext NOT NULL,
  `date` tinytext NOT NULL,
  `state` tinytext NOT NULL DEFAULT 'open'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`requestID`, `uidUsers`, `telephone`, `dpartment`, `priority`, `description`, `date`, `state`) VALUES
(4, 'dany', '+966536960662', 'Network Department', 'Low', 'adfafsd', '2019-10-02 10:19:35am', 'open'),
(5, 'dany', '+966536960662', 'Network Department', 'High', 'adfadsf', '2019-10-02 10:55:09am', 'open'),
(6, 'dany', '+966536960662', 'Support Department', 'High', 'BRUH BRUH BRUH BURH\r\n\r\nbruh bru bruh?\r\n\r\nburhBRUH BRUH BRUH BURHBRUH BRUH BRUH BURHBRUH BRUH BRUH BURHBRUH BRUH BRUH BURHBRUH BRUH BRUH BURHBRUH BRUH BRUH BURHBRUH BRUH BRUH BURHBRUH BRUH BRUH BURHBRUH BRUH BRUH BURHBRUH BRUH BRUH BURH.\r\n\r\nbruh,\r\nbruh bruh', '2019-10-02 11:08:09am', 'open'),
(7, 'Jawadalsaeed', '+966536960662', 'fdfa', 'Moderate', 'sdfasdadf', '2019-10-02 11:11:05am', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` varchar(20) NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(9, 'Jawadalsaeed', 'jawadalsaeed266@gmail.com', '$2y$10$gwRzytLYOBbbssztEmMiKe7Xj/uApbD4YK5GwX820Mri1uP/yQEeO'),
(14, 'dany', 'bob@hotmail.com', '$2y$10$QsH3qMmF1Xzp.31UpkRi0.Iz/aCt2kwsdwPJaZ4S7imEX5SduaRhS'),
(15, 'dragonx1x1x1', 'drdaonx1x1x1@hotmail.com', '$2y$10$P0NGhiv63QBd0FTMmyfUGuo4ExgyMMtV34IS9pybR6DCJPL6xj3BS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`requestID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `requestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
