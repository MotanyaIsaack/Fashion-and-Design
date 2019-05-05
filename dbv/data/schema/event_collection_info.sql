-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 09:00 PM
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
-- Table structure for table `event_collection_info`
--

CREATE TABLE `event_collection_info` (
  `table_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `landing_img_id` int(11) NOT NULL,
  `item_info` text NOT NULL,
  `item_summary` text NOT NULL,
  `overview_header` varchar(255) NOT NULL,
  `overview_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_collection_info`
--

INSERT INTO `event_collection_info` (`table_id`, `item_id`, `item_name`, `landing_img_id`, `item_info`, `item_summary`, `overview_header`, `overview_content`) VALUES
(1, 1, 'FIMA 2018, Festival International de la Mode Africaine', 1, 'KikoRomeo showed its latest collection “Desert Rhapsody” at FIMA (Festival International de la Mode Africaine) by Alphadi, in Dakhla, Western Sahara on 23rd November 2018. This was the first time FIMA had been held outside Niger, and celebrated a coming together of artists, musicians and designers from around Africa and beyond. The 4 day festival included a Music Festival, Young Designer and Model Competition, Jewellery and Leatherwork show, Panafrican show and show of Designers from 5 Continents. Guests stayed in elegant tents, modelled on a traditional Tuareg style village.\r\nThe show opened with an outstanding couture cloak of wool with patchwork inserts. The cloak picks on the shield motif in the Kenyan flag and symbolises the brand’s commitment to sustainable fashion as fabric wastage is sewn into crazy patchwork, through a project which incorporates 15 women groups across Western Kenya.\r\nThe rest of the collection was menswear, inspired by the idea of Maasai travelling through the desert. Picking up on traditional reds and blues, KikoRomeo commissioned handwoven cotton checks  for dramatic scarves and turbans. These were teamed with layers of tunic shirts over skinny leg pants, and accessorised with KikoRomeo by Baobab fishskin bags, done in collaboration with Victoria Foods, who tanned the Nile Perch skins  in Kitale.', 'KikoRomeo showed its latest collection “Desert Rhapsody” at FIMA (Festival\r\nInternational de la Mode Africaine) by Alphadi, in Dakhla, Western Sahara on 23rd\r\nNovember 2018. This was the first time FIMA had been held outside Niger, and\r\ncelebrated a coming together of artists, musicians and designers from around Africa\r\nand beyond.', 'Collection Name, By, Bags by, Held On', 'Desert Rhaspody, Kikoromeo, Baobab Fishskin bags, 23 November 2018'),
(2, 2, 'LFW 2018, Lagos Fashion Week 2018', 2, 'It was a new generation takeover as 22-year-old Iona McCreath took to the runway with the latest SS2019 KIKOROMEO collection on Thursday 25th October night at Day 1 of Lagos Fashion Week. Iona, who has apprenticed in her mother’s fashion business since birth, took the bow as she presented the brand’s latest collection. Now co-designing with her mother, she is taking the lead on the silhouettes, while her mother works on the textiles and cutting. To celebrate this new way of working they chose baptism by fire in presenting at Lagos Fashion Week, the most influential platform in Africa.\r\nSpeaking about her experience Iona said “Lagos is very influential around Africa and acts as a voice of Africa to the world. When people see Africa the first thing they see or hear is Nigerian. That means being able to integrate within the Nigerian market is strategic. It is also very exciting, because of the vibrant entertainment scene, which has helped contemporary arts and culture develop to be at the heart of the economy. Nigerians love fashion and the collection has been very well received”\r\n\r\n\r\nCollection styled by Moses Ebito of Moashy Styling https://www.facebook.com/Moashy-Styling-388149878052186/\r\nBags in Fishskin leather KikoRomeo by Baobab Global. https://www.facebook.com/search/top/?q=Baobab%20Global\r\nThank you to Bella Naija for the photos!\r\n', 'It was a new generation takeover as 22-year-old Iona McCreath took to the runway with the latest SS2019 KIKOROMEO collection on Thursday 25th October night at Day 1 of Lagos Fashion Week. Iona, who has apprenticed in her mother’s fashion business since birth, took the bow as she presented the brand’s latest collection. ', 'Collection, Styled by,Bags, Photo Credits, Held on', 'SS2019 KIKOROMEO, Moses Ebito of Moashy Styling, Fishskin leather by Baobab Global, Bella Naija, 25th October 2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_collection_info`
--
ALTER TABLE `event_collection_info`
  ADD PRIMARY KEY (`table_id`,`item_id`),
  ADD UNIQUE KEY `event_name` (`item_name`),
  ADD KEY `welcome_img_url` (`landing_img_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_collection_info`
--
ALTER TABLE `event_collection_info`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_collection_info`
--
ALTER TABLE `event_collection_info`
  ADD CONSTRAINT `event_collection_info_ibfk_1` FOREIGN KEY (`landing_img_id`) REFERENCES `image` (`img_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
