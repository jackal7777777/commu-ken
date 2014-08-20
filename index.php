<?php

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css"> 
		<title>こみゅけん！-kommu-ken!-</title>
		<script src="js/js.js"></script>
		<script>
			//オープニング再生
			//スキップ処理
			//ボタンエフェクト
		</script>
	</head>
	<body>
		<header>
			<?php 
				//header.php読込
			 ?>
		</header>
		<main>
			<!--オープニングスキップするかしないか-->
			<div id="replayOpning">
				<form action="index.php">
					<input type="checkbox">オープニングを再生しない
				</form>
			</div>
			<!--ログインフォーム-->
			<div id="loginForm">
				<form action="index.php" method="POST">
					<input type="email" name="userId">
					<input type="password" name="password">
					<input type="bottom" value="ログイン">
				</form>
			</div>
			<div>
				<!--新規会員登録-->		
				<a href="#"><img src=""></a>
			</div>
		</main>
		<footer>
			<?php 
				//footer.php読込
			 ?>
		</footer>
	</body>
</html>
