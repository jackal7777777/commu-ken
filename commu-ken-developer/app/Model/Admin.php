<?php

class Admin extends AppModel {
	var $name = 'Admin';

	public $validate = array(
		'id'=> array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => true,
        		'allowEmpty' => false,
				'message' => '入力必須項目です'
			)
		),
		'password'=> array(
			'password' => 'notEmpty',
			'message' => '入力必須項目です'
		)
	);

	public function adminCheck($id,$pass){//ログイン確認
		$password = Security::hash($pass, 'sha256', true);
		//データベース検索情報セット
		$params = array('fields' => array('Admin.id'),//Userテーブルのuser_idフィールドを取得
						'conditions' => array(//SQLでいうとWHERE文に当たるところ
							'Admin.id' => $id,//user_idが一致したものだけ
							'Admin.password' => $password)//かつpasswordが一致したものだけ
		);

		//SQL実行
		$userCheck = $this->find('all',$params);
		return $userCheck;

	}
}