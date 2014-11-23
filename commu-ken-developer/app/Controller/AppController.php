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
Configure::write('debug', 2);
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
    var $components = array('Session');


    //helpersを継承
    public $helpers = array('Html', 'Form', 'Js', 'Session');

    public function beforeFilter(){//全てのアクションに共通する処理。主にアカウント・セッション認証系。
        $this->set('title_for_layout', 'こみゅけん！-commu-ken!');


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
        }elseif($sess_admin_id != null){
            $this->set('admin_id', $sess_admin_id);
        }else{
            $this->set('user_id', $sess_user_id);
        }

        //ヘッダのcssとリンク判定
        if($this->action == 'add' ||
            $this->action == 'disclaimer' ||
            $this->action == 'info_send' ||
            $this->action == 'personal' ||
            $this->action == 'policy' ||
            $this->action == 'disclamer' ||
            $this->action == 'tutorial'){
            //この中のどれかのアクションならheader用のcssにはheader.cssを適用する
            $this->set('headerCss','header.css');

            if($sess_user_id != null && $this->name != 'Admins'){//さらにセッションがあるなら
                $this->set('changeCss','change.css');//header用のcssをログイン時用のモノに変更

                //headerメニューのリンク先設定
                $this->set('nav3link', array('controller' => 'accounts', 'action' => 'change'));
                $this->set('nav5link', array('controller' => 'accounts', 'action' => 'logout'));
            }elseif($sess_admin_id != null){

                $this->set('changeCss','change.css');//header用のcssをログイン時用のモノに変更

                $this->set('nav3link', array('controller' => 'accounts', 'action' => 'change'));
                $this->set('nav5link', array('controller' => 'admins', 'action' => 'logout'));

            }else{
                $this->set('nav3link', array('controller' => 'accounts', 'action' => 'add'));
                $this->set('nav5link', array('controller' => 'accounts', 'action' => 'index'));
            }
        }else{
            //上記以外のアクションならheader用のcssにはminHeader.cssを適用する
            $this->set('headerCss','minHeader.css');

            if($sess_user_id != null && $this->name != 'Admins'){//さらにセッションがあるなら
                
                $this->set('changeCss','minChange.css');//header用のcssをログイン時用のモノに変更
                //headerメニューのリンク先設定
                $this->set('nav3link', array('controller' => 'accounts', 'action' => 'change'));
                $this->set('nav5link', array('controller' => 'accounts', 'action' => 'logout'));
            }elseif($sess_admin_id != null){
                $this->set('changeCss','minChange.css');//header用のcssをログイン時用のモノに変更

                $this->set('nav3link', array('controller' => 'accounts', 'action' => 'change'));
                $this->set('nav5link', array('controller' => 'admins', 'action' => 'logout'));

            }else{
                $this->set('nav3link', array('controller' => 'accounts', 'action' => 'add'));
                $this->set('nav5link', array('controller' => 'accounts', 'action' => 'index'));
            }

        }
    }
}
