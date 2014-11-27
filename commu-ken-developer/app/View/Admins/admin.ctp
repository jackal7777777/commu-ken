<!--画像：ゲーム画面-->
<div id="game">
	<div id="adm">
		<div id="ana"><a href="http://www.google.com/intl/ja_jp/analytics/" target="_blank"></a></div>
		<div id="log"></div>
		<div id="tool"><a href="https://www.google.com/webmasters/tools/" target="_blank"></a></div>
		<div id="enq"><?= $this->Html->link(null ,array('controller' => 'admins', 'action' => 'download_csv', 1)) ?></div>
		<div id="info"><?= $this->Html->link(null ,array('controller' => 'admins', 'action' => 'download_csv', 2)) ?></div>
		<div id="ans"><?= $this->Html->link(null ,array('controller' => 'admins', 'action' => 'download_csv', 3)) ?></div>
	</div>
<!--/#game--></div>