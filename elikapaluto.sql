-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2017 at 08:07 PM
-- Server version: 5.7.12-log
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elikapaluto`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--
DROP DATABASE IF EXISTS elikapaluto;
CREATE DATABASE elikapaluto /*!40100 DEFAULT CHARACTER SET latin1 */;
USE elikapaluto;
CREATE TABLE `appointments` (
  `app_id` int(11) NOT NULL,
  `app_date` date DEFAULT NULL,
  `app_time` time DEFAULT NULL,
  `full_name` varchar(45) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `comments` text,
  `status` varchar(45) CHARACTER SET latin1 NOT NULL,
  `haircut_type` varchar(45) NOT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `barber_name` varchar(42) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`app_id`, `app_date`, `app_time`, `full_name`, `email`, `comments`, `status`, `haircut_type`, `phone`, `barber_name`) VALUES
(10, NULL, NULL, 'Nadav Rosenfeld', 'nadavro1@gmail.com', 'הערה', '0', 'תספורת גברים', '0526549910', 'אסתי');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback_id` int(11) NOT NULL,
  `feedback_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='clients'' feedbacks.';

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `itemID` int(11) NOT NULL,
  `product_name` varchar(45) CHARACTER SET latin1 NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first` varchar(42) NOT NULL,
  `last` varchar(42) NOT NULL,
  `uid` varchar(1000) NOT NULL,
  `pwd` varchar(1000) NOT NULL,
  `phone` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first`, `last`, `uid`, `pwd`, `phone`) VALUES
(14, 'Nadav', 'Rosenfeld', 'nadavro1@gmail.com', 'root', '0526549910'),
(15, 'סהר', 'רון', 'email@gmail.co', 'test', '');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `worker_id` int(11) NOT NULL,
  `first` varchar(45) CHARACTER SET latin1 NOT NULL,
  `last` varchar(45) CHARACTER SET latin1 NOT NULL,
  `uid` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `pwd` varchar(1000) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `email` (`email`),
  ADD KEY `barber_name` (`barber_name`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
