<?php

class User extends AppModel {
	var $name = 'User';
	//public $hasMany = "Comment";
	//public $belongsTo = "User";

	public $validate = array(
		'id'=> array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => true,
        		'allowEmpty' => false,
				'message' => '入力必須項目です'
			),
			'checkOnly' => array(
				'rule' => 'isUnique',
				'message' => 'そのIDにはすでに使われています',
			)
		),
		'password'=> array(
			'password' => 'notEmpty',
			'message' => '入力必須項目です'
		),
		'secret_answer'=> array(
			'secret_answer' => 'notEmpty',
			'message' => '入力必須項目です'
		)
	);
	public function checkOnly($id){
		$re = $this->find('count',array('conditions' => array('User.id' => $id)));
		//debug($re);
		if($re == 0){
			return true;
		}else{
			return false;
		}
	}
	public function userCheck($id,$pass){//ログイン確認
		$password = Security::hash($pass, 'sha256', true);
		//データベース検索情報セット
		$params = array('fields' => array('User.id'),//Userテーブルのuser_idフィールドを取得
						'conditions' => array(//SQLでいうとWHERE文に当たるところ
							'User.id' => $id,//user_idが一致したもの
							'User.password' => $password)//かつpasswordが一致したものだけ
		);

		//SQL実行
		$userCheck = $this->find('all',$params);
		return $userCheck;

	}

	public function userInfo($id){//ログイン確認
		//データベース検索情報セット
		$params = array('fields' => array('User.id',
											'User.password',
											'User.secret_question',
											'User.secret_answer',
											'User.gender',
											'User.birthday'),
						'conditions' => array(
							'User.id' => $id)
		);

		//SQL実行
		$userInfo = $this->find('all',$params);
		return $userInfo;

	}

	public function add($data){

		$birthdate = $data['User']['birthday']['year'].$data['User']['birthday']['month'].$data['User']['birthday']['day'];
		$birthday = $data['User']['birthday']['year'].'-'.$data['User']['birthday']['month'].'-'.$data['User']['birthday']['day'];
		$age = (int)((date('Ymd')-$birthdate)/10000);
		$password = Security::hash($data['User']['password'], 'sha256', true);

		$insertData = array('User' => array(
			'id' => $data['User']['id'],
			'password' => $password,
			'secret_question' => $data['User']['secret_question'],
			'secret_answer' => $data['User']['secret_answer'],
			'gender' => $data['User']['gender'],
			'birthday' => date('Y-m-d', strtotime($birthdate)),
			'age' => $age));

		$insertFiled = array('id','password','secret_question','secret_answer','gender','birthday','age');

		if($this->checkOnly($data['User']['id'])){
			debug($this->checkOnly($data['User']['id']));
			if ($this->save($insertData, false, $insertFiled)){
				return 0;
			}else{
				return 2;
			}
		}else{
			return 1;
		}

		
	}

	public function change($data, $user_id){

		$birthdate = $data['User']['birthday']['year'].$data['User']['birthday']['month'].$data['User']['birthday']['day'];
		$birthday = $data['User']['birthday']['year'].'-'.$data['User']['birthday']['month'].'-'.$data['User']['birthday']['day'];
		$age = (int)((date('Ymd')-$birthdate)/10000);
		$password = Security::hash($data['User']['password'], 'sha256', true);
		$insertData = array('User' => array(
			'id' => $user_id,
			'password' => $password,
			'secret_question' => $data['User']['secret_question'],
			'secret_answer' => $data['User']['secret_answer'],
			'gender' => $data['User']['gender'],
			'birthday' => date('Y-m-d', strtotime($birthdate)),
			'age' => $age)
		);

		$insertFiled = array('id','password','secret_question','secret_answer','gender','birthday','age');


		if ($this->save($insertData, false, $insertFiled)){
			return true;
		}else{
			return false;
		}
	}

	/*public function userNum(){//会員数確認
		//データベース検索情報セット
		$params = array('fields' => array('User.id',
											'User.password',
											'User.secret_question',
											'User.secret_answer',
											'User.gender',
											'User.birthday'),
						'conditions' => array(
							'User.id' => $id)
		);

		//SQL実行
		$userInfo = $this->find('all',$params);
		return $userInfo;

	}*/
}