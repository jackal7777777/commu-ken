<?php

class Information extends AppModel {
    // テーブル使わない
    public $useTable = false;
    
    // バリデーションルール
    public $validate = array(
        'email' => array(
            'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => true,
        		'allowEmpty' => false,
				'message' => '入力必須項目です'
			)
		),
        'title' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => true,
        		'allowEmpty' => false,
				'message' => '入力必須項目です'
			)
		),
        'body' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => true,
        		'allowEmpty' => false,
				'message' => '入力必須項目です'
			)
        )
    );
}