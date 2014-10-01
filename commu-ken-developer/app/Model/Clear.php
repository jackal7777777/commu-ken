<?php

class Clear extends AppModel {
	//public $hasMany = "Comment";
	public $belongsTo = array('Step');
	public $recursive = 2;

	//正解した時のみ呼びださえれる。クリア実績を記録
	public function clearInsert($scenario_id,$step_id,$user_id){

		//debug($stepId);

		$params = array(
			'conditions' => array(
				'Clear.scenario_id' => $scenario_id,
				'Clear.step_id' => $step_id,
				'Clear.user_id' => $user_id)
		);
		//SQL実行
		$result = $this->find('all', $params);

		if ($result == null) {
			
			//データベース登録情報セット
			$insertData = array('Clear' => array(
				'scenario_id' => $scenario_id,
				'step_id' => $step_id,
				'user_id' => $user_id));

			//INSERTフィールドセット
			$insertFiled = array('scenario_id','step_id','user_id');

			if ($this->save($insertData, false, $insertFiled)){
				return true;

			}else{
				return false;
			}
		}

	}

	//クリア実績を読み込む
	public function clearCheck($user_id){
		$params = array(
			'fields' => array('Step.stage_id','Step.id'),
			'conditions' => array(
				'Clear.user_id' => $user_id),
			'order' => array('Step.stage_id desc','Step.id desc')
		);
		//SQL実行
		$result = $this->find('first', $params);
		return $result;
	}
}