-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014 年 9 朁E02 日 13:40
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
-- テーブルの構造 `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `answer_id` varchar(10) NOT NULL,
  `step_id` varchar(10) NOT NULL,
  `answer_no` int(4) NOT NULL,
  `answer_text` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `answers`
--

INSERT INTO `answers` (`answer_id`, `step_id`, `answer_no`, `answer_text`) VALUES
('1', '1', 1, 'よっ！隣の席になったのも運命だよな。'),
('2', '1', 2, 'あのさ、ぼく昨日前髪切ったんだけど気づいた？'),
('3', '1', 3, 'やあ、元気？'),
('4', '1', 4, '梅野くんの腕時計カッコいいね');

-- --------------------------------------------------------

--
-- テーブルの構造 `characters`
--

CREATE TABLE IF NOT EXISTS `characters` (
  `character_id` varchar(10) NOT NULL,
  `character_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `characters`
--

INSERT INTO `characters` (`character_id`, `character_name`) VALUES
('1', '梅野'),
('2', 'つむぎ');

-- --------------------------------------------------------

--
-- テーブルの構造 `clears`
--

CREATE TABLE IF NOT EXISTS `clears` (
  `clear_id` varchar(10) NOT NULL,
  `scenario_id` varchar(10) NOT NULL,
  `step_id` varchar(10) NOT NULL,
  `user_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `faces`
--

CREATE TABLE IF NOT EXISTS `faces` (
  `id` int(4) NOT NULL,
  `characters_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `faces`
--

INSERT INTO `faces` (`id`, `characters_image`) VALUES
(10, 'friend.png'),
(11, 'friend_aiso.png'),
(12, 'friend_bikkuri.png'),
(13, 'friend_d_bikkuri.png'),
(14, 'friend_egao.png'),
(15, 'friend_kusyuou.png'),
(16, 'friend_sinpai_2.png'),
(17, 'friend_syonbori_2.png'),
(20, 'sister.png'),
(21, 'sister_d_okoru.png'),
(22, 'sister_ikari.png'),
(23, 'sister_isamasii.png'),
(24, 'sister_komaru.png'),
(25, 'sister_odoroki.png'),
(26, 'sister_okoru.png'),
(27, 'sister_tyousyou.png'),
(28, 'sister_warau.png'),
(29, 'sister_zitome.png');

-- --------------------------------------------------------

--
-- テーブルの構造 `play_histories`
--

CREATE TABLE IF NOT EXISTS `play_histories` (
  `history_id` varchar(10) NOT NULL,
  `answer_id` varchar(10) NOT NULL,
  `step_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `play_histories`
--

INSERT INTO `play_histories` (`history_id`, `answer_id`, `step_id`) VALUES
('1', '100', '100'),
('2', '100', '100');

-- --------------------------------------------------------

--
-- テーブルの構造 `scenarios`
--

CREATE TABLE IF NOT EXISTS `scenarios` (
  `scenario_id` varchar(10) NOT NULL,
  `scenario_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `scenarios`
--

INSERT INTO `scenarios` (`scenario_id`, `scenario_name`) VALUES
('1', '初対面の相手に話しかける');

-- --------------------------------------------------------

--
-- テーブルの構造 `serifs`
--

CREATE TABLE IF NOT EXISTS `serifs` (
  `id` varchar(10) NOT NULL,
  `step_id` varchar(10) NOT NULL,
  `character_id` varchar(10) NOT NULL,
  `face_id` int(4) NOT NULL,
  `serif_text` varchar(1000) NOT NULL,
  `serif_no` int(4) NOT NULL,
  `answer_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `serifs`
--

INSERT INTO `serifs` (`id`, `step_id`, `character_id`, `face_id`, `serif_text`, `serif_no`, `answer_no`) VALUES
('1', '1', '1', 15, '「あ、そういう考え方もあるかもね……。」', 1, '1'),
('10', '1', '2', 20, 'なんかいい雰囲気で会話が続きそう！相手の持ち物とかは身近だし変に思われないで話しかけられるからいいわよね。', 2, '4'),
('11', '1', '2', 28, 'しかもカッコいいって言われたらうれしくてもっと話したくなるわ！', 3, '4'),
('2', '1', '2', 27, 'お兄ちゃんって，意外とロマンチストなのね……。', 2, '1'),
('3', '1', '2', 29, 'でも，いきなり夢とか運命とか大きな話（抽象的な話）を出すのはリスクもあるから、あんまりやりすぎると厨二病の人かなーって思われて，お兄ちゃんに友達が寄ってこなくなっちゃうのが心配ね…', 3, '1'),
('4', '1', '1', 12, '「え、気づかなかった！ごめん……。」', 1, '2'),
('5', '1', '2', 21, '梅野くんに向かって恋人同士みたいな会話してどうするのよ～！！！', 2, '2'),
('6', '1', '2', 22, '話しかけること自体はいいけど，クラス替えしたばっかりなんだから，梅野くんがお兄ちゃんの前髪をチェックしてるはずないでしょ！', 3, '2'),
('7', '1', '1', 11, '「う、うん、元気だよ。」', 1, '3'),
('8', '1', '2', 24, 'うーん、ちょっと話が漠然としすぎね……。短くて簡単な言葉で話しかけたのはよかったわ。相手が答えやすいし。でも、「元気かどうか」っていうぼんやりした話題だけだと、話が広がりにくくない？', 2, '3'),
('9', '1', '1', 14, '「あ、そう？実はさ、これ高校入学祝いで買ってもらったんだ！あはは」', 1, '4');

-- --------------------------------------------------------

--
-- テーブルの構造 `stages`
--

CREATE TABLE IF NOT EXISTS `stages` (
  `stage_id` varchar(10) NOT NULL,
  `scenario_id` varchar(10) NOT NULL,
  `stage_name` varchar(100) NOT NULL,
  `bg_image` varchar(30) NOT NULL,
  `stage_exp` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `stages`
--

INSERT INTO `stages` (`stage_id`, `scenario_id`, `stage_name`, `bg_image`, `stage_exp`) VALUES
('1', '1', 'とりあえず何か話しかけてみよう！', 'img_testBgImage.png', '高校２年の１学期。新しいクラス、周りは知らない人ばかり、今年こそ友達を作りたい！隣の席になった梅野くんが、何だかすごくいい人そう。友達になりたいな…');

-- --------------------------------------------------------

--
-- テーブルの構造 `steps`
--

CREATE TABLE IF NOT EXISTS `steps` (
  `id` varchar(10) NOT NULL,
  `stage_id` varchar(10) NOT NULL,
  `scenario_id` varchar(10) NOT NULL,
  `answer_id` varchar(10) NOT NULL,
  `step_no` int(4) NOT NULL,
  `matome` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `steps`
--

INSERT INTO `steps` (`id`, `stage_id`, `scenario_id`, `answer_id`, `step_no`, `matome`) VALUES
('1', '1', '1', '1', 1, '持ち物とか好きなゲームとか，相手が興味があることを聞いてみたら相手も話しやすいわね！相手に「話したい」と思わせればいいの自分のことを話すのはそれからでも遅くないわ。');

-- --------------------------------------------------------

--
-- テーブルの構造 `surveys`
--

CREATE TABLE IF NOT EXISTS `surveys` (
  `survey_id` varchar(10) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `step_id` varchar(10) NOT NULL,
  `survey_text` varchar(1000) NOT NULL,
  `survey_flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `secret_question` int(4) NOT NULL,
  `secret_answer` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`user_id`, `password`, `secret_question`, `secret_answer`, `gender`, `birthday`, `age`) VALUES
('test@gmail', 'test@gmail.com', 1, 'テストです', 'm', '1988-11-07', 26),
('umeda@gmai', 'umeda', 2, '梅田テスト', 'm', '1990-01-11', 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
 ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
 ADD PRIMARY KEY (`character_id`);

--
-- Indexes for table `clears`
--
ALTER TABLE `clears`
 ADD PRIMARY KEY (`clear_id`);

--
-- Indexes for table `faces`
--
ALTER TABLE `faces`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `play_histories`
--
ALTER TABLE `play_histories`
 ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `scenarios`
--
ALTER TABLE `scenarios`
 ADD PRIMARY KEY (`scenario_id`);

--
-- Indexes for table `serifs`
--
ALTER TABLE `serifs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stages`
--
ALTER TABLE `stages`
 ADD PRIMARY KEY (`stage_id`);

--
-- Indexes for table `steps`
--
ALTER TABLE `steps`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `id_2` (`id`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
 ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
