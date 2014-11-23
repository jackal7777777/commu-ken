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

			echo $this->Form->submit('btn_send_off.png' ,array('class' => 'inquiry_send'));

			echo $this->Form->input('user_id', array('type'=>'hidden', 'value' => $user_id));
			echo $this->Form->end();





?>
<script>
$(function(){
    //ajax用にデータ格納
    //$('input[type="submit"]').click(function(even){
    $('#info').submit(function(event){
        // HTMLでの送信をキャンセル
        event.preventDefault();
        var $form = $(this);
        var serializedForm = $form.serialize();
        $('form input').attr('disabled','disabled');
        $('form textarea').attr('disabled','disabled');
        $('.inquiry_send').fadeOut(500);
        $('form').append('<p id="send_process" style="text-align:center;font-size:2rem;">送信中です...</p>');
        $.ajax({
            url: '<?= $this->Html->url(array("controller" =>"informations","action" => "information")) ?>',
            type: 'post',
            cache: false,
            data: serializedForm
        })
        .done(function(html) {
            $('form input').css('border', '1px solid #fff');
            $('form textarea').css('border', '1px solid #fff');
            $('#send_process').fadeOut(500);
            setTimeout(function(){
                $('#send_process').fadeIn(500);
                $('#send_process').text('送信が完了しました。');
            },500);
        })
        .fail(function(data) {//ここでエラー分が取得できる
            $('form input').css('border', '1px solid #fff');
            $('form textarea').css('border', '1px solid #fff');
            $('#send_process').fadeOut(500);
            console.log(data);
            setTimeout(function(){
                $('#send_process').fadeIn(500);
                $('#send_process').text('送信に失敗しました。');
            },500);
        })
        .always(function() {
            console.log("complete");
        });
    });
    $('.inquiry_send').mouseover(function(){
        $(this).attr('src','<?= $pro_pass_img ?>images/btn_send_on.png');
        $('.inquiry_send').mouseout(function(){
            $(this).attr('src','<?= $pro_pass_img ?>images/btn_send_off.png');
        });
    });
});
</script>