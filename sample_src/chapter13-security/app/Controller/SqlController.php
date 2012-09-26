<?php
App::uses('AppController', 'Controller');

class SqlController extends AppController {
    public $uses = array('User');

    public function index() {
        if ($this->request->is('post')) {
            $conditions = array(
                'email' => $this->request->data['User']['email'],
                'pass' => $this->request->data['User']['pass'],
            );
            $user = $this->User->find('first', compact('conditions'));

            $this->set('user', $user);
        }
    }
}
