<?php
App::uses('AppController', 'Controller');

class PostsController extends AppController {
	public $uses = array('Post', 'Foo');
	public function index() {
		$this->Post->find();

	}
}
