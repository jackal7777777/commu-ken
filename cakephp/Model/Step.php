<?php

class Step extends AppModel {
	//public $hasMany = "Comment";
	public $belongsTo = "Stage";
	public $recursive = -1;

	public function getStep($scenarioId,$stageId,$stepNo){

		//debug($scenarioId);

		//データベース検索情報セット
		$params = array(
			'fields' => 'id',
			'conditions' => array('Step.scenario_id' => $scenarioId,
									'Step.stage_id' => $stageId,
									'Step.step_no' => $stepNo)
		);

		//SQL実行
		$result = $this->find('all', $params);
		return $result;

	}
}