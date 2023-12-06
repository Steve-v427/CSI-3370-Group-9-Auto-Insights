-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 05:19 AM
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
  `CarID` int(11) NOT NULL,
  `LikeCount` int(11) NOT NULL,
  `DislikeCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `COMMENT_ID` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `COMMENT_TEXT` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`COMMENT_ID`, `id`, `COMMENT_TEXT`) VALUES
(2, 1, 'coll'),
(3, 1234, 'hello this is steve'),
(4, 23232, 'Testing'),
(5, 23232, 'Testing'),
(6, 2, 'This is a long comment that needs alot of space because people like to talk about what other people wrote.'),
(7, 2, 'This is a long comment that needs alot of space because people like to talk about what other people wrote.'),
(8, 3, 'wadwad'),
(9, 5, 'adwadwadwa'),
(10, 323, 'aniudwnakjdnwajdn kja'),
(11, 2323, 'adbwagdwagduywa '),
(12, 69, 'wadwadwadwa');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `CarID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `short_sentence` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `ReviewDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
(4, '$2y$10$v4brjUaKHW2GKs9QZsjwXu9oCRmTnBgGJRsAPxllPcLUpXjtrmqDa', 'z@gmail.com', 'zachary'),
(5, '$2y$10$z/KwqtEgilebvCkAacinO.obVLDFi6itnSIImKL1e69LLYArWhW4q', 'steve@gmail.com', 'steve'),
(6, '$2y$10$MQTG4ZqcGj9Smzu6IL.8ouskA4CNGO9K042noJlqJ84Lzh76A0.9K', 'Steven@gmail.com', 'Steven Vartanian'),
(7, '$2y$10$WsPp4pukLBJv52K5Wm9c6.t53MtMNXb3R971wSt6zc2I/4O/uL66K', 'tester@gmail.com', 'Test Tester'),
(8, '$2y$10$HPfDhSZHz4avIPYIBdd4pOqrumkrV0tADEZAe6sP/7S0tVJZ6ije2', 'bill@gmail.com', 'bill'),
(9, '$2y$10$DOG2QBwPXiCde4gAuMoMEOGVM.QqmaVQ5Xw4oidpCRwnXrEhAkyb6', 'andy@gmail.com', 'andy');

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
  ADD KEY `CarID` (`CarID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`COMMENT_ID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `COMMENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviewlikes`
--
ALTER TABLE `reviewlikes`
  MODIFY `ReviewLikesID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  ADD CONSTRAINT `ReviewID` FOREIGN KEY (`ReviewID`) REFERENCES `review` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
