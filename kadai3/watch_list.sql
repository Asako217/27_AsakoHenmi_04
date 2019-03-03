-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2019 年 2 月 08 日 14:36
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kadai3`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `watch_list`
--

CREATE TABLE IF NOT EXISTS `watch_list` (
`id` int(11) NOT NULL,
  `category` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `actor` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `director` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `interest` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `watch_list`
--

INSERT INTO `watch_list` (`id`, `category`, `name`, `actor`, `director`, `interest`, `indate`) VALUES
(1, '1', 'call me by your name', 'Timothee Charlamet', 'Luca Guadagnino', '3', '2019-02-04 20:09:24'),
(5, '2', 'The man from U.N.C.L.E', 'Armie Hammer', 'Guy Ritchie', '5', '2019-02-05 03:24:08'),
(6, '3', 'Pulp Fiction', 'John Travolta', 'Quentin Tarantino', '3', '2019-02-06 16:25:06'),
(7, '6', 'Run Lola Run', 'Franka Potente', 'Tom Tykwer', '4', '2019-02-07 16:26:27'),
(8, '6', 'Le Havre ', 'Andre Wilms', 'Aki Kaurismaki', '5', '2019-02-08 16:27:42'),
(14, '1', '', '', '', '3', '2019-02-08 21:33:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `watch_list`
--
ALTER TABLE `watch_list`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `watch_list`
--
ALTER TABLE `watch_list`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
