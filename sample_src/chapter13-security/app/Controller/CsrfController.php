<?php
App::uses('AppController', 'Controller');

class CsrfController extends AppController {
    public $uses = array();
    public $components = array('Security');
    public $helpers = array('Form');

    public function index() {
        if ($this->request->isPost()) {
            $this->Session->setFlash('POST OK!');
        }
    }
}

