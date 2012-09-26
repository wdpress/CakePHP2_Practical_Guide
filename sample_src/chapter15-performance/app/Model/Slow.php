<?php
App::uses('AppModel', 'Model');

class Slow extends AppModel {
    public $useTable = false;

    public function doSomething() {
        sleep(5);

        $ret = array('time' => date('Y:m:d H:i:s'));

        return $ret;
    }
}

