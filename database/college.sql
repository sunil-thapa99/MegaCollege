-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2018 at 11:04 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `birthPlace` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `dobAD` date NOT NULL,
  `dobBS` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `citizenship` varchar(20) NOT NULL,
  `citizenshipIssuePlace` varchar(255) NOT NULL,
  `citizenshipIssueDate` date NOT NULL,
  `district` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `ward` varchar(5) NOT NULL,
  `townVillage` varchar(255) NOT NULL,
  `houseNumber` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phNumber` varchar(15) NOT NULL,
  `landline` int(10) NOT NULL,
  `fatherName` varchar(255) NOT NULL,
  `fatherOccupation` varchar(255) NOT NULL,
  `fatherPhNumber` varchar(15) NOT NULL,
  `motherName` varchar(255) NOT NULL,
  `motherOccupation` varchar(255) NOT NULL,
  `motherPhNumber` varchar(15) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `level` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `fname`, `mname`, `lname`, `birthPlace`, `nationality`, `dobAD`, `dobBS`, `gender`, `citizenship`, `citizenshipIssuePlace`, `citizenshipIssueDate`, `district`, `municipality`, `ward`, `townVillage`, `houseNumber`, `email`, `phNumber`, `landline`, `fatherName`, `fatherOccupation`, `fatherPhNumber`, `motherName`, `motherOccupation`, `motherPhNumber`, `image`, `level`) VALUES
(1, 'Sunil', '', 'Thapa', 'Kathmandu', 'Nepal', '1999-03-17', '2055-12-03', 'Male', '24-01-74-00880', 'Kathmandu', '2074-01-24', 'Kathmandu', 'Kathmandu', '12', 'Nayabazar', '14', 'sunil43thapa@gmail.com', '9860740002', 0, 'Lok Bahadur Thapa', 'Business ', '9841581376', 'Tej Kumari Thapa', 'House Wife', '9840339562', 'assets/img/IMAG0137.jpg', 'BSc.(Hons) Computing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
