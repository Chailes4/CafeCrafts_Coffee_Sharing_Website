-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2025 at 09:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '$2y$10$QrzyseO6tdrd7iDnMvkeFusEWKDe0rhL7oZ.C0t1M.8vKv/Deou1S');

-- --------------------------------------------------------

--
-- Table structure for table `archived_feedback`
--

CREATE TABLE `archived_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `archived_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archived_feedback`
--

INSERT INTO `archived_feedback` (`id`, `name`, `email`, `subject`, `message`, `archived_at`, `deleted_by`) VALUES
(1, 'aas', 'asa@gmail.com', 'asa', 'as', '2024-04-30 10:28:04', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `coffee_items`
--

CREATE TABLE `coffee_items` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(20) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  `preparation_time_value` int(11) DEFAULT NULL,
  `preparation_time_unit` varchar(20) DEFAULT NULL,
  `cook_time_value` int(11) DEFAULT NULL,
  `cook_time_unit` varchar(20) DEFAULT NULL,
  `servings` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `coffeecateg` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coffee_items`
--

INSERT INTO `coffee_items` (`id`, `name`, `description`, `category`, `image_url`, `added_by`, `preparation_time_value`, `preparation_time_unit`, `cook_time_value`, `cook_time_unit`, `servings`, `status`, `coffeecateg`) VALUES
(1, 'Café Latte', 'Smooth espresso combined with steamed milk for a creamy taste.', 'hot', 'images/R (3).jpg', 'Christine Chailes', 4, 'minutes', 2, 'minutes', 1, 'approved', 'Espresso'),
(2, 'Cappuccino', 'A balanced coffee with espresso, steamed milk, and a frothy top.', 'hot', 'images/capp.jpg', 'Christine Chailes', 5, 'minutes', 3, 'minutes', 1, 'approved', 'Espresso'),
(3, 'Americano', 'A simple espresso diluted with hot water for a smooth, bold flavor.', 'hot', 'images/americano.jpg', 'Christine Chailes', 3, 'minutes', 0, 'minutes', 1, 'approved', 'Espresso'),
(4, 'Turkish Coffee', 'Strong, unfiltered coffee with a rich aroma and traditional preparation.', 'hot', 'images/Screenshot_3-12-2025_16118_www.bing.com.jpeg', 'Christine Chailes', 5, 'minutes', 5, 'minutes', 1, 'approved', 'Drip Coffee'),
(5, 'Irish Coffee', 'A warm coffee drink with whiskey and cream for a cozy twist.', 'hot', 'images/Screenshot_3-12-2025_16314_www.bing.com.jpeg', 'Christine Chailes', 5, 'minutes', 2, 'minutes', 1, 'approved', 'Brewed'),
(6, 'Iced Mocha', 'A refreshing cold coffee drink with rich chocolate flavor, perfect for hot days.', 'cold', 'images/Iced-Latte-1-of-1-2.jpeg', 'Christine Chailes', 5, 'minutes', 0, 'minutes', 1, 'approved', 'Latte'),
(7, 'Cold Brew', 'Smooth, low-acid coffee steeped cold overnight.', 'cold', 'images/Screenshot_3-12-2025_161131_www.bing.com.jpeg', 'Christine Chailes', 10, 'minutes', 12, 'hours', 2, 'approved', 'Espresso'),
(8, 'Affogato (Iced Version)', 'Espresso poured over ice cream for a dessert coffee.', 'cold', 'images/57788567.jpg', 'Christine Chailes', 2, 'minutes', 0, 'minutes', 1, 'approved', 'Espresso'),
(9, 'Iced Vanilla Latte', 'Sweet vanilla-flavored cold espresso drink.', 'cold', 'images/Screenshot_3-12-2025_16168_www.bing.com.jpeg', 'Christine Chailes', 5, 'minutes', 0, 'minutes', 1, 'approved', 'Espresso'),
(10, 'Iced Caramel Macchiato', 'Layered espresso, milk, and caramel over ice.', 'cold', 'images/Screenshot_3-12-2025_161849_www.bing.com.jpeg', 'Christine Chailes', 5, 'minutes', 0, 'minutes', 1, 'approved', 'Espresso'),
(11, 'Iced Hazelnut Latte', 'Espresso with cold milk and hazelnut syrup.', 'cold', 'images/Screenshot_3-12-2025_162011_www.bing.com.jpeg', 'Christine Chailes', 5, 'minutes', 0, 'minutes', 1, 'approved', 'Espresso');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `coffee_id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `coffee_id`, `email`, `comment`, `created_at`) VALUES
(0, 2, 'chailes@gmail.com', 'nice', '2025-12-03 07:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `directions`
--

CREATE TABLE `directions` (
  `id` int(11) NOT NULL,
  `coffee_id` int(11) DEFAULT NULL,
  `step` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `directions`
--

INSERT INTO `directions` (`id`, `coffee_id`, `step`) VALUES
(1, 1, 'Brew the espresso.'),
(2, 1, 'Steam the milk.'),
(3, 1, 'Pour milk over espresso.'),
(4, 1, 'Sweeten if desired and serve hot.'),
(5, 2, 'Brew espresso.'),
(6, 2, 'Steam milk and create foam.'),
(7, 2, 'Pour milk and foam over espresso.'),
(8, 2, 'Dust with cocoa powder and serve.'),
(9, 3, 'Brew espresso.'),
(10, 3, 'Add hot water to espresso.'),
(11, 3, 'Stir and serve hot.'),
(12, 4, 'Mix coffee, water, and sugar in a small pot.'),
(13, 4, 'Heat slowly until frothy but not boiling.'),
(14, 4, 'Pour into cup, let grounds settle, and serve.'),
(15, 5, 'Brew coffee.'),
(16, 5, 'Stir in whiskey and sugar.'),
(17, 5, 'Top with whipped cream and serve hot.'),
(18, 6, 'Fill a glass with ice cubes.'),
(19, 6, 'Pour cold coffee and milk over ice.'),
(20, 6, 'Stir in chocolate syrup.'),
(21, 6, 'Top with whipped cream if desired.'),
(22, 7, 'Steep coffee in water 12 hours. Strain. Serve cold.'),
(23, 8, 'Pour espresso over ice cream.'),
(24, 8, 'Serve immediately.'),
(25, 9, 'Mix espresso with milk, vanilla syrup, and ice.'),
(26, 10, 'Layer milk, espresso, and caramel over ice.'),
(27, 11, 'Mix milk and hazelnut syrup, pour over espresso and ice.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'Althea Benedictos', 'altheabenedictos1@gmail.com', 'Feedback', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small.', '2024-04-08 08:38:50'),
(2, 'Christine Chailes Reyes', 'chailes@gmail.com', 'Feedback', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however.', '2024-04-08 18:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `coffee_id` int(11) NOT NULL,
  `ingredient` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `coffee_id`, `ingredient`) VALUES
(1, 1, '1 shot espresso (30 ml)'),
(2, 1, '1/2 cup steamed milk'),
(3, 1, 'Sugar to taste'),
(4, 2, '1 shot espresso (30 ml)'),
(5, 2, '1/4 cup steamed milk'),
(6, 2, '1/4 cup milk foam'),
(7, 2, 'Cocoa powder (optional)'),
(8, 3, '1 shot espresso (30 ml)'),
(9, 3, '1/2 cup hot water'),
(10, 4, '2 tsp finely ground coffee'),
(11, 4, '1 cup water'),
(12, 4, 'Sugar to taste'),
(13, 5, '1 cup hot brewed coffee'),
(14, 5, '1 oz Irish whiskey'),
(15, 5, '1 tsp brown sugar'),
(16, 5, 'Whipped cream'),
(17, 6, '1 cup cold brewed coffee'),
(18, 6, '2 tbsp chocolate syrup'),
(19, 6, '1/2 cup milk'),
(20, 6, 'Ice cubes'),
(21, 6, 'Whipped cream (optional)'),
(22, 7, 'Ground coffee'),
(23, 7, 'Cold water'),
(24, 8, 'Espresso'),
(25, 8, 'Ice cream'),
(26, 8, 'Ice'),
(27, 9, 'Espresso'),
(28, 9, 'Milk'),
(29, 9, 'Vanilla syrup'),
(30, 9, 'Ice'),
(31, 10, 'Espresso'),
(32, 10, 'Milk'),
(33, 10, 'Caramel syrup,'),
(34, 10, 'Ice'),
(35, 11, 'Espresso'),
(36, 11, 'Milk'),
(37, 11, 'Hazelnut syrup'),
(38, 11, 'Ice');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Christine Chailes', 'Reyes', 'chailes@gmail.com', '$2y$10$K/TZ1GjK9C/YrxSYBl2XWOiuNJ8YPrGnixUUi2cyRgIts6UGH.Lmq'),
(2, 'kape', 'kape', 'kape@gmail.com', '$2y$10$sEeuoLFuhInK8LRIENpm/emmSp7dyl2k7pic1GoEVbrWX0EAMkX5u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archived_feedback`
--
ALTER TABLE `archived_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coffee_items`
--
ALTER TABLE `coffee_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directions`
--
ALTER TABLE `directions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coffee_id` (`coffee_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ingredients_ibfk_1` (`coffee_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archived_feedback`
--
ALTER TABLE `archived_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coffee_items`
--
ALTER TABLE `coffee_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `directions`
--
ALTER TABLE `directions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `directions`
--
ALTER TABLE `directions`
  ADD CONSTRAINT `directions_ibfk_1` FOREIGN KEY (`coffee_id`) REFERENCES `coffee_items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD CONSTRAINT `ingredients_ibfk_1` FOREIGN KEY (`coffee_id`) REFERENCES `coffee_items` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
