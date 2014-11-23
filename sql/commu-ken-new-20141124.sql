-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2014 年 11 月 24 日 08:26
-- サーバのバージョン： 5.6.16
-- PHP Version: 5.5.11

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `commu-ken-new`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `admins`
--

INSERT INTO `admins` (`id`, `password`) VALUES
('master@gmail.com', '7e090c9f27abdf1ec5b3921d9d8a65cf957ab469750ec473afa4d88563d54d04');

-- --------------------------------------------------------

--
-- テーブルの構造 `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `step_id` int(11) NOT NULL,
  `answer_no` int(4) NOT NULL,
  `answer_text` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `step_id` (`step_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- テーブルのリレーション `answers`:
--   `step_id`
--       `steps` -> `id`
--

--
-- テーブルのデータのダンプ `answers`
--

INSERT INTO `answers` (`id`, `step_id`, `answer_no`, `answer_text`) VALUES
(1, 1, 1, 'よっ！隣の席になったのも運命だよな。'),
(2, 1, 2, 'あのさ、ぼく昨日前髪切ったんだけど気づいた？'),
(3, 1, 3, 'やあ、元気？'),
(4, 1, 4, '梅野くんの腕時計カッコいいね'),
(5, 2, 1, 'うーん……。ごめん、上手く説明できない'),
(6, 2, 2, 'ネット掲示板のことだよ。ブログのコメント欄みたいなところに、匿名で何でも書き込める'),
(7, 2, 3, '日本最大のスレッドフロート型匿名掲示板だよ'),
(8, 2, 4, 'なんかみんなが悪口書いてるやつ'),
(9, 3, 1, 'ちょっとそれ貸して！'),
(10, 3, 2, '梅野くん、それジャ◯プで連載してるやつだよね？'),
(11, 3, 3, 'おはよー、最近元気？'),
(12, 3, 4, 'あの、本当に申し訳ないんだけど……。そのマンガ、貸してくれないかな……？'),
(13, 4, 1, 'これ見たことある。面白いらしいね'),
(14, 4, 2, 'ちょっとそれ貸して！'),
(15, 4, 3, 'じゃあ貸してくれない？'),
(16, 4, 4, 'これ、そんなには流行ってなくない？'),
(17, 5, 1, '梅野くんもこういうマンガ読むの?'),
(18, 5, 2, 'うん。またマンガの話しようね'),
(19, 5, 3, 'うん。もしよかったら、ちょっとだけ貸してくれない？'),
(20, 5, 4, 'うん。あのさ、それ貸して！'),
(21, 1, 0, '時間切れ！'),
(22, 2, 0, '時間切れ！'),
(23, 3, 0, '時間切れ！'),
(24, 4, 0, '時間切れ！'),
(25, 5, 0, '時間切れ！');

-- --------------------------------------------------------

--
-- テーブルの構造 `characters`
--

