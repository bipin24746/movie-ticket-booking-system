-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 01:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviebooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(17) NOT NULL,
  `cpassword` varchar(17) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `cpassword`, `phone`) VALUES
(1, 'admin', 'admin12@gmail.com', 'admin', '', '9749341363'),
(2, 'bipin', 'sainjubipin24746@gmail.com', '12121212', '', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `seats` varchar(100) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `show_date` date NOT NULL,
  `show_time` time NOT NULL,
  `seat_id` int(11) NOT NULL,
  `total_price` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `seats`, `movie_id`, `show_date`, `show_time`, `seat_id`, `total_price`) VALUES
(1, '', 54, '2023-07-27', '01:01:00', 1, '200'),
(2, '', 54, '2023-07-27', '01:01:00', 2, '200');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `industry` varchar(20) NOT NULL,
  `language` varchar(20) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `reldate` varchar(20) NOT NULL,
  `director` varchar(30) NOT NULL,
  `actor` varchar(30) NOT NULL,
  `description` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `fdate` date NOT NULL,
  `sdate` date NOT NULL,
  `fshow` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `name`, `genre`, `industry`, `language`, `duration`, `reldate`, `director`, `actor`, `description`, `price`, `image`, `fdate`, `sdate`, `fshow`) VALUES
(51, 'Avengers', '1', 'hollywood', 'english', '2hrs 34min 7sec', '24/07/2022', 'aven', 'heros', '', '200', 'for cv.jpg', '2023-07-21', '0000-00-00', '08:00:00'),
(52, 'AntMan And the Wasp', '1', 'hollywood', 'english', '2hrs 34min 7sec', '24/07/2022', 'ant', 'antman', '', '500', 's-l1600.jpg', '2023-07-21', '0000-00-00', '12:00:00'),
(53, 'Avenger EndGame', 'action', 'hollywood', 'english', '2hrs 34min 7sec', '24/07/2022', 'marvel', 'avengers', '', '300', 's-l1600.jpg', '2023-07-21', '2023-07-22', '02:00:00'),
(54, 'Avenger EndGame', '1', 'hollywood', 'english', '2hrs 34min 7sec', '24/07/2022', 'villian', 'hero', '', '100', '244729379_275484634300135_7623849994428463443_n.jpg', '2023-07-27', '2023-07-22', '01:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `otp` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `u_id`, `otp`, `timestamp`) VALUES
(1, 7, 315995, '2023-07-15 17:37:49'),
(2, 8, 911830, '2023-07-15 17:43:59'),
(3, 9, 840395, '2023-07-15 17:48:31'),
(4, 10, 691443, '2023-07-21 10:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `cpassword` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `password`, `cpassword`, `phone`) VALUES
(1, 'user', '', 'user12@gmail.com', 'user', 'user', '9886346099'),
(2, 'User1', '', 'user1@gmail.com', 'user1', '', '98525215652'),
(5, 'Bipin', 'Sainju Shrestha', 'sainjubipin247460@gmail.com', '121212', '', '9860922423'),
(6, 'Bipin', 'Sainju Shrestha', 'sainjubipin24746@gmail.com', '1111', '', '9860922423'),
(7, 'Bipin', 'Sainju Shrestha', 'sainjubipin24746@gmail.com', '121212', '', '9860922423'),
(9, 'Bipin', 'Sainju Shrestha', 'bipinsainju24746@gmail.com', '121212', '', '9860922423'),
(10, 'Bipin', 'Sainju Shrestha', 'sainjubipin247460@gmail.com', '1122', '', '9860922423');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
