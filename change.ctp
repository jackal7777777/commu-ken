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
			//ボタンエフェクト
		</script>
	</head>
	<body>
		<header>
			<?php require_once "header.php"; ?>
		</header>
		<main>
			<!--ログインフォーム-->
			<div id="add">
				<h2><img src="images/title_modi.png" alt="会員登録変更"></h2>
				<form action="add.php" method="POST" id="info">
					<img src="images/title_addr.png">
					<input type="email" name="userId"><br>
					<img src="images/title_pass.png">
					<input type="password" name="password"><br>
					<img src="images/title_sex.png">
					<select name="sex">
						<option value="mon">男</option>
						<option value="women">女</option>
					</select><br>
					<img src="images/title_date.png">
					<select name="yaer">
						<option value="1">1</option>
					</select>
					<select name="month">
						<option value="1">1</option>
					</select>
					<select name="date">
						<option value="1">1</option>
					</select><br>
					<img src="images/title_que.png">
					<select name="question" class="que" value="">
						<option>生まれた町は？</option>
						<option>通っていた幼稚園または保育園の名前は？</option>
						<option>一番好きなアーティストは？</option>
						<option>一番好きな映画は？</option>
						<option>嫌いな食べ物は？</option>
					</select><br>
					<img src="images/title_ans.png">
					<input type="text"><br>
					<input type="submit" id="change" value="">
				</form>
			</div>
		</main>
		<footer>
			<?php require_once "footer.php"; ?>
		</footer>
	</body>
</html>
