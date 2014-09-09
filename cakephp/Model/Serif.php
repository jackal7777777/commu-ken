<?php

class Serif extends AppModel {
	//public $hasMany = "Comment";
	public $belongsTo = array('Step', 'Character', 'Face');
	public $recursive = 2;

	public function getSerif($stepId){
		//groupByのためのバーチャルフィールドの追加
		/*
		$this->Serif->virtualFields['serif_no'] = 0;
		$this->Serif->virtualFields['serif_text'] = 0;
		$this->Serif->virtualFields['character_name'] = null;
		$this->Serif->virtualFields['characters_image'] = null;
		*/

		//debug($scenarioId);

		//データベース検索情報セット
		$params = array(
			'fields' => array('Serif.answer_no',
							'Serif.serif_no',
							'Serif.serif_text',
							'Character.character_name',
							'Face.character_image'),
			'conditions' => array('Serif.step_id' => $stepId),
			'joins' => array(
	            0 => array(
	                'type' => 'LEFT',
	                'table' => 'answers',
	                'alias' => 'Answer',
	                'conditions' => 'Answer.answer_no = Serif.answer_no')
	            ),
			'order' => array('Serif.answer_no' => 'asc','Serif.serif_no' => 'asc'),
			//'group' => 'Serif.answer_no'
		);

		//SQL実行
		$result = $this->find('all', $params);
		return $result;

	}
}