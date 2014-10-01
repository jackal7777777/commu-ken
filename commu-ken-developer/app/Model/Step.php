<?php

class Step extends AppModel {
	//public $hasMany = "Comment";
	public $belongsTo = array('Stage', 'Face');
	public $recursive = 2;

	public function getStep($scenarioId,$stageId,$stepNo){

		//debug($scenarioId);

		//データベース検索情報セット
		$params = array(
			'fields' => array('id','answer_id','step_exp','step_name','step_name','Face.character_image'),
			'conditions' => array('Step.scenario_id' => $scenarioId,
									'Step.stage_id' => $stageId,
									'Step.step_no' => $stepNo)/*,
			'joins' => array(
	            0 => array(
	                'type' => 'LEFT',
	                'table' => 'faces',
	                'alias' => 'Face',
	                'conditions' => array('Face.id = Step.face_id'))
	            )*/
		);

		//SQL実行
		$result = $this->find('all', $params);
		return $result;

	}
}