<?php
App::uses('AppController', 'Controller');
class OutputSJISController extends AppController {

	public $name = 'OutputSJIS';
	public $helpers = array('Html', 'Session');
	public $uses = false;
	public $layout = 'outputsjis';

	public function index() {

	
	}


	public function afterFilter() {
		$this->response->body(
			mb_convert_encoding($this->response->body(),'Shift_JIS','UTF-8')
		);

		$this->response->charset('Shift_JIS');
	}
}
