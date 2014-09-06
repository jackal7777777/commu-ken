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
('100', '1', '2', 28, '持ち物とか好きなゲームとか，相手が興味があることを聞いてみたら相手も話しやすいわね！', 5, '5'),
('101', '1', '2', 23, '相手に「話したい」と思わせればいいのよ！', 5, '5'),
('102', '1', '2', 20, '自分のことを話すのはそれからでも遅くないわ。', 5, '5'),
('2', '1', '2', 27, 'お兄ちゃんって，意外とロマンチストなのね……。', 2, '1'),
('3', '1', '2', 29, 'でも，いきなり夢とか運命とか大きな話（抽象的な話）を出すのはリスクもあるから、あんまりやりすぎると厨二病の人かなーって思われて，お兄ちゃんに友達が寄ってこなくなっちゃうのが心配ね…', 3, '1'),
('4', '1', '1', 12, '「え、気づかなかった！ごめん……。」', 1, '2'),
('5', '1', '2', 21, '梅野くんに向かって恋人同士みたいな会話してどうするのよ～！！！', 2, '2'),
('6', '1', '2', 22, '話しかけること自体はいいけど，クラス替えしたばっかりなんだから，梅野くんがお兄ちゃんの前髪をチェックしてるはずないでしょ！', 3, '2'),
('7', '1', '1', 11, '「う、うん、元気だよ。」', 1, '3'),
('8', '1', '2', 24, 'うーん、ちょっと話が漠然としすぎね……。短くて簡単な言葉で話しかけたのはよかったわ。相手が答えやすいし。でも、「元気かどうか」っていうぼんやりした話題だけだと、話が広がりにくくない？', 2, '3'),
('9', '1', '1', 14, '「あ、そう？実はさ、これ高校入学祝いで買ってもらったんだ！あはは」', 1, '4'),
('90', '1', '2', 20, 'なんかいい雰囲気で会話が続きそう！相手の持ち物とかは身近だし変に思われないで話しかけられるからいいわよね。', 2, '4'),
('91', '1', '2', 28, 'しかもカッコいいって言われたらうれしくてもっと話したくなるわ！', 3, '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `serifs`
--
ALTER TABLE `serifs`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
