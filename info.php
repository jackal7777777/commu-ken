<?php

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/header.css">
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
			<!--免責事項-->
			<section>
				<article>
					<h2><img src="images/title_form.png" alt="お問合せ"></h2>
					<form action="#" method="POST" id="info">
						<img src="images/title_addr.png"><input type="email" name="mail"><br>
						<img src="images/title_title.png"><input type="text"><br>
						<img src="images/title_con.png"><textarea></textarea><br>
						<input type="button">
					</form>
				</article>
			</section>
		<footer>
			<?php require_once "footer.php"; ?>
		</footer>
	</body>
</html>
