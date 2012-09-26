<?php
App::uses('AppController', 'Controller');

class SlowViewCacheController extends AppController {
    public $uses = array('Slow');
    public $components = array('Benchmark');
    public $helpers = array('Cache');
    public $cacheAction = array('index' => '+1 hour');

    public function index() {
        $this->Benchmark->mark(__FILE__, __LINE__);

        $data = $this->Slow->doSomething();

        $this->Benchmark->mark(__FILE__, __LINE__);

        $this->set('data', $data);
    }
}
