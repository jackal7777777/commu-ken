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
<div id="add">
	<h2><?= $this->Html->image('title_regi.png', array('alt' => '会員登録')) ?></h2>
<?php
			echo $this->Form->create('User', array(//フォーム生成開始
				'id' => 'info',//フォームタグにつけるid
				'inputDefaults' => array(
					    'label' => false,//labelタグはつけない
						'div' => false))//デフォルトで表示されるdivは表示しない
			);
			
			//email(ID)入力欄
			if (isset($error)) {
		        echo $error;
		    }
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
			echo $this->Form->datetime('birthday', 'Y', 'yaer', array('minYear' => 1900, 'maxYear' => 2014, 'empty' => false,'orderYear' => 'asc')).'年';
			//月
			echo $this->Form->datetime('birthday', 'M', 'month', array('monthNames' => false, 'empty' => false)).'月';
			//日
			echo $this->Form->datetime('birthday', 'D', 'date', array('empty' => false)).'日<br>';
			/*------------------------------*/

			//秘密の質問選択欄
			echo $this->Html->image('title_que.png');
			echo $this->Form->select('secret_question',
				array(
					'1' => '生まれた町は？',
					'2' => '通っていた幼稚園または保育園の名前は？',
					'3' => '一番好きなアーティストは？',
					'4' => '一番好きな映画は？',
					'5' => '嫌いな食べ物は？'),
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
			echo $this->Form->submit('btn_regi_off.png',array('type' => 'submit',
																'class' => 'add',
																'onmouseover' => 'btnChangeOn();',
																'onmouseout' => 'btnChangeOff();'));
			echo $this->Form->end();

?>
</div>
<!-- 追加分スタイル -->
<script type="text/javascript">
    function btnChangeOn(){
        $('input.add').attr('src','/commu-ken-test/images/btn_regi_on.png');    
    }

    function btnChangeOff(){
        $('input.add').attr('src','/commu-ken-test/images/btn_regi_off.png');    
    }
    
</script>