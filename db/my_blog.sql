-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2018 at 10:57 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mariam_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(255) NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `user_id`, `username`, `password`, `email`) VALUES
(22, NULL, 'maryamkamal', '', 'marrryka'),
(30, NULL, 'maryam', 'ffffff', 'ggggg'),
(31, NULL, 'mar', '01092328591mk', 'mar@yahoo'),
(32, NULL, NULL, '123456', 'maryam.kamal40@yahoo.com'),
(33, NULL, 'maryam', '123456', 'maryam.kamal40@yahoo.com'),
(34, NULL, 'maryam', '123456', 'maryam.kamal40@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `body`, `date`, `user_id`) VALUES
(10, 'FFmmm', 'nnnn', '2018-04-19', NULL),
(24, 'rrrrrr', 'rrrrrrr', '2018-04-19', NULL),
(25, 'rrrrrr', 'rrrrrrr', '2018-04-19', NULL),
(26, 'rrrrrr', 'rrrrrrr', '2018-04-19', NULL),
(27, 'rrrrrr', 'rrrrrrr', '2018-04-19', NULL),
(28, 'rrrrrr', 'rrrrrrr', '2018-04-19', NULL),
(30, 'rrrrrr', 'rrrrrrr', '2018-04-19', NULL),
(31, 'mee', 'meeee', '2018-04-23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `password`, `email`, `username`) VALUES
(63, '1234', 'mary', 'mary'),
(66, '123456', 'maryam', 'maryam'),
(67, '', 'hgggffff', 'vghfhffff'),
(68, '', 'bbbbnnnn', 'bbbbnnnn'),
(69, 'nnnnn', 'bbbbnn', 'bbbbn'),
(70, 'mmmm', 'bbbbb', 'nnnnn'),
(71, 'mmmm', 'bbbbb', 'nnnnn'),
(72, 'kkk', 'mmmm', 'sss'),
(73, 'ttttt', 'hhhhhmmm', 'hhhmmm'),
(74, '01092328591mk', '', 'maryam'),
(75, '01092328591mk', 'mmmmmm', 'maryam'),
(76, '123456', 'maryam.kamal40@yahoo.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`user_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `userid` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
