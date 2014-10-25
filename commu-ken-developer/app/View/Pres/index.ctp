<h1><?= $this->Html->image('pre_main.jpg', array('alt' => 'このページは準備中です')) ?></h1>
<script>
$(function(){
	$('main').css({'height':'540px',
				   'position':'relative',
				   'top':'50%',
				   '-webkit-transform':'translateY(-50%)',
				   '-ms-transform':'translateY(-50%)',
				   'transform':'translateY(-50%)'});
	$('body').css({'background':'url(<?= $pro_pass_img ?>images/pre_bg.png)',
				   'height':'100%',
				   'overflow':'hidden'});
	$('html').css({'height':'100%'});
	$('header').css({'display':'none'});
	$('footer').css({'display':'none'});
});

</script>