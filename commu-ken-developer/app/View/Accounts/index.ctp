<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');

echo $this->Html->css('minHeader');

?>
<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>

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
<!--		<form action="/accounts/login" method="POST">
			<img src="images/login_add.png"><input type="email" name="userId"><br>
			<img src="images/login_pass.png"><input type="password" name="password"><br>
			<input type="submit" value="ログイン">
		</form>
-->

<?php 

	

	if (isset($error)) {
		echo $error;
	}

	echo $this->Form->create(null, array('url' => '/accounts/login',
										'inputDefaults' => array(
    										    'label' => false,
        										'div' => false))
	);
	echo $this->Html->image('login_add.png');
	echo $this->Form->input('id', array('type'=>'email'))."<br>";
	echo $this->Html->image('login_pass.png');
	echo $this->Form->input('pass', array('type'=>'password'));
	echo $this->Form->end('ログイン');

	echo "<p>".$this->Html->link('会員登録', array('controller' => 'accounts', 'action' => 'add'))."</p>";
?>
	</div>
	<div>
		<!--新規会員登録-->		
		<a href="#"><img src=""></a>
	</div>
<!--/#game--></div>
