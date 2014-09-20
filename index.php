<?php

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/minHeader.css">
		<link rel="apple\touch-icon" href="images/.png">
		<title>こみゅけん！-kommu-ken!-</title>
		<script src="js/jquery-2.1.1.min.js"></script>
		<script>
			//オープニング文章
			var startText = new Array();
			startText['name1'] = '僕';
			startText['text1'] = '今日から高校２年生、新しいクラスだ……';
			startText['img1'] ='images/none.png';
			startText['name2'] = '僕';
			startText['text2'] = '１年のときは、全然友達ができなかったなあ……誰とも上手く話せなくて……';
			startText['img2'] ='images/none.png';
			startText['name3'] = '僕';
			startText['text3'] = '今年こそは……今年こそは友達が欲しい！';
			startText['img3'] ='images/none.png';
			startText['name4'] = '僕';
			startText['text4'] = '新しいクラスで、初対面の人もいっぱいいるし！';
			startText['img4'] ='images/none.png';
			startText['name5'] = '僕';
			startText['text5'] = '……でも、どうやって友達を作ればいいんだ？';
			startText['img5'] ='images/none.png';
			startText['name6'] = 'つむぎ';
			startText['text6'] = 'お兄ちゃん、何悩んでるの？';
			startText['img6'] ='images/sister.png';
			startText['name7'] = '僕';
			startText['text7'] = 'うわっ！　つ、つむぎ！　勝手に部屋に入ってくるんじゃない！';
			startText['img7'] ='images/none.png';
			startText['name7'] = 'つむぎ';
			startText['text7'] = 'さっきからうるさいから、気になって見に来たのよ。';
			startText['img7'] ='images/sister_zitome.png';
			startText['name7'] = 'つむぎ';
			startText['text7'] = '何、お兄ちゃん、友達を作りたいの？';
			startText['img7'] = 'images/sister_zitome.png';
			startText['name8'] = '僕';
			startText['text8'] = 'き、聞こえてたのか……';
			startText['img8'] = 'images/none.png';
			startText['name9'] = '僕';
			startText['text9'] = 'そうなんだよ、僕だって友達が欲しいんだよ……';
			startText['img9'] = 'images/none.png';
			startText['name10'] = '僕';
			startText['text10'] = 'でも、他人とどう話していいかわからなくて……';
			startText['img10'] = 'images/none.png';
			startText['name11'] = 'つむぎ';
			startText['text11'] = 'もう、昔からそんなんだから。';
			startText['img11'] = 'images/sister_komaru.png';
			startText['name12'] = 'つむぎ';
			startText['text12'] = 'そういうときは、とりあえず適当に話しかければ良いのよ。';
			startText['img12'] = 'images/sister_komaru.png';
			startText['name13'] = '僕';
			startText['text13'] = 'それが無理なんだよ……';
			startText['img13'] = 'images/none.png';
			startText['name14'] = '僕';
			startText['text14'] = 'いいかつむぎ？';
			startText['img14'] = 'images/none.png';
			startText['name15'] = '僕';
			startText['text15'] = '学校っての言うのはな、恐ろしいほど、みんなが空気を読んでいる世界だ。';
			startText['img15'] = 'images/none.png';
			startText['name16'] = '僕';
			startText['text16'] = 'なんていうか、クラスの中で、見えない役割みたいなのがあって……';
			startText['img16'] = 'images/none.png';
			startText['name17'] = '僕';
			startText['text17'] = '僕みたいなぼっちは、明るく楽しく話しちゃいけないみたいな、';
			startText['img17'] = 'images/none.png';
			startText['name18'] = '僕';
			startText['text18'] = 'そういう無言のプレッシャーがあるんだよ。';
			startText['img18'] = 'images/none.png';
			startText['name19'] = 'つむぎ';
			startText['text19'] = 'それで毎日、一人でお弁当食べてるの？';
			startText['img19'] = 'images/sister_zitome.png';
			startText['name20'] = '僕';
			startText['text20'] = '言うなつむぎ……　とにかくだ、僕にとって学校は「異世界」なんだよ。';
			startText['img20'] = 'images/none.png';
			startText['name21'] = '僕';
			startText['text21'] = '僕みたいに、暗くて、友達のいないやつは、明るいやつらの間に入っていけないんだ。';
			startText['img21'] = 'images/none.png';
			startText['name22'] = '僕';
			startText['text22'] = 'それをやったらなぜか、「空気読めない」って言われちゃうんだよ……';
			startText['img22'] = 'images/none.png';
			startText['name23'] = '僕';
			startText['text23'] = '中学のときもそうだったから、間違いない……！';
			startText['img23'] = 'images/none.png';
			startText['name24'] = 'つむぎ';
			startText['text24'] = 'うーん、なんだかなあ。';
			startText['img24'] = 'images/sister_komaru.png';
			startText['name25'] = 'つむぎ';
			startText['text25'] = 'ねえ、なんで「話しかけちゃいけない」の？';
			startText['img25'] = 'images/sister_komaru.png';
			startText['name26'] = 'つむぎ';
			startText['text26'] = 'お兄ちゃん、そういう呪いでもかけられてるの？';
			startText['img26'] = 'images/sister_komaru.png';
			startText['name27'] = '僕';
			startText['text27'] = 'いや、そうじゃないけど、だからそういう空気が……';
			startText['img27'] = 'images/none.png';
			startText['name28'] = 'つむぎ';
			startText['text28'] = 'もー、空気って何よ？　空気が読めたらエラいの？';
			startText['img28'] = 'images/sister_ikari.png';
			startText['name29'] = 'つむぎ';
			startText['text29'] = '空気ばっかり読んでるのって、すっごく疲れない？';
			startText['img29'] = 'images/sister_ikari.png';
			startText['name30'] = '僕';
			startText['text30'] = 'そ、そりゃそうだけど……';
			startText['img30'] = 'images/none.png';
			startText['name31'] = 'つむぎ';
			startText['text31'] = 'とにかく、友達欲しいなら、その気持ちに素直になればいいのよ。';
			startText['img31'] = 'images/sister.png';
			startText['name32'] = '僕';
			startText['text32'] = 'で、でも、どう話せばいいか、わかんなくて……';
			startText['img32'] = 'images/none.png';
			startText['name33'] = '僕';
			startText['text33'] = 'ほら、感じの悪い言い方しちゃったら、相手を傷つけるだろ？';
			startText['img33'] = 'images/none.png';
			startText['name34'] = 'つむぎ';
			startText['text34'] = 'まあ、それはもちろんそうよね…。';
			startText['img34'] = 'images/sister_komaru.png';
			startText['name35'] = 'つむぎ';
			startText['text35'] = 'でも、逆に言えば、「言い方」さえそこそこ上手くなればいいのよ。';
			startText['img35'] = 'images/sister.png';
			startText['name36'] = '僕';
			startText['text36'] = 'へ？';
			startText['img36'] = 'images/none.png';
			startText['name37'] = 'つむぎ';
			startText['text37'] = '友達を作るのに、暗いとか人見知りとか、そういう性格を直す必要なんかないわ。';
			startText['img37'] = 'images/sister.png';
			startText['name38'] = 'つむぎ';
			startText['text38'] = '周りの空気に合わせて、一人ぼっちのキャラに甘んじる必要もない。';
			startText['img38'] = 'images/sister.png';
			startText['name39'] = 'つむぎ';
			startText['text39'] = '要は「上手い話し方」さえ工夫すれば、誰だって友達は作れるのよ。';
			startText['img39'] = 'images/sister_isamasii.png';
			startText['name40'] = 'つむぎ';
			startText['text40'] = '話し方「だけ」でいいの。案外簡単なものよ、人間関係なんて。';
			startText['img40'] = 'images/sister_tyousyou.png';
			startText['name41'] = '僕';
			startText['text41'] = 'で、でも、その話し方をどうやって身につければいいんだよ？';
			startText['img41'] = 'images/none.png';
			startText['name42'] = 'つむぎ';
			startText['text42'] = 'ふふん。私に任せなさーい！';
			startText['img42'] = 'images/sister_isamasii.png';
			startText['name43'] = '僕';
			startText['text43'] = 'は、はあ？';
			startText['img43'] = 'images/none.png';
			startText['name44'] = 'つむぎ';
			startText['text44'] = 'こう見えても私、「話し方」だけは自信があるの！';
			startText['img44'] = 'images/sister_warau.png';
			startText['name45'] = 'つむぎ';
			startText['text45'] = '友達と仲良くするための話し方、いろいろ教えてあげる！';
			startText['img45'] = 'images/sister_warau.png';
			startText['name46'] = '僕';
			startText['text46'] = '教えてあげるって……そんなこと言われても……';
			startText['img46'] = 'images/none.png';
			startText['name47'] = 'つむぎ';
			startText['text47'] = 'うじうじしないの！';
			startText['img47'] = 'images/sister_okoru.png';
			startText['name48'] = 'つむぎ';
			startText['text48'] = 'いい？　友達が作りたいんでしょ？';
			startText['img48'] = 'images/sister_okoru.png';
			startText['name49'] = 'つむぎ';
			startText['text49'] = 'だったらこれから、何でもいいからクラスメイトと話をしてみて。';
			startText['img49'] = 'images/sister.png';
			startText['name50'] = 'つむぎ';
			startText['text50'] = '上手く話が続くように。';
			startText['img50'] = 'images/sister.png';
			startText['name51'] = '僕';
			startText['text51'] = 'そ、そんなの無理に決まってるだろ！';
			startText['img51'] = 'images/none.png';
			startText['name52'] = '僕';
			startText['text52'] = '変なこと言っちゃったらどうするんだよ！';
			startText['img52'] = 'images/none.png';
			startText['name53'] = 'つむぎ';
			startText['text53'] = '大丈夫。';
			startText['img53'] = 'images/sister.png';
			startText['name54'] = 'つむぎ';
			startText['text54'] = 'もし何かマズいことを言ったら、私がビシビシ教えてあげる。';
			startText['img54'] = 'images/sister.png';
			startText['name55'] = 'つむぎ';
			startText['text55'] = '「何が悪かったのか」「どう直せばいいか」をね！';
			startText['img55'] = 'images/sister.png';
			startText['name56'] = 'つむぎ';
			startText['text56'] = 'そして、上手く話を続けられたら、「どこがよかったのか」もしっかり教えてあげるわ！';
			startText['img56'] = 'images/sister_isamasii.png';
			startText['name57'] = 'つむぎ';
			startText['text57'] = 'そうやって、マンツーマンで「話し方のコツ」を教われば、ちょっとは自信もつくと思わない？';
			startText['img57'] = 'images/sister_isamasii.png';
			startText['name58'] = 'つむぎ';
			startText['text58'] = 'それに、どんどん話し方が上手くなれば、いろんな人と友達になれるかも！';
			startText['img58'] = 'images/sister_warau.png';
			startText['name59'] = '僕';
			startText['text59'] = 'お、おお、それはありがたい！';
			startText['img59'] = 'images/none.png';
			startText['name60'] = 'つむぎ';
			startText['text60'] = 'よーし、じゃあさっそく学校に行きましょ！';
			startText['img60'] = 'images/sister.png';
			startText['name61'] = 'つむぎ';
			startText['text61'] = 'あ、最後に一つ、大事なこと！';
			startText['img61'] = 'images/sister.png';
			startText['name62'] = 'つむぎ';
			startText['text62'] = 'お兄ちゃんは今、友達のいないことを気にしているかもしれないけれど、';
			startText['img62'] = 'images/sister.png';
			startText['name63'] = 'つむぎ';
			startText['text63'] = '別に「友達が多ければエラい！」ってワケじゃないからね。';
			startText['img63'] = 'images/sister.png';
			startText['name64'] = 'つむぎ';
			startText['text64'] = '友達が少なくても毎日を楽しめてる人、いっぱいいるんだし。';
			startText['img64'] = 'images/sister_isamasii.png';
			startText['name65'] = 'つむぎ';
			startText['text65'] = 'だから、友達作りをするにしても、肩の力を入れすぎる必要は全然ないわ。';
			startText['img65'] = 'images/sister.png';
			startText['name66'] = 'つむぎ';
			startText['text66'] = '無理せず焦らず、楽しい友達作りができるといいわね！';
			startText['img66'] = 'images/sister_warau.png';

			var j = 1;
			//オープニング
			$(function(){
				$("#gameBackBlack").fadeOut(0);
				$("#regi").fadeOut(0);
				$("#loginForm").fadeOut(0);
				$("#gameLogo").fadeOut(0);
				$("#hukidashi").fadeOut(0);
				$("#next").fadeOut(0);
				$("#gameLogo").fadeIn(1000).fadeOut(500);
				$("#hukidashi").delay(2500).fadeIn(500);
				$("#talker").delay(2500).text(startText['name1']);
				setTimeout("start()",2500);
				setTimeout("sp()",2500);
				$("p").delay(2500).removeClass("split");
				$("<img>",{
					"id":"img",
					"src":"images/none.png"
				}).appendTo("#gameImg");
				$("#skip").click(function(){
					fin();
				});
				$("#regi").click(function(){
					window.location.href = 'add.ctp';
				});
				
			});
			//文章、画像、話し手名入れ替え
			function huki(j){
				if(j==67){
					$("#hukidashi").click(function(){
						fin();
					});
				}else{
					//すでに追加されたテキストのスプリットを削除
					$(".split").first().removeClass("split");
					//つむぎと僕の切り替え
					if(startText['name'+j]==startText['name'+(j-1)]){
						//テキストを一行上に流す
						$("#gameArticle").animate({"top":"-"+41*(j-2)+"px"});
						change(j);
					}else{
						//テキストを二行分上に流す
						$("#gameArticle").animate({"top":"-"+41*(j-1)+"px"});
						$("#gameBackBlack").fadeIn(500).fadeOut(500);
						setTimeout("change("+j+")",500);
					}
				}
				
			}
			function fin(){
				$("#gameBackBlack").fadeIn(500);
				$("#hukidashi").fadeOut(0);
				$("#gameImg").fadeOut(0);
				$("#loginForm").delay(500).fadeIn(500);
				$("#next").delay(500).fadeIn(500);
				$("#regi").delay(500).fadeIn(500);
				$("#skip").fadeOut(100);
			}
			function change(j){
				$("#talker").text(startText['name'+j]);
				$("<p>",{
					"id":"p"+j,
					"class":"split",
					"text":startText['text'+j]
				}).appendTo("#gameArticle");
				sp();
				$("#img").attr("src",startText['img'+j]);
			}
			//最初の二行
			function start(){
				$("<p>",{
					"id":"p1",
					"class":"split",
					"text":startText['text1']
				}).appendTo("#gameArticle");
			}
			//文章をキーボード入力のように表示する。
			function sp(){
					$("#hukidashi").off();
				    var setElm = $('.split'),
				    delaySpeed = 50,
				    fadeSpeed = 0;
				    setText = setElm.html();
				    setElm.css({visibility:'visible'}).children().addBack().contents().each(function(){
				        var elmThis = $(this);
				        if (this.nodeType == 3) {
				            var $this = $(this);
				            $this.replaceWith($this.text().replace(/(\S)/g, '<span class="textSplitLoad">$&</span>'));
				        }
				    });
				    $(document).ready(function(){
				        splitLength = $('.textSplitLoad').length;
				        setElm.find('.textSplitLoad').each(function(i){
				            splitThis = $(this);
				            splitTxt = splitThis.text();
				            splitThis.delay(i*(delaySpeed)).css({display:'inline-block',opacity:'0'}).animate({opacity:'1'},fadeSpeed);
				        });
				        setTimeout(function(){
				                setElm.html(setText);
				        },splitLength*delaySpeed+fadeSpeed);
				        setTimeout(function(){
				        	$("#hukidashi").on("click",function(){
						    	j = j+1;
						    	huki(j);
					        });
					    },splitLength*delaySpeed);
				    });
				}
			//スキップ処理
			//ボタンエフェクト
		</script>
	</head>
	<body>
		<header>
			<?php require_once "header.php"; ?>
		</header>
		<main>
			<div id="game">
				<!--オープニング-->
				<div id="replayOpning">
					<div id="gameBackBlack"></div>
					<img src="images/logo.png" id="gameLogo">
					<div id="gameImg"></div>
					<div id="hukidashi">
						<div id="talker">

						<!--/#talker--></div>
						<div id="gameArticle">
							
						<!--/#gameArticle--></div>
					<!--/#hukidashi--></div>
					<!--オープニングスキップするかしないか-->
					<img src="images/btn_skip_off.png" id="skip">
					<!--次回から表示するか-->
					<div id="next">
						<a href="index.php"><img src="images/btn_return.png"><img src="images/title_reopening.png"></a>
						<form action="index.php">
							<input type="checkbox" id="checkbox"><label for="checkbox"><img src="images/title_nextskip.png"></label>
						</form>
					</div>
				</div>
				<!--ログインフォーム-->
				<div id="regi"></div>
				<div id="loginForm">
					<img src="images/title_login.png">
					<form action="index.php" method="POST">
						<img src="images/login_add.png"><input type="email" name="userId"><br>
						<img src="images/login_pass.png"><input type="password" name="password"><br>
						<input type="button">
					</form>
				</div>
				<div>
					<!--新規会員登録-->		
					<a href="#"><img src=""></a>
				</div>
			<!--/#game--></div>
		</main>
		<footer>
			<?php require_once "footer.php"; ?>
		</footer>
	</body>
</html>
