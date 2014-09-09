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

<!--ゲーム画面-->
			<div id="game">
				<p>ログイン成功</p>
			

<?php 
	$options = array('0' => 'はい','1' => 'いいえ');

	echo 'ようこそ'.$user_id.'さん';

	echo "<p>".$this->Html->link('ログアウト', array('controller' => 'accounts', 'action' => 'logout'))."</p>";
	//リンク生成用の命令。

	/*こっからアンケ入力フォーム*/

	echo "参考になりましたか？";

	echo $this->Form->create('Survey', array(
				'inputDefaults' => array(
					    'label' => false,
						'div' => false))
			);
	echo $this->Form->radio('Survey.survey_flag', $options, array('legend' => false,
													'default' => '0')).'<br>';
	echo $this->Form->input('Survey.survey_text', array('type' => 'textarea'));
	echo $this->Form->hidden('Survey.user_id', array('value' => $user_id));
	echo $this->Form->hidden('Survey.step_id', array('value' => $step_id));
	echo $this->Form->end('送信');
?>
</div>
