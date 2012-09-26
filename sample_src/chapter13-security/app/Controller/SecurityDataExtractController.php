<?php
App::uses('AppController', 'Controller');

class SecurityDataExtractController extends AppController {
    public $uses = array('User');
    public $helpers = array('Form');

    public function index() {
        if (!empty($this->request->data)) {
            $data = array(
                'name' => Set::extract($this->request->data, 'User.name'),//←（1）
            );
            //$this->User->save($this->request->data, true , array('name')); //←（2）
            $this->User->save($data); //←（2）
        }
    }
}

