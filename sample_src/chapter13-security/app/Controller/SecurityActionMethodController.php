<?php
App::uses('AppController', 'Controller');

class SecurityActionMethodController extends AppController {
    public $uses = array();

    public function index() {
        $this->something();
    }

    /**
     * 外から呼ばれたくない
     */
    public function something() {
        // 何かの処理
    }

    /**
     * 外から呼ばれたくない
     */
    protected function protectedMethod() {
        // 何かの処理
    }

    /**
     * 外から呼ばれたくない
     */
    public function _underscoreMethod() {
        // 何かの処理
    }
}
