<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
Configure::write('debug', 0);
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package     app.Controller
 * @link        http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    var $components = array('Session','Security');


    //helpersを継承
    public $helpers = array('Html', 'Form', 'Js', 'Session');

    public function beforeFilter(){//全てのアクションに共通する処理。主にアカウント・セッション認証系。
        $this->set('title_for_layout', 'こみゅけん！-commu-ken!');
        Security::setHash('sha256');
        $this->Security->csrfCheck = false;
        $this->Security->validatePost = false;


        //画像ファイルなどのパスのためにプロジェクト名を定義
        //ルートパス
        $rootPath = Router::url('/');
        $this->set('rootPath', $rootPath);
        //画像用
        $this->set('pro_pass_img', $rootPath.'app/webroot/');

        //セッションから情報を取得
        $sess_user_id = $this->Session->read('user_id');
        $sess_admin_id = $this->Session->read('admin_id');

        //グローバルナビのカレントページ表示用
        $current = array($this->name, $this->action);
        $current_nav = 0;

        if($current[0] == 'Accounts'){
            if ($current[1] == 'index') {
                $current_nav = 1;
            }else if($current[1] == 'add'){
                $current_nav = 3;
            }
        }else if($current[0] == 'Informations'){
            if ($current[1] == 'info_send') {
                $current_nav = 4;
            }
        }
        $this->set('current_nav', $current_nav);

        //セッション情報がなければindexへリダイレクトする
        if ($sess_user_id == null && ($this->action == 'choice' || 
                                        $this->action == 'game' || 
                                        $this->action == 'change'))
        {
            $this->redirect('/');
        }elseif($this->request->data == array() && $sess_admin_id == null && $this->name == 'Admins' && $this->action != 'index'){
            $this->redirect(array('controller' => 'admins', 'action' => 'index'));
        }
        if($sess_admin_id != null){
            $this->set('admin_id', $sess_admin_id);
        }
        if($sess_user_id != null){
            $this->set('user_id', $sess_user_id);
        }
        //echo $this->name;
        //globalNaviのTOPのリンク先の初期値としてユーザ側のトップページを指定
        $this->set('nav1link', array('controller' => 'accounts', 'action' => 'index'));

        //ヘッダのcss判定
        if( $this->action == 'add' ||
            $this->action == 'disclaimer' ||
            $this->action == 'info_send' ||
            $this->action == 'personal' ||
            $this->action == 'policy' ||
            $this->action == 'disclamer' ||
            $this->action == 'tutorial'
        ){
            $this->set('headerCss','header.css');
            $headerFlag = false;
        }else{
            $this->set('headerCss','minHeader.css');
            $headerFlag = true;
        }

        //ログイン状態によるグローバルナビの飛び先＆画像変更
        if(isset($sess_user_id) || isset($sess_admin_id)){
            //ユーザIDもしくは管理者IDログインしていたら
            
            if(isset($sess_user_id)){
                $accountsAction = 'change';
            }else{
                $accountsAction = 'add';
            }
        }else{
            $accountsAction = 'add';
        }

        if ($this->name == 'Admins') {
            $linkController = $this->name;
            if(isset($sess_admin_id)){
                $loginAction = 'logout';
                if($headerFlag == true){
                    $this->set('changeCss','minChange.css');
                }else{
                    $this->set('changeCss','change.css');
                }
            }else{
                $loginAction = 'index';
            }
        }else{
            $linkController = 'accounts';
            if(isset($sess_user_id)){
                $loginAction = 'logout';
                if($headerFlag == true){
                    $this->set('changeCss','minChange.css');
                }else{
                    $this->set('changeCss','change.css');
                }
            }else{
                $loginAction = 'index';
            }
        }

        

        $this->set('nav1link', array('controller' => $linkController , 'action' => 'index'));
        $this->set('nav3link', array('controller' => 'accounts', 'action' => $accountsAction));
        $this->set('nav5link', array('controller' => $linkController, 'action' => $loginAction));

        
    }

}
