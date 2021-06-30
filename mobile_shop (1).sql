-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 24, 2021 at 02:12 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `name`, `price`) VALUES
(1, 'Samsung Galaxy S9 plus', '70000'),
(2, 'Samsung Galaxy S10', '92000'),
(3, 'Redmi Note 8', '13999'),
(4, 'Redmi K2 Pro', '28999'),
(5, 'One Plus 7T', '35989'),
(6, 'Samsung Galaxy a51', '20999'),
(7, 'Apple iphone 7', '23799'),
(8, 'Apple iphone 8', '41999'),
(9, 'iphone XS-Max', '99999'),
(10, 'One Plus 7T Pro', '47999'),
(11, 'Samsung Galaxy S20 Ultra', '97999'),
(12, 'iphone XR', '53999');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `city` text NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `email`, `password`, `name`, `contact`, `city`, `address`) VALUES
(1, 'msrijita61@gmail.com', 'Srijita@01', 'Srijita Mandal', '9832886117', '', ''),
(2, 'tanisha49@gmail.com', 'Tanisha@04', 'Tanisha Mandal', '9609415826', '', ''),
(3, 'srijita21@gmail.com', 'Srijita@21', 'Agkkkjuou Bukg', '9216542515', '', ''),
(4, 'cjhiugi16@gmail.com', 'Sou323416', 'Anigo Kbikj', '9814859315', '', ''),
(5, 'vireo34@gmail.com', 'SEygiy9p455633', 'Aygieofh Nljrre', '9845236751', '', ''),
(6, 'xujgkjo@gmail.com', 'Gutihok773325', 'Dyjkl Nljkk', '9813526331', '', ''),
(7, 'cgjgik6535@gmail.com', 'GILjp;35465357', 'SHtikjo Gcmhhl', '9612357842', '', ''),
(8, 'ftfkujok656@gmail.com', 'hiohoeE^^&*', 'Blhkbpi Hpjjpo', '8612459635', '', ''),
(9, 'ccjhlij563@gmail.com', 'Fkkfk6^^&^', 'Gffjjhk Bhcghk', '9652314756', '', ''),
(10, 'diyhiojp4863@gmail.com', 'Ddygbuf489531*(*)(', 'Shgku Bjgi', '9632547815', '', ''),
(11, 'dthilkli987@gmail.com', 'Gloyp453*)', 'Sfku Hjjk', '9825364596', '', ''),
(12, 'cfukhioj5343@gmail.com', 'Fkhkl48831548', 'Gkchk Vkhl', '9653124875', '', ''),
(13, 'tyfiuh080y@gamil.com', 'Dutvlbl498165', 'Sjjjjyhg Hcuhj', '9652145683', '', ''),
(14, 'srijitamandal6798@gmail.com', 'Srijita@21', 'Srijita Mandal', '9832886117', 'Basirhat', ''),
(15, 'srijita25ece@gmail.com', 'Sri21082001', 'Srijita Mandal', '9832886117', 'Basirhat', ''),
(16, 'sarkarkunal1999@gmail.com', '123456789', 'Kunal Sarkar', '9832886117', 'Basirhat', ''),
(17, 'srijita9479i@gmail.com', 'Sri765785885', 'Srijita Mandal', '9645247511', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

DROP TABLE IF EXISTS `users_products`;
CREATE TABLE IF NOT EXISTS `users_products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_products`
--

INSERT INTO `users_products` (`id`, `product_id`, `user_id`, `status`) VALUES
(25, 1, 13, 'Confirmed'),
(26, 2, 13, 'Confirmed'),
(31, 1, 1, 'Confirmed'),
(32, 1, 1, 'Confirmed'),
(33, 1, 1, 'Confirmed'),
(34, 1, 1, 'Confirmed'),
(35, 1, 1, 'Confirmed'),
(36, 1, 1, 'Confirmed'),
(37, 1, 1, 'Confirmed'),
(40, 8, 1, 'Confirmed'),
(41, 3, 1, 'Confirmed'),
(42, 1, 1, 'Confirmed'),
(46, 9, 1, 'Confirmed'),
(47, 5, 14, 'Confirmed'),
(48, 9, 14, 'Confirmed'),
(49, 10, 1, 'Confirmed'),
(50, 5, 1, 'Confirmed'),
(51, 11, 15, 'Confirmed'),
(52, 12, 16, 'Added to cart'),
(53, 5, 17, 'Confirmed');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_products`
--
ALTER TABLE `users_products`
  ADD CONSTRAINT `users_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`pid`),
  ADD CONSTRAINT `users_products_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
