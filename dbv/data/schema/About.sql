-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2019 at 12:46 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

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
-- Table structure for table `About`
--

CREATE TABLE `About` (
  `ID` int(11) NOT NULL,
  `Awards` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `About`
--

INSERT INTO `About` (`ID`, `Awards`) VALUES
(1, '<p>KikoRomeo is a Kenyan heritage brand, based in Nairobi with over two decades in the fashion business. Recent achievements include dressing the actresses from the Kenyan movie &ldquo;Rafiki&rdquo; at the Cannes Film Festival as well as musicians Mr Eazi and Blinky Bill. KikoRomeo is no stranger to the red carpet having famously dressed Dorothy Nyon&rsquo;go to accompany Lupita her daughter, for the BAFTA Awards. Over the years KikoRomeo has won East African Designer of the Year at the Swahili Fashion Awards 2014, Icon of Hope at AFDW Nigeria in 2015 as well as head creative Ann McCreath being listed by Arise magazine in the &ldquo;100 Women Changing Africa&rdquo;, and African Woman&rsquo;s &lsquo;Fashion Power Players&rdquo;. Ann has been quoted severally in the Business of Fashion and continues to make a mark by mentoring the next generation of designers including refugees in Kenya. Iona has been celebrated in her own right, for her sustainable fashion brand Kikoti, including being featured in ID magazine. However the duo see their most important award as the praise they get from clients and fans, who constantly encourage them, by showing just how much appreciation they have for KikoRomeo.test</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `About`
--
ALTER TABLE `About`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `About`
--
ALTER TABLE `About`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
