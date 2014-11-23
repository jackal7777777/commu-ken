<?php
App::uses('Utility');
?>
<div id="game">
	<div id="selectLeft"><?= $this->Html->image('btn_prev.png') ?></div>
		<div id="select">
			<div id="selectSlide">

<?php

$value2['id'] = array();

if (isset($scenarioArray)) {
	foreach ($scenarioArray as $value) {
		foreach ($value as $value2) {//持ってきたシナリオ数分画像出力
			echo $this->Html->image('scenario_0'.$value2['id'].'_off.jpg', array('class' => 'scenario'));

		}
	}
}
if (isset($stageArray) && $stageArray != array()) {
	//debug($stageArray);
	foreach ($stageArray as $value) {
		foreach ($value as $value2) {//持ってきたステージ数分画像出力
			//そのステージが選択できるかどうか判定
			if (isset($clearInfo) && ($value2['id'] > ($clearInfo+1))) {
				echo $this->Html->image('stage_0'.$value2['id'].'_no.jpg', array('class' => 'stage'));
			}else if(isset($clearInfo)){
				echo $this->Html->image('stage_0'.$value2['id'].'_off.jpg', array('class' => 'stage'));
			}else if(!isset($clearInfo) && $value2['id'] == 1){
				echo $this->Html->image('stage_0'.$value2['id'].'_off.jpg', array('class' => 'stage'));
			}else{
				echo $this->Html->image('stage_0'.$value2['id'].'_no.jpg', array('class' => 'stage'));
			}
			
		}
	}

}



?>
			</div>
		</div>
	<div id="selectRight"><?= $this->Html->image('btn_next.png') ?></div>
		<script>
			$(function(){
				var index = "";
				var count = $(".scenario").length;
				var left = 0;
				var right = count;
				var px = 480;
				$(".stage").hide(0);
				var select = new Array();
				//選択ボタン
				$("#selectLeft").click(function(){
					if( left < count-1 ){
						$("#selectSlide").animate({
							"left":"-=480px"
						},500);
						left += 1;
						right -= 1;
					}
				});
				$("#selectRight").click(function(){
					if( right < count ){
						$("#selectSlide").animate({
							"left":"+=480px"
						},500);
						right += 1;
						left -= 1;
					}
				});
				//マウスオーバー:シナリオ
				$(".scenario").mouseover(function(){
					index = $(".scenario").index(this);
					$(".scenario").eq(index).attr({"src":"<?= $pro_pass_img ?>images/scenario_0"+(index+1)+"_on.jpg"});
					$(".scenario").mouseout(function(){
						index = $(".scenario").index(this);
						$(".scenario").eq(index).attr({"src":"<?= $pro_pass_img ?>images/scenario_0"+(index+1)+"_off.jpg"});
					});
				});
				//マウスオーバー:ステージ
				$(".stage").mouseover(function(){
					//画像パスを取得
					stageImgName = $(this).attr('src');
					//画像パスから選択できないステージかどうか判断
					stageCheck = stageImgName.search(/_no/);
					if(stageCheck == -1){
						index = $(".stage").index(this);
						$(".stage").eq(index).attr({"src":"<?= $pro_pass_img ?>images/stage_0"+(index+1)+"_on.jpg"});
						$(".stage").mouseout(function(){
							index = $(".stage").index(this);
							if(stageCheck == -1){
								$(".stage").eq(index).attr({"src":"<?= $pro_pass_img ?>images/stage_0"+(index+1)+"_off.jpg"});
							}
						});
					}
				});
				//選択されたら配列にプッシュ
				$(".scenario").click(function(){
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
					$(".stage").delay(500).fadeIn(500);
					count = $(".stage").length;
					//alert(count);
					left = 0;
					right = count;
					$(".stage").click(function(){
						index = $(".stage").index(this);
						//kari = kari + ("sta"+(index+1));
						var sta = (index+1);//k
						//alert(kari);
						select.push(kari);

						//画像パスを取得
						var stageImgName = $(this).attr('src');
						//画像パスから選択できないステージかどうか判断
						var stageCheck = stageImgName.search(/_no/);
						if(stageCheck == -1){
							window.location.href = '<?= $rootPath ?>games/game/'+sce+'/'+sta;
						}
					});
				});
			});
		</script>
</div><!-- #game -->
