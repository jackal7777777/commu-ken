<?php

class Stage extends AppModel {
	//public $hasMany = "Comment";
	public $belongsTo = "Scenario";
	public $recursive = -1;

	public function getStage($scenarioId = 0,$stageId = 0){

		//debug($scenarioId);

		//データベース検索情報セット
		if ($scenarioId != 0) {//scenarioIdで検索するとき
			$params = array(
				'conditions' => array('Stage.scenario_id' => $scenarioId)
			);
			//SQL実行
			$result = $this->find('all', $params);

		}else if ($stageId != 0) {//stageIdで検索するとき
			$params = array(
				'conditions' => array('Stage.id' => $stageId)
			);
			//SQL実行
			return $this->find('all', $params);
		}else{//全件検索時
			//SQL実行
			return $this->find('all');
		}
	}
}