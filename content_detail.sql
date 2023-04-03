-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 07:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neutron`
--

-- --------------------------------------------------------

--
-- Table structure for table `content_detail`
--

CREATE TABLE `content_detail` (
  `con_id` int(11) NOT NULL,
  `Relative_ID` int(11) NOT NULL,
  `Query` text NOT NULL,
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content_detail`
--

INSERT INTO `content_detail` (`con_id`, `Relative_ID`, `Query`, `sequence`) VALUES
(1, 5, 'What is your current platform\r\n', 1),
(2, 5, 'Which platform you want to move to\r\n', 2),
(3, 5, 'Do you want to migrate all the products, Order, Users to WordPress\r\n', 3),
(4, 5, 'Please share your organization name', 4),
(5, 5, 'Please share your official mail', 5),
(6, 5, 'Thank you! Our team will reach you through mail soon. Have a good day.', 6),
(7, 1, 'Please enter how many blocks you want to buy', 1),
(8, 1, 'please enter your official mail id', 2),
(9, 1, 'Please visit here to buy blocks', 3),
(10, 1, 'Thank you. Hope you like my service, Have a good day.', 4),
(11, 2, 'Please enter the domain name you wish to register ', 1),
(12, 2, 'Please enter some keywords that you may use in your domain name', 2),
(13, 2, 'please enter your official mail id', 3),
(14, 2, 'please visit here to register your domain', 4),
(15, 2, 'Thank you. Hope you like my service, Have a good day.', 5),
(16, 3, 'You have come to the right place. Please add your official mail ID ', 1),
(17, 3, 'You can visit here to know all about the hosting plans we offer', 2),
(18, 4, 'Please enter your organization name', 1),
(19, 4, 'Please enter your official mail ID', 2),
(20, 4, 'Which technology you want to opt for', 3),
(21, 4, 'Thank you. Our team will soon reach to ', 4),
(22, 6, 'Please enter your official mail ID', 1),
(23, 6, 'Please enter your query.', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content_detail`
--
ALTER TABLE `content_detail`
  ADD PRIMARY KEY (`con_id`),
  ADD KEY `Relative_ID` (`Relative_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content_detail`
--
ALTER TABLE `content_detail`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content_detail`
--
ALTER TABLE `content_detail`
  ADD CONSTRAINT `content_detail_ibfk_1` FOREIGN KEY (`Relative_ID`) REFERENCES `contents` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
