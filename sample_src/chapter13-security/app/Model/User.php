<?php
App::uses('Model', 'AppModel');

class User extends AppModel {
    public function findUser($email, $pass) {
        $ds = $this->getDataSource();
        $ret = $ds->fetchAll("SELECT * FROM users WHERE email = ? AND pass = ? LIMIT 1",
						array($email, $pass));
var_dump($ret);

    }
}
