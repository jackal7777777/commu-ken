-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014 年 9 朁E19 日 08:30
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
`id` int(11) NOT NULL,
  `step_id` int(11) NOT NULL,
  `answer_no` int(4) NOT NULL,
  `answer_text` varchar(1000) DEFAULT NULL
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
(17, 5, 1, '梅野くんもこういうマンガ読むの'),
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
  `character_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `characters`
--

INSERT INTO `characters` (`id`, `character_name`) VALUES
(1, '梅野'),
(2, 'つむぎ');

-- --------------------------------------------------------

--
-- テーブルの構造 `clears`
--

CREATE TABLE IF NOT EXISTS `clears` (
`id` int(11) NOT NULL,
  `scenario_id` int(11) NOT NULL,
  `step_id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  `character_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのリレーション `faces`:
--   `id`
--       `faces` -> `id`
--

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
`id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `step_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

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
(1, 100, 100),
(2, 100, 100);

-- --------------------------------------------------------

--
-- テーブルの構造 `scenarios`
--

CREATE TABLE IF NOT EXISTS `scenarios` (
`id` int(11) NOT NULL,
  `scenario_name` varchar(100) NOT NULL
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
`id` int(11) NOT NULL,
  `answer_no` int(4) NOT NULL,
  `step_id` int(11) NOT NULL,
  `serif_no` int(4) NOT NULL,
  `character_id` int(11) NOT NULL,
  `face_id` int(4) NOT NULL,
  `serif_text` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=103 ;

--
-- テーブルのリレーション `serifs`:
--   `character_id`
--       `characters` -> `id`
--   `face_id`
--       `faces` -> `id`
--   `step_id`
--       `steps` -> `id`
--

--
-- テーブルのデータのダンプ `serifs`
--

INSERT INTO `serifs` (`id`, `answer_no`, `step_id`, `serif_no`, `character_id`, `face_id`, `serif_text`) VALUES
(1, 0, 0, 0, 0, 0, '	serif_text'),
(2, 0, 1, 1, 1, 0, '	特に話しかけないで１日終わる'),
(3, 0, 1, 2, 2, 21, '	友達になりたいのにどうして何もしないの～？！'),
(4, 0, 1, 3, 2, 24, '	とりあえずなにか自分からアクションを起こさなきゃ！'),
(5, 1, 1, 1, 1, 15, '	あ、そういう考え方もあるかもね……。'),
(6, 1, 1, 2, 2, 27, '	お兄ちゃんって，意外とロマンチストなのね……。'),
(7, 1, 1, 3, 2, 29, '	でも，いきなり夢とか運命とか大きな話（抽象的な話）を出すのはリスクもあるから、あんまりやりすぎると厨二病の人かなーって思われて，お兄ちゃんに友達が寄ってこなくなっちゃうのが心配ね…'),
(8, 2, 1, 1, 1, 12, '	え、気づかなかった！ごめん……。'),
(9, 2, 1, 2, 2, 21, '	梅野くんに向かって恋人同士みたいな会話してどうするのよ～！！！'),
(10, 2, 1, 3, 2, 22, '	話しかけること自体はいいけど，クラス替えしたばっかりなんだから，梅野くんがお兄ちゃんの前髪をチェックしてるはずないでしょ！'),
(11, 3, 1, 1, 1, 11, '	う、うん、元気だよ。'),
(12, 3, 1, 2, 2, 24, '	うーん、ちょっと話が漠然としすぎね……。短くて簡単な言葉で話しかけたのはよかったわ。相手が答えやすいし。でも、「元気かどうか」っていうぼんやりした話題だけだと、話が広がりにくくない？'),
(13, 4, 1, 1, 1, 14, '	あ、そう？実はさ、これ高校入学祝いで買ってもらったんだ！あはは'),
(14, 4, 1, 2, 2, 20, '	なんかいい雰囲気で会話が続きそう！相手の持ち物とかは身近だし変に思われないで話しかけられるからいいわよね。'),
(15, 4, 1, 3, 2, 28, '	しかもカッコいいって言われたらうれしくてもっと話したくなるわ！'),
(16, 5, 1, 1, 2, 28, '	持ち物とか好きなゲームとか，相手が興味があることを聞いてみたら相手も話しやすいわね！'),
(17, 5, 1, 2, 2, 23, '	相手に「話したい」と思わせればいいの'),
(18, 5, 1, 3, 2, 20, '	自分のことを話すのはそれからでも遅くないわ。'),
(19, 0, 2, 1, 1, 0, '	あ、あんまり知らない？　そっか'),
(20, 0, 2, 2, 2, 26, '	お兄ちゃん、知ってるんなら答えなさいよ！'),
(21, 0, 2, 3, 2, 24, '	まあ、説明が難しいのもわかるけどね……。'),
(22, 0, 2, 4, 2, 20, '	難しければ最初に「うーん、何て言えばいいんだろう」って言うだけでも、「答えようとしてる」ってことを相手にわかってもらえるわよ！'),
(23, 1, 2, 1, 1, 11, '	そっかー、なんかややこしいんだね'),
(24, 1, 2, 2, 2, 21, '	諦めないでよ～！'),
(25, 1, 2, 3, 2, 20, '	うーん、まあでも、それも悪い言い方ではないわ。上手く説明できないときには、無理しないで正直に言うことも大事だから。'),
(26, 1, 2, 4, 2, 28, '	「うーん、ごめん」って言い方も良かったわ。「説明しようと頑張ってはみたんだ」っていうメッセージが、その「うーん」でよく伝わると思うわ！'),
(27, 2, 2, 1, 1, 14, '	へー、ありがとう！今度見てみようっと'),
(28, 2, 2, 2, 2, 28, '	その言い方いいわよー！　「ブログのコメント欄」っていう、相手も知ってそうなことに例えて説明できたのがイイネ！'),
(29, 2, 2, 3, 2, 23, '	「自分しか知らない言葉」は使わなかったから、相手も想像しやすくなったわね！'),
(30, 3, 2, 1, 1, 11, '	ふ、ふーん、そうなんだ。ありがとう'),
(31, 3, 2, 2, 2, 24, '	日本語でオーケイだよ……。'),
(32, 3, 2, 3, 2, 29, '	あのね、お兄ちゃんが知っている「スレッドフロート型匿名掲示板」っていう難しい言葉を、相手も知ってるとは限らないのよ？'),
(33, 3, 2, 4, 2, 23, '	相手は２ちゃんねるのことを何も知らないんだから、まずは「誰でも知ってそうな、簡単な言葉」を使って説明するのが親切だし、イメージしてもらいやすいわよ！'),
(34, 4, 2, 1, 1, 13, '	わ、悪口！？'),
(35, 4, 2, 2, 1, 16, '	怖そうだな、近寄らないようにしようっと……。'),
(36, 4, 2, 3, 2, 26, '	説明がおおざっぱすぎるわよ！'),
(37, 4, 2, 4, 2, 24, '	簡単な言葉で説明しようとしたのはいいことよ。でも、「悪口書くやつ」って言われても、「何にどう書くのか？」っていう具体的なイメージができないわ。'),
(38, 4, 2, 5, 2, 20, '	梅野くんは弐ちゃんねるについて何も知らないわけだから、「インターネットで書くもの」とか「パソコンやスマホで書くもの」とか、「梅野くんの知ってそうなこと」を話に入れながら説明した方がわかりやすいと思うわ！'),
(39, 5, 2, 1, 2, 23, '	「わかりやすい説明」は、「相手が知ってる言葉を使った説明」！　難しい言葉を使わないで、相手が知ってそうな言葉を使って、まず簡単に説明してみて！'),
(40, 5, 2, 2, 2, 20, '	「相手が何をどこまで知ってるのかわからない」ってときは、「◯◯は知ってる？」と訊いてみてもいいかも！'),
(41, 0, 3, 1, 1, 0, '	（借りられずに立ち去る）'),
(42, 0, 3, 2, 2, 29, '	勇気出してよ……。'),
(43, 0, 3, 3, 2, 24, '	確かに、「お願いする」っていうのは、けっこうハードルが高いかもしれないわよね。それなら、まずは様子見に声をかけてみたらどうかしら？'),
(44, 1, 3, 1, 1, 11, '	あ、いいよ！'),
(45, 1, 3, 2, 2, 21, '	言い方が直球すぎるのよ！　'),
(46, 1, 3, 3, 2, 22, '	相手が梅野くんだったからよかったけど、一方的に「貸して！」って言うだけじゃ怒る人もいるかもよ？'),
(47, 1, 3, 4, 2, 20, '	「～して！」っていうのは命令してるように聞こえるから、もっと優しい言い方を意識してみて！'),
(48, 2, 3, 1, 1, 14, '	そうそう。今流行ってるスポ根モノのマンガだよ'),
(49, 3, 3, 1, 1, 15, '	おはよー、元気だよ'),
(50, 3, 3, 2, 2, 22, '	話が遠回しすぎるのよね……。いきなり無理にお願いしなかったのはいいけど、お兄ちゃんが話題にしたいのは「梅野くんが元気かどうか」じゃないでしょ？'),
(51, 3, 3, 3, 2, 23, '	質問して話のきっかけにするところまではよかったから、今度はもっと話題を絞って！'),
(52, 4, 3, 1, 1, 12, '	あ、ああ、いいよ！'),
(53, 4, 3, 2, 2, 25, '	図々しくならない言い方はできていたけど、ちょっとへりくだりすぎね……。'),
(54, 4, 3, 3, 2, 24, '	「申し訳ない」や「ごめんなさい」は、あんまり使いすぎない方がいいわ。相手が、「そんなに下手に出られると、貸さなかったら僕が悪者みたいになっちゃうなあ……。」って思っちゃうかも？'),
(55, 4, 3, 4, 2, 29, '	それに、あまり低姿勢すぎると、向こうもお兄ちゃんに親しみを感じられなくなるわよ？'),
(56, 5, 3, 5, 2, 23, '	お願いごとをするときは、自分の希望を一方的に押し付けちゃダメ！'),
(57, 5, 3, 6, 2, 28, '	いきなりお願いするんじゃなくて、まずは相手と話すきっかけを作るといいわね！'),
(58, 0, 4, 1, 1, 0, '	（借りれずに立ち去る）'),
(59, 0, 4, 2, 2, 21, '	会話を止めないの！　自分から話をふっておいて、途中で会話をやめるのは相手に失礼よ！'),
(60, 0, 4, 3, 2, 20, '	まず相手に質問して話のきっかけを作ったのは、すごくよかったんだから！'),
(61, 0, 4, 4, 2, 22, '	黙っちゃったら、相手は「無視された」って思うから要注意！　これ基本！'),
(62, 1, 4, 1, 1, 12, '	へー。君もこういうマンガ読むの？'),
(63, 2, 4, 1, 1, 15, '	あ、いいよ！'),
(64, 2, 4, 2, 2, 27, '	ちゃんと借りられたけれど、唐突にお願いしすぎじゃない？'),
(65, 2, 4, 3, 2, 24, '	まず相手に質問して話のきっかけを作ったのはよかったけど、一方的に「貸して！」って言うだけだと怒っちゃう人もいるかもしれないわ。'),
(66, 2, 4, 4, 2, 29, '	それに、相手が説明してくれてるんだから、まずは相槌を打ったりしないと「この人、話を聴いてないな」って思われちゃうわよ？'),
(67, 3, 4, 1, 1, 12, '	いいよ！'),
(68, 3, 4, 2, 2, 21, '	「じゃあ」の意味がわからないわよ！何の「じゃあ」なのよ！'),
(69, 3, 4, 3, 2, 20, '	いい？相手に質問をして話のきっかけを作ったのはすごくよかったわ。その質問を受けて、今は梅野くんがマンガの説明をしてくれてるわけでしょ？'),
(70, 3, 4, 4, 2, 22, '	だったら「ふんふん」って相槌を打ったり、相手の説明に関係する話を返したりした方がいいわよ。お願いは、相手の話をきちんと聴いてから！'),
(71, 4, 4, 1, 1, 17, '	あ、そうかな。そうかもね'),
(72, 4, 4, 2, 2, 21, '	相手の言うことをいきなり否定しちゃダメ！'),
(73, 4, 4, 3, 2, 24, '	あのねえ、話を広げようして自分の意見を言うのはいいけど、相手の言ったことをいきなり否定するのはあんまり感じがよくないわ。それに、否定されると相手も話しづらくなっちゃうわね……。'),
(74, 4, 4, 4, 2, 22, '	単に話を続けたいときは、「相手の話を即否定」はNG！'),
(75, 4, 4, 5, 2, 20, '	でも、まず相手に質問して話のきっかけを作ったのはよかったわ。'),
(76, 5, 4, 1, 2, 22, '	お願いごとをするときは、自分の希望を一方的に押し付けちゃダメ！'),
(77, 5, 4, 2, 2, 20, '	いきなりお願いごとをするんじゃなくて、相手が何か話してるときは、その話を遮らないようにするといいわ。「うんうん」って相づちを打つとかしてね。'),
(78, 5, 4, 3, 2, 22, '	相手に「話を聴いてくれなかった」と思わせる言い方はNG！'),
(79, 5, 4, 4, 2, 28, '	逆に、「聴いてくれた」って思ってくれれば、相手との距離はどんどん縮まるわ！'),
(80, 0, 5, 1, 1, 0, '	（借りられずに立ち去る）'),
(81, 0, 5, 2, 2, 24, '    あああ～惜しい！ここまで話が続いたのに……。あのねえお兄ちゃん、もっと自信もっていいのよ！'),
(82, 0, 5, 3, 2, 20, '	まず質問して話のきっかけを作って、次は相手の話に関することを言って話を広げたよね。'),
(83, 0, 5, 4, 2, 28, '	そこまですごくよかったんだから。'),
(84, 0, 5, 5, 2, 23, '	完璧に話せなくてもいいから、相手に質問されたら黙らないで答えて！'),
(85, 1, 5, 1, 1, 10, '	あ、ああ、うん'),
(86, 1, 5, 2, 2, 21, '	質問を質問で返しちゃダメ！！向こうが何か訊いてくるときは、そのことを知りたいときなんだから、まずは答える！相手のことを訊くのはその後！'),
(87, 1, 5, 3, 2, 20, '	でも、これまでの流れは悪くなかったわ。まず質問して話のきっかけを作ったのがナイスよ。で、相手の話に関連した返しをしたのもよかったわ。'),
(88, 1, 5, 4, 2, 23, '	あと一息だから頑張って！'),
(89, 2, 5, 1, 1, 14, '	はいよー'),
(90, 2, 5, 2, 2, 24, '	当初の目的を忘れないで～！　途中まではすっごく良かったのに！'),
(91, 2, 5, 3, 2, 28, '	まず「何のマンガ？」って質問して会話のきっかけを作ったのはすごくよかったわ！　その後も相手の話に関連したことを言って、話を広げられたしね。'),
(92, 2, 5, 4, 2, 23, '	あとは最後にちゃんと「お願い」をするだけ！'),
(93, 3, 5, 1, 1, 14, '	いいよ！　また感想とか聴かせてね！'),
(94, 3, 5, 2, 2, 28, '	やったよお兄ちゃん！　梅野くんと友達になれたも同然ね！　まずは質問して会話のきっかけを作ったのがよかったわ！　さらに、相手の話に関連することを言って、話を自然に広げたのもグッド！　そして最後にお願いするとき、「貸してくれない？」って「お願い」したのがすごくいい！'),
(95, 3, 5, 3, 2, 23, '	「貸して！」ってきっぱり言い過ぎると、自分の希望ばっかり押し付ける感じになっちゃうからね。そういう感じを出さないようにすると、相手も好印象を持ってくれて、どんどん友達ができるわよ！'),
(96, 4, 5, 1, 1, 11, '	ああ、いいよ！'),
(97, 4, 5, 2, 2, 20, '	「ほぼ」合格だね！でももっといい回答もあるわよ。'),
(98, 4, 5, 3, 2, 28, '	お兄ちゃん、ここまでの流れはすごくよかった！　まず質問して会話のきっかけを作ったのがよかったわ。その後、相手の話に関することを言って会話を繋げたのもね。'),
(99, 4, 5, 4, 2, 29, '	でも、最後の「貸して」はちょっと強引な感じがする！　一方的に「貸して！」って言うのはちょっとだけワガママな感じがするよ。「?して！」っていう気軽な言い方は、けっこう親しい友達だけにした方がいいよ！'),
(100, 4, 5, 5, 2, 24, '	でないと、人によっては「ワガママなヤツだな」と思っちゃうかも？'),
(101, 5, 5, 1, 2, 20, 'お願いごとをするときは、自分の希望を一方的に押し付けちゃダメ！　「～していい？」っていう言い方で「お願い」してみて！'),
(102, 5, 5, 2, 2, 28, 'そうすれば、自分の希望だけをワガママに押し付ける感じがなくなって、印象が良くなるわよ！');

-- --------------------------------------------------------

--
-- テーブルの構造 `stages`
--

CREATE TABLE IF NOT EXISTS `stages` (
`id` int(11) NOT NULL,
  `scenario_id` int(11) NOT NULL,
  `stage_name` varchar(100) NOT NULL,
  `bg_image` varchar(30) NOT NULL,
  `stage_exp` varchar(1000) NOT NULL,
  `face_id` int(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- テーブルのリレーション `stages`:
--   `face_id`
--       `faces` -> `id`
--   `scenario_id`
--       `scenarios` -> `id`
--

--
-- テーブルのデータのダンプ `stages`
--

INSERT INTO `stages` (`id`, `scenario_id`, `stage_name`, `bg_image`, `stage_exp`, `face_id`) VALUES
(1, 1, 'とりあえず何か話しかけてみよう！', 'background_classroom.jpg', '高校２年の１学期。新しいクラス、周りは知らない人ばかり、今年こそ友達を作りたい！隣の席になった梅野くんが、何だかすごくいい人そう。友達になりたいな…', 10),
(2, 1, '梅野くんが知らない「２ちゃんねるについてわかりやすく説明しよう」', 'background_classroom.jpg', '休み時間、一人スマホで２ちゃんねる閲覧中。”スレ立て乙……っと……”。なんてことをやっていたら、背後に梅野くんの気配！　興味深げに画面を見ながら、「ねえ、２ちゃんねるって何？」と訊いてきた。', 12),
(3, 1, 'まずは感じよく声を掛けてみよう！', 'background_classroom.jpg', '休み時間、梅野くんが同級生からマンガを返してもらっている。『梅野、これ面白かったよ！』「でしょ？」\r\nあのマンガ、妹が面白いと言っていたやつだ。読んでみたい。借りられないだろうか？　それに、借りればもっと仲良くなるきっかけになるかも？', 10),
(4, 1, '感じよく会話を続けよう！', 'background_classroom.jpg', '「そうそう。今流行ってるスポ根モノのマンガだよ', 14),
(5, 1, 'マンガを借りてみよう！', 'background_classroom.jpg', '「へー。君もこういうマンガ読むの？」', 12);

-- --------------------------------------------------------

--
-- テーブルの構造 `steps`
--

CREATE TABLE IF NOT EXISTS `steps` (
  `id` int(10) NOT NULL,
  `stage_id` int(11) NOT NULL,
  `scenario_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `step_no` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのリレーション `steps`:
