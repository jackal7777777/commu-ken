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
				<div id="adm">
					<div id="ana"></div>
					<div id="log"></div>
					<div id="ans"></div>
					<div id="enq"></div>
					<div id="info"></div>
					<div id="tool"></div>
				</div>
			<!--/#game--></div>
		</main>
		<footer>
			<?php require_once "footer.php"; ?>
		</footer>
	</body>
</html>
