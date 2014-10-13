<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $title_for_layout; ?>
    </title>
    <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('normalize');
        echo $this->Html->css('style');
        
        echo $this->Html->script('jquery-2.1.1.min', array( 'inline' => 'false'));

        echo $this->Html->css($headerCss);
        if (isset($user_id) && $this->name != 'Admins' ) {
            //Sessionが有る時(ログイン)のcssを読み込む
            echo $this->Html->css($changeCss);
        }elseif(isset($admin_id) && $this->name == 'Admins'){
            //Sessionが有る時(ログイン)のcssを読み込む
            echo $this->Html->css($changeCss);
        }

        echo $this->Html->scriptBlock( "(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54767335-1', 'auto');
  ga('send', 'pageview');", array( 'inline' => false));

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
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta property="og:title" content="今さら聞けない...こみゅけん" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="東大×HAL東京！" />
    <meta property="og:url" content="http://commu-ken.tokyo" />
    <meta property="og:site_name" content="こみゅけん" />
    <meta property="og:locale" content="Japanese" />
    <meta property="fb:app_id" content="694588187300519" />
    <!-- ogp -->
    <link rel="canonical" href="http://commu-ken.tokyo" />
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
    <header>
        <div id="headerMain">
        <div id="logo">
            <?= $this->Html->link($this->Html->image('logo.png'),
                    array('controller' => 'accounts', 'action' => 'index'),
                    array('escape'=>false)) ?>
        <!--/#logo--></div>
        <ul>
            <li id="nav1">
                <?= $this->Html->link(null,array('controller' => 'accounts', 'action' => 'index')) ?>
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
    <main>
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->fetch('content'); ?>
    </main>
    <footer>
        <div id="footerMain">
            <ul>
                <li>心いき</li>
                <li><?= $this->Html->link('個人情報',array('controller' => 'informations', 'action' => 'personal')) ?></li>
                <li><?= $this->Html->link('サイトポリシー',array('controller' => 'informations', 'action' => 'policy')) ?></li>
                <li><?= $this->Html->link('免責事項',array('controller' => 'informations', 'action' => 'disclamer')) ?></li>
                <li>動作環境</li>
            </ul>
            <p>&copy;Copyright COMMU-KEN! All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
