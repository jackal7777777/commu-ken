-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014 年 8 朁E20 日 05:01
-- サーバのバージョン： 5.6.16
-- PHP Version: 5.5.11

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
-- テーブルの構造 `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `answer_id` varchar(10) NOT NULL,
  `step_id` varchar(10) NOT NULL,
  `answer_no` int(4) NOT NULL,
  `answer_text` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `answer`
--

INSERT INTO `answer` (`answer_id`, `step_id`, `answer_no`, `answer_text`) VALUES
('100', '100', 4, 'ここはユーザ側の選択支を入れます。');

-- --------------------------------------------------------

--
-- テーブルの構造 `character`
--

CREATE TABLE IF NOT EXISTS `character` (
  `character_id` varchar(10) NOT NULL,
  `character_name` varchar(100) NOT NULL,
  PRIMARY KEY (`character_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `character`
--

INSERT INTO `character` (`character_id`, `character_name`) VALUES
('10', 'キャラの名前');

-- --------------------------------------------------------

--
-- テーブルの構造 `clear`
--

CREATE TABLE IF NOT EXISTS `clear` (
  `clear_id` varchar(10) NOT NULL,
  `scenario_id` varchar(10) NOT NULL,
  `step_id` varchar(10) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  PRIMARY KEY (`clear_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `scenario`
--

CREATE TABLE IF NOT EXISTS `scenario` (
  `scenario_id` varchar(10) NOT NULL,
  `scenario_name` varchar(100) NOT NULL,
  `scenario_exp` varchar(1000) NOT NULL,
  PRIMARY KEY (`scenario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `scenario`
--

INSERT INTO `scenario` (`scenario_id`, `scenario_name`, `scenario_exp`) VALUES
('100', '会話を続ける', 'このシナリオは会話を続ける練習のためのシナリオです。');

-- --------------------------------------------------------

--
-- テーブルの構造 `serif`
--

CREATE TABLE IF NOT EXISTS `serif` (
  `serif_id` varchar(10) NOT NULL,
  `step_id` varchar(10) NOT NULL,
  `character_id` varchar(10) NOT NULL,
  `face_no` int(4) NOT NULL,
  `serif_text` varchar(1000) NOT NULL,
  `serif_no` int(4) NOT NULL,
  PRIMARY KEY (`serif_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `serif`
--

INSERT INTO `serif` (`serif_id`, `step_id`, `character_id`, `face_no`, `serif_text`, `serif_no`) VALUES
('100', '100', '100', 100, 'テストデータです', 100);

-- --------------------------------------------------------

--
-- テーブルの構造 `stage`
--

CREATE TABLE IF NOT EXISTS `stage` (
  `stage_id` varchar(10) NOT NULL,
  `scenario_id` varchar(10) NOT NULL,
  `stage_name` varchar(100) NOT NULL,
  `bg_image` varchar(30) NOT NULL,
  `stage_exp` varchar(1000) NOT NULL,
  PRIMARY KEY (`stage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `stage`
--

INSERT INTO `stage` (`stage_id`, `scenario_id`, `stage_name`, `bg_image`, `stage_exp`) VALUES
('100', '100', 'テストステージ', 'img_testBgImage.png', 'このステージはテスト用のステージです');

-- --------------------------------------------------------

--
-- テーブルの構造 `step`
--

CREATE TABLE IF NOT EXISTS `step` (
  `step_id` varchar(10) NOT NULL,
  `stage_id` varchar(10) NOT NULL,
  `scenario_id` varchar(10) NOT NULL,
  `answer_id` varchar(10) NOT NULL,
  `step_no` int(4) NOT NULL,
  `matome` varchar(1000) NOT NULL,
  PRIMARY KEY (`step_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `step`
--

INSERT INTO `step` (`step_id`, `stage_id`, `scenario_id`, `answer_id`, `step_no`, `matome`) VALUES
('100', '100', '100', '100', 4, 'テストです。まとめ文をここに入れます。よろしくお願いします');

-- --------------------------------------------------------

--
-- テーブルの構造 `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `survey_id` varchar(10) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `step_id` varchar(10) NOT NULL,
  `survey_text` varchar(1000) NOT NULL,
  `survey_flag` int(1) NOT NULL,
  PRIMARY KEY (`survey_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `secret_question` int(4) NOT NULL,
  `secret_answer` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `user`
--

INSERT INTO `user` (`user_id`, `password`, `secret_question`, `secret_answer`, `gender`) VALUES
('test', 'test', 1, 'テストです', 'm'),
('梅田', 'umeda', 2, '梅田テスト', 'm');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
