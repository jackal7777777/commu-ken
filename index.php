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
			//オープニング再生
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
				<!--オープニングスキップするかしないか-->
				<div id="replayOpning">
					<img src="images/btn_skip_off.png" id="skip">
					<a href="index.php"><img src="images/btn_return.png"><img src="images/title_reopening.png"></a>
					<form action="index.php">
						<input type="checkbox" id="checkbox"><label for="checkbox"><img src="images/title_nextskip.png"></label>
					</form>
				</div>
				<!--オープニング-->
					<div id="hukidashi">
						<div id="talker">

						<!--/#talker--></dvi>
						<div id="gameArticle">
						<!--/#gameArticle--></div>
					<!--/#hukidashi--></div>
				<!--ログインフォーム-->
				<div id="loginForm">
					<img src="images/title_login.png">
					<form action="index.php" method="POST">
						<img src="images/login_add.png"><input type="email" name="userId"><br>
						<img src="images/login_pass.png"><input type="password" name="password"><br>
						<input type="button" value="ログイン">
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
