-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 04:53 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL,
  `sport_product` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`, `sport_product`) VALUES
(1, 'Adidas', 'Predatior', 1525.00, './assets/adidasPredatior.jpg', NULL, 'football'),
(2, 'Adidas', 'Adidas Shoes', 1222.00, './assets/adidasshoes.jpg', NULL, 'football'),
(3, 'Nike', 'Amadrid', 123.00, './assets/amadrid.jpg', NULL, 'jersey'),
(4, 'Marbel', 'Avenger', 135.00, './assets/avengers.jpg', NULL, 'ps4'),
(5, 'Rakuten', 'Barcelona', 152.00, './assets/Barcelona.jpg', NULL, 'jersey'),
(6, 'Nike', 'Basketball', 112.00, './assets/basketball.png', NULL, 'basketball'),
(7, 'Nike', 'Basketball Shoes', 1101.00, './assets/basketballshoes.jpeg', NULL, 'basketball'),
(8, 'PS4', 'Batman', 122.00, './assets/batman.jpg', NULL, 'ps4'),
(9, 'Adidas', 'Blue adidas', 1652.00, './assets/blueadidas.jpg', NULL, 'football'),
(10, 'PS4', 'Call of duty', 150.00, './assets/callofduty.jpg', NULL, 'ps4'),
(11, 'Nike', 'Chelsea', 160.00, './assets/chelsea.jpg', NULL, 'jersey'),
(12, 'Nike', 'City', 152.00, './assets/city.jpg', NULL, 'jersey'),
(13, 'Nike', 'cricketpad', 102.00, './assets/cricketpad.png', NULL, 'cricket'),
(14, 'Nike', 'Cricketball', 100.00, './assets/cricketball.jpg', NULL, 'cricket'),
(15, 'Nike', 'Cricketbat', 110.00, './assets/Cricketbat.jpg', NULL, 'cricket'),
(16, 'PS4', 'csgo', 116.00, './assets/csgo.jpg', NULL, 'ps4'),
(17, 'PS4', 'Far Cry 5', 150.00, './assets/farcry5.jpg', NULL, 'ps4'),
(18, 'PS4', 'Fifa 2020', 150.00, './assets/Fifa2020.jpg', NULL, 'ps4'),
(19, 'Nike', 'Football', 102.00, './assets/Football.jpg', NULL, 'football'),
(20, 'Nike', 'Footballgloves', 80.00, './assets/Footballgloves.jpg', NULL, 'football'),
(22, 'Nike', 'footballnet', 100.00, './assets/fotballnet.jpg', NULL, 'football'),
(23, 'Nike', 'Futsalblack', 150.00, './assets/futsalblack.jpg', NULL, 'football'),
(24, 'PS4', 'fortnite', 150.00, './assets/fortnite.jpg', NULL, 'ps4'),
(25, 'PS4', 'GTA 7', 150.00, './assets/gta7.jpg', NULL, 'ps4'),
(26, 'Nike', 'Juventus', 180.00, './assets/jventus.jpg', NULL, 'jersey'),
(27, 'Nike', 'Liverpool', 150.00, './assets/liverpool.jpg', NULL, 'jersey'),
(28, 'Nike', 'United', 150.00, './assets/manchester.jpg', NULL, 'jersey'),
(29, 'Nike', 'Football', 250.00, './assets/nikefootball.jpg', NULL, 'football'),
(30, 'Nike', 'Futsal', 200.00, './assets/nikefutsal.jpg', NULL, 'football'),
(31, 'Nike', 'Real Madrid', 150.00, './assets/real.jpg', NULL, 'jersey'),
(32, 'PS4', 'Spider Man', 150.00, './assets/spiderman.jpg', NULL, 'ps4'),
(33, 'PS4', 'Tekken-7', 150.00, './assets/tekken-7.jpg', NULL, 'ps4'),
(34, 'Nike', 'Tottenham', 150.00, './assets/tottenham.jpg', NULL, 'jersey'),
(35, 'Nike', 'Volley Ball', 150.00, './assets/volleyball.jpg', NULL, 'basketball'),
(36, 'Nike', 'witcher', 150.00, './assets/witcher.jpg', NULL, 'ps4');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
