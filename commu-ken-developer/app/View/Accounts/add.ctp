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
?>
<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>
<!--ログインフォーム-->
<article>
	<h2><?= $this->Html->image('title_regi.png', array('alt' => '会員登録')) ?></h2>
	<div id="loginForm">
<?php
			echo $this->Form->create('User', array(//フォーム生成開始
				'id' => 'info',//フォームタグにつけるid
				'inputDefaults' => array(
					    'label' => false,//labelタグはつけない
						'div' => false))//デフォルトで表示されるdivは表示しない
			);
			
			//email(ID)入力欄
			echo $this->Html->image('title_addr.png');
			echo $this->Form->input('id', array('type'=>'email'));
			
			//パスワード入力欄
			echo $this->Html->image('title_pass.png');
			echo $this->Form->input('password', array('type'=>'password'));
			
			//性別選択欄
			echo $this->Html->image('title_sex.png');
			echo $this->Form->select('gender',array('mon' => '男','women' => '女'),array(
				'empty' => false,
				'default' => 'mon')).'<br>';

			/*-------生年月日欄-------*/
			echo $this->Html->image('title_date.png');
			//年
			echo $this->Form->datetime('birthday', 'Y', 'yaer', array('minYear' => 1980, 'empty' => '----','orderYear' => 'asc')).'年';
			//月
			echo $this->Form->datetime('birthday', 'M', 'month', array('monthNames' => false, 'empty' => '--')).'月';
			//日
			echo $this->Form->datetime('birthday', 'D', 'date', array('empty' => '--')).'日<br>';
			/*------------------------------*/

			//秘密の質問選択欄
			echo $this->Html->image('title_que.png');
			echo $this->Form->select('secret_question',
				array(
					'1' => '質問1',
					'2' => '質問2',
					'3' => '質問3',
					'4' => '質問4'),
				array(
					'id' => 'que',
					'empty' => false)).'<br>';

			//秘密の質問の答え入力欄
			echo $this->Html->image('title_ans.png');
			echo $this->Form->input('secret_answer', array('type' => 'text' )).'<br>';

			/**送信ボタン。淺野さんが作ってくれたボタンだとうまく送信出来なかったので、
			*とりあえず別の方法で作っています。これにidをつければボタン画像を表示することは
			*可能かと。
			*/
			/*submitボタン用画像スタイル設定*/
			$buttonStyle = 'display:block;width:150px;height:150px;margin:0 auto;';
			echo $this->Form->submit('btn_regi_off.png',array('type' => 'submit',
																'id' => 'add',
																'style' => $buttonStyle,
																'onmouseover' => 'btnChangeOn();',
																'onmouseout' => 'btnChangeOff();'));
			echo $this->Form->end();

?>
	</div>
</article>