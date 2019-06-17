-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2019 at 02:26 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hci`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_collection_bridge`
--

CREATE TABLE `event_collection_bridge` (
  `info_id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `collection_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_collection_bridge`
--

INSERT INTO `event_collection_bridge` (`info_id`, `event_id`, `collection_id`) VALUES
(1, 1, NULL),
(2, 2, NULL),
(4, NULL, 3),
(5, NULL, 4),
(6, NULL, 5),
(7, NULL, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_collection_bridge`
--
ALTER TABLE `event_collection_bridge`
  ADD UNIQUE KEY `item_info_id` (`info_id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `collection_id` (`collection_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_collection_bridge`
--
ALTER TABLE `event_collection_bridge`
  ADD CONSTRAINT `FK_collection_bridge` FOREIGN KEY (`collection_id`) REFERENCES `collection` (`collection_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_event_bridge` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_info_bridge` FOREIGN KEY (`info_id`) REFERENCES `event_collection_info` (`info_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
