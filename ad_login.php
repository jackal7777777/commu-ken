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
	</head>
	<body id="admin">
		<header>
			<?php require_once "header.php"; ?>
		</header>
		<main>
			<!--画像：ゲーム画面-->
			<div id="game">
				<div id="ad_title"><p>管理者画面</p></div>
				<div id="ad_login">
					<div id="ad_log_title"><p>管理者ログイン</p></div>
					<form>
						<img src="images/login_add.png"><input type="email"><br>
						<img src="images/login_pass.png"><input type="password"><br>
						<input type="submit" value="">
					</form>
				</div>
			<!--/#game--></div>
		</main>
		<footer>
			<?php require_once "footer.php"; ?>
		</footer>
	</body>
</html>
