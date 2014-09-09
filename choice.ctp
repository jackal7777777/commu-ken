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
						<img src="images/scenario_01.png" class="scenario">
						<img src="images/scenario_01.png" class="scenario">
						<img src="images/stage_01.png" class="stage1">
						<img src="images/stage_01.png" class="stage1">
						<img src="images/stage_01.png" class="stage1">
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
				$(".stage1").hide(0);
				var select = new Array();
				//選択ボタン
				$("#selectLeft").click(function(){
					$("#selectSlide").animate({
						"left":"+=480px"
					},500);
				});
				$("#selectRight").click(function(){
					$("#selectSlide").animate({
						"left":"-=480px"
					},500);
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
					$(".stage"+(index+1)).delay(500).fadeIn(500);
					$(".stage"+(index+1)).click(function(){
						index = $(".stage1").index(this);
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
