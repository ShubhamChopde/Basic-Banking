-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 07:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactionhistory`
--

CREATE TABLE `transactionhistory` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactionhistory`
--

INSERT INTO `transactionhistory` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Shubham Chopde', 'Varun Suryawanshi', 1000, '2021-04-02 13:11:44'),
(2, 'Aniket Muneshwar', 'Akhilesh Zambre', 200, '2021-04-02 22:58:28'),
(3, 'Lalit Ingale', 'Akhilesh Zambre', 400, '2021-04-07 14:59:44'),
(4, 'Simmi Chaudhari', 'Kalyani Mahajan', 500, '2021-04-07 20:42:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Shubham Chopde', 'shubhamchopde@gmail.com', 45800),
(2, 'Varun Suryawanshi', 'varunsuryawanshi@gmail.com', 30900),
(3, 'Kiran Chaudhari', 'Kiranchaudhari@gmail.com', 38500),
(4, 'Kalyani Mahajan', 'kalyanimahajan@gmail.com', 48100),
(5, 'Aniket Muneshwar', 'aniketmuneshwar@gmail.com', 41400),
(6, 'Lalit Ingale', 'lalitingale@gmail.com', 28100),
(7, 'Simmi Chaudhari', 'simmichaudhari@gmail.com', 49000),
(8, 'Paras Patil', 'paraspatil@gmail.com', 38800),
(9, 'Karan Rashatwar', 'karanrashatwar@gmail.com', 30800),
(10, 'Himanshu Gajare', 'himanshugajare@gmail.com', 51900),
(11, 'Akhilesh Zambre', 'akhileshzambre@gmail.com', 5300),
(12, 'Neha Patil', 'nehapatil@gmail.com', 8800),
(13, 'Sumit Zope', 'sumitzope@gmail.com', 9600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactionhistory`
--
ALTER TABLE `transactionhistory`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactionhistory`
--
ALTER TABLE `transactionhistory`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
