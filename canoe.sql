-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 04, 2022 at 11:21 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `adventures`
--

CREATE TABLE `adventures` (
  `id` int(3) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `trip_date` date NOT NULL,
  `duration` varchar(10) NOT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adventures`
--

INSERT INTO `adventures` (`id`, `heading`, `trip_date`, `duration`, `summary`) VALUES
(19, 'Halifax', '2022-11-23', '4 days', 'Our four-day Halifax Kayak Tour is an experience you won’t soon             forget! This relaxing, guided evening paddle will take you along the             Waterfront, under the Macdonald bridge, and around the Georges             Island, just in time to capture some breathtaking golden hour photos!'),
(20, 'Sydney', '2022-11-28', '2 days', ' This tour Includes guide, equipment, instruction and a freshly             prepared beach lunch of fish cakes, home-made baked beans,             home-baked bread and tea. Here we learn the basics of paddling on             dry land before heading out to paddle through the St. Ann’s Bay region.'),
(21, 'Lunenburg', '2022-12-01', '2 hours', 'Launch into Lunenburg Harbour at sunset for a fantastic backdrop. Once the sky is dark, the waters light up bright blue on this spectacular bioluminescent kayak experience! Pass by islands, fishing villages and maybe even a heron or two.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adventures`
--
ALTER TABLE `adventures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adventures`
--
ALTER TABLE `adventures`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
