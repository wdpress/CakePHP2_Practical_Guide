<?php
//app/Model/Topic.php
class Topic extends AppModel {

    //TopicモデルにはCategoryとCommentへの関連を設定
	public $belongsTo = array('Category');
	public $hasMany = array('Comment');
	
	public $actsAs = array('Containable');
}