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
        $this->set('replayPage', null);
        if (isset($params) && $params == 1) {
            $error = "IDまたはパスワードが間違っています";
            $this->set('error', $error );
        }elseif(isset($params) && $params == 2){
            $this->set('replayPage', 'noSkip');
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
        $userCheckCode = $this->User->userCheck($postData["User"]["id"],$postData["User"]["password"]);

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


    public function add($params = 0){

        if (isset($params) && $params == 1) {
            $error = "そのIDはすでに登録されています";
            $this->set('error', $error );
        }

        // post時の処理
        if ($this->request->is('post')) {
            if ($this->User->add($this->request->data) == 0){//成功時
                //sessionにuser_idをセット
                $this->Session->write('user_id', $this->request->data['User']['id']);//user_idをセッションに保存
                $this->redirect(array('controller' => 'games', 'action' => 'choice'));
            }elseif($this->User->add($this->request->data) == 1){//ID重複
                $this->redirect(array('controller' => 'accounts', 'action' => 'add',1));
            }else{//その他のエラー時
                $this->redirect(array('controller' => 'accounts', 'action' => 'add'));
            }
        }

    }

    public function change($params = 0){

        //ユーザー情報取得
        $user_info = $this->User->userInfo($this->Session->read('user_id'));
        //debug($user_info);

        $this->set('user_info', $user_info[0]['User']);

        list($year, $month, $day) = split('-', $user_info[0]['User']['birthday']);
        $this->set('month', $month);
        $this->set('day', $day);
        $this->set('year', $year);

        if ($params == 1) {
            $this->set('result', '変更に成功しました');
        }elseif ($params == 2) {
            $this->set('result', '変更に失敗しました');
        }


        // post時の処理
        if ($this->request->is('post')) {
            if ($this->User->change($this->request->data, $this->Session->read('user_id')) == true){
                //debug($this->User->changeUp($this->request->data));
                $this->redirect(array('controller' => 'accounts', 'action' => 'change',1));
            }else{
                $this->redirect(array('controller' => 'accounts', 'action' => 'change',2));
            }
        }
    }
}