<!--画像：ゲーム画面-->
<div id="game">
    <div id="ad_login">
<?php
echo $this->Form->create('Admin', array(//フォーム生成開始
                'url' => '/admins/login',
                //'id' => 'admin',//フォームタグにつけるid
                'inputDefaults' => array(
                        'label' => false,//labelタグはつけない
                        'div' => false))//デフォルトで表示されるdivは表示しない
            );
            
            //email(ID)入力欄
            echo $this->Html->image('login_add.png');
            echo $this->Form->input('Admin.id', array('type'=>'email', 'maxLength' => '20')).'<br>';

            //パスワード
            echo $this->Html->image('login_pass.png');
            echo $this->Form->input('Admin.password', array('type'=>'password', 'maxLength' => '50'));

            //登録
            echo $this->Form->end('');





?>
    </div>
<!--/#game--></div>