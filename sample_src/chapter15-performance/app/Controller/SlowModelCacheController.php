<?php
App::uses('AppController', 'Controller');

class SlowModelCacheController extends AppController {
    public $uses = array('SlowCache');
    public $components = array('Benchmark');

    public function index() {
        $this->Benchmark->mark(__FILE__, __LINE__);

        $data = $this->SlowCache->doSomething();

        $this->Benchmark->mark(__FILE__, __LINE__);

        $this->set('data', $data);
    }
}
