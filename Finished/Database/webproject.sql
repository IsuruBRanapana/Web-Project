-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2019 at 05:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingtbl`
--

CREATE TABLE `bookingtbl` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel_no` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `number_of_adults` int(10) NOT NULL,
  `number_of_childs` int(10) NOT NULL,
  `rooms` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingtbl`
--

INSERT INTO `bookingtbl` (`id`, `first_name`, `last_name`, `email`, `tel_no`, `gender`, `from_date`, `to_date`, `number_of_adults`, `number_of_childs`, `rooms`) VALUES
(8, 'Isuru B.', 'Ranapana', 'raaisurub.ranapana@gmail.com', 713586640, 'Male', '2019-08-13', '2019-08-15', 2, 0, 1),
(9, 'Isuru B.', 'Ranapana', 'raaisurub.ranapana@gmail.com', 713586640, 'Male', '2019-08-22', '2019-08-26', 2, 5, 3),
(11, 'Isuru B.', 'Ranapana', 'raaisurub.ranapana@gmail.com', 713586640, 'Male', '2019-08-06', '2019-08-22', 2, 0, 1),
(12, 'Isuru B.', 'Ranapana', 'raaisurub.ranapana@gmail.com', 713586640, 'Male', '2019-08-06', '2019-08-22', 2, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel_no` int(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `confirm_password` varchar(32) NOT NULL,
  `is_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `gender`, `email`, `tel_no`, `password`, `confirm_password`, `is_delete`) VALUES
(1, 'Isuru B.', 'Ranapana', 'Male', 'raaisurub.ranapana@gmail.com', 713586640, '827ccb0eea8a706c4c34a16891f84e7b', '8cb2237d0679ca88db6464eac60da963', 0),
(2, 'Charuni', 'Rathnayake', 'Femail', 'charunirathnayake1995@gmail.com', 717676479, 'e10adc3949ba59abbe56e057f20f883e', '7c4a8d09ca3762af61e59520943dc264', 0),
(3, 'abcd', 'abcd', 'abcd', 'abcd@gmail.com', 785, 'e2fc714c4727ee9395f324cd2e7f331f', '81fe8bfe87576c3ecb22426f8e578473', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingtbl`
--
ALTER TABLE `bookingtbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingtbl`
--
ALTER TABLE `bookingtbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
