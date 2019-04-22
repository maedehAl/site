-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 09:24 PM
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
-- Database: `cargame`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `email` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `password` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `email`, `name`, `password`) VALUES
(2, 'haniieaghasi20@gmail.com', 'هانیه', '123'),
(3, 'maedeh.almasi98@gmail.com', 'مائده', '123'),
(4, 'mohammad.mm@gmail.com', 'محمد', '456'),
(5, 'maedeh.almasi@yahoo.com', 'ماهی', '25d55ad283'),
(6, 'ma.almasi@yahoo.com', 'مهیار', '202cb962ac'),
(7, 'm.aa@yahoo.com', 'ناشناس', '202cb962ac'),
(8, 'sajad.al@gmail.com', 'سجاد', 'e3b0c44298'),
(10, 'sadra@gmail.com', 'صدرا', 'e3b0c44298'),
(11, 'mahdi.alm@gmail.com', 'مهدی', 'e3b0c44298'),
(12, 'mehrdad@gmail.com', 'مهرداد', 'e3b0c44298');

-- --------------------------------------------------------

--
-- Table structure for table `userview`
--

CREATE TABLE `userview` (
  `id` int(100) NOT NULL,
  `name` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `view` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `userview`
--

INSERT INTO `userview` (`id`, `name`, `email`, `view`) VALUES
(4, 'maedeh', 'maedeh.almasi98@gmail.com', 'بهترین بازی که تا الان دیدم'),
(5, 'mahdi', 'mahi@mmnb.com', 'پس که میتونیم تسویه کنیم امتیازامونو'),
(6, 'mohammad s', 'almasiii@fdhkdjs.com', 'سلاممممم'),
(7, 'mahdi', 'almasiii@fdhkdjs.com', 'آره خلاصه داره اوکی میشه'),
(11, 'مهیا', 'mahya.momeni@gmail.com', 'لطفا یکم گرافیک بازی رو تقویت کنید'),
(12, 'مائده الما', 'almasiii@fdhkdjs.com', 'چرا انقد سرعت پایینه'),
(18, 'ریحانه', 'reyhane@gmail.com', 'خیلی بازیه خفنه به معنیه واقعی معتادش شدم'),
(19, 'زهرا ', 'zahra.aal@gmail.com', 'اگه میشه قابلیت های ماشینا رو بیشتر کنید');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userview`
--
ALTER TABLE `userview`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `userview`
--
ALTER TABLE `userview`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
