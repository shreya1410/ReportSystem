-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 02:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvcdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$B6yFGtOj2S6jFJyPHUh4Ce1vd44RgW0qsz0HUAb70k5shmjHB0PVO');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `complain_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` bigint(12) NOT NULL,
  `flat_no` int(12) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`complain_id`, `name`, `contact`, `flat_no`, `title`, `description`, `userId`) VALUES
(1, 'jigar', 9988776655, 222, 'light', 'light', 10),
(2, 'riddhi suthar', 9484823377, 101, 'lift power', 'lift not working and light', 11),
(4, 'meena', 1234567890, 508, 'water', 'water', 10);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `password`) VALUES
(1, 'Shreya raval', 'shreyaraval@gmail.com', '111222'),
(2, 'riddhi', 'riddhi@gmail.com', '232323'),
(3, 'Raval Shreya Pragneshbhai', 'shreyaraval415@gmail.com', 'shreya14'),
(5, 'aaksh', 'abc@gmail.com', '$2y$10$8fzatdD4OgDaYE3NtoIGQ.1wz8Sc.yDo6i8tWd961JT51tNQgqS8m'),
(6, 'Raval Shreya Pragneshbhai', 'jjjjjjjjjjj@gmail.com', '$2y$10$EA/TJJ0oZnul3MNqeOQziuh4eBd/NCLobZKql/aUoDDB5tqp4PJ6G'),
(7, 'Raval Shreya Pragneshbhai', 'jjjjj@gmail.com', '$2y$10$Gjc2zThtax7uCNmMMFhcIeYYPim1R7g1BtWkwSksz/Yn9WY3HnzGe'),
(8, 'karan', 'karan@gmail.com', '$2y$10$gDfsbCa0kptsBm0BhX/7HOfaSAb/eajAn4.s/f7FTdqwYpLf0ajQS'),
(9, 'amar', 'amaar@gmail.com', '$2y$10$gbcgZ12kY7opRahvAx7G7ujcl8BjRxrdIPfqAs6Gy30uja8HXVZ2q'),
(10, 'manik', 'manik@gmail.com', '$2y$10$oy7yknAcI2POu3iU1vzW1OlUHqVgo1b0cSOduWr0PToQDHqI929Tu'),
(11, 'riddhi', 'riddhiraval@gmail.com', '$2y$10$0Ig3iRb46xEGM9P9sn3GfOGSWWun3lh.ooKjGZQDv8V2SAbM1CFvS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
