<!--画像：ゲーム画面-->
<div id="game">
	<div id="erA"><?= $this->Html->image('title_error_found.png') ?></div>
	<div id="erB"><?= $this->Html->image('char_error.png') ?></div>
	<div id="erC"><?= $this->Html->image('text_error_found.png') ?></div>
	<div id="erD"><?= $this->Html->link($this->Html->image('btn_error_off.png'),array('controller' => 'accounts', 'action' => 'index'),array('escape'=>false)) ?></div>
<!--/#game--></div>








