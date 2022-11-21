-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 21, 2022 at 11:05 AM
-- Server version: 5.6.51
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `user_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`user_id`, `title`, `text`) VALUES
(1, 'My vacation in Paris', 'I spend 2 weeks traveling in Paris, France. That was an amazing vacation! '),
(3, 'Vacation in Lviv', 'dfogfdkjbdkbdjdbjkfdgbhdubfvjk'),
(4, 'Іспанія', 'Подорож була чудовою');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `programm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `name`, `programm`, `photo`) VALUES
(1, 'Карпати', 'Запрошуемо вас в Карпати', 'img/karpats.jpg'),
(2, 'Європа', 'Запрошуемо вас в Європу', 'img/europe.jpg'),
(3, 'Азiя', 'Запрошуемо вас в Азiю', 'img/asia.jpg'),
(4, 'Спеціальна пропозицiя', 'Інформація про спеціальну пропозицiю', 'img/logo.png'),
(5, 'Париж', 'Запрошуємо Вас до Парижу!', 'img/paris.jpg'),
(6, 'Японія', 'Запрошуємо вас до Японії!', 'img/japan.jpg'),
(7, 'Берлін', 'Запрошуємо вас до Берліну!', 'img/berlin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Login` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Login`, `Password`) VALUES
(1, 'Petro', 'petro', 'petro777'),
(2, 'Stepan', 'stepan', 'stepan123'),
(3, 'Vitalik', 'vitalik', 'vitalik007'),
(4, 'Ivan', 'ivan', 'ivan111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
