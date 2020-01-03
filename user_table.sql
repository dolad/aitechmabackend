-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2020 at 06:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aitechma_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `userid` varchar(191) NOT NULL,
  `firstname` varchar(191) NOT NULL,
  `lastname` varchar(191) NOT NULL,
  `email` varchar(252) NOT NULL,
  `password` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`userid`, `firstname`, `lastname`, `email`, `password`, `phone`, `created`) VALUES
('0075553563', 'Davidsadf', 'Akandeasfd', 'adavidoladfaadfaele@gmail.com', '7ebf29ed1d79c39457fb0aa096b5b6fe', '09081490379', '2020-01-02 02:17:17'),
('3114368662', 'ogunkunlw', 'sfasdfa', 'afsdfad@gdad.com', '785cc2fa102790b81bc760c579a11c06', '3233212313', '2020-01-02 01:03:10'),
('3604246051', 'Jamiu', 'Alao', 'adejosh2016@gmail.com', '809861b2bd8e52cbb4007633ac1bf2eb', '08064572555', '2020-01-03 15:22:19'),
('4493614536', 'David', 'sfasdfa', 'sdfljsdfadsjdafdjsa@fdad.das', '785cc2fa102790b81bc760c579a11c06', 'dsfasdfads', '2020-01-03 18:06:54'),
('4546951831', 'Jamiu', 'Alao', 'sunnize4all@gmail.com', '8dd1ff1c59d2851b9c11597e62639d65', '08064572555', '2020-01-03 15:19:23'),
('4785842748', 'adsfadfdfasad', 'sdfadsfads', 'sdasdfsdafdasadfsd@dfasd.dad', '785cc2fa102790b81bc760c579a11c06', '144341sa32413', '2020-01-03 18:01:42'),
('5035745617', 'adsfadfdfa', 'sdfadsfads', 'sdasdfasd@dfasd.dad', 'f2b0f05eb40dc886e630b45bf5c2d540', '14434132413', '2020-01-03 17:58:01'),
('5342185720', 'Davidsadf', 'Akandeasfd', 'adavidoladele@gmail.com', '785cc2fa102790b81bc760c579a11c06', '09081490379', '2020-01-03 15:04:49'),
('9048958464', 'adsfadfdfasad', 'sdfadsfads', 'sdasdfasadfsd@dfasd.dad', 'e0ba909f6408c13ddf8463de6b96e48c', '14434132413', '2020-01-03 17:59:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
