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
			var selectStage = {};
			selectStage['sce1sta1'] = {
				background:'/background_classroom.jpg',
				character:'/friend.png',
				name:'梅野君',
				startText:'高校２年の１学期。新しいクラス、周りは知らない人ばかり、今年こそ友達を作りたい！　隣の席になった梅野くんが、何だかすごくいい人そう。友だちになりたいな…',
				eventTitle:'とりあえず何か話題を探してみよう！',
				say1:'よっ！隣の席になったのも運命だよな。',
				say2:'あのさ、ぼく機能髪切ったんだけど気付いた？',
				say3:'やあ、元気？',
				say4:'梅野君の腕時計カッコいいね',
				return1:'「あ、そういう考え方もあるかもね・・・」',
				return2:'「え、気付かなかった！ごめん・・・」',
				return3:'「う、うん、元気だよ」',
				return4:'「あ、そう？実はさ、これ高校入学祝いで買ってもらったんだ！あはは」',
				returnImg1:'friend_aiso.png',
				returnImg2:'friend_bikkuri.png',
				returnImg3:'friend_d_bikkuri.png',
				returnImg4:'friend_egao.png',
				support0:'友達になりたいのにどうして何もしないの～？！ひとりぼっちでご飯は嫌なんでしょ！とりあえずなにか自分からアクション起こさなきゃ！',
				support1:'お兄ちゃんって、意外とロマンチストなのね・・・。でも、いきなり夢とか運命とか大きな話（抽象的な話）を出すのはリスクもあって、あんまりやりすぎると厨二病の人かなーって思われて、お兄ちゃんに友達が寄ってこなくなっちゃうのが心配ね・・・',
				support2:'梅野君に向かって恋人同士みたいな会話してどうするのよ～！！！話しかけること自体はいいけど、クラス替えしたばっかりなんだから、梅野君がお兄ちゃんの前髪をチェックしてるはずないでしょ！',
				support3:'うーん、ちょっと話が漠然としすぎね・・・・・・短くて簡単な言葉で話しかけたのはよかったわ。相手が応えやすいし。でも、「元気かどうか」っていうぼんやりした話題だけだと、話が広がりにくくない？',
				support4:'なんかいい雰囲気で会話が続きそう！相手の気持ちとかは身近だし変に思われないで話しかけられるからいいわよね。しかもカッコいいって言われたらうれしくてもっと話したくなるわ！',
				supportImg0:'sister_d_okoru.png',
				supportImg1:'sister.png',
				supportImg2:'sister_zitome.png',
				supportImg3:'sister_komaru.png',
				supportImg4:'sister_warau.png',
				summary:'持ち物とか好きなゲームとか、相手が興味あることを聞いてみたら相手も話しやすいわね！いいのよ！自分のことを話すのはそれからでも遅くないわ。'
			};
			var save = new Array();
			$(function(){
				$("#social").fadeOut(0);
				var url = location.href;
				var sce = url.search(/sce/);
				sce = "sce1sta1";
				//alert(sce);
				//ゲーム画面の背景画像描画
				$("<div>",{
					"id":"gameBack",
					"css":{
							"height":"525px",
							"width":"940px",
							"background":"url('images"+selectStage[sce]['background']+"')",
							"position":"absolute",
							"top":"10px",
							"left":"10px",
							"z-index":"1",
							"background-size":"cover"
						}
				}).appendTo("#game");
				//対象キャラクター表示
				$("<img>",{
					"class":"chara",
					"src":"images"+selectStage[sce]['character'],
					"css":{
						"height":"450px",
						"width":"auto",
						"position":"absolute",
						"bottom":"0",
						"left":"300px",
						"z-index":"2"
					}
				}).appendTo("#gameBack");
				//ゲーム画面を暗くする用のdiv
				$("<div>",{
					"id":"gameBackBlack",
					"css":{
							"height":"100%",
							"width":"100%",
							"background":"rgba(0,0,0,0.70)",
							"position":"absolute",
							"top":"0px",
							"left":"0px",
							"z-index":"3"
						}
				}).appendTo("#gameBack");
				//導入文章表示
				setTimeout(function(){
					$("<p>",{
						"id":"text",
						"class":"split",
						"text":selectStage[sce]['startText'],
						"css":{
								"line-height":"30px",
								"margin":"0 auto",
								"color":"#fff",
								"width":"600px",
								"height":"100px",
								"padding-top":"250px"
						}
					}).appendTo("#gameBackBlack");
					sp();
				},500);
				$("#gameBackBlack").click(function(){
					$("#text").remove();
					$("#gameBackBlack").off();
					//タイマー
					$("<div>",{
						"id":"timer",
						"css":{
							"height":"125px",
							"width":"125px",
							"position":"absolute",
							"top":"10px",
							"left":"10px",
							"z-index":"3"
						}
					}).appendTo("#gameBack");
					$("<img>",{
						"id":"timerImg",
						"src":"images/bg_timer.png"
					}).appendTo("#timer");
					$("<p>",{
						"id":"count",
						"text":"15",
						"css":{
							"font-size":"50px",
							"position":"absolute",
							"top":"38px",
							"left":"40px",
							"color":"red",
							"z-index":"5"
						}
					}).appendTo("#timer");
					countDown();
					//イベント発生
					$("<div>",{
						"id":"event",
						"css":{
							"height":"45px",
							"width":"240px",
							"position":"absolute",
							"top":"10px",
							"left":"340px",
							"z-index":"3"
						}
					}).appendTo("#gameBack");
					$("<img>",{
						"id":"eventImg",
						"src":"images/title_event.png"
					}).appendTo("#event");
					//イベント名表示
					$("<div>",{
						"id":"eventTitle",
						"text":selectStage[sce]['eventTitle'],
						"css":{
							"height":"40px",
							"width":"500px",
							"position":"absolute",
							"top":"100px",
							"left":"220px",
							"z-index":"3",
							"text-align":"center",
							"color":"#fff"
						}
					}).appendTo("#gameBack");
					//選択肢表示
					$("<div>",{
						"id":"selectBox",
						"css":{
							"height":"400px",
							"width":"600px",
							"position":"absolute",
							"top":"160px",
							"left":"180px",
							"z-index":"3"
						}
					}).appendTo("#gameBack");
					for(var i=1;i<5;i++){
						$("<div>",{
							"id":"select"+i,
							"text":selectStage[sce]["say"+i],
							"css":{
								"height":"70px",
								"width":"600px",
								"border":"solid 1px #000",
								"border-radius":"10px",
								"position":"absolute",
								"top":(80*(i-1))+"px",
								"left":"0",
								"background":"#e6fbff",
								"text-align":"center",
								"line-height":"70px"
							}
						}).appendTo("#selectBox");
					}
					//選択肢マウスオーバー/アウト
					$("#selectBox").children().mouseover(function(){
						//alert("a");
						$(this).css({"border":"solid 1px #f00"});
						$(this).mouseout(function(){
							$(this).css({"border":"solid 1px #000"});
						});
						
					});
					//選択肢選択
					$("#selectBox div").click(function(){
						var index = $(this).index();
						save.push(index+1);
						$("#selectBox").fadeOut(200);
						$("#gameBackBlack").fadeOut(200);
						$("#eventTitle").fadeOut(200);
						$("#timer").fadeOut(200);
						$("p#text2").text("");
						var act = "return";
						text(index,act);
						//文章再生が終わったら いもうとの返し
						$("#hukidashi").click(function(){
							$("#event").fadeOut(0);
							$("#gameBackBlack").fadeIn(500);
							$("#gameBackBlack").delay(500).fadeOut(500);
							$("<div>",{
								"id":"summaryTitle",
								"css":{
									"height":"125px",
									"width":"125px",
									"position":"absolute",
									"top":"10px",
									"left":"10px",
									"z-index":"3"
								}
							}).appendTo("#gameBack");
							$("<img>",{
								"id":"summaryImg",
								"src":"images/title_summary.png"
							}).appendTo("#summaryTitle");
							$(".chara").fadeOut(0);
							$(".chara").attr("src","images/"+selectStage[sce]["supportImg"+(index+1)]);
							$(".chara").delay(1000).fadeIn(500);
							setTimeout(function(){
								$("p#text2").text(selectStage[sce]["support"+(index+1)]),
								sp()},1500);
							$("#name").text("つむぎ");
							$("#hukidashi").off();
							//まとめ
							$("#hukidashi").click(function(){
								//$("#gameBackBlack").fadeIn(200);
								//$("#name").text("アドバイス");
								$("p#text2").text(selectStage[sce]["summary"]);
								sp();
								$("#hukidashi").off();
								$("#hukidashi").click(function(){
									$("#social").fadeIn(500);
									$("#hukidashi").off();
								});
							});
						});
					});
					//感想

				});
				//最初
				function text(index, act){
					//alert(act);
					//キャラクター表示切替
					$(".chara").attr("src","images/"+selectStage[sce][act+"Img"+(index+1)]);
					//吹き出し生成
					$("<div>",{
						"id":"hukidashi",
						"css":{
								"height":"100px",
								"width": "860px",
								"background": "rgba(255,255,255,0.50)",
								"border-radius":"10px",
								"position": "absolute",
								"top":"400px",
								"left":"45px",
								"z-index":"2"
						}
					}).appendTo("#game");
					$("<div>",{
						"id":"name",
						"text":selectStage[sce]["name"],
						"css":{
								"height":"40px",
								"width":"100px",
								"position":"absolute",
								"top":"30px",
								"left":"35px",
								"line-height":"40px"
						}
					}).appendTo("#hukidashi");
					//文章用
					$("<div>",{
							"id":"article",
							"css":{
									"height":"60px",
									"width":"720px",
									"padding":"20px 10px",
									"position":"absolute",
									"top":"0",
									"left":"120px"
							}
					}).appendTo("#hukidashi");
					//文章表示
					$("<p>",{
						"id":"text2",
						"class":"split",
						"text":selectStage[sce][act+(index+1)],
						"css":{
								"line-height":"30px"
						}
					}).appendTo("#article");
					sp();
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

				//文章。キャラ。背景を呼び出しに変更する
				

				//$("#game").append("<img src='images"+background[sce]+"'>");
			});
//文章をテキスト入力のように表示する
function sp(){
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
    });
}

//タイマー
function countDown(){
	var sec = 15;
	setInterval(function(){
		if(sec>0){
			sec = sec-1;
			$("#count").text(sec);
		}else{
			for(var j=1;j<5;j++){
				$("#select"+j).off();
				$("<p>",{
					"text":"時間切れ！！",
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

		</script>
	</head>
	<body>
		<header>
			<?php require_once "header.php"; ?>
		</header>
		<main>
			<!--ゲーム画面-->
			<div id="game">
				
			</div>
		</main>
		<footer>
			<?php require_once "footer.php"; ?>
		</footer>
	</body>
</html>
