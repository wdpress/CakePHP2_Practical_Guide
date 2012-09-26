<?php
App::uses('AppController', 'Controller');

class SecurityDataSecurityComponentController extends AppController {
    public $uses = array('User');
    public $components = array('Security');
    public $helpers = array('Form');

    public function index() {
        if (!empty($this->request->data)) {
            $this->User->save($this->request->data); //←（1）
        }
    }
}
