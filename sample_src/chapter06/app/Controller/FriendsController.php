<?php
// app/Controller/FriendsController.php
class FriendsController extends AppController {
	public $scaffold;
    public function index() {
        $conditions = array(
            'Friend.last_name' => 'cccc'
        );
        $this->Friend->deleteAll(
            $conditions,
            true //関連データも削除する
        );
    }
}