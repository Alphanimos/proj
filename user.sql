-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 09:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `prodb`
--

CREATE TABLE `prodb` (
  `id` int(11) NOT NULL,
  `partnum` varchar(16) DEFAULT NULL,
  `proddesc` varchar(73) DEFAULT NULL,
  `stocks` int(3) DEFAULT NULL,
  `price` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prodb`
--

INSERT INTO `prodb` (`id`, `partnum`, `proddesc`, `stocks`, `price`) VALUES
(1, 'CA4147 US32D', 'Yale Essential Lnobset Entrance SS (Box Packed)', 30, 'PHP 400.00'),
(2, 'CA4142 US32D', 'Yale Essential Knobset Privacy SS', 30, 'PHP 380.00'),
(3, 'CAS5147 US32D', 'CA5147 US32D Doorknob Entrance (Box Packed)', 30, 'PHP 690.00'),
(4, 'CA5142 US32D', 'CA5142 US32D Doorknob Entrance (Boc Packed)', 30, 'PHP 660.00'),
(5, '587SS-ET-BS60', 'CA5142 US32D Entrance x US32DX60MM Visual Packed', 24, 'PHP 960.00'),
(6, 'VCA4147 US32D', 'Yale VCA5127 Entrance x US5 x 60MM Visual Packed', 24, 'PHP 1,110.00'),
(7, 'VCA4147 US32D', 'Yale Essential Knobset Entrance SS', 24, 'PHP 620.00'),
(8, 'VCA4147 US5', 'Yale Essential Knobset Entrance PB', 24, 'PHP 670.00'),
(9, 'VCA4147 US11', 'Yale Essential Knobset Entrance AC', 24, 'PHP 670.00'),
(10, 'VCA4147 US3 ', 'Yale Essential Knobset Entrance PB', 24, 'PHP 670.00'),
(11, 'VCA4742 US32D', 'Yale Essential Knobset Privacy SS', 24, 'PHP 600.00'),
(12, 'VCA4142  US32D', 'Yale Essential Tubular Knobset Entrance SS', 24, 'PHP 520.00'),
(13, 'VCA4247 US32D', 'Yale Key in Lever VL4447 x US15 Entrance Visual Pack', 24, 'PHP 820.00'),
(14, 'VL4467 US15', 'Yale Key in Lever VL4467 x US15 Entrance Visual Pack', 24, 'PHP 870.00'),
(15, 'VL4427 US15', 'Yale Key in Lever VL4427 x US15 Privacy Visual Pack', 24, 'PHP 820.00'),
(16, 'VL4422 U515', 'Yale Key in Lever VL4422 x US15 Privacy Visual Pack', 24, 'PHP 760.00'),
(17, 'VL4462 US15', 'Yale Key in Lever VL4462 x US15 Privacy Visual Pack', 24, 'PHP 780.00'),
(18, 'VL4442 US15', 'Yale Key in Lever VL4442 x US15 Privacy Visual Pack', 24, 'PHP 730.00'),
(19, 'VYED10015S', 'Yale Essential Deadbolt Single Cylinder US32D Visual Packed', 24, 'PHP 600.00'),
(20, 'VYED1001AB', 'Yale Essential Deadbolt Single Cylinder US5 Visual Packed', 24, 'PHP 640.00'),
(21, 'VYED1001PB', 'Yale Essential Deadbolt Single Cylinder US3 Visual Packed', 24, 'PHP 640.00'),
(22, 'VYED1001AC', 'Yale Essential Deadbolt Single Cylinder US11 Visual Packed', 24, 'PHP 640.00'),
(23, 'VYED1002S5', 'Yale Essential Deadbolt Double Cylinder US32D Visual Packed', 24, 'PHP 730.00'),
(24, 'VYED1002AC', 'Yale Essential Deadbolt Double Cylinder US3 Visual Packed', 24, 'PHP 780.00'),
(25, 'VYED1002PB', 'Yeh-PB- 3.0x3 0x2.0 Plain Bearing Loose Pin Hingers US4 PR Visual Packed ', 20, 'PHP 130.00'),
(26, 'VYED1002AB', 'Yeh-PB- 3.5x3 5x2 2 Plain Bearing Loose Pin Hingers US4 PR Visual Packed ', 20, 'PHP 150.00'),
(27, 'VEHV-30US4-PB', 'Yeh-PB- 4.0x4 0x2 2 Plain Bearing Loose Pin Hingers US4 PR Visual Packed ', 20, 'PHP 180.00'),
(28, 'VEHV-35US4-PB', 'Yeh-PB- 3.0x4 0x2 0 Plain BearingFixed Pin US32D Visual Packed', 20, 'PHP 180.00'),
(29, 'YEHV-3D-US322D', 'Yeh-PB- 3.5x3 5x2 2 Plain BearingFixed Pin US32D PR  Visual Packed', 20, 'PHP 170.00'),
(30, 'YEHV-35-US32D', 'Yeh-PB- 3.5x3 5x2 2 Plain BearingFixed Pin Hinges US32D PR  Visual Packed', 20, 'PHP 200.00'),
(31, 'YE1/20/111/1', 'Brass Padlock 20mm 20 YE1/20/111/1', 36, 'PHP 250.00'),
(32, 'YE1/25/113/1', 'Brass Padlock 25mm 25 YE1/20/111/1', 36, 'PHP 340.00'),
(33, 'YE1/30/115/1', 'Brass Padlock  30mm 30YE1/30/115/1', 36, 'PHP 440.00'),
(34, 'YE1/35/120/1', 'Brass Padlock 35mm 35YE1/35/120/1', 36, 'PHP 470.00'),
(35, 'YE1/40/122/1', 'Brass Padlock 40mm 40 YE1/40/122/1', 36, 'PHP 670.00'),
(36, 'YE1/50/126/1', 'Brass Padlock 50mm 50 YE1/50/126/1', 24, 'PHP 1,020.00'),
(37, 'YE1/70/137/1', 'Brass Padlock 60mm 60 YE1/70/137/1', 24, 'PHP 1,550.00 '),
(38, 'YE1/20/122/3', 'Brass Padlock 70mm 70 YE1/20/122/3', 24, 'PHP 230.00 '),
(39, 'YE1/25/125/1', 'Brass Padlock20mm 20 (Ls) YE1/25/125/1', 36, 'PHP 270.00'),
(40, 'YE1/30/1321', 'Brass Padlock 30mm 30 (Ls) YE1/30/1321', 36, 'PHP 370.00'),
(41, 'YE1/40/140/1', 'Brass Padlock 40mm 40 (Ls) YE1/40/140/1', 36, 'PHP 490.00'),
(42, 'YE1/50/166/1', 'Brass Padlock 50mm 50 (Ls) YE1/50/166/1', 36, 'PHP 700.00 '),
(43, 'V14020', 'YALE V140 20 PADLOCK 20MM, 3 KEYS, VISUAL PACK', 24, 'PHP 350.00 '),
(44, 'V14025', 'YALE V140 25 PADLOCK 25MM, 3 KEYS, VISUAL PACK ', 36, 'PHP 410.00'),
(45, 'V14030', 'YALE V140 30 PADLOCK 30MM, 3 KEYS, VISUAL PACK', 36, 'PHP 480.00'),
(46, 'V14040', 'YALE V140 40 PADLOCK 40MM, 3 KEYS, VISUAL PACK', 36, 'PHP 640.00'),
(47, 'V14050', 'YALE V140 50 PADLOCK  3 KEYS, VISUAL PACK', 36, 'PHP 1,000.00'),
(48, 'V14060', 'YALE V140 60 PADLOCK  3 KEYS, VISUAL PACK', 24, 'PHP 1,250.00'),
(49, 'Y564ETGL26S3ED', 'V78 (564GL) NIGHT LATCH, Gold', 24, 'PHP 1,820.00'),
(50, 'YS64ETAB2653E0', 'V78 (564A8) NIGHT LATCH, AB', 24, 'PHP 1,820.00'),
(51, 'H105E1GL2653E0', 'YALE V198 X GL X VISUAL PACKED RIM LOCK', 24, 'PHP 1,540.00'),
(52, 'H10SETAB2653F0', 'YALE V198 X AB X VISUAL PACKED RIM LOCK', 24, 'PHP 1,940.00'),
(53, 'H10SETWL26S3ED', 'YALE V198 X WHITE X VISUAL PACKED RIM LOCK', 24, 'PHP 1,500.00'),
(54, 'ETAB2653E0', 'V198 1/4AB (H102AB) RIM LOCK, AB', 24, 'PHP 2,380.00'),
(55, 'ETGL2653E0', 'V198 1/4GL (H102GL) RIM LOCK, GL', 24, 'PHP 2,380.00'),
(56, '60HEVHF0002', '9600H YALE V9660HE x 2 KEYS x VISUAL PACKERDRAWER LOCK', 180, 'PHP 340.00'),
(57, '688AAVCD0012', 'YALE V1688 x SB SCREEN DOOR CLOSERVISUAL', 20, 'PHP 620.00'),
(58, '689AAVCD0012', 'YALE V1688 x SB SCREEN DOOR VISUALPACKED DOOR', 20, 'PHP 860.00 '),
(59, 'YED81001 U532D', 'YALE ESSENTIAL SQUARE BOLT U532D VISUAL PACKED ', 120, 'PHP 200.00'),
(60, 'VYEDG1001 U515', 'YALE ESSENTIAL DOOR GUARD U515 VISUAL PACKED ', 120, 'PHP 330.00 '),
(61, 'VYETB1002 U532D ', 'YALE ESSENTIAL BARREL BOLT 2INCH U532D VISUAL PACKED ', 120, 'PHP 150.00 '),
(62, 'VYETB1004 U532D ', 'YALE ESSENTIAL TOWER BOLT 4INCH U532D VISUAL PACKED ', 120, 'PHP 150.00'),
(63, 'VYETB1006 U532D', 'YALE ESSENTIAL TOWER BOLD 6INCH U532D VISUAL PACKED ', 210, 'PHP 200.00 '),
(64, 'Y602SIL', 'YALE Y602 S2 STD ARM DOOR CLOSER, SILVE', 10, 'PHP 1,410 '),
(65, 'Y603HSIL', 'YALE Y603G 52-4 STD ARM DOOR CLOSER w/ HO, SILVER', 10, 'PHP 1,640.00 '),
(66, 'VYEC1001 U515', 'YALE ESSENTIAL DOOR CHAIN U515 VISUAL PACKED ', 120, 'PHP 140.00 '),
(67, 'VYED51001 S532D', 'Yale Essential Half Moon Door Stop U532D VISUAL PACKED ', 120, 'PHP 140.00 '),
(68, 'VYEDSH1001 U532D', 'YALE ESSENTIAL WALL MOUNT DOOR STEP U532D VISUAL PACKED ', 120, 'PHP 170.00'),
(69, 'VYEDV1001 U515', 'YALE ESSENTIAL DOOR VIEWER U515 VISUAL PACKED ', 120, 'PHP 180.00 '),
(70, 'ESD2', 'SMOKE DETECTOR IN YALE LOGO CASE AND BLISTER PACK ', 30, 'PHP 1,210.00');

-- --------------------------------------------------------

--
-- Table structure for table `producttest`
--

CREATE TABLE `producttest` (
  `id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `stocks` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttest`
--

INSERT INTO `producttest` (`id`, `product`, `brand`, `stocks`, `price`) VALUES
(1, 'Keyboard', 'Logitech', 50, '29.99'),
(2, 'Mouse', 'Microsoft', 100, '19.99'),
(3, 'Monitor', 'Dell', 30, '199.99'),
(4, 'Laptop', 'HP', 20, '599.99'),
(5, 'Headphones', 'Sony', 80, '49.99'),
(6, 'External Hard Drive', 'Seagate', 40, '79.99'),
(7, 'Graphics Card', 'NVIDIA', 10, '399.99'),
(8, 'CPU', 'Intel', 15, '299.99'),
(9, 'Motherboard', 'ASUS', 25, '149.99'),
(10, 'Router', 'TP-Link', 60, '39.99'),
(11, 'Keyboard', 'Razer', 20, '69.99'),
(12, 'Mouse', 'Logitech', 40, '29.99'),
(13, 'Monitor', 'Acer', 25, '149.99'),
(14, 'Laptop', 'Dell', 15, '799.99'),
(15, 'Headphones', 'Bose', 50, '99.99'),
(16, 'External Hard Drive', 'Western Digital', 35, '89.99'),
(17, 'Graphics Card', 'AMD', 20, '349.99'),
(18, 'CPU', 'AMD', 20, '279.99'),
(19, 'Motherboard', 'Gigabyte', 30, '129.99'),
(20, 'Router', 'Linksys', 45, '59.99'),
(21, 'SSD', 'Samsung', 25, '109.99'),
(22, 'Webcam', 'Logitech', 20, '49.99'),
(23, 'Printer', 'Epson', 30, '149.99'),
(24, 'Scanner', 'Canon', 25, '99.99'),
(25, 'Microphone', 'Blue Yeti', 20, '129.99'),
(26, 'Speaker System', 'Harman Kardon', 15, '199.99'),
(27, 'Smartphone', 'Samsung', 30, '699.99'),
(28, 'Tablet', 'Apple', 25, '499.99'),
(29, 'Smart Watch', 'Apple', 20, '299.99'),
(30, 'Gaming Console', 'Sony', 15, '399.99'),
(31, 'Wireless Earbuds', 'Apple', 40, '179.99'),
(32, 'Gaming Headset', 'SteelSeries', 25, '89.99'),
(33, 'Gaming Mouse', 'Razer', 30, '59.99'),
(34, 'Gaming Keyboard', 'Corsair', 25, '99.99'),
(35, 'VR Headset', 'Oculus', 15, '399.99'),
(36, 'Drone', 'DJI', 20, '999.99'),
(37, 'Fitness Tracker', 'Fitbit', 35, '79.99'),
(38, 'Portable Charger', 'Anker', 50, '29.99'),
(39, 'Car Charger', 'Belkin', 40, '19.99'),
(40, 'Power Strip', 'APC', 20, '39.99'),
(41, 'TestProd', 'TestBran', 27, '27.00'),
(42, 'TestProd2', 'TestBran2', 28, '28.00'),
(43, 'TestProd3', 'TestBran3', 29, '29.00'),
(44, 'TestProd4', 'TestBran4', 30, '30.00'),
(45, 'TestProd5', 'TestBran5', 31, '31.00'),
(46, 'TestProd6', 'TestBran6', 32, '32.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date.` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `date.`) VALUES
(1, '', 'c21f969b5f03d33d43e04f8f136e7682', '2024-05-14 15:30:29'),
(5, 'UserTest', 'c21f969b5f03d33d43e04f8f136e7682', '2024-05-22 05:40:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodb`
--
ALTER TABLE `prodb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producttest`
--
ALTER TABLE `producttest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date.` (`date.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodb`
--
ALTER TABLE `prodb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `producttest`
--
ALTER TABLE `producttest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
