-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 11:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `id` int(100) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(13) NOT NULL,
  `address` varchar(100) NOT NULL,
  `bus_number` varchar(5) NOT NULL,
  `date` date DEFAULT NULL,
  `departure` text NOT NULL,
  `destination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `name`, `email`, `phone`, `address`, `bus_number`, `date`, `departure`, `destination`) VALUES
(8, 'Nitya Gopal Saha ', 'newzimo1@gmail.com', 2147483647, 'Birnagar, Rasbihari market', 'B008', '2022-10-06', 'Raiganj', 'Kolkata'),
(10, 'Nitya Saha', 'nityasaha39@gmail.com', 8158957656, 'Sudarshan pur', 'B006', '2023-04-08', 'Raiganj', 'Siliguri'),
(24, 'Ananya Saha', 'a@g.in', 2147483647, 'Birnagar, Rasbihari market', 'B002', '2023-05-06', 'Raiganj', 'Siliguri'),
(36, 'Ananya Saha', 'ka0967711@gmail.com', 8158957656, 'Birnagar, Rasbihari market', 'B001', '2023-04-12', 'Raiganj', 'Balurghat'),
(41, 'Nitya Gopal', 'sahanitya39@gmail.com', 8158957656, 'Mohanpur', 'B004', '2023-07-13', 'Raiganj', 'Kolkata'),
(58, 'Nitya', 'nityasaha39@gmail.com', 8158957656, 'Sudarshanpur', 'B001', '2023-07-29', 'Raiganj', 'Jalpaiguri');

-- --------------------------------------------------------

--
-- Table structure for table `bus_list`
--

CREATE TABLE `bus_list` (
  `id` bigint(100) UNSIGNED NOT NULL,
  `bus_name` varchar(20) NOT NULL,
  `bus_no` varchar(10) DEFAULT NULL,
  `seat_capacity` int(100) NOT NULL,
  `weekday` text NOT NULL,
  `time` varchar(10) NOT NULL,
  `departure` varchar(50) DEFAULT NULL,
  `destination` varchar(50) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_list`
--

INSERT INTO `bus_list` (`id`, `bus_name`, `bus_no`, `seat_capacity`, `weekday`, `time`, `departure`, `destination`, `cost`) VALUES
(1, 'Roket', 'B001', 60, 'Saturday', '9:00AM', 'Siliguri', 'Jalpaiguri', 270),
(2, 'Volvo', 'B002', 60, 'Wednesday', '3:00AM', 'Raiganj', 'Kolkata', 790),
(11, 'NBSTC', 'B005', 45, 'Sunday', '3:00PM', 'Raiganj', 'Darjiling', 390),
(14, 'Volvo', 'B007', 90, 'Thursday', '1:00PM', 'Raiganj', 'Kolkata', 450),
(15, 'NBSTC', 'B009', 40, 'Tuesday', '11:00AM', 'Raiganj', 'Balurghat', 120),
(16, 'NBSTC', 'B004', 40, 'Wednesday', '10:00AM', 'Malda', 'Siliguri', 300),
(17, 'SBSTC', 'B003', 58, 'Wednesday', '5:00AM', 'Raiganj', 'Jalpaiguri', 320),
(18, 'NBSM', 'B006', 36, 'Friday', '1:00PM', 'Raiganj', 'Kolkata', 350),
(19, 'NBSMT', 'B008', 55, 'Monday', '9:00AM', 'Raiganj', 'Farakka', 115),
(20, 'Delux', 'B010', 44, 'Monday', '6:00AM', 'Raiganj', 'Siliguri', 220);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(100) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`) VALUES
(1, 'Ananya Saha', 'ka0967711@gmail.com', 'Hello'),
(2, 'Ananya Saha', 'ka0967711@gmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `privet_bookings`
--

CREATE TABLE `privet_bookings` (
  `id` int(250) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` bigint(11) NOT NULL,
  `address` text NOT NULL,
  `bus_num` text NOT NULL,
  `date` date NOT NULL,
  `days` int(11) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `privet_bookings`
--

INSERT INTO `privet_bookings` (`id`, `name`, `email`, `phone`, `address`, `bus_num`, `date`, `days`, `reason`) VALUES
(1, 'NG Saha', 'nityasaha39@gmail.com', 2147483647, 'North Sudarshanpur, Raiganj', 'BP005', '2023-04-19', 2, 'travel'),
(8, 'Ankhi Saha', 'nityasaha39@gmail.com', 2147483647, 'Birnagar, Rasbihari market', 'BP001', '2023-03-27', 2, 'travel'),
(19, 'Nitya', 'nityasaha39@gmail.com', 8158957656, 'Sudarshanpur', 'BP005', '2023-07-20', 5, 'picnic'),
(23, 'Nitya', 'nityasaha39@gmail.com', 8158957656, 'Sudarshanpur', 'BP06', '2023-07-28', 4, 'picnic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_list`
--
ALTER TABLE `bus_list`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privet_bookings`
--
ALTER TABLE `privet_bookings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `bus_list`
--
ALTER TABLE `bus_list`
  MODIFY `id` bigint(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `privet_bookings`
--
ALTER TABLE `privet_bookings`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
