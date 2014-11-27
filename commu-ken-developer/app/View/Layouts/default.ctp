<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="UTF-8">
    <?php echo $this->Html->charset(); ?>
    <title><?php echo $title_for_layout; ?></title>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-56953816-1', 'auto');
      ga('send', 'pageview');

    </script>
    <?php
        echo $this->Html->meta('icon');//ファビコン設定

        //css読み込み
        echo $this->Html->css('normalize');
        echo $this->Html->css('style');
        
        //js読み込み
        echo $this->Html->script('jquery-2.1.1.min', array( 'inline' => 'false'));

        echo $this->Html->css($headerCss);
        if ((isset($user_id) || (isset($admin_id))) && isset($changeCss)) {
            //Sessionが有る時(ログイン)のcssを読み込む
            echo $this->Html->css($changeCss);
        }

        

        echo $this->fetch('meta');        

        if($this->name == 'Admins'){
            echo $this->Html->scriptBlock( '$(function(){$("body").attr("id", "admin");});', array( 'inline' => false));
        }elseif($this->name == 'Errors'){
            echo $this->Html->scriptBlock( '$(function(){$("body").attr("id", "er");});', array( 'inline' => false));
        }


        //アクションがadd,info_send,changeの時はレイアウトを揃えるために
        //mainタグにcssを追加する
        if($this->action == 'add' ||
            $this->action == 'change' ||
            $this->action == 'info_send'){
            echo $this->Html->scriptBlock( '$(function(){$("main").css("paddingTop","20px");});', array( 'inline' => false));
        }
        echo $this->fetch('script');




        // Jsヘルパーが生成するJSを出力させる
        echo $this->Js->writeBuffer( array( 'inline' => 'true'));
        clearCache();
        echo $this->fetch('css');
        
    ?>
    <!-- ogp -->
    <meta property="og:title" content="今さら聞けない...こみゅけん" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="東大×HAL東京！" />
    <meta property="og:url" content="http://www.commu-ken.tokyo/" />
    <meta property="og:site_name" content="こみゅけん" />
    <meta property="og:locale" content="Japanese" />
    <meta property="fb:app_id" content="694588187300519" />
    <!-- ogp -->
    <link rel="canonical" href="http://www.commu-ken.tokyo/" />
</head>
<body>

<!-- facebook SDK -->
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=694588187300519&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div id="bodyWrapper">
        <header>
            <div id="headerMain">
            <div id="logo">
                <?= $this->Html->link($this->Html->image('logo.png'),
                        array('controller' => 'accounts', 'action' => 'index'),
                        array('escape'=>false)) ?>
            <!--/#logo--></div>
            <ul>
                <li id="nav1">
                    <?= $this->Html->link(null,array('controller' => $nav1link['controller'], 'action' => $nav1link['action'])) ?>
                </li>
                <li id="nav2">
                    <?= $this->Html->link(null,array('controller' => 'games', 'action' => 'tutorial')) ?>
                </li>
                <li id="nav3">
                    <?= $this->Html->link(null,array('controller' => $nav3link['controller'], 'action' => $nav3link['action'])) ?>
                </li>
                <li id="nav4">
                    <?= $this->Html->link(null,array('controller' => 'informations', 'action' => 'info_send')) ?>
                </li>
                <li id="nav5" class="liLast">
                    <?= $this->Html->link(null,array('controller' => $nav5link['controller'], 'action' => $nav5link['action'])) ?>
                </li>
            </ul>
         <!--/#headerMain--></div>
        </header>
        <div id="mainWrapper">
            <main>
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
            </main>
        </div>
        <footer id="footer">
            <div id="footerMain">
                <ul class="footerNav">
                    <li class="footerNavItem"><a href="http://kokoroiki-todai.com/" target="_blank">心いき東大PJ</a></li>
                    <li class="footerNavItem"><?= $this->Html->link('個人情報',array('controller' => 'informations', 'action' => 'personal')) ?></li>
                    <li class="footerNavItem"><?= $this->Html->link('サイトポリシー',array('controller' => 'informations', 'action' => 'policy')) ?></li>
                    <li class="footerNavItem"><?= $this->Html->link('免責事項',array('controller' => 'informations', 'action' => 'disclaimer')) ?></li>
                </ul>
                <p>&copy;Copyright COMMU-KEN! All rights reserved.</p>
            </div>
        </footer>
    <!--/#bodyWrapper--></div>
    <?php //echo $this->element('sql_dump'); ?>
    <script>
    $(function(){
        $('#nav<?= $current_nav ?>').addClass('current');
    });
    </script>
</body>
</html>
