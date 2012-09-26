<?php
App::uses('AppModel', 'Model');
App::uses('Cache', 'Cache');

class SlowCache extends AppModel {
    public $useTable = false;

    public function doSomething() {
        $ret = Cache::read('Slow_something');
        if ($ret !== false) {
            return $ret;
        }

        sleep(5);

        $ret = array('time' => date('Y:m:d H:i:s'));
        Cache::write('Slow_something', $ret);

        return $ret;
    }
}
