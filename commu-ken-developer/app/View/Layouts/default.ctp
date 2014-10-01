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
        if (isset($user_id)) {
            //Sessionが有る時(ログイン)のcssを読み込む
            echo $this->Html->css($changeCss);
        }

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');

        // Jsヘルパーが生成するJSを出力させる
        echo $this->Js->writeBuffer( array( 'inline' => 'true'));
        clearCache();
        
    ?>
    <!-- ogp -->
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta property="og:title" content="今さら聞けない...こみゅけん" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="東大×HAL東京！" />
    <meta property="og:url" content="http://www.jack.com" />
    <!--<meta property="og:image" content="画像のURL" />-->
    <meta property="og:site_name" content="こみゅけん" />
    <meta property="og:locale" content="Japanese" />
    <!--<meta property="fb:admins" content="facebookのユーザーID" /> //できればfb:app_idを利用-->
    <meta property="fb:app_id" content="694588187300519" />
    <!-- ogp -->
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
                <li>個人情報</li>
                <li>サイトポリシー</li>
                <li>免責事項</li>
                <li>動作環境</li>
            </ul>
            <p>&copy;Copyright&nbsp;COMMU-KEN!&nbsp;All&nbsp;rights&nbsp;reserved.</p>
        </div>
    </footer>
</body>
</html>
