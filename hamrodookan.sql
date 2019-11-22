-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 06:41 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamrodookan`
--

-- --------------------------------------------------------

--
-- Table structure for table `alldata`
--

CREATE TABLE `alldata` (
  `id` int(11) NOT NULL,
  `product_id` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL,
  `modelnumber` varchar(700) NOT NULL,
  `price` int(200) NOT NULL,
  `keyfeature1` varchar(500) NOT NULL,
  `keyfeature2` varchar(500) NOT NULL,
  `keyfeature3` varchar(500) NOT NULL,
  `keyfeature4` varchar(500) NOT NULL,
  `keyfeature5` varchar(500) NOT NULL,
  `keyfeature6` varchar(500) NOT NULL,
  `quantity` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alldata`
--

INSERT INTO `alldata` (`id`, `product_id`, `product_name`, `image`, `modelnumber`, `price`, `keyfeature1`, `keyfeature2`, `keyfeature3`, `keyfeature4`, `keyfeature5`, `keyfeature6`, `quantity`) VALUES
(11, 'Samsung S', 'Samsung S', 'images/samsung-galaxy-s6-edge-plus.jpg', '56m-t66-6', 15000, '8GB Ram', 'Quad processor', 'high graphics', 'MG Version', '', '', 10),
(12, 'Samsung C8', 'Samsung C8', 'images/Mobile-and-Smartwatch-640x360.jpg', 'dfd-5gg-gh', 20000, '8 GB ram', 'Meomory 32 gb', 'latest version', '', '', '', 4),
(13, 'Samung J', 'Samsung J', 'images/sm_n950f_galaxynote8_front_black_cashify2.jpg', 'fddf0-fddf-5', 25000, '8 GB ram', '32 gb inter memory', '', '', '', '', 10),
(14, 'samsung ', 'Samsung T', 'images/images (3).jpg', 'fdfd-ttr-4', 10000, '8gb ram', '', '', '', '', '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `apple_computer`
--

CREATE TABLE `apple_computer` (
  `id` int(11) NOT NULL,
  `product_id` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL,
  `modelnumber` varchar(700) NOT NULL,
  `price` int(200) NOT NULL,
  `keyfeature1` varchar(200) NOT NULL,
  `keyfeature2` varchar(200) NOT NULL,
  `keyfeature3` varchar(200) NOT NULL,
  `keyfeature4` varchar(200) NOT NULL,
  `keyfeature5` varchar(200) NOT NULL,
  `keyfeature6` varchar(200) NOT NULL,
  `quantity` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apple_computer`
--

INSERT INTO `apple_computer` (`id`, `product_id`, `product_name`, `image`, `modelnumber`, `price`, `keyfeature1`, `keyfeature2`, `keyfeature3`, `keyfeature4`, `keyfeature5`, `keyfeature6`, `quantity`) VALUES
(1, 'Apple 1', 'Apple 1', 'images/item_XL_8113068_7551405.jpg', 'Apple 1 Model', 100000, 'dual processor', '8gb ram', '256 gb ssd hard disk', 'touch screen', 'latest 6 th generation', 'i6', 0),
(2, 'Apple 2', 'Apple 2', 'images/images (9).jpg', 'Apple 2 ', 150000, 'I5', '6th generation', '8 gb ram', '256 gb ssd harddisk', 'touch screen', '360 rotate', 0),
(3, 'Apple 3', 'Apple 3', 'images/18966-18644-macportable-l.jpg', 'Apple 3 Model', 100000, 'dual processor', '8gb ram', '256 gb ssd hard disk', 'touch screen', 'latest 6 th generation', 'i6', 0),
(4, 'Apple 4', 'Apple 4 g', 'images/31nI1hZ-rgL._SL500_AC_SS350_.jpg', 'Apple 4 model', 150000, 'I5', '6th generation', '8 gb ram', '256 gb ssd harddisk', 'touch screen', '360 rotate', 5);

-- --------------------------------------------------------

--
-- Table structure for table `backend_register`
--

CREATE TABLE `backend_register` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backend_register`
--

INSERT INTO `backend_register` (`id`, `username`, `password`) VALUES
(1, 'roshan', 'roshandeuba');

-- --------------------------------------------------------

--
-- Table structure for table `feature_product`
--

CREATE TABLE `feature_product` (
  `id` int(11) NOT NULL,
  `product_id` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feature_product`
--

INSERT INTO `feature_product` (`id`, `product_id`, `product_name`, `price`, `image`) VALUES
(1, 'Samsung S', 'samsung S', 10000, 'images/samsung-galaxy-s6-edge-plus.jpg'),
(2, 'hp laptop 1', 'hp laptop 1', 50000, 'img/hp2.jpg'),
(3, 'Oppo 1', 'Oppo 1', 15000, 'images/b5995cabadac322cf26c663dff8125d6_375x500_1.jpg'),
(4, 'Apple 1', 'Apple 1', 100000, 'images/item_XL_8113068_7551405.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hp_computer`
--

CREATE TABLE `hp_computer` (
  `id` int(11) NOT NULL,
  `product_id` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL,
  `modelnumber` varchar(700) NOT NULL,
  `price` int(200) NOT NULL,
  `keyfeature1` varchar(500) NOT NULL,
  `keyfeature2` varchar(500) NOT NULL,
  `keyfeature3` varchar(500) NOT NULL,
  `keyfeature4` varchar(500) NOT NULL,
  `keyfeature5` varchar(500) NOT NULL,
  `keyfeature6` varchar(500) NOT NULL,
  `quantity` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hp_computer`
--

INSERT INTO `hp_computer` (`id`, `product_id`, `product_name`, `image`, `modelnumber`, `price`, `keyfeature1`, `keyfeature2`, `keyfeature3`, `keyfeature4`, `keyfeature5`, `keyfeature6`, `quantity`) VALUES
(1, 'hp laptop 1', 'Hp laptop 1', 'img/hp1.jpg', 'HP laptop 15-bu003tu  (6th Gen Intel Core i3- 4GB RAM- 1TB HDD- 39.62cm(15.6)- DOS) (Black)', 50000, 'octa processor', '8 gb ram', '500 gm=b ssd', 'gorilla glass', 'touch screen', '360 rotate', 0),
(2, 'hp laptop 2', 'Hp laptop 2', 'images/c05383394.png', 'HP laptop 2 15-bu003tu  (6th Gen Intel Core i3- 4GB RAM- 1TB HDD- 39.62cm(15.6)- DOS) (Black)', 100000, 'branded', '8 gb ram', '1000 gb hardisk', '360 rotate', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oppo_mobile`
--

CREATE TABLE `oppo_mobile` (
  `id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL,
  `modelnumber` varchar(800) NOT NULL,
  `price` int(200) NOT NULL,
  `keyfeature1` varchar(200) NOT NULL,
  `keyfeature2` varchar(200) NOT NULL,
  `keyfeature3` varchar(200) NOT NULL,
  `keyfeature4` varchar(200) NOT NULL,
  `keyfeature5` varchar(200) NOT NULL,
  `keyfeature6` varchar(200) NOT NULL,
  `quantity` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oppo_mobile`
--

INSERT INTO `oppo_mobile` (`id`, `product_id`, `product_name`, `image`, `modelnumber`, `price`, `keyfeature1`, `keyfeature2`, `keyfeature3`, `keyfeature4`, `keyfeature5`, `keyfeature6`, `quantity`) VALUES
(8, 'oppo 1', 'oppo 1', 'images/b5995cabadac322cf26c663dff8125d6_375x500_1.jpg', 'fddfe-r--f', 20000, '8 GB ram', '', '', '', '', '', 10),
(9, 'oppo 2 ', 'Oppo 2', 'images/1452670094oppo-f1.jpeg', 'fdf-d-f', 1000, '8GB Ram', '', '', '', '', '', 10),
(10, 'oppo 3', 'oppo 3', 'images/images (1).jpg', '55-fd-5', 20000, '8 GB ram', '', '', '', '', '', 10),
(11, 'oppo 4', 'oppo 4', 'images/iAsi8oqzQUA8ppV85Er5oX-320-80.jpg', 'fdf-oppo', 25000, '32 GB internal memory', '', '', '', '', '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `ID` int(11) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `Age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `email`) VALUES
(11, 'roshan', 'f20539a48907fc569df3dacf37dc45f8', 'roshan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alldata`
--
ALTER TABLE `alldata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apple_computer`
--
ALTER TABLE `apple_computer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backend_register`
--
ALTER TABLE `backend_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_product`
--
ALTER TABLE `feature_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hp_computer`
--
ALTER TABLE `hp_computer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oppo_mobile`
--
ALTER TABLE `oppo_mobile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alldata`
--
ALTER TABLE `alldata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `apple_computer`
--
ALTER TABLE `apple_computer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `backend_register`
--
ALTER TABLE `backend_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feature_product`
--
ALTER TABLE `feature_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hp_computer`
--
ALTER TABLE `hp_computer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oppo_mobile`
--
ALTER TABLE `oppo_mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
