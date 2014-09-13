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
$this->Blocks->set('css-acc', '<style type="text/css">#nav3{background-image:url("nav_act_03_in_off.png");}</style>');

?>
<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>

<!--ゲーム画面-->
			<div id="game">
<?php 
	$options = array('0' => 'はい','1' => 'いいえ');
	//リンク生成用の命令。

	/*こっからアンケ入力フォーム*/

	/*echo "参考になりましたか？";

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
	echo $this->Form->end('送信');*/
?>
</div>
<script>//少し編集したのでその箇所には//kと明記しておきます

			pro_pass_img = '<?= $pro_pass_img ?>';//絶対パス指定用//k
			//console.log(pro_pass_img);//k

			var end = 0;
			//キャラデータ
			//梅田君
			var umeda = new Array("friend.png",
									"friend_aiso.png",
									"friend_bikkuri",
									"friend_d_bikkuri.png",
									"friend_egao.png",
									"friend_kusyou.png",
									"friend_sinpai_2.png",
									"friend_syonbori_2.png");
			//つむぎ
			var tsumugi = new Array("sister.png",
									"sister_d_okoru.png",
									"sister_ikari.png",
									"sister_isamasii.png",
									"sister_komaru.png",
									"sister_odoroki.png",
									"sister_okoru.png",
									"sister_tyousyou.png",
									"sister_warau.png",
									"sister_zitome.png");
			//シーン
			var selectStage = {};
			selectStage['sce1sta1'] = {
				background:'/background_classroom.jpg',
				character:'/friend.png',
				name:'梅野君',
				startText:'<?= $stageArray["stage_exp"] ?>',//k
				eventTitle:'<?= $stageArray["stage_name"] ?>',//k
				say1:'<?= $answerArray[1]["Answer"]["answer_text"] ?>',//k
				say2:'<?= $answerArray[2]["Answer"]["answer_text"] ?>',//k
				say3:'<?= $answerArray[3]["Answer"]["answer_text"] ?>',//k
				say4:'<?= $answerArray[4]["Answer"]["answer_text"] ?>',//k
				return1:'<?= $serifArray[1]["Serif"]["serif_text"] ?>',
				return2:'<?= $serifArray[2]["Serif"]["serif_text"] ?>',
				return3:'<?= $serifArray[3]["Serif"]["serif_text"] ?>',
				return4:'<?= $serifArray[4]["Serif"]["serif_text"] ?>',
				returnImg1:'<?= $serifArray[1]["Face"]["character_image"] ?>',
				returnImg2:'<?= $serifArray[2]["Face"]["character_image"] ?>',
				returnImg3:'<?= $serifArray[3]["Face"]["character_image"] ?>',
				returnImg4:'<?= $serifArray[4]["Face"]["character_image"] ?>',
				support0:'<?= $serifArray[6]["Serif"]["serif_text"] ?>',
				support1:'<?= $serifArray[7]["Serif"]["serif_text"] ?>',
				support2:'<?= $serifArray[8]["Serif"]["serif_text"] ?>',
				support3:'<?= $serifArray[9]["Serif"]["serif_text"] ?>',
				support4:'<?= $serifArray[10]["Serif"]["serif_text"] ?>',
				supportImg0:'<?= $serifArray[6]["Face"]["character_image"] ?>',
				supportImg1:'<?= $serifArray[7]["Face"]["character_image"] ?>',
				supportImg2:'<?= $serifArray[8]["Face"]["character_image"] ?>',
				supportImg3:'<?= $serifArray[9]["Face"]["character_image"] ?>',
				supportImg4:'<?= $serifArray[10]["Face"]["character_image"] ?>',
				summary:'持ち物とか好きなゲームとか、相手が興味あることを聞いてみたら相手も話しやすいわね！いいのよ！自分のことを話すのはそれからでも遅くないわ。'
			};

			var save = new Array();

			//alert(selectStage['sce1sta1']['background']);
			//alert(selectStage['sce1sta1']['summary']);

			
			//導入文章
			var text = {sce1sta1act0:'高校２年の１学期。新しいクラス、周りは知らない人ばかり、今年こそ友達を作りたい！　隣の席になった梅野くんが、何だかすごくいい人そう。友だちになりたいな…'};
			//
			$(function(){
				var url = location.href;
				var sce = url.search(/sce/);
				sce = "sce1sta1";
				//alert(sce);
				//ゲーム画面の背景画像描画
				$("<div>",{
					"id":"gameBack",
					"css":{
							"height":"525px",
							"width":"940px",
							"background":"url('"+pro_pass_img+"images"+selectStage[sce]['background']+"')",//k
							"position":"absolute",
							"top":"10px",
							"left":"10px",
							"z-index":"1",
							"background-size":"cover"
						}
				}).appendTo("#game");
				//対象キャラクター表示
				$("<img>",{
					"class":"chara",
					"src":pro_pass_img+"images"+selectStage[sce]['character'],
					"css":{
						"height":"450px",
						"width":"auto",
						"position":"absolute",
						"bottom":"0",
						"left":"300px",
						"z-index":"2"
					}
				}).appendTo("#gameBack");
				//ゲーム画面を暗くする用のdiv
				$("<div>",{
					"id":"gameBackBlack",
					"css":{
							"height":"100%",
							"width":"100%",
							"background":"rgba(0,0,0,0.50)",
							"position":"absolute",
							"top":"0px",
							"left":"0px",
							"z-index":"3"
						}
				}).appendTo("#gameBack");
				//導入文章表示
				$("<p>",{
					"id":"text",
					"text":selectStage[sce]['startText'],
					"css":{
							"line-height":"30px",
							"margin":"0 auto",
							"color":"#fff",
							"width":"600px",
							"height":"100px",
							"padding-top":"250px"
					}
				}).appendTo("#gameBackBlack");
				
				$("#gameBackBlack").click(function(){
					$("#text").fadeOut(100);
					$("#gameBackBlack").off();
					//タイマー
					$("<div>",{
						"id":"timer",
						"css":{
							"height":"125px",
							"width":"125px",
							"position":"absolute",
							"top":"10px",
							"left":"10px",
							"z-index":"3"
						}
					}).appendTo("#gameBack");
					$("<img>",{
						"id":"timerImg",
						"src":pro_pass_img+"images/bg_timer.png"//k
					}).appendTo("#timer");
					//イベント発生
					$("<div>",{
						"id":"event",
						"css":{
							"height":"45px",
							"width":"240px",
							"position":"absolute",
							"top":"10px",
							"left":"340px",
							"z-index":"3"
						}
					}).appendTo("#gameBack");
					$("<img>",{
						"id":"eventImg",
						"src":pro_pass_img+"images/title_event.png"//k
					}).appendTo("#event");
					//イベント名表示
					$("<div>",{
						"id":"eventTitle",
						"text":selectStage[sce]['eventTitle'],
						"css":{
							"height":"100px",
							"width":"500px",
							"position":"absolute",
							"top":"100px",
							"left":"220px",
							"z-index":"3",
							"text-align":"center",
							"color":"#fff"
						}
					}).appendTo("#gameBack");
					//選択肢表示
					$("<div>",{
						"id":"selectBox",
						"css":{
							"height":"320px",
							"width":"500px",
							"position":"absolute",
							"top":"160px",
							"left":"210px",
							"z-index":"3"
						}
					}).appendTo("#gameBack");
					for(var i=1;i<5;i++){
						$("<div>",{
							"id":"select"+i,
							"text":selectStage[sce]["say"+i],
							"css":{
								"height":"58px",
								"width":"498px",
								"border":"solid 1px #000",
								"border-radius":"10px",
								"position":"absolute",
								"top":(80*(i-1))+"px",
								"left":"0px",
								"background":"#fff",
								"text-align":"center",
								"line-height":"58px"
							}
						}).appendTo("#selectBox");
					}
					//選択肢マウスオーバー
					$("#selectBox div").mouseover(function(){
						//alert("a");
						$(this).css("cursor","hand");
						
					});
					//選択肢選択
					$("#selectBox div").click(function(){
						var index = $(this).index();
						save.push(index+1);
						$("#selectBox").fadeOut(200);
						$("#gameBackBlack").fadeOut(200);
						$("#eventTitle").fadeOut(200);
						$("#timer").fadeOut(200);
						var act = "return";
						text(index,act);
						//文章再生が終わったら いもうとの返し
						$("#hukidashi").click(function(){
							$("#event").fadeOut(0);
							$("#gameBackBlack").fadeIn(500);
							$("#gameBackBlack").delay(500).fadeOut(500);
							$(".chara").fadeOut(0);
							$(".chara").attr("src",pro_pass_img+"images/"+selectStage[sce]["supportImg"+(index+1)]);//k
							$(".chara").delay(1000).fadeIn(500);
							$("p#text").text(selectStage[sce]["support"+(index+1)]);
							$("#name").text("つむぎ");
							$("#hukidashi").off();
							//まとめ
							$("#hukidashi").click(function(){
								$("#gameBackBlack").fadeIn(200);
								$("<div>",{
									"id":"summaryTitle",
									"css":{
										"height":"125px",
										"width":"125px",
										"position":"absolute",
										"top":"10px",
										"left":"10px",
										"z-index":"3"
									}
								}).appendTo("#gameBack");
								$("<img>",{
									"id":"summaryImg",
									"src":pro_pass_img+"images/title_summary.png"
								}).appendTo("#summaryTitle");
								$("#name").text("アドバイス");
								$("p#text").text(selectStage[sce]["summary"]);
								$("#hukidashi").off();
								$("#hukidashi").click(function(){
									$("<div>",{
										"id":"blueBack",
										"css":{
											"height":"525px",
											"width":"940px",
											"background":"#e6fbff",
											"position":"absolute",
											"top":"10px",
											"left":"10px",
											"z-index":"5"
										}	
									}).appendTo("#game");
									$("<img>",{
										"src":pro_pass_img+"images/titile_enquete.png",//k
										"css":{
											"position":"absolute",
											"z-index":"6"
										}
									});
									$("<img>",{
										"src":pro_pass_img+"images/titile_sns.png",//k
										"css":{
											"position":"absolute",
											"z-index":"6"
										}
									});
									$("#hukidashi").off();
								});
							});
						});
					});
					//感想

				});
				//文章書き換え
				function text(index, act){
					//alert(act);
					//キャラクター表示切替
					$(".chara").attr("src",pro_pass_img+"images/"+selectStage[sce][act+"Img"+(index+1)]);//k
					//吹き出し生成
					$("<div>",{
						"id":"hukidashi",
						"css":{
								"height":"100px",
								"width": "860px",
								"background": "rgba(255,255,255,0.50)",
								"border-radius":"10px",
								"position": "absolute",
								"top":"400px",
								"left":"45px",
								"z-index":"2"
						}
					}).appendTo("#game");
					$("<div>",{
						"id":"name",
						"text":selectStage[sce]["name"],
						"css":{
								"height":"40px",
								"width":"100px",
								"position":"absolute",
								"top":"30px",
								"left":"35px",
								"line-height":"40px"
						}
					}).appendTo("#hukidashi");
					//文章用
					$("<div>",{
							"id":"article",
							"css":{
									"height":"60px",
									"width":"720px",
									"padding":"20px 10px",
									"position":"absolute",
									"top":"0",
									"left":"120px"
							}
					}).appendTo("#hukidashi");
					//文章表示
					$("<p>",{
						"id":"text",
						"text":selectStage[sce][act+(index+1)],
						"css":{
								"line-height":"30px"
						}
					}).appendTo("#article");
					//文章下の三角
					$("<div>",{
						"id":"san",
						"css":{
								"height":"0px",
								"width":"0px",
								"border":"solid 20px transparent",
								"border-top":"solid 20px #aaa",
								"position":"absolute",
								"top":"75px",
								"right":"20px",
								"z-index":"3"
						}
					}).appendTo("#hukidashi");
				}

				//文章。キャラ。背景を呼び出しに変更する
				

				//$("#game").append("<img src='images"+background[sce]+"'>");
			});

		</script>
