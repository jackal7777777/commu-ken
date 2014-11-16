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
	<body id="er">
		<header>
			<?php require_once "header.php"; ?>
		</header>
		<main>
			<!--画像：ゲーム画面-->
			<div id="game">
				<div id="erA"><img src="images/title_error_server.png"></div>
				<div id="erB"><img src="images/char_error.png"></div>
				<div id="erC"><img src="images/text_error_server.png"></div>
				<div id="erD"><a href="index.php"><img src="images/btn_error_off.png"></a></div>
			<!--/#game--></div>
		</main>
		<footer>
			<?php require_once "footer.php"; ?>
		</footer>
	</body>
</html>
