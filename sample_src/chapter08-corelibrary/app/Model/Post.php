<?php
class Post extends AppModel {
	public $actsAs = array(
		'Demo'
	);
	public $validate = array(
		'name' => array(
			'rule' => array('maxLength',80),
			'require' => true,
			'allowEmpty' => false,
			'message' => 'タイトルを入力してください'
		),
		'body' => array(
			'rule' => array('maxLength',180),
			'require' => true,
			'allowEmpty' => false,
			'message' => '本文を入力してください'
		)
	);
}