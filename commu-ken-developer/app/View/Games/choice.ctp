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
?>
<div id="game">
	<div id="selectLeft"><?= $this->Html->image('btn_prev.png') ?></div>
		<div id="select">
			<div id="selectSlide">

<?php
if (isset($scenarioArray)) {
	foreach ($scenarioArray as $value) {
		foreach ($value as $value2) {//持ってきたシナリオ数分画像出力
			echo $this->Html->image('scenario_0'.$value2['id'].'.png', array('class' => 'scenario'));
?><!--
<script type="text/javascript">//久保が書いた部分(使わないかもだけど一応保存)
	<?php
	// Ajax
	/*
	echo $this->Js->get('#scenarioSelect')->event(
	    'click',
	    $this->Js->request(
	        array('action' => 'stage_select', $value2['id']),
	        array('async' => true, 'update' => '#game')
	    ),
	    array('buffer' => false)
	);*/
	?>
</script> -->
<?php
		}
	}
}
if (isset($stageArray) && $stageArray != array()) {
	//debug($stageArray);
	foreach ($stageArray as $value) {
		foreach ($value as $value2) {//持ってきたステージ数分画像出力
			echo $this->Html->image('stage_0'.$value2['id'].'.png', array('class' => 'stage1'));
		}
	}

}else{
}



?>
			</div>
		</div>
	<div id="selectRight"><?= $this->Html->image('btn_next.png') ?></div>
<script>//淺野さんが書いた部分(少し改変したのでその行には//kって書いときます)
			$(function(){
				$(".stage1").hide(0);
				var select = new Array();
				//選択ボタン
				$("#selectLeft").click(function(){
					$("#selectSlide").animate({
						"left":"+=480px"
					},500);
				});
				$("#selectRight").click(function(){
					$("#selectSlide").animate({
						"left":"-=480px"
					},500);
				});
				//選択されたら配列にプッシュ
				$(".scenario").click(function(){//k
					var index = $(".scenario").index(this);
					//alert(index);
					var kari = "sce"+(index+1);
					var sce = (index+1);//k
					//シナリオ選択を非表示
					$(".scenario").fadeOut(500);
					//位置を初期化
					$("#selectSlide").animate({
						"left":"0px"
					},0);
					//ステージを表示
					$(".stage"+(index+1)).delay(500).fadeIn(500);
					$(".stage"+(index+1)).click(function(){
						index = $(".stage1").index(this);
						//kari = kari + ("sta"+(index+1));//k
						var sta = (index+1);//k
						//alert(kari);//k

						select.push(kari);
						/*-- 以下//k --*/
						//console.log('kari:'+kari);
						//console.log('select:'+select);
						//window.location.href = '/git/kokoroiki/game.php?scenario='+select[0];
						window.location.href = '/commu-ken-developer/games/game/'+sce+'/'+sta;
					});
				});
			});
		</script>
</div><!-- #game -->
