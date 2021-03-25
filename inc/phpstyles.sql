-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 13, 2021 at 07:44 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colombol_wad`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gid` int(11) NOT NULL,
  `img_url` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gid`, `img_url`) VALUES
(2, 'img/models/4.jpg'),
(10, 'img/gallery/download.jpg'),
(11, 'img/gallery/54a8e3816015e856515f6a490896d8ff.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$7oJ.5PiN5fqeVK4pdSSukOmChFSTX9xHuO8OftRiep1/MRww8COVW');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mid` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`mid`, `fullname`, `phone`, `email`, `message`) VALUES


-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `nid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `img_url` longtext NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`nid`, `title`, `desc`, `img_url`, `date`) VALUES
(9, 'You Made My Day” Project', 'in collaboration with SL Freedomcare took the initiative to take the kids of Daffodils Special Needs School, Kandy on a day out to spend the day like any other child during this time of the season. Avurudu is coming up very soon. So, FCSL staff along with undergraduate students of Art’s Faculty, University of Peradeniya took them on shopping sponsored by SRIYANI. They had a wonderful experience on that day.', 'img/social1.jpg', '2021-03-02 18:59:28'),
(10, 'Humanity Project.', 'We were able to find a needy family of four and give them their dream shelter. The house is completed with three bedrooms, a living room, verandah, kitchen, attached bathrooms including furniture, plastering and painting. The Habitat is located in Sirimalwatte, Kandy. Our team concentrates on providing safe and decent housing solutions and it was completed and given to them in 2019. In addition we gave groceries and essential Items and few books for their two children. The Family who received this house are so grateful and thanked us thousand times and often describe the house as their “dream home”. We all at Sriyani Team give a big thank to our director who sponsor all of these CSR projects and many other events.', 'img/social3.jpg', '2021-03-04 18:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `pdesc` mediumtext NOT NULL,
  `category` varchar(255) NOT NULL,
  `img_url` mediumtext NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `title`, `pdesc`, `category`, `img_url`, `price`) VALUES
(1, 'Bear Men\'s T-shirts', 'NHS Bear, brought to you by True Vintage Originals. , 100% of profits will be donated to the NHS.', 'tshirt', 'img/products/product1.jpg', 2323),
(4, 'Gents denims', '516 SLIM FIT STRAIGHT DARK STW', 'denim', 'img/products/denim2.jpg', 230),
(8, 'hateka', 'hatkekaka', 'hats', 'img/products/hateka.png', 890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
