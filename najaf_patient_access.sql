-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 12:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `najaf_patient_access`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins_record`
--

CREATE TABLE `admins_record` (
  `id` int(50) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins_record`
--

INSERT INTO `admins_record` (`id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `appo_record`
--

CREATE TABLE `appo_record` (
  `id` int(20) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `b_date` date NOT NULL,
  `m_phone` varchar(11) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `a_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appo_record`
--

INSERT INTO `appo_record` (`id`, `fname`, `email`, `b_date`, `m_phone`, `dept`, `a_message`) VALUES
(10, 'mohammed ahsan', 'mhammad4884@gmail.com', '2020-07-07', '07815854884', 'General Health', '               m                '),
(11, 'mohammed', 'eragdfgs@c.com', '2020-07-02', '07815854884', 'General Health', '                             k '),
(12, 'mohammed ahsan ali', 'mhammad4884@gmail.com', '2020-07-08', '07815854884', 'General Health', '     mmmmmm                          '),
(13, 'asdaSSSSS', 'eragdfgs@k.com', '2020-08-08', '07815000000', 'General Health', '                         mmmmmmmmmmmm      '),
(23, 'kkkk', 'eragdfgs@c.com', '2019-06-21', '07815854880', 'Medical Research', '                        ,       '),
(24, 'kkkk', 'eragdfgs@c.com', '2019-06-21', '07815854880', 'Medical Research', '                        ,       '),
(25, 'asdaSSSSS', 'eragdfgs@c.com', '2020-07-28', '07815000078', 'Medical Research', '                               ');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_record`
--

CREATE TABLE `doctor_record` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_record`
--

INSERT INTO `doctor_record` (`id`, `user`, `pass`, `email`, `department`) VALUES
(1, 'doctor', '123', 'n@example.com', 'general health');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins_record`
--
ALTER TABLE `admins_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appo_record`
--
ALTER TABLE `appo_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_record`
--
ALTER TABLE `doctor_record`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins_record`
--
ALTER TABLE `admins_record`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appo_record`
--
ALTER TABLE `appo_record`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `doctor_record`
--
ALTER TABLE `doctor_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
