-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 01:11 PM
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
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `name`, `created`, `updated`) VALUES
(9, 'ATK', '2019-12-07 13:50:59', NULL),
(10, 'Snack', '2019-12-08 02:21:31', NULL),
(11, 'Minuman', '2019-12-08 02:21:38', NULL),
(12, 'Makanan', '2019-12-08 02:21:43', NULL),
(14, 'Sembako', '2019-12-08 04:23:36', NULL),
(15, 'siap', '2019-12-08 04:27:02', NULL),
(16, 'ss', '2019-12-08 04:27:11', NULL),
(17, 'ssaa', '2019-12-08 04:27:17', NULL),
(18, 'sa', '2019-12-08 04:27:26', NULL),
(19, 'asas', '2019-12-08 04:27:43', NULL),
(20, 'asaas', '2019-12-08 04:27:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_item`
--

CREATE TABLE `product_item` (
  `item_id` int(11) NOT NULL,
  `barcode` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `stock` int(10) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_item`
--

INSERT INTO `product_item` (`item_id`, `barcode`, `name`, `category_id`, `unit_id`, `price`, `stock`, `created`, `updated`) VALUES
(1, 'A002', 'Taro', 10, 10, 4000, 52, '2019-12-08 02:41:30', '2019-12-07 22:33:57'),
(6, 'A007', 'jkbkj', 9, 9, 7859, 0, '2019-12-08 04:17:30', NULL),
(7, 'A009', 'jkasba', 9, 9, 89679, 0, '2019-12-08 04:19:58', NULL),
(8, 'A0010', 'hjsahjkas', 9, 10, 896806, 0, '2019-12-08 04:22:09', NULL),
(10, 'asas', 'asdad', 12, 9, 2, 0, '2019-12-08 07:08:27', NULL),
(11, 'A001209', 'sadjkbads', 9, 9, 21312, 0, '2019-12-08 14:13:19', NULL),
(12, 'A897897', 'dawdw', 9, 10, 234552, 0, '2019-12-08 14:13:34', NULL),
(13, 'A90820931', 'asdjkbjkdab', 12, 10, 324222, 0, '2019-12-08 14:13:52', NULL),
(14, 'A907409', 'ksdankladsn', 14, 10, 90417, 0, '2019-12-08 14:14:07', NULL),
(15, 'A97419', 'shkajbdakj', 14, 10, 97112, 0, '2019-12-08 14:14:17', NULL),
(16, 'A907210', 'jkshaddjka', 11, 10, 2137, 0, '2019-12-08 14:14:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_unit`
--

CREATE TABLE `product_unit` (
  `unit_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_unit`
--

INSERT INTO `product_unit` (`unit_id`, `name`, `created`, `updated`) VALUES
(9, 'Kilogram', '2019-12-07 13:50:59', NULL),
(10, 'Buah', '2019-12-07 14:13:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_stock`
--

CREATE TABLE `transaction_stock` (
  `stock_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `type` enum('in','out') NOT NULL,
  `detail` varchar(200) NOT NULL,
  `qty` int(10) NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_stock`
--

INSERT INTO `transaction_stock` (`stock_id`, `item_id`, `type`, `detail`, `qty`, `date`, `created`, `user_id`) VALUES
(1, 1, 'in', 'Bonus', 2, '2019-12-08', '2019-12-08 16:13:53', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(70) NOT NULL,
  `address` varchar(150) DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1. admin, 2. kasir'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Wildan Dawam Bash', 'Probolinggo', 1),
(4, 'mwpras', '6aa30a7675dbf07885c6f598268542a115c24e5c', 'wahyu prasetyo', 'jombang', 2),
(6, 'fackoellanda', '73f89b6bee24d8afdc823369bb3d3d322c228e07', 'Facko Ellanda', 'Blitar', 2),
(7, 'kasir123', '8cfab3d2724448440ea03b9cfa0194cb962a7723', 'kasir', 'coba', 2),
(9, 'jkbaskjdbsakjb', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', 'sajknjabdkj', 'saklnlskacnkln', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product_item`
--
ALTER TABLE `product_item`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `barcode` (`barcode`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indexes for table `product_unit`
--
ALTER TABLE `product_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `transaction_stock`
--
ALTER TABLE `transaction_stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_item`
--
ALTER TABLE `product_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_unit`
--
ALTER TABLE `product_unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction_stock`
--
ALTER TABLE `transaction_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_item`
--
ALTER TABLE `product_item`
  ADD CONSTRAINT `product_item_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`category_id`),
  ADD CONSTRAINT `product_item_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `product_unit` (`unit_id`);

--
-- Constraints for table `transaction_stock`
--
ALTER TABLE `transaction_stock`
  ADD CONSTRAINT `transaction_stock_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `product_item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_stock_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
