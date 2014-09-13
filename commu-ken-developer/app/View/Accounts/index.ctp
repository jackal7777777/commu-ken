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

//css出力
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
	<?= $this->Html->image('btn_skip_off.png', array('id' => 'skip')) ?>
	<?= $this->Html->link($this->Html->image('btn_return.png').$this->Html->image('title_reopening.png'), array('controller' => 'accounts', 'action' => 'index'),array('escape'=>false)) ?>
	<?php
	echo $this->Form->create(null, array('url' => '/accounts/login',
										'inputDefaults' => array(
    										    'label' => false,
        										'div' => false))
	);

	//スキップ確認チェックボックス生成
	echo $this->Form->input('skip',
		array('type' => 'checkbox',
				'label' => $this->Html->image('title_nextskip.png')));
				//ラベルに画像を指定


	?>
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
		<?= $this->Html->image('title_login.png').'<br>' ?>
<?php 

	

	if (isset($error)) {
		echo $error;
	}

	
	echo $this->Html->image('login_add.png');
	echo $this->Form->input('id', array('type'=>'email'))."<br>";
	echo $this->Html->image('login_pass.png');
	echo $this->Form->input('pass', array('type'=>'password'));
	echo $this->Form->end('ログイン');
?>
	</div>
	<div>
		<!--新規会員登録-->		
		<a href="#"><img src=""></a>
	</div>
<!--/#game--></div>
