<?php

class AccountsController extends AppController{
    
    public $name = 'Accounts';//コントローラ名
    //使用するモデル
    var $uses = array('User');

    public $scaffold;

    //helpersを継承
    //public $helpers = array('Html', 'Form', 'Js', 'Session', 'Css');

    // ビューを使わないように設定
    //public $autoRender = false;


    public function index($params = 0){
        $this -> set('title_for_layout', 'こみゅけん！-kommu-ken!');

        //ログインに失敗してリダイレクトされた時のエラー文セット
        if (isset($params) && $params == 1) {
            $error = "IDまたはパスワードが間違っています";
            $this->set('error', $error );
        }

        //セッション情報があればゲームページへリダイレクト
        if (isset($this->viewVars['user_id'])) {
            $this->redirect(array('controller' => 'games', 'action' => 'choice'));
        }
    }


    public function login(){

        //ポストデータを取得
        $postData = $this->request->data;
        
        if ($postData == array()) {//Postでのアクセスでなければトップページへリダイレクト
            $this->redirect('/');
        }

        

        //ユーザ検索関数呼び出しコード
        $userCheckCode = $this->User->userCheck($postData["User"]["id"],$postData["User"]["pass"]);

        //ログイン判定
        if ($userCheckCode == null) {
            $error = '1';
            $this->redirect(array('action' => 'index', $error ));
        }else{
            //sessionにuser_idをセット
            $this->Session->write('user_id', $userCheckCode[0]['User']['id']);//user_idをセッションに保存
            $this->redirect(array('controller' => 'games', 'action' => 'choice'));
        }
    }

    public function logout(){
        $this->Session->delete('user_id');
        $this->Session->destroy();
        $this->redirect('/');//indexページヘリダイレクト
    }


    public function add(){

        // post時の処理
        if ($this->request->is('post')) {
            if ($this->User->add($this->request->data) == true){
                //sessionにuser_idをセット
                $this->Session->write('user_id', $this->request->data['User']['id']);//user_idをセッションに保存
                $this->redirect(array('controller' => 'games', 'action' => 'choice'));
            }
            echo "登録失敗";
        }

    }
}