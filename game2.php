<?php

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<kinl rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/minHeader.css">
		<title>こみゅけん！-kommu-ken!-</title>
		<script src="js/jquery-2.1.1.min.js"></script>
		<script>
			//シーン
			var selectStage = new Array(); 
				selectStage['background'] = 'background_classroom.jpg';
				selectStage['character'] = 'friend.png';
				selectStage['name'] = '梅野君';
				selectStage['startText'] = '高校２年の１学期。新しいクラス、周りは知らない人ばかり、今年こそ友達を作りたい！　隣の席になった梅野くんが、何だかすごくいい人そう。友だちになりたいな…';
				selectStage['eventTitle'] = 'とりあえず何か話題を探してみよう！';
				selectStage['say1'] = 'よっ！隣の席になったのも運命だよな。';
				selectStage['say2'] = 'あのさ、ぼく機能髪切ったんだけど気付いた？';
				selectStage['say3'] = 'やあ、元気？';
				selectStage['say4'] = '梅野君の腕時計カッコいいね';
				selectStage['return1'] = '「あ、そういう考え方もあるかもね・・・」';
				selectStage['return2'] = '「え、気付かなかった！ごめん・・・」';
				selectStage['return3'] = '「う、うん、元気だよ」';
				selectStage['return4'] = '「あ、そう？実はさ、これ高校入学祝いで買ってもらったんだ！あはは」';
				selectStage['returnImg1'] = 'friend_aiso.png';
				selectStage['returnImg2'] = 'friend_bikkuri.png';
				selectStage['returnImg3'] = 'friend_d_bikkuri.png';
				selectStage['returnImg4'] = 'friend_egao.png';
				selectStage['support0'] = '友達になりたいのにどうして何もしないの～？！ひとりぼっちでご飯は嫌なんでしょ！とりあえずなにか自分からアクション起こさなきゃ！';
				selectStage['support1'] = 'お兄ちゃんって、意外とロマンチストなのね・・・。でも、いきなり夢とか運命とか大きな話（抽象的な話）を出すのはリスクもあって、あんまりやりすぎると厨二病の人かなーって思われて、お兄ちゃんに友達が寄ってこなくなっちゃうのが心配ね・・・';
				selectStage['support2'] = '梅野君に向かって恋人同士みたいな会話してどうするのよ～！！！話しかけること自体はいいけど、クラス替えしたばっかりなんだから、梅野君がお兄ちゃんの前髪をチェックしてるはずないでしょ！';
				selectStage['support3'] = 'うーん、ちょっと話が漠然としすぎね・・・・・・短くて簡単な言葉で話しかけたのはよかったわ。相手が応えやすいし。でも、「元気かどうか」っていうぼんやりした話題だけだと、話が広がりにくくない？';
				selectStage['support4'] = 'なんかいい雰囲気で会話が続きそう！相手の気持ちとかは身近だし変に思われないで話しかけられるからいいわよね。しかもカッコいいって言われたらうれしくてもっと話したくなるわ！';
				selectStage['supportImg0'] = 'sister_d_okoru.png';
				selectStage['supportImg1'] = 'sister.png';
				selectStage['supportImg2'] = 'sister_zitome.png';
				selectStage['supportImg3'] = 'sister_komaru.png';
				selectStage['supportImg4'] = 'sister_warau.png';
				selectStage['summary'] = '持ち物とか好きなゲームとか、相手が興味あることを聞いてみたら相手も話しやすいわね！いいのよ！自分のことを話すのはそれからでも遅くないわ。';
				selectStage['summaryImg'] = 'sister.png';

			var katuyatyan = 1;//下にもう一個あるから、そっちを動的に変更してね
			var index = 0;
			var act = "";
			var l = 1;
			var ll = 1;
			//文字数に応じて配列変更
			var moji = 38;
			var con1 = 0;
			var con2 = 1;
			var con3 = 1;
			var len = 0;
			var m = 0;
			/*
				配列を生成
				例）support1-1-1
				※サポート1の1要素目の1行目（38文字以上の場合、2行目が生まれる）
			*/
			for(con1=0;con1<=4;con1++){
				katuyatyan = 1;//こっちを動的に変更してね
				for(con3=1;con3<=katuyatyan;con3++){
					len = selectStage['support'+con1].length;
					for(con2 = 1;con2 <= ((len / moji)+1);con2++){
						selectStage['support'+con1+"-"+con3+"-"+con2] = selectStage['support'+con1].substr((moji*con2)-moji,moji);
						selectStage['supportImg'+con1+"-"+con3+"-"+con2] = selectStage['supportImg'+con1];
						console.log(selectStage['support'+con1+"-"+con3+"-"+con2]);
						console.log(selectStage['supportImg'+con1+"-"+con3+"-"+con2]);
					}
				}
				selectStage['supLen'+con1] = (len/moji)+1;
				console.log(selectStage['supLen'+con1]);
			}
			/*
				配列を生成
				例）summary1
				※サマリー1要素目の1行目（38文字以上の場合、2行目が生まれる）
			*/
			for(con1=1;con1<=katuyatyan;con1++){
				len = selectStage['summary'].length;
				for(con2 = 1;con2 <= ((len/moji)+1);con2++){
					selectStage['summary'+con1+"-"+con2] = selectStage['summary'].substr((moji*con2)-moji,moji);
					selectStage['summaryImg'+con1+"-"+con2] = selectStage['summaryImg'];
					console.log(selectStage['summary'+con1+"-"+con2]);
					console.log(selectStage['summaryImg'+con1+"-"+con2]);
				}
				selectStage['sumLen'] = (len/moji)+1;
				console.log(selectStage['sumLen']);
			}
		
			var save = new Array();
			$(function(){
				//ゲーム要素を隠す
				$("#hukidashi").fadeOut(0);
				$("#timer").fadeOut(0);
				$("#selectBox").fadeOut(0);
				$("#event").fadeOut(0);
				$("#summaryTitle").fadeOut(0);
				//ソーシャル要素を隠す
				$("#social").fadeOut(0);
				var url = location.href;
				var sce = url.search(/sce/);
				sce = "sce1sta1";
				//alert(sce);
				//ゲーム画面の背景画像描画
				$("#gameBack").css({"background":"url(images/"+selectStage['background']+")"});
				//対象キャラクター表示
				$("<img>",{
					"id":"img",
					"src":"images/"+selectStage['character']
				}).appendTo("#gameImg");
				//導入文章表示
				setTimeout(function(){
					$("<p>",{
						"id":"text",
						"class":"split",
						"text":selectStage['startText'],
						"css":{
								"line-height":"30px",
								"margin":"0 auto",
								"color":"#fff",
								"width":"600px",
								"height":"100px",
								"padding-top":"250px",
								"font-size":"1.6rem"
						}
					}).appendTo("#gameBackBlack");
					sp();
				},500);
				$("#gameBackBlack").click(function(){
					$("#text").remove();
					$("#gameBackBlack").off();
					$("#timer").fadeIn(500);
					$("#selectBox").delay(500).slideDown(500);
					$("#event").fadeIn(500);
					countDown();
					//イベント名追記
					$("#eventTitle").text(selectStage['eventTitle']);
					//選択肢表示
					for(var i=1;i<5;i++){
						$("<div>",{
							"id":"select"+i,
							"class":"ans",
							"text":selectStage["say"+i],
							"css":{
								"height":"50px",
								"width":"600px",
								"position":"absolute",
								"top":(70*(i-1))+"px",
								"left":"0",
								"background":"url(images/bg_choice_off.png)",
								"text-align":"center",
								"line-height":"50px",
								"font-size":"1.6rem"
							}
						}).appendTo("#selectBox");
					}
					//選択肢マウスオーバー/アウト
					$("#selectBox").children().mouseover(function(){
						//alert("a");
						$(this).css({"background":"url(images/bg_choice_on.png)"});
						$(this).mouseout(function(){
							$(this).css({"background":"url(images/bg_choice_off.png)"});
						});
						
					});
					//相手の反応
					$("#selectBox").children().click(function(){
						//タイマーを止める
						stopTimer();
						index = $(this).index();
						save.push(index+1);
						$("#selectBox").fadeOut(200);
						$("#gameBackBlack").fadeOut(200);
						$("#eventTitle").fadeOut(200);
						$("#timer").fadeOut(200);
						$("#hukidashi").fadeIn(500);
						act = "return";
						text(index,act);
					});
					//いもうとの返し
					$("#hukidashi").click(function(){
						$("#hukidashi").off();
						$("#gameArticle p").remove();
						$("#event").fadeOut(0);
						$("#gameBackBlack").fadeIn(500).fadeOut(500);
						$("#summaryTitle").fadeIn(500);
						act = "support";
						text(index,act);
						$("#hukidashi").click(function(){
							text(index,act);
						});
					});
				});
			});
				//文章を上に流す
				function huki(l){
					//テキストを一行上に流す
					$("#gameArticle").animate({"top":"-"+41*(l-2)+"px"});
				}
				//文章、画像、話し手名入れ替え
				/*function change(j){
					$("#talker").text(startText['name'+j]);
					$("<p>",{
						"id":"p"+j,
						"class":"split",
						"text":startText['text'+j]
					}).appendTo("#gameArticle");
					sp();
					//キャラクター表示切替
					$("#img").attr("src","images/"+selectStage[act+"Img"+(index+1)]);
				}*/
				//返し
				function text(index,act){
					//alert(act);
					//相手の反応
					if(act == 'return'){
						//キャラクター表示切替
						$("#img").attr("src","images/"+selectStage[act+"Img"+(index+1)]);
						//話し手切り替え
						$("#talker").text(selectStage['name']);
						//文章挿入
						$("<p>",{
							"class":"split",
							"text":selectStage[act+(index+1)]
						}).appendTo("#gameArticle");
						sp();
						//すでに追加されたテキストのスプリットを削除
						$(".split").first().removeClass("split");
					//妹の返し
					}else if(act == 'support'){
						var supLen = selectStage['supLen'+(index+1)];
						if(ll<=katuyatyan){
							if(l <= supLen){
								//キャラクター表示切替
								$("#img").attr("src","images/"+selectStage[act+"Img"+(index+1)+"-"+ll+"-"+l]);
								//話し手切り替え
								$("#talker").text('つむぎ');
								if(l >= 3){
									huki(l);
									m = l;
								}
								//文章挿入
								$("<p>",{
									"class":"split",
									"text":selectStage[act+(index+1)+"-"+ll+"-"+l]
								}).appendTo("#gameArticle");
								sp();
								//すでに追加されたテキストのスプリットを削除
								$(".split").first().removeClass("split");
								l = l+1;
							}
							if(l > supLen){
								l = 1;
								ll = 1;
								act = 'summary';
								//alert("A");
								$("#hukidashi").off();
								$("#hukidashi").click(function(){
									text(index,act);
								});
							}
						}
					}else if(act == 'summary'){
						//alert("F");
						var sumLen = selectStage['sumLen'];
						//alert(sumLen);
							if(l <= sumLen){
								//alert("F");
								//キャラクター表示切替
								$("#img").attr("src","images/"+selectStage[act+"Img"+"1-"+l]);
								//話し手切り替え
								$("#talker").text('つむぎ');
								huki(l+m);
								//文章挿入
								$("<p>",{
									"class":"split",
									"text":selectStage[act+"1-"+l]
								}).appendTo("#gameArticle");
								sp();
								//すでに追加されたテキストのスプリットを削除
								$(".split").first().removeClass("split");
								l = l+1;
							}else{
								$("#hukidashi").off();
								$("#social").fadeIn(500);
							}
					}
					//文章下の三角
					$("<div>",{
						"id":"san",
						"css":{
							"height":"0px",
							"width":"0px",
							"border":"solid 20px transparent",
							"border-top":"solid 20px #aaa",
							"position":"absolute",
							"top":"75px",
							"right":"20px",
							"z-index":"3"
						}
					}).appendTo("#hukidashi");
				}
		
