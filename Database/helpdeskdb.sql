-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 08:02 AM
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
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `idEmployees` int(11) NOT NULL,
  `uidEmployees` tinytext NOT NULL,
  `pwdEmployees` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`idEmployees`, `uidEmployees`, `pwdEmployees`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `requestID` int(6) UNSIGNED ZEROFILL NOT NULL,
  `uidUsers` varchar(20) NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `telephone` int(13) NOT NULL,
  `department` tinytext NOT NULL,
  `priority` tinytext NOT NULL,
  `title` tinytext NOT NULL,
  `description` longtext NOT NULL,
  `requestCreated` date NOT NULL DEFAULT current_timestamp(),
  `state` tinytext NOT NULL DEFAULT 'open'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`requestID`, `uidUsers`, `emailUsers`, `telephone`, `department`, `priority`, `title`, `description`, `requestCreated`, `state`) VALUES
(000005, 'JawadAlsaeed266', 'jawadalsaeed266@gmail.com', 2147483647, 'System Department', 'Moderate', 'helolo i wnat user', 'sdajflk;jasjk;lfdas;jlkadsfjklfds', '2019-10-29', 'open'),
(000006, 'JawadAlsaeed266', 'jawadalsaeed266@gmail.com', 2147483647, 'Support Department', 'Moderate', 'sdfsda', 'asdfasdfs', '2019-10-29', 'open'),
(000007, 'JawadAlsaeed266', 'jawadalsaeed266@gmail.com', 2147483647, 'Sales Department', 'High', 'fsdafsad', 'sadfadsafd', '2019-10-29', 'open'),
(000008, 'JawadAlsaeed266', 'jawadalsaeed266@gmail.com', 2147483647, 'Support Department', 'High', 'kjlafaa', 'dasfdsa', '2019-10-29', 'closed');

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
(1, 'JawadAlsaeed266', 'jawadalsaeed266@gmail.com', '$2y$10$0oMcrL/KvYKHt/yhygeWfOOaJ8h7AZzDaFlOkKBk/M5npeeG6iUzi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`idEmployees`);

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
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `idEmployees` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `requestID` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
