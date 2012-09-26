<?php
App::uses('AppController', 'Controller');

class SlowController extends AppController {
    public $uses = array('Slow');
    public $components = array('Benchmark');

    public function index() {
        $this->Benchmark->mark(__FILE__, __LINE__);

        $data = $this->Slow->doSomething();

        $this->Benchmark->mark(__FILE__, __LINE__);

        $this->set('data', $data);
    }
}

