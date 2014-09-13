<?php

class User extends AppModel {
	//public $hasMany = "Comment";
	//public $belongsTo = "User";
	public $validate = array(
		'id'=> array(
			'rule1' => array(
				'rule1' => 'notEmpty',
				'message' => '入力必須項目です'
			),
			'rule2' => array(
				'rule2' => 'isUnique',
				'message' => 'そのIDにはすでに登録済みです'
			)
		),
		'pass'=> array(
			'password' => 'notEmpty',
			'message' => '入力必須項目です'
		),
		'secret_answer'=> array(
			'secret_answer' => 'notEmpty',
			'message' => '入力必須項目です'
		)
	);
	public function userCheck($id,$pass){//ログイン確認
		debug($id);
		debug($pass);
		//データベース検索情報セット
		$params = array('fields' => array('User.id'),//Userテーブルのuser_idフィールドを取得
						'conditions' => array(//SQLでいうとWHERE文に当たるところ
							'User.id' => $id,//user_idが一致したものだけ
							'User.password' => $pass)//かつpasswordが一致したものだけ
		);

		//SQL実行
		$userCheck = $this->find('all',$params);
		debug($userCheck); 
		return $userCheck;

	}

	public function add($data){

		$birthdate = $data['User']['birthday']['year'].$data['User']['birthday']['month'].$data['User']['birthday']['day'];
		$birthday = $data['User']['birthday']['year'].'-'.$data['User']['birthday']['month'].'-'.$data['User']['birthday']['day'];
		debug($data);
		debug($birthdate);
		$age = (int)((date('Ymd')-$birthdate)/10000);
		debug($age);

		$insertData = array('User' => array(
			'id' => $data['User']['id'],
			'password' => $data['User']['password'],
			'secret_question' => $data['User']['secret_question'],
			'secret_answer' => $data['User']['secret_answer'],
			'gender' => $data['User']['gender'],
			'birthday' => date('Y-m-d', strtotime($birthdate)),
			'age' => $age));

		$insertFiled = array('id','password','secret_question','secret_answer','gender','birthday','age');

		debug($insertData);

		if ($this->save($insertData, false, $insertFiled)){
			return true;
		}else{
			return false;
		}

		
	}
}