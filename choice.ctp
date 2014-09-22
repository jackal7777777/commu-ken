<?php

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/minHeader.css">
		<title>こみゅけん！-kommu-ken!-</title>
		<script src="js/jquery-2.1.1.min.js"></script>
		<script>
			//スライド
			//選択
			//ボタンエフェクト
		</script>
	</head>
	<body>
		<header>
			<?php require_once "header.php"; ?>
		</header>
		<main>
			<!--ゲーム画面-->
			<div id="game">
				<div id="selectLeft"><img src="images/btn_prev.png"></div>
				<div id="select">
					<div id="selectSlide">
						<img src="images/scenario_01_off.jpg" class="scenario" id="scenario1">
						<img src="images/stage_01_off.jpg" class="stage" id="stage1">
						<img src="images/stage_02_off.jpg" class="stage" id="stage2">
						<img src="images/stage_03_off.jpg" class="stage" id="stage3">
					</div>
				</div>
				<div id="selectRight"><img src="images/btn_next.png"></div>
			</div>
		</main>
		<footer>
			<?php require_once "footer.php"; ?>
		</footer>
		<script>
			$(function(){
				var index = "";
				var count = $(".scenario").length;
				var left = 0;
				var right = count;
				var px = 480;
				$(".stage").hide(0);
				var select = new Array();
				//選択ボタン
				$("#selectLeft").click(function(){
					if( left < count-1 ){
						$("#selectSlide").animate({
							"left":"-=480px"
						},500);
						left += 1;
						right -= 1;
					}
				});
				$("#selectRight").click(function(){
					if( right < count ){
						$("#selectSlide").animate({
							"left":"+=480px"
						},500);
						right += 1;
						left -= 1;
					}
				});
				//マウスオーバー:シナリオ
				$(".scenario").mouseover(function(){
					index = $(".scenario").index(this);
					$(".scenario").eq(index).attr({"src":"images/scenario_0"+(index+1)+"_on.jpg"});
					$(".scenario").mouseout(function(){
						index = $(".scenario").index(this);
						$(".scenario").eq(index).attr({"src":"images/scenario_0"+(index+1)+"_off.jpg"});
					});
				});
				//マウスオーバー:ステージ
				$(".stage").mouseover(function(){
					index = $(".stage").index(this);
					$(".stage").eq(index).attr({"src":"images/stage_0"+(index+1)+"_on.jpg"});
					$(".stage").mouseout(function(){
						index = $(".stage").index(this);
						$(".stage").eq(index).attr({"src":"images/stage_0"+(index+1)+"_off.jpg"});
					});
				});
				//選択されたら配列にプッシュ
				$(".scenario").click(function(){
					var index = $(".scenario").index(this);
					//alert(index);
					var kari = "sce"+(index+1);
					//シナリオ選択を非表示
					$(".scenario").fadeOut(500);
					//位置を初期化
					$("#selectSlide").animate({
						"left":"0px"
					},0);
					//ステージを表示
					$(".stage").delay(500).fadeIn(500);
					count = $(".stage").length;
					alert(count);
					left = 0;
					right = count;
					$(".stage").click(function(){
						index = $(".stage").index(this);
						kari = kari + ("sta"+(index+1));
						alert(kari);
						select.push(kari);
						window.location.href = '/git/kokoroiki/game.php?scenario='+select[0];
					});
				});
			});
		</script>
	</body>
</html>
