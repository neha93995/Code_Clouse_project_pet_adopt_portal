 -- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 08:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pets`
--

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(4) NOT NULL,
  `ownername` text NOT NULL,
  `ownermobileno` varchar(10) NOT NULL,
  `petcategory` text NOT NULL,
  `petname` text NOT NULL,
  `petgender` text NOT NULL,
  `petaddress` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `newowner` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `ownername`, `ownermobileno`, `petcategory`, `petname`, `petgender`, `petaddress`, `image`, `newowner`, `date`) VALUES
(31, 'Neha baghel', '123456667', 'dog', 'kukku', 'female', 'nehru nagar bhopal', 'IMG-64491a30d6cd53.01293891.jpg', '', '2023-04-26 18:03:52'),
(32, 'ujjwal rai', '423645', 'cat', 'naanu', 'male', 'patna bihar', 'IMG-64491a6e1623b6.34771628.jpg', '', '2023-04-26 18:04:54'),
(34, 'Shivam Ojha', '423645', 'rabbit', 'nunu', 'female', 'nehru nagar bhopal', 'IMG-64491c725fea41.13350028.jpg', 'neha', '2023-04-26 18:13:30'),
(35, 'Tanu yede', '423645', 'dog', 'gappu', 'female', 'ashoka garden', 'IMG-644939b87c4585.27235475.jpg', '', '2023-04-26 20:18:24'),
(36, 'Ranjeet kumar', '4523453252', 'rabbit', 'nunu', 'male', 'Indrapuri', 'IMG-6449417ad9ac99.14660998.jpg', '', '2023-04-26 20:51:30'),
(37, 'Fahad Alam', '423645', 'cat', 'goldy', 'male', 'Baliya UP', 'IMG-644941c96fd571.60486564.jpg', '', '2023-04-26 20:52:49'),
(38, 'Irfan Alam', '1234567890', 'rabbit', 'shushi', 'male', 'jahagirabad', 'IMG-644942c9cb82f8.24651116.jpg', '', '2023-04-26 20:57:05'),
(39, 'Suffiyan ', '76543245', 'cat', 'sufi', 'female', 'kolar', 'IMG-644943c4d112f8.95097050.jpg', '', '2023-04-26 21:01:16'),
(40, 'Nippu ', '87654367', 'dog', 'ninu', 'female', 'Prabhat Bhopal', 'IMG-64494415ee6760.03136593.jpg', '', '2023-04-26 21:02:37'),
(41, 'Shashi ', '876543456', 'dog', 'kittu', 'male', 'Ratngiri', 'IMG-644944a5a1f835.90185344.jpg', '', '2023-04-26 21:05:01'),
(42, 'Ambika', '76543267', 'cat', 'haappu', 'male', 'nehru nagar bhopal', 'IMG-644945c719b0e3.39886463.jpg', '', '2023-04-26 21:09:51'),
(43, 'Abhay ', '87654567', 'cat', 'munmun', 'female', 'kotra', 'IMG-6449462f6f4cb9.35216867.jpg', '', '2023-04-26 21:11:35'),
(44, 'uday', '654324567', 'rabbit', 'uddu', 'male', 'kamla nagar', 'IMG-6449471e6b4b41.72513569.jpg', '', '2023-04-26 21:15:34'),
(45, 'Neha Baghel', '1234567990', 'dog', 'nunu', 'female', 'nehru nagar bhopal', 'IMG-644964aae6f507.43983609.jpg', 'ujjwal', '2023-04-26 23:21:38'),
(46, 'asdjf asjdfalk', '8976543234', 'dog', 'kuch bhi 😒', 'male', '3453 fgsdd', 'IMG-644969e1446832.75786163.jpg', '', '2023-04-26 23:43:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
