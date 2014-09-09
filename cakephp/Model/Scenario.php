<?php

class Scenario extends AppModel {
	public $hasMany = "Stage";
	public $recursive = -1;
	//public $belongsTo = "User";

	public function allScenario(){//全シナリオをロード

		//SQL実行
		$result = $this->find('all');
		//debug($userCheck); 
		return $result;

	}
}