<?php

class Stage extends AppModel {
	//public $hasMany = "Comment";
	public $belongsTo = "Scenario";
	public $recursive = -1;

	public function getStage($scenarioId){

		//debug($scenarioId);

		//データベース検索情報セット
		$params = array(
			'conditions' => array('Stage.scenario_id' => $scenarioId)
		);

		//SQL実行
		$result = $this->find('all', $params);
		return $result;

	}
}