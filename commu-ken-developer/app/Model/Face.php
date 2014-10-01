<?php

class Face extends AppModel {
	public $hasMany = array('Serif', 'Face');
	//public $belongsTo = array('Step', 'Character');
	public $recursive = 2;

}