--   `answer_id`
--       `answers` -> `id`
--   `scenario_id`
--       `scenarios` -> `id`
--   `stage_id`
--       `stages` -> `id`
--

--
-- テーブルのデータのダンプ `steps`
--

INSERT INTO `steps` (`id`, `stage_id`, `scenario_id`, `answer_id`, `step_no`) VALUES
(1, 1, 1, 4, 1),
(2, 2, 1, 6, 1),
(3, 3, 1, 10, 1),
(4, 3, 1, 13, 2),
(5, 3, 1, 19, 3);

-- --------------------------------------------------------

--
-- テーブルの構造 `surveys`
--

CREATE TABLE IF NOT EXISTS `surveys` (
`id` int(10) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `step_id` int(11) NOT NULL,
  `survey_text` varchar(1000) NOT NULL,
  `survey_flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- テーブルのリレーション `surveys`:
--   `step_id`
--       `steps` -> `id`
--   `user_id`
--       `users` -> `id`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(50) NOT NULL,
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

INSERT INTO `users` (`id`, `password`, `secret_question`, `secret_answer`, `gender`, `birthday`, `age`) VALUES
('test@gmail', 'test@gmail.com', 1, 'テストです', 'm', '1988-11-07', 26),
('umeno@gmai', 'umeno', 2, '梅野テスト', 'm', '1990-01-11', 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clears`
--
ALTER TABLE `clears`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faces`
--
ALTER TABLE `faces`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `play_histories`
--
ALTER TABLE `play_histories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scenarios`
--
ALTER TABLE `scenarios`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serifs`
--
ALTER TABLE `serifs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stages`
--
ALTER TABLE `stages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `steps`
--
ALTER TABLE `steps`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `id_2` (`id`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
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
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `clears`
--
ALTER TABLE `clears`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `play_histories`
--
ALTER TABLE `play_histories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `scenarios`
--
ALTER TABLE `scenarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `serifs`
--
ALTER TABLE `serifs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `stages`
--
ALTER TABLE `stages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
