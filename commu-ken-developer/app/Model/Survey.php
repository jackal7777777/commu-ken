<?php

class Survey extends AppModel {
	//public $hasMany = "Serif";
	public $belongsTo = array('Step', 'User');
	public $recursive = 2;

	/*public $validate = array(
		'survey_text'=> array(
			'survey_text' => 'notEmpty',
			'message' => 'アンケート内容を入力してください'
		)
	);*/

	public function surveyInsert($surveyInfo){
		
		//データベース登録情報セット
		$insertData = array('Survey' => array(
			'user_id' => $surveyInfo['user_id'],
			'step_id' => $surveyInfo['step_id'],
			'survey_text' => $surveyInfo['survey_text'],
			'survey_flag' => $surveyInfo['survey_flag']));

		//INSERTフィールドセット
		$insertFiled = array('user_id','step_id','survey_text','survey_flag');

		if ($this->save($insertData, false, $insertFiled)){
			return true;
		}else{
			return false;
		}

	}

}