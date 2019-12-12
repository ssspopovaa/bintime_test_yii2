-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2019 at 02:28 PM
-- Server version: 5.7.28-0ubuntu0.16.04.2
-- PHP Version: 7.0.33-0ubuntu0.16.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yiidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `zip` int(10) NOT NULL,
  `country` varchar(5) NOT NULL,
  `city` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `house` varchar(10) NOT NULL,
  `office` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `zip`, `country`, `city`, `street`, `house`, `office`) VALUES
(1, 3, 33333, 'UA', 'sdf', 'sdf', '22', '22'),
(2, 3, 22222, 'EN', 'KIEV', 'jjjj', '99', '99'),
(5, 12, 333, 'UA', 'hhhh', 'hhh', 'hhh', 'hhh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `zip` int(10) NOT NULL,
  `country` varchar(5) NOT NULL,
  `city` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `house` varchar(10) NOT NULL,
  `office` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `login`, `password`, `email`, `sex`, `date`, `zip`, `country`, `city`, `street`, `house`, `office`) VALUES
(3, 'Anatoliy', 'Popov', 'ssss', '111111', 'sss@sss.ua', '-', '2019-12-12 01:45:07', 12121, 'UA', 'Kiev', 'Koroleva', '22', '22'),
(15, 'uuu', 'uuu', 'uuuuuu', 'uuuuuuu', 'uuu@uu.uu', '-', '2019-12-12 12:27:22', 222222, 'UU', 'uu', 'uu', 'uu', 'uu'),
(11, 'sssss', 'ssssss', 'sssssss', 'ssssss', 'ssssssss@sss.ss', '-', '2019-12-12 11:35:01', 22222, 'UA', 'sss', 'www', 'ww', 'ww'),
(12, 'kkkkkk', 'kkkkkk', 'kkkkkk', 'kkkkkk', 'kkk@kk.kk', 'female', '2019-12-12 12:24:15', 111111, 'UA', 'kkkkkk', 'kkkkk', 'kkk', 'kkk'),
(13, 'ffffff', 'ffffff', 'ffffff', 'ffffff', 'sss@ssssss.ss', '-', '2019-12-12 12:26:13', 22222, 'UA', 'KIEV', 'kokoko', '22', '22'),
(14, 'LLL', 'LLL', 'lllllll', 'lllllll', 'lll@ll.ll', 'male', '2019-12-12 12:26:44', 33333, 'UA', 'lll', 'lll', 'll', 'll');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
