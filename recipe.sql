-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 04:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
  `preparation_time` varchar(50) NOT NULL,
  `cook_time` varchar(50) NOT NULL,
  `servings` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `coffeecateg` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coffee_items`
--

INSERT INTO `coffee_items` (`id`, `name`, `description`, `category`, `image_url`, `added_by`, `preparation_time`, `cook_time`, `servings`, `status`, `coffeecateg`) VALUES
(1, 'Hot Spiced Mocha', 'This Spiced Mocha Latte is spiced with ginger, cinnamon, allspice, Cold days are for cozying up to a hot drink. This sweet rich vegan Spiced Mocha Latte fits the bill and cardamon. ', 'hot', 'images/moclatte.jpg', 'Christine Chailes', '5 mins', '5 mins', 2, 'approved', NULL),
(2, 'Cold Brewed', 'Cold brewed coffee can be served iced or piping hot, dealers choice. You follow the same method for making the coffee either way, and then either serve it over ice or warm it up in the microwave for a hot cup.', 'cold', 'images/coldbrew.jpg', 'Christine Chailes', '10 mins', '10 mins', 2, 'approved', NULL),
(35, 'Mocha Latte', 'ff', 'hot', 'images/Mocha.jpeg', 'Christine Chailes', '20 mins', '10 mins', 10, 'approved', 'Brewed'),
(37, 'Mocha Latte', 'ss bhshdguj hhdsdo ihscasuig uhauofh sudhgdsu ighsdi g uiwhieugue wuidsdh vghdgsr', 'cold', 'images/Mocha.jpeg', 'Christine Chailes', '20 mins', '10 mins', 10, 'approved', 'Drip Coffee'),
(38, 'Mocha Latte', 'sd snhdushii isjidhush usihio fubs jfffsfjsbhf ihsiofh sfb bbjfbsijfioajw f', 'hot', 'images/Mocha.jpeg', 'Christine Chailes', '20 mins', '10 mins', 10, 'approved', 'Drip Coffee'),
(39, 'Mocha Latte', 'sd snhdushii isjidhush usihio fubs jfffsfjsbhf ihsiofh sfb bbjfbsijfioajw f', 'hot', 'images/Mocha.jpeg', 'Christine Chailes', '20 mins', '10 mins', 10, 'approved', 'Drip Coffee'),
(40, 'Americano', 'sd snhdushii isjidhush usihio fubs jfffsfjsbhf ihsiofh sfb bbjfbsijfioajw f', 'hot', 'images/Mocha.jpeg', 'Christine Chailes', '20 mins', '10 mins', 10, 'approved', 'Drip Coffee'),
(41, 'Americano', 'sd snhdushii isjidhush usihio fubs jfffsfjsbhf ihsiofh sfb bbjfbsijfioajw f', 'hot', 'images/Makeup Artist Promo Poster in Lilac Dark Blue Warm Youthful Style.png', 'Christine Chailes', '20 mins', '10 mins', 10, 'approved', 'Drip Coffee'),
(42, 'Mocha Latte', 'sd snhdushii isjidhush usihio fubs jfffsfjsbhf ihsiofh sfb bbjfbsijfioajw f', 'hot', 'images/Mocha.jpeg', 'Christine Chailes', '20 mins', '10 mins', 10, 'approved', 'Drip Coffee'),
(43, 'Americano', 'sjhfhah fidighi hihidh sgn hfusvdf rri iasfh dsh hahahaha acmbjsdfi ihfheoiivfjsio hihif k\'f kgkf jdsfhgsuhvfhbiuv f', 'hot', 'images/Mocha.jpeg', 'Christine Chailes', '20 mins', '10 mins', 10, 'approved', 'Drip Coffee'),
(44, 'Mocha Latte', 'fg sdgsdg husdyg8y 8ysd pvp;ll s;d . s\' sbehgdyuguhv jksgfui hhisgdlh jgs ifuzfo iygefhsf hb jkdghbfj kjfnvshbvozjjhvj;l jafh asghoa hzbksg gephbeo r', 'hot', 'images/Mocha.jpeg', 'Christine Chailes', '20 mins', '10 mins', 10, 'approved', 'Drip Coffee'),
(45, 'Americano', 'kllbfg dojoihuvid yidihi fshucih lhfisd jiv jskfhvio dlfvf;v lvl lcnoibhufvj xjbf jsdkg owkefj ierhblnvm  jdbjfsdfjhbd jnd nhhuh df dff ghny vgg ', 'hot', 'images/Mocha.jpeg', 'Christine Chailes', '20 mins', '10 mins', 10, 'approved', 'Drip Coffee'),
(46, 'aa', 'sddddddddddddddddddddddddddddd basboiuf ghei hih 9ewhfeuig ufihfi hihfh, kbdfkdfmjhajdifhah fdjaoihai fd adf hnkbhbkhk uyhn cg', 'hot', 'images/Mocha.jpeg', 'Christine Chailes', '20 mins', '10 mins', 10, 'approved', 'Espresso'),
(49, 'Christine Chailes M Reyes', 'sssssssssssss ooooooooooo jjjjjjjjjj hhhhhhh gggggggg bbbbbb nnnnnnnnnnnnnn ,mmmmmmmmms ggggggggggg', 'cold', 'images/Mocha.jpeg', 'Christine Chailes', '20 mins', '10 mins', 10, 'approved', 'Drip Coffee'),
(50, 'Americano', 'ffffffffff kkkfff ', 'hot', 'images/7-15.jpg', 'Christine Chailes', '20 mins', '10 mins', 10, 'approved', 'Espresso'),
(51, 'Americano', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'cold', 'images/Mocha.jpeg', 'Christine Chailes', '20 mins', '10 mins', 10, 'approved', 'Americano');

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
(0, 1, 'chailes@gmail.com', 'wow nice', '2024-04-23 05:02:21'),
(0, 1, 'chailes@gmail.com', 'nice nice', '2024-04-23 05:06:38'),
(0, 1, 'kape@gmail.com', 'wowwwww', '2024-04-23 05:09:13'),
(0, 35, 'chailes@gmail.com', 'AHHAHA', '2024-04-26 07:39:41'),
(0, 35, 'kape@gmail.com', 'hhehehe', '2024-04-26 07:41:00');

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
(1, 1, 'Bring ingredients to a simmer in a small saucepan over medium heat.'),
(2, 1, 'Steaming method (espresso machine): Place the milk in a pitcher. Hold the steaming wand just below the surface of the milk until it doubles in size. This makes foamy froth. Then, move the steaming wand lower and near the side of the pitcher to create a spiral vortex.'),
(3, 1, 'heat the milk to scalding and foam it (without espresso machine): Heat the milk to 150 degrees Fahrenheit, which is hot to the touch but not simmering. Measure with a food thermometer, or you can approximate by testing with your finger.'),
(4, 1, 'Serve: Tap the milk container on counter and swirl it to break down any large bubbles. Pour milk into center of the espresso, ending with light foam.'),
(5, 2, 'Grind the coffee beans on the coarsest setting on your grinder, or in short 1-second pulses in a spice grinder. The grounds should look like coarse cornmeal, not fine powder. You should have just under 1 cup of grounds.'),
(6, 2, 'Transfer the coffee grounds to the container you\\\'re using to make the cold brew. Pour the water over top. Stir gently with a long-handled spoon to make sure the grounds are thoroughly saturated with water.'),
(7, 2, 'Cover the jar with a lid or a small plate to protect it from dust and bugs. Let the coffee steep for about 12 hours. The coffee can be left on the counter or refrigerated; steeping time is the same.'),
(8, 2, 'Line a small strainer with cheesecloth or flour sack cloth and place over a large measuring cup or bowl. Pour the coffee through the strainer.'),
(9, 2, 'Transfer the coffee to a small bottle or jar and store in the fridge for up to a week.'),
(10, 2, 'Dilute the coffee with as much water or milk as you prefer. Serve over ice or warm for a few minutes in the microwave.'),
(45, 35, 'Brew a shot of espresso or prepare 1/2 cup of strong brewed coffee.'),
(47, 37, 'd'),
(48, 38, 'Brew a shot of espresso or prepare 1/2 cup of strong brewed coffee.'),
(49, 39, 'Brew a shot of espresso or prepare 1/2 cup of strong brewed coffee.'),
(50, 40, 'Brew a shot of espresso or prepare 1/2 cup of strong brewed coffee.'),
(51, 41, '3'),
(52, 42, 'Brew a shot of espresso or prepare 1/2 cup of strong brewed coffee.'),
(53, 43, 'f'),
(54, 44, 'DGP w9vy[0G-0 B'),
(55, 45, 'Brew a shot of espresso or prepare 1/2 cup of strong brewed coffee.'),
(56, 46, 'Brew a shot of espresso or prepare 1/2 cup of strong brewed coffee.'),
(59, 49, 'a'),
(60, 50, 'as'),
(61, 51, 'Brew a shot of espresso or prepare 1/2 cup of strong brewed coffee.');

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
(1, 1, 'Cacao powder (or cocoa powder)'),
(2, 1, 'Ginger, cinnamon, allspice, cardamom'),
(3, 1, 'Vanilla extract'),
(4, 2, '1 cup (113 grams) whole coffee beans'),
(5, 2, '4 cups (907 grams) water'),
(74, 35, '1 shot of espresso or 1/2 cup strong brewed coffee'),
(76, 37, '1 shot of espresso or 1/2 cup strong brewed coffee'),
(77, 38, '1 shot of espresso or 1/2 cup strong brewed coffee'),
(78, 39, '1 shot of espresso or 1/2 cup strong brewed coffee'),
(79, 40, '1 shot of espresso or 1/2 cup strong brewed coffee'),
(80, 41, '1 shot of espresso or 1/2 cup strong brewed coffee'),
(81, 42, 'sd'),
(82, 42, ''),
(83, 42, ''),
(84, 43, '1 shot of espresso or 1/2 cup strong brewed coffee'),
(85, 44, '1 shot of espresso or 1/2 cup strong brewed coffee'),
(86, 44, ''),
(87, 45, '1 shot of espresso or 1/2 cup strong brewed coffee'),
(88, 46, '1 shot of espresso or 1/2 cup strong brewed coffee'),
(89, 46, ''),
(90, 46, ''),
(97, 49, '1 shot of espresso or 1/2 cup strong brewed coffee'),
(98, 50, '1 shot of espresso or 1/2 cup strong brewed coffee'),
(99, 51, '1 shot of espresso or 1/2 cup strong brewed coffee');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `directions`
--
ALTER TABLE `directions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

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
