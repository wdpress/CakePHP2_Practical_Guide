<?php
class XssHController extends AppController {
    public $uses = array();

    public function index() {
        $this->set('name', $this->request->query['name']);
    }
}
