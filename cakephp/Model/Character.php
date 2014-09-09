<?php

class Character extends AppModel {
	public $hasMany = "Serif";
	//public $belongsTo = array('Step', 'Character');
	public $recursive = 2;

}