CREATE TABLE IF NOT EXISTS `characters` (
  `id` int(11) NOT NULL,
  `character_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `characters`
--

INSERT INTO `characters` (`id`, `character_name`) VALUES
(1, 'name_01'),
(2, 'name_02'),
(3, 'name_03');

-- --------------------------------------------------------

--
-- テーブルの構造 `clears`
--

CREATE TABLE IF NOT EXISTS `clears` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scenario_id` int(11) NOT NULL,
  `step_id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `scenario_id` (`scenario_id`),
  KEY `step_id` (`step_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- テーブルのリレーション `clears`:
--   `scenario_id`
--       `scenarios` -> `id`
--   `step_id`
--       `steps` -> `id`
--   `user_id`
--       `users` -> `id`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `faces`
--

CREATE TABLE IF NOT EXISTS `faces` (
  `id` int(4) NOT NULL,
  `character_image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `faces`
--

INSERT INTO `faces` (`id`, `character_image`) VALUES
(0, 'none.png'),
(10, 'friend.png'),
(11, 'friend_aiso.png'),
(12, 'friend_bikkuri.png'),
(13, 'friend_d_bikkuri.png'),
(14, 'friend_egao.png'),
(15, 'friend_kusyou.png'),
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_id` int(11) NOT NULL,
  `step_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `answer_id` (`answer_id`),
  KEY `step_id` (`step_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=639 ;

--
-- テーブルのリレーション `play_histories`:
--   `answer_id`
--       `answers` -> `id`
--   `step_id`
--       `steps` -> `id`
--

--
-- テーブルのデータのダンプ `play_histories`
--

INSERT INTO `play_histories` (`id`, `answer_id`, `step_id`) VALUES
(266, 1, 1),
(267, 21, 1),
(268, 4, 1),
(269, 4, 1),
(270, 4, 1),
(271, 4, 1),
(272, 4, 1),
(273, 4, 1),
(274, 4, 1),
(275, 4, 1),
(276, 4, 1),
(277, 4, 1),
(278, 4, 1),
(279, 4, 1),
(280, 4, 1),
(281, 4, 1),
(282, 4, 1),
(283, 4, 1),
(284, 4, 1),
(285, 6, 2),
(286, 1, 1),
(287, 1, 1),
(288, 4, 1),
(289, 6, 2),
(290, 4, 1),
(291, 10, 3),
(292, 13, 4),
(293, 10, 3),
(294, 13, 4),
(295, 10, 3),
(296, 13, 4),
(297, 19, 5),
(298, 3, 1),
(299, 1, 1),
(300, 4, 1),
(301, 21, 1),
(302, 21, 1),
(303, 4, 1),
(304, 4, 1),
(305, 4, 1),
(306, 4, 1),
(307, 4, 1),
(308, 4, 1),
(309, 4, 1),
(310, 4, 1),
(311, 4, 1),
(312, 4, 1),
(313, 6, 2),
(314, 10, 3),
(315, 10, 3),
(316, 21, 1),
(317, 1, 1),
(318, 1, 1),
(319, 1, 1),
(320, 1, 1),
(321, 1, 1),
(322, 2, 1),
(323, 4, 1),
(324, 1, 1),
(325, 3, 1),
(326, 3, 1),
(327, 3, 1),
(328, 3, 1),
(329, 6, 2),
(330, 6, 2),
(331, 7, 2),
(332, 5, 2),
(333, 22, 2),
(334, 22, 2),
(335, 22, 2),
(336, 9, 3),
(337, 9, 3),
(338, 9, 3),
(339, 9, 3),
(340, 9, 3),
(341, 5, 2),
(342, 22, 2),
(343, 8, 2),
(344, 7, 2),
(345, 1, 1),
(346, 7, 2),
(347, 10, 3),
(348, 15, 4),
(349, 15, 4),
(350, 15, 4),
(351, 4, 1),
(352, 21, 1),
(353, 1, 1),
(354, 21, 1),
(355, 21, 1),
(356, 3, 1),
(357, 3, 1),
(358, 3, 1),
(359, 3, 1),
(360, 3, 1),
(361, 3, 1),
(362, 3, 1),
(363, 21, 1),
(364, 21, 1),
(365, 21, 1),
(366, 21, 1),
(367, 21, 1),
(368, 1, 1),
(369, 21, 1),
(370, 21, 1),
(371, 21, 1),
(372, 21, 1),
(373, 1, 1),
(374, 21, 1),
(375, 1, 1),
(376, 21, 1),
(377, 1, 1),
(378, 1, 1),
(379, 1, 1),
(380, 1, 1),
(381, 1, 1),
(382, 2, 1),
(383, 2, 1),
(384, 4, 1),
(385, 1, 1),
(386, 21, 1),
(387, 1, 1),
(388, 2, 1),
(389, 3, 1),
(390, 3, 1),
(391, 3, 1),
(392, 3, 1),
(393, 3, 1),
(394, 1, 1),
(395, 21, 1),
(396, 1, 1),
(397, 1, 1),
(398, 3, 1),
(399, 3, 1),
(400, 1, 1),
(401, 21, 1),
(402, 2, 1),
(403, 1, 1),
(404, 1, 1),
(405, 3, 1),
(406, 2, 1),
(407, 21, 1),
(408, 1, 1),
(409, 1, 1),
(410, 1, 1),
(411, 21, 1),
(412, 1, 1),
(413, 1, 1),
(414, 1, 1),
(415, 1, 1),
(416, 2, 1),
(417, 21, 1),
(418, 21, 1),
(419, 1, 1),
(420, 1, 1),
(421, 21, 1),
(422, 5, 2),
(423, 5, 2),
(424, 5, 2),
(425, 5, 2),
(426, 22, 2),
(427, 5, 2),
(428, 22, 2),
(429, 21, 1),
(430, 2, 1),
(431, 2, 1),
(432, 1, 1),
(433, 3, 1),
(434, 4, 1),
(435, 21, 1),
(436, 1, 1),
(437, 1, 1),
(438, 1, 1),
(439, 1, 1),
(440, 1, 1),
(441, 1, 1),
(442, 21, 1),
(443, 1, 1),
(444, 21, 1),
(445, 1, 1),
(446, 21, 1),
(447, 3, 1),
(448, 1, 1),
(449, 1, 1),
(450, 1, 1),
(451, 1, 1),
(452, 1, 1),
(453, 1, 1),
(454, 21, 1),
(455, 1, 1),
(456, 21, 1),
(457, 1, 1),
(458, 1, 1),
(459, 2, 1),
(460, 21, 1),
(461, 1, 1),
(462, 1, 1),
(463, 1, 1),
(464, 2, 1),
(465, 21, 1),
(466, 1, 1),
(467, 1, 1),
(468, 1, 1),
(469, 1, 1),
(470, 2, 1),
(471, 1, 1),
(472, 1, 1),
(473, 3, 1),
(474, 1, 1),
(475, 2, 1),
(476, 1, 1),
(477, 3, 1),
(478, 3, 1),
(479, 21, 1),
(480, 2, 1),
(481, 3, 1),
(482, 2, 1),
(483, 2, 1),
(484, 1, 1),
(485, 1, 1),
(486, 1, 1),
(487, 1, 1),
(488, 1, 1),
(489, 1, 1),
(490, 1, 1),
(491, 3, 1),
(492, 1, 1),
(493, 2, 1),
(494, 5, 2),
(495, 1, 1),
(496, 1, 1),
(497, 4, 1),
(498, 3, 1),
(499, 2, 1),
(500, 1, 1),
(501, 2, 1),
(502, 4, 1),
(503, 10, 3),
(504, 13, 4),
(505, 19, 5),
(506, 1, 1),
(507, 1, 1),
(508, 1, 1),
(509, 22, 2),
(510, 22, 2),
(511, 1, 1),
(512, 1, 1),
(513, 1, 1),
(514, 2, 1),
(515, 3, 1),
(516, 1, 1),
(517, 6, 2),
(518, 22, 2),
(519, 22, 2),
(520, 5, 2),
(521, 7, 2),
(522, 8, 2),
(523, 23, 3),
(524, 9, 3),
(525, 11, 3),
(526, 12, 3),
(527, 10, 3),
(528, 24, 4),
(529, 14, 4),
(530, 15, 4),
(531, 16, 4),
(532, 13, 4),
(533, 17, 5),
(534, 18, 5),
(535, 20, 5),
(536, 25, 5),
(537, 19, 5),
(538, 1, 1),
(539, 1, 1),
(540, 1, 1),
(541, 1, 1),
(542, 1, 1),
(543, 1, 1),
(544, 1, 1),
(545, 1, 1),
(546, 1, 1),
(547, 1, 1),
(548, 1, 1),
(549, 1, 1),
(550, 1, 1),
(551, 1, 1),
(552, 3, 1),
(553, 4, 1),
(554, 1, 1),
(555, 2, 1),
(556, 2, 1),
(557, 8, 2),
(558, 8, 2),
(559, 8, 2),
(560, 21, 1),
(561, 8, 2),
(562, 8, 2),
(563, 4, 1),
(564, 22, 2),
(565, 22, 2),
(566, 8, 2),
(567, 8, 2),
(568, 8, 2),
(569, 8, 2),
(570, 8, 2),
(571, 8, 2),
(572, 8, 2),
(573, 8, 2),
(574, 8, 2),
(575, 8, 2),
(576, 8, 2),
(577, 8, 2),
(578, 8, 2),
(579, 5, 2),
(580, 8, 2),
(581, 8, 2),
(582, 8, 2),
(583, 8, 2),
(584, 8, 2),
(585, 8, 2),
(586, 8, 2),
(587, 8, 2),
(588, 8, 2),
(589, 8, 2),
(590, 8, 2),
(591, 8, 2),
(592, 8, 2),
(593, 8, 2),
(594, 8, 2),
(595, 8, 2),
(596, 8, 2),
(597, 8, 2),
(598, 8, 2),
(599, 8, 2),
(600, 8, 2),
(601, 8, 2),
(602, 8, 2),
(603, 8, 2),
(604, 8, 2),
(605, 8, 2),
(606, 8, 2),
(607, 8, 2),
(608, 8, 2),
(609, 8, 2),
(610, 8, 2),
(611, 8, 2),
(612, 8, 2),
(613, 8, 2),
(614, 8, 2),
(615, 8, 2),
(616, 8, 2),
(617, 8, 2),
(618, 8, 2),
(619, 8, 2),
(620, 5, 2),
(621, 1, 1),
(622, 1, 1),
(623, 1, 1),
(624, 4, 1),
(625, 1, 1),
(626, 3, 1),
(627, 8, 2),
(628, 8, 2),
(629, 8, 2),
(630, 8, 2),
(631, 8, 2),
(632, 8, 2),
(633, 4, 1),
(634, 8, 2),
(635, 6, 2),
(636, 10, 3),
(637, 13, 4),
(638, 19, 5);

-- --------------------------------------------------------

--
-- テーブルの構造 `scenarios`
--

CREATE TABLE IF NOT EXISTS `scenarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scenario_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- テーブルのデータのダンプ `scenarios`
--

INSERT INTO `scenarios` (`id`, `scenario_name`) VALUES
(1, '初対面の相手に話しかける');

-- --------------------------------------------------------

--
-- テーブルの構造 `serifs`
--

CREATE TABLE IF NOT EXISTS `serifs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_no` int(4) NOT NULL,
  `step_id` int(11) NOT NULL,
  `serif_no` int(4) NOT NULL,
  `character_id` int(11) NOT NULL,
  `face_id` int(4) NOT NULL,
  `serif_text` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `step_id` (`step_id`),
  KEY `character_id` (`character_id`),
  KEY `face_id` (`face_id`),
  KEY `answer_no` (`answer_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=103 ;

--
-- テーブルのリレーション `serifs`:
--   `face_id`
--       `faces` -> `id`
--   `step_id`
--       `steps` -> `id`
--   `character_id`
--       `characters` -> `id`
--

--
-- テーブルのデータのダンプ `serifs`
--

INSERT INTO `serifs` (`id`, `answer_no`, `step_id`, `serif_no`, `character_id`, `face_id`, `serif_text`) VALUES
(1, 0, 1, 1, 1, 10, 'serif_text'),
(2, 0, 1, 1, 3, 0, '特に話しかけないで１日終わる'),
(3, 0, 1, 2, 2, 21, '友達になりたいのにどうして何もしないの～？！'),
(4, 0, 1, 3, 2, 24, 'とりあえずなにか自分からアクションを起こさなきゃ！'),
(5, 1, 1, 1, 1, 15, 'あ、そういう考え方もあるかもね……。'),
(6, 1, 1, 2, 2, 27, 'お兄ちゃんって、意外とロマンチストなのね……。'),
(7, 1, 1, 3, 2, 29, 'でも、いきなり夢とか運命とか大きな話（抽象的な話）を出すのはリスクもあるから、あんまりやりすぎると厨二病の人かなーって思われて、お兄ちゃんに友達が寄ってこなくなっちゃうのが心配ね…'),
(8, 2, 1, 1, 1, 12, 'え、気づかなかった！ごめん……。'),
(9, 2, 1, 2, 2, 21, '梅野くんに向かって恋人同士みたいな会話してどうするのよ～！！！'),
(10, 2, 1, 3, 2, 22, '話しかけること自体はいいけど、クラス替えしたばっかりなんだから、梅野くんがお兄ちゃんの前髪をチェックしてるはずないでしょ！'),
(11, 3, 1, 1, 1, 11, 'う、うん、元気だよ。'),
(12, 3, 1, 2, 2, 24, 'うーん、ちょっと話が漠然としすぎね……。短くて簡単な言葉で話しかけたのはよかったわ。相手が答えやすいし。でも、「元気かどうか」っていうぼんやりした話題だけだと、話が広がりにくくない？'),
(13, 4, 1, 1, 1, 14, 'あ、そう？実はさ、これ高校入学祝いで買ってもらったんだ！あはは'),
(14, 4, 1, 2, 2, 20, 'なんかいい雰囲気で会話が続きそう！相手の持ち物とかは身近だし変に思われないで話しかけられるからいいわよね。'),
(15, 4, 1, 3, 2, 28, 'しかもカッコいいって言われたらうれしくてもっと話したくなるわ！'),
(16, 5, 1, 1, 2, 28, '持ち物とか好きなゲームとか、相手が興味があることを聞いてみたら相手も話しやすいわね！'),
(17, 5, 1, 2, 2, 23, '相手に「話したい」と思わせればいいのよ。'),
(18, 5, 1, 3, 2, 20, '自分のことを話すのはそれからでも遅くないわ。'),
(19, 0, 2, 1, 1, 15, 'あ、あんまり知らない？そっか'),
(20, 0, 2, 2, 2, 26, 'お兄ちゃん、知ってるんなら答えなさいよ！'),
(21, 0, 2, 3, 2, 24, 'まあ、説明が難しいのもわかるけどね……。'),
(22, 0, 2, 4, 2, 20, '難しければ最初に「うーん、何て言えばいいんだろう」って言うだけでも、「答えようとしてる」ってことを相手にわかってもらえるわよ！'),
(23, 1, 2, 1, 1, 11, 'そっかー、なんかややこしいんだね'),
(24, 1, 2, 2, 2, 21, 'あきらめないでよ～！'),
(25, 1, 2, 3, 2, 20, 'うーん、まあでも、それも悪い言い方ではないわ。上手く説明できないときには、無理しないで正直に言うことも大事だから。'),
(26, 1, 2, 4, 2, 28, '「うーん、ごめん」って言い方も良かったわ。「説明しようと頑張ってはみたんだ」っていうメッセージが、その「うーん」でよく伝わると思うわ！'),
(27, 2, 2, 1, 1, 14, 'へー、ありがとう！今度見てみようっと'),
(28, 2, 2, 2, 2, 28, 'その言い方いいわよー！「ブログのコメント欄」っていう、相手も知ってそうなことに例えて説明できたのがイイネ！'),
(29, 2, 2, 3, 2, 23, '「自分しか知らない言葉」は使わなかったから、相手も想像しやすくなったわね！'),
(30, 3, 2, 1, 1, 11, 'ふ、ふーん、そうなんだ。ありがとう'),
(31, 3, 2, 2, 2, 24, '日本語でオーケイだよ……。'),
(32, 3, 2, 3, 2, 29, 'あのね、お兄ちゃんが知っている「スレッドフロート型匿名掲示板」っていう難しい言葉を、相手も知ってるとは限らないのよ？'),
(33, 3, 2, 4, 2, 23, '相手は２ちゃんねるのことを何も知らないんだから、まずは「誰でも知ってそうな、簡単な言葉」を使って説明するのが親切だし、イメージしてもらいやすいわよ！'),
(34, 4, 2, 1, 1, 13, 'わ、悪口！？'),
(35, 4, 2, 2, 1, 16, '怖そうだな、近寄らないようにしようっと……。'),
(36, 4, 2, 3, 2, 26, '説明がおおざっぱすぎるわよ！'),
(37, 4, 2, 4, 2, 24, '簡単な言葉で説明しようとしたのはいいことよ。でも、「悪口書くやつ」って言われても、「何にどう書くのか？」っていう具体的なイメージができないわ。'),
(38, 4, 2, 5, 2, 20, '梅野くんは２ちゃんねるについて何も知らないわけだから、「インターネットで書くもの」とか「パソコンやスマホで書くもの」とか、「梅野くんの知ってそうなこと」を話に入れながら説明した方がわかりやすいと思うわ！'),
(39, 5, 2, 1, 2, 23, '「わかりやすい説明」は、「相手が知ってる言葉を使った説明」！難しい言葉を使わないで、相手が知ってそうな言葉を使って、まず簡単に説明してみて！'),
(40, 5, 2, 2, 2, 20, '「相手が何をどこまで知ってるのかわからない」ってときは、「◯◯は知ってる？」と訊いてみてもいいかも！'),
(41, 0, 3, 1, 3, 0, '（借りられずに立ち去る）'),
(42, 0, 3, 2, 2, 29, '勇気出してよ……。'),
(43, 0, 3, 3, 2, 24, '確かに、「お願いする」っていうのは、けっこうハードルが高いかもしれないわよね。それなら、まずは様子見に声をかけてみたらどうかしら？'),
(44, 1, 3, 1, 1, 11, 'あ、いいよ！'),
(45, 1, 3, 2, 2, 21, '言い方が直球すぎるのよ！'),
(46, 1, 3, 3, 2, 22, '相手が梅野くんだったからよかったけど、一方的に「貸して！」って言うだけじゃ怒る人もいるかもよ？'),
(47, 1, 3, 4, 2, 20, '「～して！」っていうのは命令してるように聞こえるから、もっと優しい言い方を意識してみて！'),
(48, 2, 3, 1, 1, 14, 'そうそう。今流行ってるスポーツもののマンガだよ'),
(49, 3, 3, 1, 1, 15, 'おはよー、元気だよ'),
(50, 3, 3, 2, 2, 22, '話が遠回しすぎるのよね……。いきなり無理にお願いしなかったのはいいけど、お兄ちゃんが話題にしたいのは「梅野くんが元気かどうか」じゃないでしょ？'),
(51, 3, 3, 3, 2, 23, '質問して話のきっかけにするところまではよかったから、今度はもっと話題を絞って！'),
(52, 4, 3, 1, 1, 12, 'あ、ああ、いいよ！'),
(53, 4, 3, 2, 2, 25, '図々しくならない言い方はできていたけど、ちょっとへりくだりすぎね……。'),
(54, 4, 3, 3, 2, 24, '「申し訳ない」や「ごめんなさい」は、あんまり使いすぎない方がいいわ。相手が、「そんなに下手に出られると、貸さなかったら僕が悪者みたいになっちゃうなあ……。」って思っちゃうかも？'),
(55, 4, 3, 4, 2, 29, 'それに、あまり低姿勢すぎると、向こうもお兄ちゃんに親しみを感じられなくなるわよ？'),
(56, 5, 3, 1, 2, 23, 'お願いごとをするときは、自分の希望を一方的に押し付けちゃダメ！'),
(57, 5, 3, 2, 2, 28, 'いきなりお願いするんじゃなくて、まずは相手と話すきっかけを作るといいわね！'),
(58, 0, 4, 1, 3, 0, '（借りれずに立ち去る）'),
(59, 0, 4, 2, 2, 21, '会話を止めないの！自分から話をふっておいて、途中で会話をやめるのは相手に失礼よ！'),
(60, 0, 4, 3, 2, 20, 'まず相手に質問して話のきっかけを作ったのは、すごくよかったんだから！'),
(61, 0, 4, 4, 2, 22, '黙っちゃったら、相手は「無視された」って思うから要注意！これ基本！'),
(62, 1, 4, 1, 1, 12, 'へー。君もこういうマンガ読むの？'),
(63, 2, 4, 1, 1, 15, 'あ、いいよ！'),
(64, 2, 4, 2, 2, 27, 'ちゃんと借りられたけれど、唐突にお願いしすぎじゃない？'),
(65, 2, 4, 3, 2, 24, 'まず相手に質問して話のきっかけを作ったのはよかったけど、一方的に「貸して！」って言うだけだと怒っちゃう人もいるかもしれないわ。'),
(66, 2, 4, 4, 2, 29, 'それに、相手が説明してくれてるんだから、まずは相槌を打ったりしないと「この人、話を聴いてないな」って思われちゃうわよ？'),
(67, 3, 4, 1, 1, 12, 'いいよ！'),
(68, 3, 4, 2, 2, 21, '「じゃあ」の意味がわからないわよ！何の「じゃあ」なのよ！'),
(69, 3, 4, 3, 2, 20, 'いい？相手に質問をして話のきっかけを作ったのはすごくよかったわ。その質問を受けて、今は梅野くんがマンガの説明をしてくれてるわけでしょ？'),
(70, 3, 4, 4, 2, 22, 'だったら「ふんふん」って相槌を打ったり、相手の説明に関係する話を返したりした方がいいわよ。お願いは、相手の話をきちんと聴いてから！'),
(71, 4, 4, 1, 1, 17, 'あ、そうかな。そうかもね'),
(72, 4, 4, 2, 2, 21, '相手の言うことをいきなり否定しちゃダメ！'),
(73, 4, 4, 3, 2, 24, 'あのねえ、話を広げようして自分の意見を言うのはいいけど、相手の言ったことをいきなり否定するのはあんまり感じがよくないわ。それに、否定されると相手も話しづらくなっちゃうわね……。'),
(74, 4, 4, 4, 2, 22, '単に話を続けたいときは、「相手の話を即否定」はNG！'),
(75, 4, 4, 5, 2, 20, 'でも、まず相手に質問して話のきっかけを作ったのはよかったわ。'),
(76, 5, 4, 1, 2, 22, 'お願いごとをするときは、自分の希望を一方的に押し付けちゃダメ！'),
(77, 5, 4, 2, 2, 20, 'いきなりお願いごとをするんじゃなくて、相手が何か話してるときは、その話を遮らないようにするといいわ。「うんうん」って相づちを打つとかしてね。'),
(78, 5, 4, 3, 2, 22, '相手に「話を聴いてくれなかった」と思わせる言い方はNG！'),
(79, 5, 4, 4, 2, 28, '逆に、「聴いてくれた」って思ってくれれば、相手との距離はどんどん縮まるわ！'),
(80, 0, 5, 1, 3, 0, '（借りられずに立ち去る）'),
(81, 0, 5, 2, 2, 24, 'あああ～惜しい！ここまで話が続いたのに……。あのねえお兄ちゃん、もっと自信もっていいのよ！'),
(82, 0, 5, 3, 2, 20, 'まず質問して話のきっかけを作って、次は相手の話に関することを言って話を広げたよね。'),
(83, 0, 5, 4, 2, 28, 'そこまですごくよかったんだから。'),
(84, 0, 5, 5, 2, 23, '完璧に話せなくてもいいから、相手に質問されたら黙らないで答えて！'),
(85, 1, 5, 1, 1, 10, 'あ、ああ、うん'),
(86, 1, 5, 2, 2, 21, '質問を質問で返しちゃダメ！！向こうが何か訊いてくるときは、そのことを知りたいときなんだから、まずは答える！相手のことを訊くのはその後！'),
(87, 1, 5, 3, 2, 20, 'でも、これまでの流れは悪くなかったわ。まず質問して話のきっかけを作ったのがナイスよ。で、相手の話に関連した返しをしたのもよかったわ。'),
(88, 1, 5, 4, 2, 23, 'あと一息だから頑張って！'),
(89, 2, 5, 1, 1, 14, 'はいよー'),
(90, 2, 5, 2, 2, 24, '当初の目的を忘れないで～！途中まではすっごく良かったのに！'),
(91, 2, 5, 3, 2, 28, 'まず「何のマンガ？」って質問して会話のきっかけを作ったのはすごくよかったわ！その後も相手の話に関連したことを言って、話を広げられたしね。'),
(92, 2, 5, 4, 2, 23, 'あとは最後にちゃんと「お願い」をするだけ！'),
(93, 3, 5, 1, 1, 14, 'いいよ！また感想とか聴かせてね！'),
(94, 3, 5, 2, 2, 28, 'やったよお兄ちゃん！梅野くんと友達になれたも同然ね！まずは質問して会話のきっかけを作ったのがよかったわ！さらに、相手の話に関連することを言って、話を自然に広げたのもグッド！そして最後にお願いするとき、「貸してくれない？」って「お願い」したのがすごくいい！'),
(95, 3, 5, 3, 2, 23, '「貸して！」ってきっぱり言い過ぎると、自分の希望ばっかり押し付ける感じになっちゃうからね。そういう感じを出さないようにすると、相手も好印象を持ってくれて、どんどん友達ができるわよ！'),
(96, 4, 5, 1, 1, 11, 'ああ、いいよ！'),
(97, 4, 5, 2, 2, 20, '「ほぼ」合格だね！でももっといい回答もあるわよ。'),
(98, 4, 5, 3, 2, 28, 'お兄ちゃん、ここまでの流れはすごくよかった！まず質問して会話のきっかけを作ったのがよかったわ。その後、相手の話に関することを言って会話を繋げたのもね。'),
(99, 4, 5, 4, 2, 29, 'でも、最後の「貸して」はちょっと強引な感じがする！一方的に「貸して！」って言うのはちょっとだけワガママな感じがするよ。「～して！」っていう気軽な言い方は、けっこう親しい友達だけにした方がいいよ！'),
(100, 4, 5, 5, 2, 24, 'でないと、人によっては「ワガママなヤツだな」と思っちゃうかも？'),
(101, 5, 5, 1, 2, 20, 'お願いごとをするときは、自分の希望を一方的に押し付けちゃダメ！「～していい？」っていう言い方で「お願い」してみて！'),
(102, 5, 5, 2, 2, 28, 'そうすれば、自分の希望だけをワガママに押し付ける感じがなくなって、印象が良くなるわよ！');

-- --------------------------------------------------------

--
-- テーブルの構造 `stages`
--

CREATE TABLE IF NOT EXISTS `stages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scenario_id` int(11) NOT NULL,
  `stage_name` varchar(100) NOT NULL,
  `bg_image` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `scenario_id` (`scenario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- テーブルのリレーション `stages`:
--   `scenario_id`
--       `scenarios` -> `id`
--

--
-- テーブルのデータのダンプ `stages`
--

INSERT INTO `stages` (`id`, `scenario_id`, `stage_name`, `bg_image`) VALUES
(1, 1, 'とりあえず何か話しかけてみよう！', 'background_classroom.jpg'),
(2, 1, '梅野くんが知らない「２ちゃんねるについてわかりやすく説明しよう」', 'background_classroom.jpg'),
(3, 1, 'まずは感じよく声を掛けてみよう！', 'background_classroom.jpg');

-- --------------------------------------------------------

--
-- テーブルの構造 `steps`
--

CREATE TABLE IF NOT EXISTS `steps` (
  `id` int(10) NOT NULL,
  `stage_id` int(11) NOT NULL,
  `scenario_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `step_no` int(4) NOT NULL,
  `step_name` varchar(100) NOT NULL,
  `step_exp` varchar(1000) NOT NULL,
  `face_id` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `stage_id` (`stage_id`),
  KEY `scenario_id` (`scenario_id`),
  KEY `answer_id` (`answer_id`),
  KEY `face_id` (`face_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのリレーション `steps`:
--   `stage_id`
--       `stages` -> `id`
--   `scenario_id`
--       `scenarios` -> `id`
--   `answer_id`
--       `answers` -> `id`
--   `face_id`
--       `faces` -> `id`
--

--
-- テーブルのデータのダンプ `steps`
--

INSERT INTO `steps` (`id`, `stage_id`, `scenario_id`, `answer_id`, `step_no`, `step_name`, `step_exp`, `face_id`) VALUES
(1, 1, 1, 4, 1, 'とりあえず何か話しかけてみよう！', '高校２年の１学期。新しいクラス、周りは知らない人ばかり、今年こそ友達を作りたい！隣の席になった梅野くんが、何だかすごくいい人そう。友達になりたいな…', 10),
(2, 2, 1, 6, 1, '梅野くんが知らない「２ちゃんねるについてわかりやすく説明しよう」', '休み時間、一人スマホで２ちゃんねる閲覧中。”スレ立て乙……っと……”。なんてことをやっていたら、背後に梅野くんの気配！　興味深げに画面を見ながら、「ねえ、２ちゃんねるって何？」と訊いてきた。', 12),
(3, 3, 1, 10, 1, 'まずは感じよく声を掛けてみよう！', '休み時間、梅野くんが同級生からマンガを返してもらっている。『梅野、これ面白かったよ！』「でしょ？」あのマンガ、妹が面白いと言っていたやつだ。読んでみたい。借りられないだろうか？　それに、借りればもっと仲良くなるきっかけになるかも？', 10),
(4, 3, 1, 13, 2, '感じよく会話を続けよう！', '「そうそう。今流行ってるスポ根モノのマンガだよ」', 14),
(5, 3, 1, 19, 3, '「へー。君もこういうマンガ読むの？」', '「へー。君もこういうマンガ読むの？」', 12);

-- --------------------------------------------------------

--
-- テーブルの構造 `surveys`
--

CREATE TABLE IF NOT EXISTS `surveys` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `step_id` int(11) NOT NULL,
  `survey_text` varchar(1000) DEFAULT NULL,
  `survey_flag` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `step_id` (`step_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- テーブルのリレーション `surveys`:
--   `user_id`
--       `users` -> `id`
--   `step_id`
--       `steps` -> `id`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `secret_question` int(4) NOT NULL,
  `secret_answer` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `password`, `secret_question`, `secret_answer`, `gender`, `birthday`, `age`) VALUES
('sample@gmail.com', 'b8f864c639792eb1da5c7b1aa6964716cab6ad8f42aa9f6e0f52dd734ee4bc7d', 4, 'ないしょ', 'women', '1993-11-20', 21);

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`step_id`) REFERENCES `steps` (`id`);

--
-- テーブルの制約 `clears`
--
ALTER TABLE `clears`
  ADD CONSTRAINT `clears_ibfk_1` FOREIGN KEY (`scenario_id`) REFERENCES `scenarios` (`id`),
  ADD CONSTRAINT `clears_ibfk_2` FOREIGN KEY (`step_id`) REFERENCES `steps` (`id`),
  ADD CONSTRAINT `clears_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- テーブルの制約 `play_histories`
--
ALTER TABLE `play_histories`
  ADD CONSTRAINT `play_histories_ibfk_1` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`),
  ADD CONSTRAINT `play_histories_ibfk_2` FOREIGN KEY (`step_id`) REFERENCES `steps` (`id`);

--
-- テーブルの制約 `serifs`
--
ALTER TABLE `serifs`
  ADD CONSTRAINT `serifs_ibfk_1` FOREIGN KEY (`face_id`) REFERENCES `faces` (`id`),
  ADD CONSTRAINT `serifs_ibfk_2` FOREIGN KEY (`step_id`) REFERENCES `steps` (`id`),
  ADD CONSTRAINT `serifs_ibfk_3` FOREIGN KEY (`character_id`) REFERENCES `characters` (`id`);

--
-- テーブルの制約 `stages`
--
ALTER TABLE `stages`
  ADD CONSTRAINT `stages_ibfk_1` FOREIGN KEY (`scenario_id`) REFERENCES `scenarios` (`id`);

--
-- テーブルの制約 `steps`
--
ALTER TABLE `steps`
  ADD CONSTRAINT `steps_ibfk_1` FOREIGN KEY (`stage_id`) REFERENCES `stages` (`id`),
  ADD CONSTRAINT `steps_ibfk_2` FOREIGN KEY (`scenario_id`) REFERENCES `scenarios` (`id`),
  ADD CONSTRAINT `steps_ibfk_3` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`),
  ADD CONSTRAINT `steps_ibfk_4` FOREIGN KEY (`face_id`) REFERENCES `faces` (`id`);

--
-- テーブルの制約 `surveys`
--
ALTER TABLE `surveys`
  ADD CONSTRAINT `surveys_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `surveys_ibfk_2` FOREIGN KEY (`step_id`) REFERENCES `steps` (`id`);
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