//文章をテキスト入力のように表示する
			function sp(){
				//	$("#hukidashi").off();
				
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
			        /*if(act != 'return'){
			        	setTimeout(function(){
				        	$("#hukidashi").on("click",function(){
						    	l = l+1;
						    	huki(index,act,l);

					        });
					    },splitLength*delaySpeed);
			        }*/
			    });
			}
			//タイマー
			function countDown(){
				var sec = 15;
				Timer = setInterval(function(){
					if(sec>0){
						sec = sec-1;
						$("#count").text(sec);
					}else{
						for(var j=1;j<5;j++){
							$("#select"+j).off();
							$("<p>",{
								"text":"時間切れ！！",
								"class":"ans",
								"css":{
									"height":"50px",
									"width":"300px",
									"font-size":"50px",
									"position":"absolute",
									"top":"240px",
									"left":"320px",
									"z-index":"9"
								}
							}).appendTo("#game");
						}
					}
				},1000);
			}
			function stopTimer(){
				clearInterval(Timer);
			}
		</script>
	</head>
	<body>
		<header>
			<?php require_once "header.php"; ?>
		</header>
		<main>
			<!--ゲーム画面-->
			<div id="game">
				<div id="gameBack">
					<!--ゲーム要素-->
					<!--キャラクター表示位置-->
					<div id="gameImg"></div>
					<!--吹き出し-->
					<div id="hukidashi">
						<!--しゃべり手-->
						<div id="talker">
						<!--/#talker--></div>
						<!--文章-->
						<div id="gameArticle">
						<!--/#gameArticle--></div>
					<!--/#hukidashi--></div>
					<!--背景暗くする用-->
					<div id="gameBackBlack"></div>
					<!--画像：タイマー-->
					<div id="timer">
						<p>15</p>
					</div>
					<!--画像：イベント発生-->
					<div id="event"></div>
					<!--画像：イベント名-->
					<div id="eventTitle"></div>
					<!--選択肢用の枠-->
					<div id="selectBox"></div>
					<!--画像：まとめ-->
					<div id="summaryTitle"></div>
				</div>
				<!--ゲーム要素終了-->

				<!--ソーシャル＆アンケート-->
				<div id="social">
					<img src="images/title_enquete.png" id="socialTitle"><br>
					<img src="images/title_sns.png" id="socialSTitle"><br>
					<div id="socialBtn">
						<img src="images/btn_tw_off.png" class="socialBtn">
						<img src="images/btn_fb_off.png" class="socialBtn">
						<img src="images/btn_gl_off.png" class="socialBtn">
						<img src="images/btn_ln_off.png" class="socialBtn">
					</div>
					<form>
						<textarea></textarea><br>
						<input type="button" id="btn_yes">
						<input type="button" id="btn_no">
					</form>
					<a href="choice.ctp"><img src="images/btn_rescenario.png"></a>
				</div>
				<!--ソーシャル＆アンケート終了-->
			</div>
		</main>
		<footer>
			<?php require_once "footer.php"; ?>
		</footer>
	</body>
</html>
