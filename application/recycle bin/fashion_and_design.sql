-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 07:13 AM
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
-- Database: `fashion_and_design`
--

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `collection_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `collection_name` varchar(255) NOT NULL,
  `landing_img_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collection_category`
--

CREATE TABLE `collection_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection_category`
--

INSERT INTO `collection_category` (`category_id`, `category_name`) VALUES
(1, 'menswear'),
(2, 'womenswear'),
(3, 'vintage'),
(4, 'kids');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `landing_img_id` int(11) NOT NULL,
  `event_info` text NOT NULL,
  `event_summary` text NOT NULL,
  `overview_header` varchar(255) NOT NULL,
  `overview_content` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_date`, `landing_img_id`, `event_info`, `event_summary`, `overview_header`, `overview_content`, `location`) VALUES
(1, 'FIMA 2018, Festival International de Mode Africaine 2018', '2018-11-23', 1, 'KikoRomeo showed its latest collection “Desert Rhapsody” at FIMA (Festival International de la Mode Africaine) by Alphadi, in Dakhla, Western Sahara on 23rd November 2018. This was the first time FIMA had been held outside Niger, and celebrated a coming together of artists, musicians and designers from around Africa and beyond. The 4 day festival included a Music Festival, Young Designer and Model Competition, Jewellery and Leatherwork show, Panafrican show and show of Designers from 5 Continents. Guests stayed in elegant tents, modelled on a traditional Tuareg style village. The show opened with an outstanding couture cloak of wool with patchwork inserts. The cloak picks on the shield motif in the Kenyan flag and symbolises the brand’s commitment to sustainable fashion as fabric wastage is sewn into crazy patchwork, through a project which incorporates 15 women groups across Western Kenya. The rest of the collection was menswear, inspired by the idea of Maasai travelling through the desert. Picking up on traditional reds and blues, KikoRomeo commissioned handwoven cotton checks for dramatic scarves and turbans. These were teamed with layers of tunic shirts over skinny leg pants, and accessorised with KikoRomeo by Baobab fishskin bags, done in collaboration with Victoria Foods, who tanned the Nile Perch skins in Kitale. ', ' KikoRomeo showed its latest collection “Desert Rhapsody” at FIMA (Festival\r\n                                International de la Mode Africaine) by Alphadi, in Dakhla, Western Sahara on 23rd\r\n                                November 2018. This was the first time FIMA had been held outside Niger, and\r\n                                celebrated a coming together of artists, musicians and designers from around Africa\r\n                                and beyond.', 'Collection name, Collection by, Bags by, Held on', 'The Desert Rhaspody, Kikoromeo, Baobab fishskin bags, 23 November 2018', 'Dakhla, Western Sahara');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `img_id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`img_id`, `img_name`) VALUES
(1, 'fima1.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`collection_id`),
  ADD UNIQUE KEY `collection_name` (`collection_name`),
  ADD KEY `welcome_img_id` (`landing_img_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `collection_category`
--
ALTER TABLE `collection_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`),
  ADD UNIQUE KEY `event_name` (`event_name`),
  ADD KEY `welcome_img_url` (`landing_img_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `collection_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collection_category`
--
ALTER TABLE `collection_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collection`
--
ALTER TABLE `collection`
  ADD CONSTRAINT `collection_ibfk_1` FOREIGN KEY (`landing_img_id`) REFERENCES `image` (`img_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `collection_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `collection_category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`landing_img_id`) REFERENCES `image` (`img_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
