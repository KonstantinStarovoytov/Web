-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 20, 2017 at 08:04 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3207432_images`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `tag` varchar(30) NOT NULL,
  `disctiption` text NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `tag`, `disctiption`, `path`) VALUES
(25, 'namename', 'namenamenamename', 'namenamename', 'images/content/tumblr_n370xnlzkd1tvca89o2_1280.jpg'),
(24, 'namename', 'namenamenamename', 'namenamenamename', 'images/content/tumblr_n2za3cD6gj1tvca89o1_1280.jpg'),
(23, 'namenamename', 'namename', 'namenamenamename', 'images/content/tumblr_n2z95xepUP1tvca89o9_500.jpg'),
(22, 'namenamevvvvnamename', 'namenamename', 'namenamev', 'images/content/tumblr_n2xuzdxjgI1tvca89o2_1280.jpg'),
(21, 'namenamename', 'namename', 'namenamenamename', 'images/content/tumblr_n2xnpfOqQg1tvca89o1_500.jpg'),
(20, 'dasdas', 'adsasd', 'dasdasd', 'images/content/tumblr_inline_o5f2a3WO9q1sbgb0s_1280.jpg'),
(19, 'window', 'vverh', 'window', 'images/content/q1.jpg'),
(26, 'namenamename', 'namenamename', 'namenamename', 'images/content/tumblr_n395cdvfS91tvca89o6_1280.jpg'),
(27, 'name', 'namename', 'namenamename', 'images/content/tumblr_ngiee4hG2t1tvca89o3_1280.jpg'),
(28, 'name', 'name', 'namenamename', 'images/content/tumblr_nwmpu6ZZNT1tvca89o3_500.jpg'),
(29, 'name', 'name', 'namename', 'images/content/tumblr_nwmpu6ZZNT1tvca89o6_500.jpg'),
(30, 'name', 'namenamename', 'name', 'images/content/tumblr_nxbrz4zQZw1tvca89o3_500.jpg'),
(31, 'namename', 'namename', 'namename', 'images/content/tumblr_nxbrz4zQZw1tvca89o6_500.jpg'),
(32, 'namenamenamenamename', 'namename', 'namenamename', 'images/content/tumblr_nxbs8iJ7LI1tvca89o5_500.jpg'),
(33, 'namename', 'namenamename', 'namenamename', 'images/content/tumblr_nxbs8iJ7LI1tvca89o7_500.jpg'),
(34, 'name', 'name', 'name', 'images/content/tumblr_nxbs8iJ7LI1tvca89o10_1280.jpg'),
(35, 'namenamename', 'namenamenamename', 'namenamenamenamename', 'images/content/tumblr_o0k2qtWeq81tvca89o5_500.jpg'),
(36, 'namename', 'namename', 'namename', 'images/content/tumblr_o0k2qtWeq81tvca89o7_1280.jpg'),
(37, 'namename', 'namename', 'namenamename', 'images/content/tumblr_o0351tgQ5u1tvca89o1_500.jpg'),
(38, 'namenamename', 'namename', 'namenamename', 'images/content/tumblr_o0351tgQ5u1tvca89o2_500.jpg'),
(39, 'vvvv', 'namenamename', 'namenamev', 'images/content/tumblr_oela3a1CEL1tvca89o1_500.jpg'),
(40, 'namename', 'namename', 'namenamenamev', 'images/content/tumblr_oela3a1CEL1tvca89o3_500.jpg'),
(41, 'name', 'namenamenamename', 'namename', 'images/content/tumblr_oela3a1CEL1tvca89o4_500.jpg'),
(42, 'namenamevnamenamename', 'namename', 'namenamenamename', 'images/content/tumblr_oela3a1CEL1tvca89o6_500.jpg'),
(43, 'namename', 'name', 'namenamenamename', 'images/content/tumblr_oela3a1CEL1tvca89o7_500 (1).jpg'),
(44, 'name', 'namenamename', 'namenamename', 'images/content/tumblr_oela3a1CEL1tvca89o9_500.jpg'),
(45, 'namename', 'namename', 'namenamenamenamename', 'images/content/tumblr_ol7t0eHR811tvca89o1_500.jpg'),
(46, 'namename', 'namename', 'namenamenamename', 'images/content/tumblr_oomjg7iwOH1tvca89o2_500.jpg'),
(47, 'namename', 'namename', 'namenamenamenamenamenamename', 'images/content/tumblr_oomjg7iwOH1tvca89o8_500.jpg'),
(48, 'name', 'namename', 'namenamenamenamenamenamename', 'images/content/tumblr_ooov9ixMTY1tvca89o4_500.jpg'),
(49, 'rewrwname', 'namename', 'namevdsfew', 'images/content/tumblr_ooov9ixMTY1tvca89o7_1280.jpg'),
(50, 'afsfa', 'asasfas', 'sdfdsfdsfdsf', 'images/content/tumblr_ooov9ixMTY1tvca89o9_r1_500.jpg'),
(51, 'Jurmala', '', 'latvia', '../uploads/150847796136543.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `email`) VALUES
(1, 'admin', 'AdminAdmin7&8', 'admin@admin.adm'),
(2, 'Wdoasdas', 'Woodward7&amp;8', 'asdasdsadas@mail.ru'),
(3, 'adsdasdsa', 'Wooddward7&amp;8', 'Lol'),
(4, 'PPpdsadasd', 'Woodward7&amp;8', 'asdadazzz@zzz.rz'),
(5, 'Wdoasdas', 'Woodward7&amp;8', 'adsadasd@mad.ru'),
(6, 'Wdoasdas', 'Woodward7&amp;8', 'dsadasd'),
(7, 'dsadsad', 'Kkkkkkk7&amp;8', 'ddasdasdas@mail.ru'),
(8, 'Woodadad', 'Woodward7&amp;8', 'asdasda@fadsf.ru'),
(9, 'Wdoasdas', 'Woodward7&amp;8', 'dasdasd@fasd.ru'),
(10, 'Woodwar', 'Woodward7&amp;8', 'asdsad@gma.ru'),
(11, 'Woodwrar', 'Woodward7&amp;8', 'dasdsads@gmail.ri'),
(12, 'Kostya', 'Kostya7&amp;8', 'Kostya@kostay.ko'),
(13, 'Wppdwarae', 'wOODWARD7&amp;8', 'asdfdsafads@mai.ru'),
(14, 'Amanda', 'Woodward7&amp;8', 'midmsaidsa@mair.ru'),
(15, 'AmandaWoodward', 'Woodward7&amp;8', 'dmasdmksamdk@maim.ru'),
(16, 'KlassniyChel', 'Woodward7&amp;8', 'asdasda@mal.ru'),
(17, 'Ananas', 'Anastasiya23!', 'job.is.done@mail.ru'),
(18, 'Nasko', 'Woodward7&amp;8', 'fdgfdgfdfd@mail.ru'),
(19, 'Amanda', 'Amanda7&amp;8', 'amandawoodward888@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
