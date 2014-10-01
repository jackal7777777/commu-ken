<?php

class GamesController extends AppController{


    
    public $name = 'Games';//コントローラ名
    //使用するモデル
    var $uses = array(
        'User',
        'Scenario',
        'Stage',
        'Step',
        'Serif',
        'Answer',
        'Survey',
        'Play_history',
        'Clear',
        'Face');

    //helpersを継承
    //public $helpers = array('Html', 'Form', 'Js', 'Session', 'Css');

    //ajaxの通信であるかどうか判断
    public $components = array('RequestHandler');


    public function opening(){
        
    }

    public function tutorial(){
        
    }

    public function index() {
        $this->redirect('/');
    }

    public function choice($scenarioId = 0){

        $this->set('title_for_layout', 'こみゅけん！-kommu-ken!');

        $this->set('user_id', $this->Session->read('user_id'));

        //クリア情報読み込み
        $clearInfo = $this->Clear->clearCheck($this->Session->read('user_id'));
        if ($clearInfo != null && $clearInfo != "" && $clearInfo != array()) {
            $this->set('clearInfo',$clearInfo['Step']['stage_id']);
        }

        //全シナリオ読み込み
        $this->set('scenarioArray', $this->Scenario->allScenario());

        //全ステージ読み込み
        $this->set('stageArray', $this->Stage->getStage());

        if (isset($this->viewVars['user_id'])) {
            //viewにセッション情報をセット
            $this->set('sess', $this->Session->read('user_id'));
        }


    }

    public function game($scenarioId = 0,$stageId = 0,$stepNo = 1){

        if ($scenarioId == 0 || $stageId == 0){
            $this->redirect('/');
        }

        //一つ前のステップidが未クリアだったらchoiceへリダイレクト


        $this->set('title_for_layout', 'こみゅけん！-kommu-ken!');

        //セッション情報セット
        $this->set('user_id', $this->Session->read('user_id'));

        //シナリオIDとステージIDとステップNoでステップIDを特定
        $stepInfo = $this->Step->getStep($scenarioId,$stageId,$stepNo);

        $stepId = $stepInfo[0]['Step']['id'];

        //クリア情報読み込み
        $clearInfo = $this->Clear->clearCheck($this->Session->read('user_id'));
        
        if ($clearInfo != null && $clearInfo != "" && $clearInfo != array()) {
            $clearId = $clearInfo['Step']['id'];
        }else{
            $clearId = 0;    
        }

        if ($stepId - $clearId > 1) {
            $this->redirect(array('controller' => 'games', 'action' => 'choice'));
        }

        $this->set('step_id', $stepId);
        $this->set('stage_id', $stageId);
        $this->set('step_exp', $stepInfo[0]['Step']['step_exp']);
        $this->set('step_name', $stepInfo[0]['Step']['step_name']);
        $this->set('step_image', $stepInfo[0]['Face']['character_image']);

        //ステージ情報を取得
        $stageArray = $this->Stage->getStage(0,$stageId);
        $this->set('stageArray', $stageArray[0]['Stage']);

        //ステージのステップ数取得
        $stepSum = $this->Step->find('count',array('conditions' => array('stage_id' => $stageId)));
        
        //次ステップがあるかどうか
        $nextStep = 'no';//デフォではなし
        if($stepNo < $stepSum){
            $nextStep = 'yes';
        }
        $this->set('nextStep', $nextStep);

        //ステップIDに該当するアンサーを取得
        $answers = $this->Answer->getAnswer($stepId);
        $this->set('answerArray', $answers);

        //このステップの正解のアンサーIDをセット
        $this->set('collectAns', $stepInfo[0]['Step']['answer_id']);

        //このステップのシナリオIDをセット
        $this->set('scenario_id', $scenarioId);

        //選択肢登録用処理
        $this->set('step_no', $stepNo);//ステップIDセット

        //ステップIDとアンサーに該当するセリフを特定
        //ここでは該当ステップのセリフデータを全取得している
        $serifs = $this->Serif->getSerif($stepId);
        $this->set('serifArray', $serifs);
        //echo('とってきたセリフの生データ');

        //セリフ格納用配列
        $serifArrayJs = array();

        //持ってきたセリフデータをわかりやすいように格納
        for ($i=0; $i < count($serifs); $i++) {
                $answerNo = $serifs[$i]['Serif']['answer_no'];//選択肢番号
                $serifNo = $serifs[$i]['Serif']['serif_no'];//セリフの順番
                $serifText = $serifs[$i]['Serif']['serif_text'];//セリフテキスト
                $serifImg = $serifs[$i]['Face']['character_image'];//キャラ画像
                $serifChara = $serifs[$i]['Character']['character_name'];//キャラ名

                $serifArrayJs[$answerNo]['Serif'][$serifNo] = $serifText;//セリフ挿入
                $serifArrayJs[$answerNo]['Image'][$serifNo] = $serifImg;
                $serifArrayJs[$answerNo]['Character'][$serifNo] = $serifChara;
        }

        $this->set('serifArrayJs', json_encode($serifArrayJs));
    }

    //選択肢記録。選択肢をclickした時点でAjaxによって呼び出される処理
    public function play_history(){

        $this->autoLayout = false;
        $this->autoRender = false;

        if ($this->RequestHandler->isAjax()) {

            $this->Play_history->ansInsert($_POST["ans_id"],$_POST["step_id"]);

            if ($_POST["ans_id"] == $_POST["collectAns_id"]) {

                $this->Clear->clearInsert($_POST["scenario_id"],$_POST["step_id"],$_POST["user_id"]);
                echo $_POST["scenario_id"];
                echo $_POST["step_id"];
                echo $_POST["user_id"];
            }
            
        }else {
            $this->redirect(array('controller' => 'games', 'action' => 'choice'));
        }

        
    }

    //アンケ情報取得用アクション
    public function survey(){

        /*$survey_flag = $this->request->data['Survey']['survey_flag'];
        $survey_text = $this->request->data['Survey']['survey_text'];
        $user_id = $this->request->data['Survey']['user_id'];
        $step_id = $this->request->data['Survey']['step_id'];*/

        $this->autoLayout = false;
        $this->autoRender = false;

        if ($this->RequestHandler->isAjax()) {
            if ($this->request->data['Survey']['survey_flag'] == 0) {
                $surveyInfo = array('survey_flag' => $this->request->data['Survey']['survey_flag'],
                                    'survey_text' => $this->request->data['Survey']['survey_text'],
                                    'user_id' => $this->request->data['Survey']['user_id'],
                                    'step_id' => $this->request->data['Survey']['step_id']);
            }elseif($this->request->data['Survey']['survey_flag'] == 1){
                $surveyInfo = array('survey_flag' => $this->request->data['Survey']['survey_flag'],
                                    'survey_text' => $this->request->data['Survey']['survey_text'],
                                    'user_id' => $this->request->data['Survey']['user_id'],
                                    'step_id' => $this->request->data['Survey']['step_id']);
            }

            $this->Survey->surveyInsert($surveyInfo);
        }

    }
}