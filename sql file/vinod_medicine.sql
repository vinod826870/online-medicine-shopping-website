-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 11:47 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first-name` varchar(150) NOT NULL,
  `last-name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first-name`, `last-name`, `email`, `password`) VALUES
(2, 'vinod', 'yadav', 'vinod826870@gmail.com', 'vinod'),
(5, 'vinod', 'yadav', 'vinod826870@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(150) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_date`, `updated_date`) VALUES
(17, 'Homeopathy', '2019-12-05', '2019-12-05'),
(18, 'Vitamins & Supplement', '2019-12-05', '2019-12-05'),
(19, 'Ayurveda', '2019-12-05', '0000-00-00'),
(20, 'Health Foods & Drinks', '2019-12-05', '2019-12-05'),
(21, 'Healthcare Devices', '2019-12-05', '2019-12-05'),
(22, 'Skin Care', '2019-12-05', '2019-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` varchar(300) NOT NULL,
  `productId` varchar(300) NOT NULL,
  `quantity` varchar(300) NOT NULL,
  `orderDate` datetime NOT NULL,
  `paymentMethod` varchar(300) DEFAULT NULL,
  `orderStatus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `productId`, `quantity`, `orderDate`, `paymentMethod`, `orderStatus`) VALUES
(110, '4', '29', '1', '0000-00-00 00:00:00', '', 'Delivered'),
(111, '4', '28', '1', '0000-00-00 00:00:00', '', ''),
(112, '', '', '', '0000-00-00 00:00:00', 'COD', ''),
(113, '4', '32', '1', '0000-00-00 00:00:00', '', ''),
(114, '', '32', '1', '0000-00-00 00:00:00', '', ''),
(115, '6', '32', '1', '0000-00-00 00:00:00', '', ''),
(116, '6', '32', '1', '0000-00-00 00:00:00', 'COD', ''),
(117, '5', '32', '1', '2019-12-06 00:00:00', 'COD', 'Delivered'),
(118, '5', '33', '1', '2019-12-06 00:00:00', 'COD', ''),
(119, '5', '29', '1', '2019-12-06 12:17:15', 'COD', ''),
(120, '5', '28', '2', '2019-12-06 17:29:05', 'COD', ''),
(121, '5', '28', '2', '2019-12-06 17:29:05', 'COD', ''),
(122, '5', '29', '2', '2019-12-06 17:29:05', 'COD', ''),
(123, '5', '28', '4', '2019-12-06 17:29:05', 'COD', ''),
(124, '5', '29', '2', '2019-12-06 17:29:05', 'COD', ''),
(125, '5', '28', '2', '2019-12-06 17:29:05', 'COD', ''),
(126, '5', '29', '2', '2019-12-06 17:29:05', 'COD', ''),
(127, '5', '29', '1', '2019-12-07 09:04:32', 'COD', NULL),
(128, '5', '28', '1', '0000-00-00 00:00:00', NULL, NULL),
(129, '5', '28', '1', '0000-00-00 00:00:00', NULL, NULL),
(130, '5', '29', '1', '0000-00-00 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL,
  `orderid` int(12) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertrackhistory`
--

INSERT INTO `ordertrackhistory` (`id`, `orderid`, `status`, `remark`, `postingDate`) VALUES
(1, 117, 'Delivered', 'hvbhcdvcdg', '2019-12-06 20:00:10'),
(2, 110, 'in Process', 'process', '2019-12-07 03:52:48'),
(3, 110, 'Delivered', 'success', '2019-12-07 03:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `cat_id` varchar(50) NOT NULL,
  `product_name` varchar(400) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `product_name`, `product_price`, `product_description`, `product_image`) VALUES
(28, '22', 'aquifolium gel', '52', 'tube of 25gm gel', 'sbl-berberis-aquifolium-gel.jpg'),
(29, '22', 'powder', '108', 'bottle of 100gm', 'w4l5nmwrjder1xmeber3.webp'),
(30, '22', 'demelan cream', '394', 'tube of 20gm', 'mwbjlp3bb9gv9h29zpex.webp'),
(31, '22', 'blemishes cream', '519', 'bottle of 50ml', 'pfnwjfvfxxmfxmcd1bza.webp'),
(32, '22', 'body glutathion', '91', 'packet of 75gm', 'elfm3il2msrbe26pht5h.webp'),
(33, '22', 'facial serum', '1429', 'bottle of 20ml', 'st.botanica-c-professional-facial-serum.png.jpg'),
(34, '21', 'tynor d-10', '1602', 'packet of 1', 'jz7qcotzmfwxt5v0bhdw.webp'),
(35, '21', 'thermometer', '180', '1 device', 'rsupxhh2f7lj1zcqpswp.webp'),
(36, '21', 'test strip', '1095', 'packet of 50', 'e6ui8yiychbiam0l8rk2.webp'),
(37, '21', 'dr morepen', '597', 'packet of 1kit', 'crvljov8kkjbv2kdqwdg.webp'),
(38, '21', 'LL27', '899', 'box of 1', 'rio1tdh8eyejkpodqljr.webp'),
(39, '21', 'weighing scale', '820', 'box of 1 device', 'vs3sviwn8vef0iel7iv3.webp'),
(40, '21', 'thermometer', '178', 'packet of 1 device', 'is40nxpbytz0idn4mvmy.webp'),
(41, '20', 'sugar free', 'bottle of 800ml', '190                      ', 'dvvowwnceq2fzuyiihv2.webp'),
(42, '20', 'SBL Nux', '72', 'bottle of 30ml', 'ajpq1nshmbbml1o0noqq.webp'),
(44, '20', 'lactifiber', '366.5', 'box of 180gm', 'tafkrjmpmovwo5gnmxbi.webp'),
(45, '20', 'dr ortho oil', '259', 'bottle of 120ml', 'suwxrmvyypzcvzgdryem.webp'),
(46, '20', 'jiva neem', '60', 'bottle of 120tab', 'jiva-neem-tablet.jpg'),
(47, '20', 'himalaya', '154', 'bottle of 60tab                  ', 'v60hrdwcri09pnivrtji.webp'),
(48, '20', 'heptral', '1061.80', 'strip of 10tab', 'rv7dacibavf81jklasqg.webp'),
(49, '19', 'dabur shilajit', '336', 'bottle of 20cap', 'd20mnlylkowvezdzyqwt.webp'),
(50, '19', 'Bgr', '391', 'bottle of 100tab', 'qqzpmkp3pfvqqz7zstdx.webp'),
(51, '19', 'Dabur Hajmola', '32', 'bottle of 120tab', 'eqlwrti6cjxjod0ishmk.webp'),
(52, '19', 'Karela', '267', 'bottle of 60cap', 'rkjtho5sqrc7j0scfwdn.webp'),
(53, '19', 'Dabur Hajmola', '32', 'packet of 120tab', 'ou6qzh6zkcsq95xo2bb9.webp'),
(54, '19', 'noni juice +', '355', 'bottle of 500ml', 'y5mmbh1bwfh9lcaxlalt.webp'),
(55, '19', 'Dabur Hajmola', '32', 'bottle of 120', 'ab4f0lqzncidhyos4mto.webp'),
(56, '17', 'baksons', '162', 'bottle of 50tab', 'bakson-s-throat-aid-tablet.jpg'),
(57, '17', 'digestion drop', '207', 'bottle of 20ml', 'wrkf9hthnpggqg3awva4.webp'),
(58, '17', 'sexual', '207', 'bottle of 20ml', 'dr.-reckeweg-r41-sexual-neurasthenia-drop.jpg'),
(59, '17', 'pain drop', '207', 'bottle of 20ml', 'dr.-reckeweg-r41-sexual-neurasthenia-drop.jpg'),
(60, '17', 'damiaplant', '303', 'bottle of 30ml', 'dr-willmar-schwabe-india-damiaplant-drop.jpg'),
(61, '17', 'dr willmar', '762', 'bottle of 250ml', 'fymdi3mnnxzresnefz27.webp'),
(62, '17', 'fungal drop', '238', 'bottle of 30ml', 'sfppljmijpga70xiyfrf.webp'),
(63, '18', 'Evion capsule', '26', '                        strip of 20cap                      ', 'xezyuhm5jwhjcydrhgfw.webp'),
(64, '18', 'shelcal tablet', '86', 'strip of 15tab', 'ztceywi0udbzvog11tje.webp'),
(65, '18', 'Multivitamin', '595', 'bottle of 60cap', 'xezyuhm5jwhjcydrhgfw.webp'),
(66, '18', 'Becadexamin', '30', 'bottle of 30', 'dsucwcaxzyhuqjb16mte.webp'),
(67, '18', 'Lubrijoint +', '379', 'bottle of 60tab', 'jwsczrazlwg735vo6aiz.webp'),
(68, '18', 'Androanagen', '206', 'strip of 10tab', 'sbmduzr0d2jxvksnjh1u.webp');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(1, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-07 05:16:10', NULL, 1),
(2, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-07 05:26:07', NULL, 1),
(3, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-07 05:30:01', NULL, 1),
(4, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-07 05:31:37', '07-12-2019 11:03:07 AM', 1),
(5, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-07 05:34:46', NULL, 0),
(6, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-07 06:34:31', '07-12-2019 11:04:42 PM', 1),
(7, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-07 17:35:01', NULL, 1),
(8, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-08 17:10:07', '08-12-2019 10:42:15 PM', 1),
(9, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-08 17:13:44', '08-12-2019 10:48:11 PM', 1),
(10, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-08 17:18:48', NULL, 1),
(11, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 06:36:14', NULL, 1),
(12, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 08:31:40', '09-12-2019 02:04:44 PM', 1),
(13, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 08:34:53', '09-12-2019 02:06:16 PM', 1),
(14, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 08:36:24', NULL, 1),
(15, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 08:39:33', '09-12-2019 02:11:31 PM', 1),
(16, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 08:41:40', NULL, 1),
(17, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 08:44:30', NULL, 1),
(18, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 09:03:52', '09-12-2019 02:34:57 PM', 1),
(19, 'vinod@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 09:05:07', NULL, 0),
(20, 'vinod@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 09:05:16', NULL, 0),
(21, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 09:05:26', '09-12-2019 02:35:46 PM', 1),
(22, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 09:05:57', '09-12-2019 03:12:42 PM', 1),
(23, 'vinod@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 09:42:50', NULL, 0),
(24, '', 0x3a3a3100000000000000000000000000, '2019-12-09 09:42:55', NULL, 0),
(25, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 09:43:02', '09-12-2019 03:13:55 PM', 1),
(26, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 09:44:04', NULL, 1),
(27, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 09:44:33', '09-12-2019 03:14:46 PM', 1),
(28, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 09:44:57', '09-12-2019 03:16:35 PM', 1),
(29, 'vinod826870@gmail.com', 0x00000000000000000000000000000000, '2019-12-09 09:46:42', '09-12-2019 03:18:35 PM', 1),
(30, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 09:48:48', '09-12-2019 03:18:56 PM', 1),
(31, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 09:49:04', '09-12-2019 03:21:00 PM', 1),
(32, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 09:51:08', '09-12-2019 03:23:02 PM', 1),
(33, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 09:53:11', '09-12-2019 03:43:46 PM', 1),
(34, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 10:13:55', '09-12-2019 04:02:00 PM', 1),
(35, 'vinod@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 10:32:11', NULL, 0),
(36, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 10:32:20', NULL, 1),
(37, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 12:39:42', '09-12-2019 06:10:21 PM', 1),
(38, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-09 12:40:28', '09-12-2019 07:48:57 PM', 1),
(39, 'vinod826870@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-10 06:47:36', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact_number` bigint(100) NOT NULL,
  `shipping_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact_number`, `shipping_address`) VALUES
(1, 'vnod', 'email', '123', 1234567, 'bcsbch'),
(2, 'vinod', 'vinod@gmail.com', '', 7021447081, 'xyz'),
(3, 'vinod', 'vinod@gmail.com', '', 7021447081, 'xyz'),
(4, 'dfhvfyv', 'Vinod826870@gmail.com', 'ygdyd', 5678334, 'dhygdg'),
(5, 'vinod', 'vinod826870@gmail.com', '123', 123456756, 'xyz'),
(6, 'rahul', 'rahul@gmail.com', '123', 123456787, 'jndcjncnjdddc'),
(7, 'yadav', 'ya@gmail.com', '123', 12345678, 'bhsxbh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
