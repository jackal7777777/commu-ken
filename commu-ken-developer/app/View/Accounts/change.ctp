<?php
App::uses('Utility');
?>
<!--ログインフォーム-->
<div id="add">
	<h2><?= $this->Html->image('title_modi.png', array('alt' => '会員情報変更')) ?></h2>
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
			echo '<p class="user_id">'.$user_id.'</p>';
			
			//パスワード入力欄
			echo $this->Html->image('title_pass.png');
			echo $this->Form->password('password', array('value' => "", 'maxLength' => '20', 'placeholder' => "新しいパスワード"));
			
			//性別選択欄
			echo $this->Html->image('title_sex.png');
			echo $this->Form->select('gender',array('mon' => '男','women' => '女'),array(
				'empty' => false,
				'default' => $user_info['gender'])).'<br>';

			/*-------生年月日欄-------*/
			echo $this->Html->image('title_date.png');
			$birthday_option = array(
				'minYear' => '1930',
				'maxYear' => date('Y'),
				'separator' => array('年','月','日'),
				'value' => array('year' => $year,'month' => $month,'day' => $day),
				'monthNames' => false
			);
			echo '<div class="birthday_wrapper">'.$this->Form->datetime('birthday', 'YMD', null, $birthday_option)."</div>";
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
					'empty' => false,
					'default' => $user_info['secret_question'])).'<br>';

			//秘密の質問の答え入力欄
			echo $this->Html->image('title_ans.png');
			echo $this->Form->input('secret_answer', array('type' => 'text', 'default' => $user_info['secret_answer'], 'maxLength' => '50')).'<br>';

			echo $this->Form->submit('btn_modi_off.png',array('type' => 'submit',
																'id' => 'change',
																'onmouseover' => 'btnChangeOn();',
																'onmouseout' => 'btnChangeOff();'));
			echo $this->Form->end();

			if (isset($result)) {
				echo $this->Html->scriptBlock( '$(function(){$("#add h2").after("<p style=\'text-align:center;font-size:1.6rem;\'>'.$result.'</p>");$(".submit input").css("bottom","-100");$("#add").css("height","540px");});', array( 'inline' => false));
			}
?>
</div>
<!-- 追加分スタイル -->
<script type="text/javascript">
    function btnChangeOn(){
        $('input[type="image"]').attr('src','<?= $pro_pass_img ?>images/btn_modi_on.png');
    }

    function btnChangeOff(){
        $('input[type="image"]').attr('src','<?= $pro_pass_img ?>images/btn_modi_off.png');    
    }
</script>