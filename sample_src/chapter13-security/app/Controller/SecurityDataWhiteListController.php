<?php
App::uses('AppController', 'Controller');

class SecurityDataWhiteListController extends AppController {
    public $uses = array('User');
    public $helpers = array('Form');

    public function index() {
        if (!empty($this->request->data)) {
            $this->User->save($this->request->data, true, array('name')); // (1)
        }
    }
}
