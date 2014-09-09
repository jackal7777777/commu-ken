<?php

class Survey extends AppModel {
	//public $hasMany = "Serif";
	public $belongsTo = array('Step', 'User');
	public $recursive = 2;

}