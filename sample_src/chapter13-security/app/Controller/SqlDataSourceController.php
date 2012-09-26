<?php
App::uses('AppController', 'Controller');

class SqlDataSourceController extends AppController {
    public $uses = array('User');

    public function index() {
        if ($this->request->is('post')) {
            $email = $this->request->data['User']['email'];
            $pass = $this->request->data['User']['pass'];

            $user = $this->User->findUser($email, $pass);

            $this->set('user', $user);
        }
    }
}
