<?php
App::uses('AppController', 'Controller');

class XssController extends AppController {
    public $uses = array();

    public function index() {
        $this->set('name', "<script>alert('Hello');</script>");
    }

    public function form() {
    }
}

