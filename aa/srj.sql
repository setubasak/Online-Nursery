-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 11:15 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srj`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` mediumtext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(1, 'SRJ - 1', 'Boxwood Bonsai ', 'Pour water at least once every day on the bottom (root) and top of the plant. Do not keep Bonsai under direct sun light but in a place where it gets partly sun light and partly shadow.', '2.jpg', 6, '7000.00'),
(2, 'SRJ - 2', 'Chinese Banyan Tree Bonsai', 'Ficus microcarpa is a tropical tree with smooth light-gray bark and entire oblanceolate leaves about 2-2.5 inch.\r\nBonsai will increase the beauty of your home.', '1.jpg', 5, '9000.00'),
(3, 'SRJ - 3', 'Podocarpus  or Buddhist pine', 'The Podocarpus will grow well outside, but can also be held indoors. Place it in a bright spot, protected from midday sun.Water regularly.Pruning can be done year round.', '3.jpg', 2, '10000.00'),
(4, 'SRJ - 4', 'Jed or Elephant Bush', 'Pour water at least once every day on the bottom (root) and top of the plant.\r\nDo not keep Bonsai under direct sun light but in a place where it gets partly sun light and partly shadow.', '4.jpg', 3, '4800.00'),
(9, 'SRJ - 5', 'Centella asiatica', 'Centella asiatica, a perennial herb also known as gotu kola, produces fan-shaped, green leaves that are harvested and used for medicinal purposes. Renowned for its cognitive enhancing ', '5.jpg', 19, '200.00'),
(10, 'SRJ - 6', 'Catharanthus roseus', 'Leukemia stage 1 natural enemy.Lowered the high blood pressure. A natural treat for Diabetes.A natural treatment for Kidney Stones.Lowered the Fever Naturally.Asthma emergency response.', '6.jpg', 15, '300.00'),
(11, 'SRJ - 7', 'Phyllanthus emblica', 'All parts of the plant are used in various Ayurvedic/Unani medicine herbal preparations, including the fruit, seed, leaves, root, bark and flowers.it contains five out of the six tastes.', '7.jpg', 12, '500.00'),
(12, 'SRJ - 8', 'Aloe vera', 'Aloe vera is a succulent plant species of the genus Aloe. An evergreen perennial, it originates from the Arabian Peninsula and is cultivated for agricultural and medicinal uses. ', '8.jpg', 11, '700.00'),
(13, 'SRJ - 9', 'Azadirachta indica', 'Neem is an evergreen magical tree each part, such as the leaves, seeds, flowers and bark have been used for pharmaceuticals,agriculture, insect repellents and medicinal cures.', '9.jpg', 10, '25.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
(1, 'setu', 'Basak', 'Mirpur', 'Dhaka', 1216, 'setu@gmail.com', 'setu', 'admin'),
(2, 'Rakybuzzaman', 'Ratan', 'Mirpur', 'Dhaka', 1216, 'rakib@gmail.com', 'rakib', 'user'),
(4, 'Joyonto', 'Roy', 'Azimpur', 'Dhaka', 1700, 'joy@gmail.com', 'joy', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
