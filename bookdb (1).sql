-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 10:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `newbooks`
--

CREATE TABLE `newbooks` (
  `id` int(11) NOT NULL,
  `book_name` varchar(25) NOT NULL,
  `author_name` varchar(25) NOT NULL,
  `prev_price` float DEFAULT NULL,
  `book_price` float DEFAULT NULL,
  `book_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newbooks`
--

INSERT INTO `newbooks` (`id`, `book_name`, `author_name`, `prev_price`, `book_price`, `book_image`) VALUES
(1, 'AISLYN', 'Suzanne Walters', 950, 810, './upload/lyfstyle1.jpg'),
(2, 'Death Before Breakfast', 'George Bellairs', 630, 600, './upload/mystery1.jpg'),
(3, 'Beauty is a Wound', 'Eka Kurniawan', 1200, 1150, './upload/fiction1.jpg'),
(4, 'Harry Porter', 'J.K Rowling', 990, 900, './upload/fantasy1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `new_arrival`
--

CREATE TABLE `new_arrival` (
  `ID` int(11) NOT NULL,
  `book_name` text NOT NULL,
  `author_name` text NOT NULL,
  `prev_price` float NOT NULL,
  `book_price` float NOT NULL,
  `book_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_arrival`
--

INSERT INTO `new_arrival` (`ID`, `book_name`, `author_name`, `prev_price`, `book_price`, `book_image`) VALUES
(1, 'Introduction to Algorithms', 'Thomas H Corman', 610, 500, './upload/education1.jpg'),
(2, 'After The Sun', 'Jonas Eka', 930, 780, './upload/fiction2.png'),
(3, 'Hidden Treasure', 'Kara Adams', 300, 220, './upload/other1.png'),
(4, 'Engineering Materials-I', 'Micheal F & Jonas', 120, 240, './upload/material.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `oldbook`
--

CREATE TABLE `oldbook` (
  `ID` int(11) NOT NULL,
  `nameofbook` text NOT NULL,
  `author` text NOT NULL,
  `edition` text NOT NULL,
  `chooseoption1` varchar(11) NOT NULL,
  `chooseoption2` varchar(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image_url` text NOT NULL,
  `Time_track` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `Top_Bid` int(11) NOT NULL,
  `Top_Bidder_ID` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oldbook`
--

INSERT INTO `oldbook` (`ID`, `nameofbook`, `author`, `edition`, `chooseoption1`, `chooseoption2`, `price`, `image_url`, `Time_track`, `status`, `Top_Bid`, `Top_Bidder_ID`, `seller_id`) VALUES
(1, '1', '1', '1', 'Yes', 'Yes', 1, 'IMG-6303339a76b211.59954182.jpg', 2, 'ongoing', 1222222, 31, 32),
(2, 'vv', 'w', '23', 'Yes', 'No', 11, 'IMG-630334aae97db0.23814510.png', 3, 'ongoing', 11, 0, 31),
(3, '12', '12', '12', 'No', 'Yes', 12, 'IMG-630338ee168a20.53786943.jpg', 4, 'ongoing', 12, 0, 32),
(4, '12', '12', '12', 'No', 'Yes', 12, 'IMG-6303393df3b289.41581464.jpg', 5, 'finished', 12, 0, 32),
(5, '12', '12', '12', 'No', 'Yes', 12, 'IMG-6303395e28c741.38062128.jpg', 6, 'yet to bid', 12, 0, 32);

-- --------------------------------------------------------

--
-- Table structure for table `time_track`
--

CREATE TABLE `time_track` (
  `Track_ID` int(11) NOT NULL,
  `starttime` timestamp NOT NULL DEFAULT current_timestamp(),
  `endtime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_track`
--

INSERT INTO `time_track` (`Track_ID`, `starttime`, `endtime`) VALUES
(1, '2022-08-22 07:12:00', '2022-08-31 07:13:00'),
(2, '2022-08-22 07:43:00', '2022-09-07 07:43:00'),
(3, '2022-08-22 07:47:00', '2022-08-29 07:47:00'),
(4, '2022-08-14 08:05:00', '2022-09-12 08:05:00'),
(5, '2022-08-01 08:05:00', '2022-08-07 08:05:00'),
(6, '2022-08-31 08:05:00', '2022-09-08 08:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `fname`, `lname`, `email`, `password`) VALUES
(31, 'Tanjum', 'Motin', 'tanjummotin1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(32, 'Ayesha ', 'Banu', 'tanjummotin2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newbooks`
--
ALTER TABLE `newbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_arrival`
--
ALTER TABLE `new_arrival`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `oldbook`
--
ALTER TABLE `oldbook`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Time_track` (`Time_track`);

--
-- Indexes for table `time_track`
--
ALTER TABLE `time_track`
  ADD PRIMARY KEY (`Track_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newbooks`
--
ALTER TABLE `newbooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `new_arrival`
--
ALTER TABLE `new_arrival`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
