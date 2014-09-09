<?php

class Answer extends AppModel {
	//public $hasMany = "Comment";
	public $belongsTo = array('Step');
	public $recursive = 2;

	public function getAnswer($stepId){

		//debug($stepId);

		//データベース検索情報セット
		$params = array(
			'fields' => array('answer_no','answer_text'),
			'conditions' => array('Answer.step_id' => $stepId)
		);

		//SQL実行
		$result = $this->find('all', $params);
		return $result;

	}
}