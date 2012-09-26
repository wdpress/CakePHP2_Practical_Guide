<?php
// app/Model/Friend.php
class Friend extends AppModel {
    public $validate = array(
        'first_name' => array(
            'rule1' => array(
                'rule'       => 'existOnly4',
                'required'   => true,
                'allowEmpty' => false,
                'message'    => '同じ名前が5人以上存在します'
            ),
            'rule2' => array(
                'rule'  => array('range',2,32),
                'message' => '名前は2文字以上32文字以内で入力してください'
            )
        )
    );
    public function existOnly4($check) {
        $existing_count = $this->find('count', array(
        'conditions' => array('Friend.first_name' => $check['first_name']),
    ));
        return $existing_count < 5;
    }
}