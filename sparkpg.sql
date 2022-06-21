-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 04:43 PM
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
-- Database: `sparkpg`
--

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `s_name` char(30) NOT NULL,
  `r_name` char(30) NOT NULL,
  `amount` bigint(10) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`s_name`, `r_name`, `amount`, `date_time`) VALUES
('Yash Kakade', 'Sushmita Singh', 3000, '2022-06-21 14:30:48'),
('Utkarsh Kamble', 'Siddhi Nivale', 5000, '2022-06-21 14:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` char(20) NOT NULL,
  `Email Id` varchar(25) NOT NULL,
  `Balance` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Email Id`, `Balance`) VALUES
('Yash Kakade', 'samosya1805@gmail.com', 77000),
('Sejal Kadam', 'seju0312@gmail.com', 60000),
('Sushmita Singh', 'sush2712@gmail.com', 903000),
('Karan Shah', 'karan0309@gmail.com', 70000),
('Siddhi Nivale', 'moody2704@gmail.com', 25000),
('Shreya Naikade', 'shreyu2306@gmail.com', 300000),
('Sujit Kumar', 'sujit3003@gmail.com', 40000),
('Tejas Namaye', 'tejya0301@gmail.com', 50000),
('Utkarsh Kamble', 'uttu0905@gmail.com', 35000),
('Shrushti Sorte', 'shrush2605@gmail.com', 10000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
