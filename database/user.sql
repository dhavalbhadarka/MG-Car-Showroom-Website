-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 07:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `car` varchar(100) NOT NULL,
  `varient` varchar(100) NOT NULL,
  `fueltype` varchar(100) NOT NULL,
  `transmission` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `dealer` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `car`, `varient`, `fueltype`, `transmission`, `color`, `state`, `city`, `dealer`, `name`, `email`, `phone`, `address`) VALUES
(11, 'hector', 'super', 'diesel', 'manual', 'white', 'gujrat', 'morbi', 'mg world morbi', 'Dharmik', 'agheradharmik15@gmail.com', '9898205621', 'Dhrol'),
(12, 'hector', 'super', 'petrol', 'automatic', 'black', 'gujrat', 'rajkot', 'mg motor rajkot', 'Dharmik', 'agheradharmik15@gmail.com', '9898205621', 'Dhrol'),
(13, ' hector', 'super', 'diesel', 'manual', 'black', 'gujrat', 'rajkot', 'mg motor rajkot', 'Krish', 'krish@gmail.com', '9876543210', 'Hamirpar');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `car` varchar(100) DEFAULT NULL,
  `varient` varchar(100) NOT NULL,
  `fueltype` varchar(100) NOT NULL,
  `transmission` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `car`, `varient`, `fueltype`, `transmission`, `subject`) VALUES
(78, 'hector', 'super', 'diesel', 'manual', 'MG WORLD'),
(79, 'hector plus 6str', 'sharp', 'petrol', 'automatic', 'Color : Black\r\nInterior Color : Grey'),
(80, 'hector plus 6str', 'sharp', 'petrol', 'automatic', 'MG');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password1` varchar(200) NOT NULL,
  `password2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password1`, `password2`) VALUES
(1, 'Rushi', 'rushisherasiya@gmail.com', '2110', '2110');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `carno` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `email`, `phone`, `carno`, `address`, `city`, `state`, `pincode`, `date`, `time`) VALUES
(7, 'Dharmik', 'agheradharmik15@gmail.com', '9898205621', 'GJ-36-AC-1112', 'Dhrol', 'Jamnagar', 'Gujrat', '361210', '0000-00-00', '12:00-14:00'),
(8, 'Jeet Santoki', 'jeetsantoki333@gmail.com', '7283842143', 'GJ-36-AC-1112', 'Dhrol', 'Jamnagar', 'Gujrat', '361210', '2022-03-17', '16:00-18:00');

-- --------------------------------------------------------

--
-- Table structure for table `testdrive`
--

CREATE TABLE `testdrive` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `car` varchar(100) NOT NULL,
  `varient` varchar(100) NOT NULL,
  `fueltype` varchar(100) NOT NULL,
  `transmission` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testdrive`
--

INSERT INTO `testdrive` (`id`, `fname`, `lname`, `email`, `phone`, `car`, `varient`, `fueltype`, `transmission`, `color`, `address`, `city`, `state`, `pincode`, `date`, `time`) VALUES
(3, 'Dharmik ', 'Aghera', 'agheradharmik15@gmail.com', '9898205621', 'hector', 'super', 'diesel', 'manual', 'white', 'Dhrol', 'Jamnagar', 'Gujrat', '361210', '2022-03-02', '12:00-14:00'),
(6, 'Rushi', 'Sherasiya', 'rushisherasiya@gmail.com', '9904636859', 'zs ev 2021', 'sharp', 'electric', 'automatic', 'red', 'Kheavariya', 'Morbi', 'Gujrat', '363610', '2022-05-15', '16:00-18:00'),
(7, 'Dharmik ', 'Aghera', 'agheradharmik15@gmail.com', '9898205621', 'hector', 'super', 'diesel', 'manual', 'white', 'Dhrol', 'Jamnagar', 'Gujrat', '361210', '2022-03-02', '12:00-14:00'),
(8, 'Dharmik ', 'Aghera', 'agheradharmik15@gmail.com', '9898205621', 'hector', 'super', 'diesel', 'manual', 'white', 'Dhrol', 'Jamnagar', 'Gujrat', '361210', '2022-03-02', '12:00-14:00');

-- --------------------------------------------------------

--
-- Table structure for table `waiting`
--

CREATE TABLE `waiting` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `carname` varchar(200) NOT NULL,
  `varient` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waiting`
--

INSERT INTO `waiting` (`id`, `fname`, `lname`, `email`, `phone`, `carname`, `varient`, `date`) VALUES
(3, 'Jeet', 'Santoki', 'jeetsantoki333@gmail.com', '9876543210', 'MG Hector Petrol', 'smart', '2022-03-12'),
(4, 'Dharmik ', 'Aghera', 'agheradharmik15@gmail.com', '9898205621', 'Hector', 'Super', '2022-10-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testdrive`
--
ALTER TABLE `testdrive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waiting`
--
ALTER TABLE `waiting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testdrive`
--
ALTER TABLE `testdrive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `waiting`
--
ALTER TABLE `waiting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
