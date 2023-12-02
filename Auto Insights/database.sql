-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2023 at 09:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auto_insights`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `CarID` int(11) NOT NULL,
  `Make` text NOT NULL,
  `Model` text NOT NULL,
  `Year` int(11) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Description` text NOT NULL,
  `PicturesPath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carlikes`
--

CREATE TABLE `carlikes` (
  `CarLikesID` int(11) NOT NULL,
  `CarID` int(11) NOT NULL,
  `LikeCount` int(11) NOT NULL,
  `DislikeCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ReviewID` int(11) NOT NULL,
  `CarID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ReviewText` mediumtext NOT NULL,
  `ReviewPicturesPath` text NOT NULL,
  `Rating` float NOT NULL,
  `ReviewDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CommentText` longtext NOT NULL,
  `ReportCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviewlikes`
--

CREATE TABLE `reviewlikes` (
  `ReviewLikesID` int(11) NOT NULL,
  `ReviewID` int(11) NOT NULL,
  `LikeCount` int(11) NOT NULL,
  `DislikeCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `email`, `full_name`) VALUES
(1, '$2y$10$QeUPcNs7QbLSO97jYpW3ue3q1SMNpChhc153LWlIZxb7EeWyRZu2a', 'g@gmail.com', 'zachary'),
(2, '$2y$10$qh3C515uC8HHRXdLj7z.6.oSgiOz4jGTNTiznZ78ZIXVOYoW6A.P.', 'a@gmail.com', 'zach'),
(3, '$2y$10$OfmaHfKUCWRQCiWGxa9NeecwGumK9MBfcJNvBXPtkHP9qi0hmBtyy', 'abc@gmail.com', 'zachary jolliff'),
(4, '$2y$10$v4brjUaKHW2GKs9QZsjwXu9oCRmTnBgGJRsAPxllPcLUpXjtrmqDa', 'z@gmail.com', 'zachary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`CarID`);

--
-- Indexes for table `carlikes`
--
ALTER TABLE `carlikes`
  ADD PRIMARY KEY (`CarLikesID`),
  ADD KEY `CarID` (`CarID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ReviewID`),
  ADD KEY `Car` (`CarID`),
  ADD KEY `User` (`UserID`);

--
-- Indexes for table `reviewlikes`
--
ALTER TABLE `reviewlikes`
  ADD PRIMARY KEY (`ReviewLikesID`),
  ADD KEY `ReviewID` (`ReviewID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `CarID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carlikes`
--
ALTER TABLE `carlikes`
  MODIFY `CarLikesID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ReviewID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviewlikes`
--
ALTER TABLE `reviewlikes`
  MODIFY `ReviewLikesID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carlikes`
--
ALTER TABLE `carlikes`
  ADD CONSTRAINT `CarID` FOREIGN KEY (`CarID`) REFERENCES `car` (`CarID`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `Car` FOREIGN KEY (`CarID`) REFERENCES `car` (`CarID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `User` FOREIGN KEY (`UserID`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `reviewlikes`
--
ALTER TABLE `reviewlikes`
  ADD CONSTRAINT `ReviewID` FOREIGN KEY (`ReviewID`) REFERENCES `review` (`ReviewID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


