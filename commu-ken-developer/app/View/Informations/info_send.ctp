<!--お問合せ-->
<h2><?= $this->Html->image('title_form.png', array('alt' => 'お問い合わせ')) ?></h2>
<?php
echo $this->Form->create('Information', array(//フォーム生成開始
				'id' => 'info',//フォームタグにつけるid
				'inputDefaults' => array(
					    'label' => false,//labelタグはつけない
						'div' => false))//デフォルトで表示されるdivは表示しない
			);
			
			//email入力欄
			echo $this->Html->image('title_addr.png');
			echo $this->Form->input('email', array('type'=>'email', 'value' => $user_id, 'maxLength' => '50'));

			//件名
			echo $this->Html->image('title_title.png');
			echo $this->Form->input('title', array('type'=>'text', 'maxLength' => '30'));

			//本文
			echo $this->Html->image('title_con.png');
			echo $this->Form->input('body', array('type'=>'textarea', 'maxLength' => '1000'));

			echo $this->Form->input('',array('type' => 'submit'));
			echo $this->Form->input('user_id', array('type'=>'hidden', 'value' => $user_id));
			echo $this->Form->end();





?>
<script>
	//ajax用にデータ格納
	//$('input[type="submit"]').click(function(even){
	$('#info').submit(function(even){
		// HTMLでの送信をキャンセル
        event.preventDefault();
		var $form = $(this);
		var serializedForm = $form.serialize();
		$('form input').attr('disabled','disabled');
        $('form textarea').attr('disabled','disabled');
		console.log($form.serialize());
		//console.log('asdf');
        $('input[type="submit"]').css({
        	'backgroundImage': 'none',
        	'backgroundColor': '#ED4F4F'
        });
        $('input[type="submit"]').css('color', '#fff');
        $('input[type="submit"]').val('送信中です...');

        $.ajax({
            url: '<?= $this->Html->url(array("controller" =>"informations","action" => "information")) ?>',
            type: 'post',
            cache: false,
            data: serializedForm
        })
        .done(function(html) {
            console.log("結果");
            console.log(html);
            console.log("success");
            	$('form input').css('border', '1px solid #fff');
                $('form textarea').css('border', '1px solid #fff');
            	$('input[type="submit"]').fadeOut(500);
            setTimeout(function(){
                $('form').append('<p style="text-align:center;font-size:2rem;">送信が完了しました。</p>');
            },500);
        })
        .fail(function(data) {//ここでエラー分が取得できる
            console.log("エラーの内容");
            console.log(data);
            console.log("error");
            $('input[type="submit"]').fadeOut(500);
            $('form').append('<p style="text-align:center;font-size:2rem;">送信に失敗しました。</p>');
        })
        .always(function() {
            console.log("complete");
        });
	});
</script>