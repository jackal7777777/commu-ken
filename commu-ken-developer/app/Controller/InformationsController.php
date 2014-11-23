<?php
App::uses('CakeEmail', 'Network/Email');
class InformationsController extends AppController{
    
    public $name = 'Informations';//コントローラ名
    //使用するモデル
    public $uses = array('User','Information');

    //ajaxの通信であるかどうか判断
    public $components = array('RequestHandler');

    public function info_send() {
        if($this->Session->read('user_id') == null){
            $this->set('user_id','');
        }
    }

    public function policy() {

    }
    public function personal() {

    }
    public function disclaimer() {

    }

    //選択肢記録。選択肢をclickした時点でAjaxによって呼び出される処理
    public function information(){

        $this->autoLayout = false;
        $this->autoRender = false;

        echo "string";

        if ($this->RequestHandler->isAjax()) {
            
            $this->Information->set($this->request->data);

            if ($this->request->data["Information"]["user_id"] == null) {
                $this->request->data["Information"]["user_id"] = "非会員";
            }

            if ($this->Information->validates()) {

                $vars = array('email'=> $this->request->data["Information"]["email"],
                                'title'=> $this->request->data["Information"]["title"],
                                'body'=> $this->request->data["Information"]["body"],
                                'user_id'=> $this->request->data["Information"]["user_id"]);
            
                //$vars = $this->request->data['Information'];
            
                $email = new CakeEmail('gmail');
                // 送信設定
                $mailRespons = $email->config(array('log' => 'emails'))    
                    // 使用するテンプレートの設定, 本文の方 infomation, レイアウト infomation
                    ->template('information', 'information')// $infomation の設定を使う
                    // テンプレート変数設定
                    ->viewVars($vars)
                    // 送信元
                    ->from(array($vars['email'] => 'お問い合わせ-こみゅけん-'))
                    // 送信先
                    ->to('commu.ken@gmail.com')
                    // BCC, お問い合わせした人にもコピーを送りたい時とか
                    // ->bcc($this->request->data['Information']['email'])

                    // メール件名
                    ->subject('お問い合わせ')
                    ;
 
                // 送信
                // 送信したメールのヘッダーとメッセージを配列で返します
                if ($mailRespons->send()) {
                    //$this->Session->setFlash('問い合わせ完了');
                    //$this->redirect(array('action' => 'information',0));
                    //return true;
                } else {
                    //$this->redirect(array('action' => 'information',1));
                    //return false;
                }
            }
        }
        
    }

}