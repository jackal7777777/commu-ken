<?php

class AdminsController extends AppController{
    
    public $name = 'Admins';//コントローラ名
    //使用するモデル
    var $uses = array('Admin','User', 'Survey', 'Play_history');

    //ajaxの通信であるかどうか判断
    //public $components = array('RequestHandler');

    //helpersを継承
    public $helpers = array('Html', 'Form', 'Js', 'Session', 'Csv');

    // ビューを使わないように設定
    //public $autoRender = false;


    public function index($params = 0){

        //ログインに失敗してリダイレクトされた時のエラー文セット
        if (isset($params) && $params == 1) {
            $error = "IDまたはパスワードが間違っています";
            $this->set('error', $error );
        }

        //セッション情報があればゲームページへリダイレクト
        if (isset($this->viewVars['admin_id'])) {
            $this->redirect(array('controller' => 'admins', 'action' => 'admin'));
        }
    }

    public function login(){
        $this->autoLayout = false;
        $this->autoRender = false;

        //ポストデータを取得
        $postData = $this->request->data;
        
        if ($postData == array()) {//Postでのアクセスでなければトップページへリダイレクト
            $this->redirect('/');
        }

        

        //ユーザ検索関数呼び出しコード
        $adminCheckCode = $this->Admin->adminCheck($postData["Admin"]["id"],$postData["Admin"]["password"]);

        debug($postData["Admin"]["password"]);

        //ログイン判定
        if ($adminCheckCode == null) {
            $error = '1';
            $this->redirect(array('action' => 'index', $error ));
        }else{
            //sessionにuser_idをセット
            $this->Session->write('admin_id', $adminCheckCode[0]['Admin']['id']);//user_idをセッションに保存
            $this->redirect(array('controller' => 'admins', 'action' => 'admin'));
        }
    }

    public function logout(){
        $this->Session->delete('admin_id');
        $this->Session->destroy();
        $this->redirect(array('controller' => 'admins', 'action' => 'index'));
    }

    public function admin(){
        
    }

    public function download_csv($sqlType = 0){

            Configure::write('debug', 0); // 警告を出さない
            $this->layout = false;

            switch ($sqlType) {
                case 1:
                    
                    $filename = '会員数_' . date('YmdHis');
                    $th = array('会員数');
                    $this->User->recursive = -1;
                    $td = $this->User->find('count');
                    $this->set('model', 'User');



                    break;
                
                case 2:
                    
                    $filename = 'アンケート結果_' . date('YmdHis');
                    $th = array('会員ID',
                                'ステップID',
                                '役に立ったか(0=なった,1=ならなかった)',
                                'アンケート文');

                    $th_f = array('Survey.user_id',
                                'Survey.step_id',
                                'Survey.survey_flag',
                                'Survey.survey_text');

                    $this->Survey->recursive = -1;
                    $td = $this->Survey->find('all', array('fields' => $th_f));
                    //$this->set('csv_data', $survey_data);
                    $this->set('model', 'Survey');

                    break;

                case 3:
                    
                    $filename = '解答分析_' . date('YmdHis');
                    $th = array('ステップID',
                                'アンサーID');

                    $th_f = array('Play_history.step_id',
                                'Play_history.answer_id');
                    $this->Play_history->recursive = -1;
                    $td = $this->Play_history->find('all', array('fields' => $th_f));
                    //$this->set('csv_data', $play_data);
                    $this->set('model', 'Play_history');

                    break;

                default:
                    
                    $this->redirect(array('controller' => 'admins', 'action' => 'admin'));
                    exit();
                    
                    break;
            }

            $this->set(compact('filename', 'th', 'td'));

    }
}