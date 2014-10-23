<h1><?= $this->Html->image('pre_main.jpg', array('alt' => 'このページは準備中です')) ?></h1>
<script>
$(function(){
	$('main').css({'height':'540px'});
	$('body').css({'background':'url(<?= $pro_pass_img ?>images/pre_bg.png)'});
});

</script>