<?php
// app/Model/Friend.php
class Friend extends AppModel {
    public $validate = array(
        'first_name' => array(
            'rule'       => array('between',0,64),
            'required'   => true,
            'allowEmpty' => false,
            'message'    => '名は64文字以内で必ず入力してください' 
        ),
        'last_name' => array(
            'rule'       => array('between',0,64),
            'required'   => false,
            'allowEmpty' => true,
            'message'  =>
            '姓を入力する場合は64文字以内で入力してください' 
        )
    );
}