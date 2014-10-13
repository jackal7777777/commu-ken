<!--画像：ゲーム画面-->
<div id="game">
	<div id="ad_title"><p>管理者画面</p></div>
	<div id="adm">
		<div id="ana"><a href="http://www.google.com/intl/ja_jp/analytics/" target="_blank"></a></div>
		<div id="log"></div>
		<div id="ans"><a href="https://accounts.google.com/" target="_blank"></a></div>
		<div id="enq"><?= $this->Html->link(null ,array('controller' => 'admins', 'action' => 'download_csv', 1)) ?></div>
		<div id="info"><?= $this->Html->link(null ,array('controller' => 'admins', 'action' => 'download_csv', 2)) ?></div>
		<div id="tool"><?= $this->Html->link(null ,array('controller' => 'admins', 'action' => 'download_csv', 3)) ?></div>
	</div>
<!--/#game--></div>