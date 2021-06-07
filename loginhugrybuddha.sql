-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 07:27 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginhugrybuddha`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`, `date`) VALUES
(0, 'Mike Tyson', 'john@gmail.com', '6465465465', 'hi this is a messag3e', '2021-06-02 12:00:25');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `mid` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`mid`, `title`, `description`, `type`, `price`) VALUES
(1, 'Veggie Paneer Special', 'A flavor-packed preparation with paneer chunks simmered in a rich and thick gravy.', 'Veg', 205),
(2, 'Paneer Bhurji Dry', 'Paneer bhurji is a popular and delicious north indian breakfast recipe made from crumbled paneer. Bhurji means scrambled. So in this dish, the paneer aka cottage cheese is scrambled.', 'Veg', 200),
(3, 'Cheese Butter Masala', 'cheese Butter masala recipe – one of the most loved cheese recipes by readers. A remarkable creamy, mildly sweet dish cooked in tomato cashew nut gravy, spices and cream in restaurant style.', 'Veg', 160),
(4, 'Butter Chicken', 'DAWAT Special Tomato Gravy in cream and butter The Traditional butter chicken of dawat restaurant an all time favourite', 'NonVeg', 210),
(5, 'Mutton Handi', 'Boned mutton cooked in a brown onion gravy with masala', 'NonVeg', 250),
(6, 'Kadai Paneer', 'Cottage cheese tossed in kadhai with onions, capsicum, tomatoes and fresh herbs', 'Veg', 190),
(7, 'Chicken Triple Schezwan Fried Rice', 'Rice served with manchurian balls in garlic sauce over fried noodles and tossed rice', 'NonVeg', 240);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `mid` int(11) NOT NULL,
  `plates` int(11) NOT NULL,
  `address` text NOT NULL,
  `orderdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `uid`, `name`, `mobile`, `mid`, `plates`, `address`, `orderdate`) VALUES
(1, 2147483647, 'Harry', '6465465465', 1, 2, ' Nepal LK street', '2021-06-02 14:32:54'),
(2, 2147483647, 'demo', '6465465465', 1, 2, ' sdd', '2021-06-02 14:36:30'),
(3, 2147483647, 'Mike Tyson', '6465465465', 5, 4, ' skjfdbsdf', '2021-06-02 14:43:08'),
(4, 2147483647, 'john', 'john@gmail.com', 1, 3, ' demo address', '2021-06-02 14:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `reservationtable`
--

CREATE TABLE `reservationtable` (
  `rid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `table` int(11) NOT NULL,
  `people` int(11) NOT NULL,
  `date` date NOT NULL,
  `restime` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservationtable`
--

INSERT INTO `reservationtable` (`rid`, `user_id`, `name`, `email`, `table`, `people`, `date`, `restime`) VALUES
(1, 2147483647, 'Harryt', 'harry@gmail.com', 1, 1, '2021-06-19', '12:14'),
(2, 2147483647, 'john', 'john@gmail.com', 3, 5, '2021-06-30', '18:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `email`) VALUES
(2147483647, 'harry', 'harry', 'harry@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `mid` (`mid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `reservationtable`
--
ALTER TABLE `reservationtable`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservationtable`
--
ALTER TABLE `reservationtable`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `menu` (`mid`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `reservationtable`
--
ALTER TABLE `reservationtable`
  ADD CONSTRAINT `reservationtable_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
