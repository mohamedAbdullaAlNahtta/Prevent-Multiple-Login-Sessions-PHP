-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 09:12 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prvent-multiple-sessions-login`
--

-- --------------------------------------------------------

--
-- Table structure for table `login-sessions`
--

CREATE TABLE `login-sessions` (
  `id` int(11) NOT NULL,
  `username` varchar(2500) NOT NULL,
  `token` varchar(250) NOT NULL,
  `loginTme` datetime DEFAULT NULL,
  `loginOut` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login-sessions`
--

INSERT INTO `login-sessions` (`id`, `username`, `token`, `loginTme`, `loginOut`) VALUES
(1, 'ahmed', 'sada', '2021-08-27 00:00:00', '2021-08-27 21:11:47'),
(2, 'ahmed', 'token', '2021-08-27 20:55:49', '2021-08-27 21:11:47'),
(3, 'ahmed', 'token', '2021-08-27 21:00:10', '2021-08-27 21:11:47'),
(4, 'ahmed', 'token', '2021-08-27 21:00:13', '2021-08-27 21:11:47'),
(5, 'ahmed', '09d6da294fb1efd1d088f0d93e7720d6kbcVVILMRIiRfRvg2lg4wWVVQibQomntwVRkc5vXCGwaQ8GbeW', '2021-08-27 21:00:29', '2021-08-27 21:11:47'),
(6, 'mohamed', 'a337b70f17380fd2b092f349140ca2e8iwiivsqXv3PnjWJ7raqLN2Nslxy44UlaefCFkiArx7qA6tzzaC', '2021-08-27 21:01:36', '2021-08-27 00:00:00'),
(7, 'ahmed', '58ef5626308f4d26b86a25998dae5384QH38NNfLb8Zi4mR7c6mfzGYGUR8hUsUPcQSBHLpjBzYsYPKMQo', '2021-08-27 21:11:15', '2021-08-27 21:11:47'),
(8, 'ahmed', '436a102527dbf8c8c66b041ac7e1f04d4M0LTxqBz2Rw6DiMe25CX50OADbA092mWQNQxLZkPoC2JZcr5D', '2021-08-27 21:11:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'mohamed', 'password'),
(2, 'ahmed', 'password'),
(3, 'abdulla', 'password'),
(4, 'mona', 'password'),
(5, 'marwa', 'password'),
(6, 'esraa', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login-sessions`
--
ALTER TABLE `login-sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login-sessions`
--
ALTER TABLE `login-sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
