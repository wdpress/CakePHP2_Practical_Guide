<?php
//app/Controller/HelpController.php
class HelpController extends AppController {

	public $uses = array('Topic');
    public function index() {
        //$this->ext = '.html';
        //$this->render('/HelpCenter/toppage');
        $this->viewClass = 'Json';
        $this->set('hoge','hogeyama hogeta');
        $this->set('topics',$this->Topic->find('all'));
        $this->set('_serialize', array('topics','hoge'));
    }

}  