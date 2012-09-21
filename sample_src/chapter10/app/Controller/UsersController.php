<?php
class UsersController extends AppController {
	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash('Username or password is incorrect');
			}
		}
	}
	public function logout() {
		$this->Auth->logout();
		return $this->redirect('/');
	}
}