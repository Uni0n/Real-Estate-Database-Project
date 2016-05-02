-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 02, 2016 at 04:26 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_street` varchar(100) NOT NULL,
  `address_city` varchar(100) NOT NULL,
  `address_state` varchar(100) NOT NULL,
  `address_zip` varchar(100) NOT NULL,
  `num_bathrooms` int(11) NOT NULL,
  `num_bedrooms` int(11) NOT NULL,
  `listing_price` int(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `description` text NOT NULL,
  `contact_email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `type_id`, `user_id`, `address_street`, `address_city`, `address_state`, `address_zip`, `num_bathrooms`, `num_bedrooms`, `listing_price`, `created`, `description`, `contact_email`) VALUES
(1, 1, 1, '1147 Zurich Court', 'San Jose', 'CA', '95131', 2, 3, 500000, '2016-04-26 08:26:03', 'Built in 1978 and located in the heart of Silicon Valley, this rental is a great investment for new parents. The rental''s close proximity to Summervale Elementary School provides a great opportunity for potential renters looking for a good neighborhood.', NULL),
(3, 2, 1, '1234 Main Street', 'Fremont', 'CA', '95132', 2, 1, 750000, '2016-04-26 08:26:04', 'Located in a great neighborhood in Fremont devoid of crime, this condominium is a great opportunity for people interested in purchasing new property in the Bay Area. ', NULL),
(4, 1, 1, '1234 First Avenue', 'Milpitas', 'CA', '95133', 2, 1, 750000, '2016-04-26 08:26:04', 'This rental property was recently built in 2005 and offers an incredible value for those looking to own new properties. At the low price of $7.5 million/month, this rental offers a competitive rental price in the Bay Area.', NULL),
(5, 3, 2, '1234 Second Boulevard', 'Oakland', 'CA', '95137', 2, 1, 750000, '2016-04-26 08:26:04', 'Located in West Oakland, you''re about as likely to get stabbed as soon as you step outside as you''re likely to breathe. Buy now!', NULL),
(10, 3, 4, '1652 3rd Street', 'San Francisco', 'CA', '95678', 4, 5, 650000, '2016-04-26 10:19:00', 'This rustic property is located 2 miles from Golden Gate Park and is available at the low, low price of $30,000/month. Across the street from an elementary school, this property is a great value for new parents', 'test@yahoo.com'),
(11, 3, 5, '1652 Main Street', 'San Francisco', 'CA', '95678', 4, 5, 650000, '2016-04-26 10:19:00', 'This rustic property is located 5 miles from Golden \r\n\r\nGate Park and is available at the low, low price of $30,000/month. Across the street from an elementary school, this \r\n\r\nproperty is a great value for new parents. Totally different from the previous property', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `color`) VALUES
(1, 'Rental', '#4169E1'),
(2, 'Condo', '#32CD32'),
(3, 'Apartment', '#D400FF'),
(4, 'House', '#FFD700'),
(5, 'Timeshare', '#FFA500');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `role`, `created`) VALUES
(1, 'Brad', 'Smith', 'test@test.com', 'bsmith', 'password', 'Agent', '2016-04-28 16:04:23'),
(2, 'Susan', 'Nguyen', 'test@yahoo.com', 'snguyen', 'password1', 'Seller', '2016-04-28 16:05:23'),
(3, 'Kevin', 'Johnson', 'test@gmail.com', 'kjohnson', 'password2', 'Buyer', '2016-04-28 16:06:23'),
(4, 'John', 'Doe', 'jdoe@yahoo.com', 'jdoe', '3cce2f63a270bf498c6719febcaf2d6c8cabae61', 'Agent', '2016-05-01 20:33:15'),
(5, 'Kevin', 'Gadek', 'test@askjeeves.com', 'kgadek', '3cce2f63a270bf498c6719febcaf2d6c8cabae61', 'Agent', '2016-05-01 21:11:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
