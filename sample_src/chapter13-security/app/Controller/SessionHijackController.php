<?php
App::uses('AppController', 'Controller');
App::uses('CakeSession', 'Model/Datasource');

class SessionHijackController extends AppController {
    public $uses = array();

    public function index() {
	CakeSession::start();
    }

    public function regenerateByThree() {
        CakeSession::$requestCountdown = 3;
	CakeSession::start();
    }

    public function regenerate() {
	CakeSession::start();
        $this->Session->renew();
        //CakeSession::renew();
    }
}
