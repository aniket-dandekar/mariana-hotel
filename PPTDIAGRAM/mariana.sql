-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 12:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mariana`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `cont_id` int(10) NOT NULL,
  `cont_name` varchar(50) NOT NULL,
  `cont_email` varchar(50) NOT NULL,
  `cont_phone` varchar(10) NOT NULL,
  `cont_number_guest` varchar(5) NOT NULL,
  `cont_ci_date` date NOT NULL,
  `cont_co_date` date NOT NULL,
  `cont_message` varchar(255) NOT NULL,
  `cont_date_time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`cont_id`, `cont_name`, `cont_email`, `cont_phone`, `cont_number_guest`, `cont_ci_date`, `cont_co_date`, `cont_message`, `cont_date_time`) VALUES
(1, 'Aniket Dandekar', '', '1231231233', '11', '2022-03-29', '2022-03-30', '', '2022-03-29 17:08:23'),
(2, 'Aniket Dandekar', '', '1231231233', '4', '2022-03-29', '2022-03-30', '', '2022-03-29 19:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `room_booking`
--

CREATE TABLE `room_booking` (
  `res_id` int(10) NOT NULL,
  `res_name` varchar(50) NOT NULL,
  `res_email` varchar(50) NOT NULL,
  `res_phone` int(10) NOT NULL,
  `res_room` varchar(50) NOT NULL,
  `res_no_of_room` varchar(60) NOT NULL,
  `res_no_guests` varchar(60) NOT NULL,
  `res_cidate` date NOT NULL,
  `res_codate` date NOT NULL,
  `res_message` varchar(255) NOT NULL,
  `res_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_booking`
--

INSERT INTO `room_booking` (`res_id`, `res_name`, `res_email`, `res_phone`, `res_room`, `res_no_of_room`, `res_no_guests`, `res_cidate`, `res_codate`, `res_message`, `res_dt`) VALUES
(1, 'Aniket Dandekar', 'asdandekar100@gmail.com', 1234567890, 'Cabana', '1', '3', '2022-04-02', '2022-04-14', 'Nothing much', '2022-04-01 20:41:10'),
(2, 'Aniket Dandekar', 'asdandekar100@gmail.com', 1234567890, 'Reception Hall', 'More? specify in message box', 'More? specify in message box', '2022-04-02', '2022-04-14', '', '2022-04-02 00:42:07'),
(3, 'Aniket Dandekar', 'asdandekar100@gmail.com', 1234567890, 'Accessible room', 'More? specify in message box', 'More? specify in message box', '2022-04-02', '2022-04-14', '', '2022-04-02 00:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE `room_details` (
  `room_id` int(5) NOT NULL,
  `room_no` varchar(10) NOT NULL,
  `room_type` varchar(20) NOT NULL COMMENT 'refer room_type_details',
  `room_status` varchar(20) NOT NULL COMMENT '1=occupied, 0=unoccupied',
  `room_des` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`room_id`, `room_no`, `room_type`, `room_status`, `room_des`) VALUES
(1, '001', '1', '0', 'Reception Hall-1'),
(2, '002', '1', '0', 'Reception Hall-2'),
(3, '101', '2', '0', 'President suite'),
(4, '201', '3', '0', 'Suite'),
(5, '202', '3', '0', 'Suite'),
(6, '203', '3', '0', 'Suite'),
(7, '007', '4', '0', 'Cabana'),
(8, '204', '11', '0', 'Single bed room'),
(9, '205', '11', '0', 'Single bed room'),
(10, '206', '11', '0', 'Single bed room'),
(11, '207', '11', '0', 'Single bed room'),
(12, '208', '11', '0', 'Single bed room'),
(13, '209', '11', '0', 'Single bed room'),
(14, '210', '11', '0', 'Single bed room'),
(15, '211', '11', '0', 'Single bed room'),
(16, '301', '12', '0', 'Double bed room'),
(17, '302', '12', '0', 'Double bed room'),
(18, '303', '12', '0', 'Double bed room'),
(19, '304', '12', '0', 'Double bed room'),
(20, '305', '12', '0', 'Double bed room'),
(21, '306', '13', '0', 'Quad bed room'),
(22, '307', '13', '0', 'Quad bed room'),
(23, '308', '13', '0', 'Quad bed room'),
(24, '309', '13', '0', 'Quad bed room'),
(25, '401', '14', '0', 'Queen-bed room'),
(26, '402', '14', '0', 'Queen-bed room'),
(27, '403', '14', '0', 'Queen-bed room'),
(28, '404', '14', '0', 'Queen-bed room'),
(29, '405', '15', '0', 'King-bed room'),
(30, '406', '15', '0', 'King-bed room'),
(31, '407', '15', '0', 'King-bed room'),
(32, '003', '3', '0', 'Accessible room'),
(33, '004', '3', '0', 'Accessible room');

-- --------------------------------------------------------

--
-- Table structure for table `room_type_details`
--

CREATE TABLE `room_type_details` (
  `r_id` int(5) NOT NULL,
  `r_name` varchar(20) NOT NULL,
  `r_type` int(5) NOT NULL,
  `r_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_type_details`
--

INSERT INTO `room_type_details` (`r_id`, `r_name`, `r_type`, `r_price`) VALUES
(1, 'Reception Hall', 1, '5000-15000'),
(2, 'Single bed room', 11, '600'),
(3, 'Double bed room', 12, '1000'),
(4, 'Quad bed room', 13, '1800'),
(5, 'Queen-bed room', 14, '1200'),
(6, 'King-bed room', 15, '1500'),
(7, 'Suite', 3, '5000-10000'),
(8, 'President suite', 2, '8000-20000'),
(9, 'Accessible room', 16, '2200'),
(10, 'Cabana', 4, '6000-10000');

-- --------------------------------------------------------

--
-- Table structure for table `staff_login`
--

CREATE TABLE `staff_login` (
  `staff_id` int(3) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `satff_email` varchar(50) NOT NULL,
  `satff_password` varchar(255) NOT NULL,
  `satff_type` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_login`
--

INSERT INTO `staff_login` (`staff_id`, `staff_name`, `satff_email`, `satff_password`, `satff_type`) VALUES
(1, 'staff1', 'satff1@gmail.com', 'MTIzNDU2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `super_admin_login`
--

CREATE TABLE `super_admin_login` (
  `id` int(5) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `type` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `super_admin_login`
--

INSERT INTO `super_admin_login` (`id`, `first_name`, `last_name`, `type`, `email`, `password`) VALUES
(1, 'mariana', 'hotel', 1, 'marianahotel@gmail.com', 'bWFyaWFuYQ==');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_dt` datetime NOT NULL,
  `user_phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`user_id`, `user_name`, `user_email`, `user_password`, `user_dt`, `user_phone`) VALUES
(2, 'Aniket Dandekar', 'asdandekar100@gmail.com', 'MTIzNDU2', '2022-04-02 17:10:51', '1234567890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `room_booking`
--
ALTER TABLE `room_booking`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `room_details`
--
ALTER TABLE `room_details`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_type_details`
--
ALTER TABLE `room_type_details`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `staff_login`
--
ALTER TABLE `staff_login`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `super_admin_login`
--
ALTER TABLE `super_admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `cont_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room_booking`
--
ALTER TABLE `room_booking`
  MODIFY `res_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room_details`
--
ALTER TABLE `room_details`
  MODIFY `room_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `room_type_details`
--
ALTER TABLE `room_type_details`
  MODIFY `r_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff_login`
--
ALTER TABLE `staff_login`
  MODIFY `staff_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `super_admin_login`
--
ALTER TABLE `super_admin_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
