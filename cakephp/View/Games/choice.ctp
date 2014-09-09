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
<?php

echo $this->Html->css('minHeader');
?>
<div id="game">
<p>ログイン成功</p>
<p>ようこそ<?=$user_id?>さん</p>
<p><?=$this->Html->link('ログアウト', array('controller' => 'accounts', 'action' => 'logout'))?></p>
<?php
//debug($scenarioArray);

if (isset($scenarioArray)) {
	foreach ($scenarioArray as $value) {
		foreach ($value as $value2) {
			echo '<button id="scenarioSelect" >'.$value2['scenario_name'].'</button>';
?>
<script type="text/javascript">
	<?php
	// Ajax テスト
	echo $this->Js->get('#scenarioSelect')->event(
	    'click',
	    $this->Js->request(
	        array('action' => 'stage_select', $value2['id']),
	        array('async' => true, 'update' => '#game')
	    ),
	    array('buffer' => false)
	);
	?>
</script>


<?php
		}
	}
}elseif (isset($stageArray) && $stageArray != array()) {
	debug($stageArray);

}else{
	echo $stageArray;
}


?>
</div>
