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
			<!--ログインフォーム-->
			<div id="loginForm">
				<form action="add.php" method="POST">
					ID:
					<input type="email" name="userId">
					Password:
					<input type="password" name="password">
					birth:
					<select name="yaer">
						<option value="1">1</option>
					</select>
					<select name="month">
						<option value="1">1</option>
					</select>
					<select name="date">
						<option value="1">1</option>
					</select>
					Sex:
					<select name="sex">
						<option value="mon">男</option>
						<option value="women">女</option>
					</select>
					<input type="bottom" value="入力確認">
				</form>
			</div>
		</main>
		<footer>
			<?php 
				//footer.php読込
			 ?>
		</footer>
	</body>
</html>
