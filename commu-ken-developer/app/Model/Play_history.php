<?php

class Play_history extends AppModel {
	//public $hasMany = "Comment";
	//public $belongsTo = array('Step');
	public $recursive = -1;

	//正解不正解問わずに選択されたanswer_idを登録
	public function ansInsert($ansId,$stepId){

		//debug($stepId);

		//データベース登録情報セット
		$insertData = array('Play_history' => array(
			'answer_id' => $ansId,
			'step_id' => $stepId));

		//INSERTフィールドセット
		$insertFiled = array('answer_id','step_id');

		//ebug($insertData);

		if ($this->save($insertData, false, $insertFiled)){
			return true;
		}else{
			return false;
		}

	}
}