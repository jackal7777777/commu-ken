-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014 年 9 朁E06 日 02:41
-- サーバのバージョン： 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `commu-ken`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `steps`
--

CREATE TABLE IF NOT EXISTS `steps` (
  `id` varchar(10) NOT NULL,
  `stage_id` varchar(10) NOT NULL,
  `scenario_id` varchar(10) NOT NULL,
  `answer_id` varchar(10) NOT NULL,
  `step_no` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `steps`
--

INSERT INTO `steps` (`id`, `stage_id`, `scenario_id`, `answer_id`, `step_no`) VALUES
('1', '1', '1', '1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `steps`
--
ALTER TABLE `steps`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `id_2` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
