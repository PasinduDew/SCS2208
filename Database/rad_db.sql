-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 11:56 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rad_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `joined` date NOT NULL,
  `imageurl` varchar(50) NOT NULL,
  `remarks` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `nic`, `dob`, `address`, `mobile`, `email`, `designation`, `joined`, `imageurl`, `remarks`, `status`) VALUES
(70, 'John', 'Doe', '123789456v', '2019-04-01', '63/6,Old Road,Wethara,Polgasowita', '0775072201', 'fsmoke@gmail.com', 'Manager', '0000-00-00', 'uploads/Image7.png', 'asascascasca', 0),
(72, 'Kamal', 'Perera', 'sdfsdf', '2019-04-13', 'sdfs', 'sdfsdf', 'sdfs@gmail.com', 'Co-Owner', '2019-04-16', 'uploads/user_abc1.png', '', 0),
(74, 'Super ', 'Girl', '45434534534534', '2019-04-16', '1, Star, City', '0775072201', 'lapjanith@gmail.com', 'Manager', '2019-04-25', 'uploads/girl.png', 'This is a Testing Remark.', 1),
(75, 'sfsd', 'sdfs', '23132161313', '2019-06-12', '63/6,Old Road,Wethara,Polgasowita', '0775072201', 'sdfsd@gsdgsd.asda', 'Owener', '2019-06-07', 'url', 'sadasd', 0),
(76, 'abc', 'efg', '12345678v', '2019-02-14', '63/6,Old Road,Wethara,Polgasowita', '0775072201', 'abc@gmail.com', 'System Admin', '2019-06-01', 'uploads/user_abc.png', 'fsdfsd', 1),
(77, 'John', 'Doe', '1234567894v', '2016-12-02', '#2, Test Rd, TestCity', '+947712345678', 'johnd@gmail.com', 'Owner', '2019-06-01', 'uploads/man.png', 'No Remarks', 1),
(78, 'Test', 'User', '12345678912v', '2019-06-06', '221B, Bakers Street, London', '+94221112221112', 'sherlock@gmail.com', 'System Admin', '2019-06-04', 'uploads/sh.jpg', 'Detective', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `email`, `password`, `role`, `status`) VALUES
(1, 'sada@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'General User', 1),
(2, 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'General User', 1),
(75, 'sdfsd@gsdgsd.asda', '0aa1ea9a5a04b78d4581dd6d17742627', 'Owener', 0),
(76, 'abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'System Admin', 1),
(77, 'johnd@gmail.com', '527bd5b5d689e2c32ae974c6229ff785', 'Select a Option', 1),
(78, 'sherlock@gmail.com', '1bea3a3d4bc3be1149a75b33fb8d82bc', 'System Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `imageurl` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `imageurl`, `status`) VALUES
(1, 'sdf', 'jojo', 'sada@gmail.com', 'No Image', 1),
(2, 'Test', 'User', 'test@gmail.com', 'No Image', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nic` (`nic`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
