<?php

class Face extends AppModel {
	public $hasMany = "Serif";
	//public $belongsTo = array('Step', 'Character');
	public $recursive = 2;

}