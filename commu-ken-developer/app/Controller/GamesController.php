<?php

class GamesController extends AppController{
    
    public $name = 'Games';//コントローラ名
    //使用するモデル
    var $uses = array('User','Scenario','Stage','Step','Serif','Answer', 'Survey');

    //helpersを継承
    public $helpers = array('Html', 'Form', 'Js');

    //ajaxの通信であるかどうか判断
    public $components = array('RequestHandler');

    public function choice($scenarioId = 0){

        $this->set('title_for_layout', 'こみゅけん！-kommu-ken!');

        $this->set('user_id', $this->Session->read('user_id'));

        debug($this->Scenario->allScenario());

        $this->set('scenarioArray', $this->Scenario->allScenario());


    }

    public function stage_select($scenarioId = 0){

        if ($this->RequestHandler->isAjax() && is_numeric($scenarioId) && $scenarioId != 0) {

            //$this->autoLayout = false;
            //$this->autoRender = false;

            //検索結果を取得
            $result = $this->Stage->getStage($scenarioId);

            $imgRoot = $result[0]['Stage']['bg_image'];

            if ($result != array()) {
                $this->set('stageArray', $result);
                //検索結果が存在するときだけ表示
                //debug($result);
                //debug($imgRoot);
                $this->set('result', $result);
                //echo $this->Html->image($imgRoot);
            }else{
                $this->set('stageArray', '404 not found');
                //そのシナリオIDに属するステージは存在しないというメッセージ
                //ここを404ページへのリダイレクトにすることも可能
            }
        }
        //（念のため）リクエストがajax以外なら
        else {
            $this->redirect(array('controller' => 'games', 'action' => 'choice'));
        }
        
    }

    public function game($scenarioId,$stageId,$stepNo = 1){

        $this->set('title_for_layout', 'こみゅけん！-kommu-ken!');

        $this->set('user_id', $this->Session->read('user_id'));

        //シナリオIDとステージIDとステップNoでステップIDを特定
        $stepInfo = $this->Step->getStep($scenarioId,$stageId,$stepNo);

        //確認
        debug($stepId);
        //debug($stepInfo[0]['Step']['id']);

        $stepId = $stepInfo[0]['Step']['id'];
        $this->set('step_id', $stepId);

        //ステップIDに該当するアンサーを取得
        $answers = $this->Answer->getAnswer($stepId);

        debug($answers);

        //仮でアンサーNoを設定しておく
        $answerNo = 1;


        //ステップIDとアンサーに該当するセリフを特定
        //ここでは該当ステップのセリフデータを全取得している
        $serifs = $this->Serif->getSerif($stepId);

        /*--------------------------------------------------------------*/
        /*以降はJSでの処理になると思うが、念のためロジックを書いておく
        *上記の処理で取得されるのは全セリフデータ(配列)なので、
        *選択されたアンサーIDに該当するセリフデータのみを抜き出さなけれればならない。
        *
        $answerSerif = null;

        foreach ($serifs as $data) {
            //最初のforはセリフデータを全件検索するのでforeachでおｋ
            if($data['Serif']['answer_no'] == $answerNo){
                //もしアンサーNoが選択されたアンサーNoと一致したら
                echo 'セリフ:'.$data['Serif']['serif_text'].'<br>';//セリフ
                echo 'キャラ名:'.$data['Character']['character_name'].'<br>';//キャラ名
                echo 'キャラ画像:'.$data['Face']['character_image'].'<br>';//キャラ画像名
            }
        }

        //以上の処理で取得した全セリフデータから選択されたアンサーに対応したセリフデータを抽出できる
        /*------------------------------------------------------------*/

        debug($serifs);

        // post時の処理(アンケート登録)
        if ($this->request->is('post')) {
            if ($this->Survey->save($this->request->data)){
                $this->redirect(array('controller' => 'games', 'action' => 'choice'));
            }
            echo "登録失敗";
        }

    }
}