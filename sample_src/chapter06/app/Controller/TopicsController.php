<?php
//app/Controller/TopicsController.php
class TopicsController extends AppController {

    public function index() {
        $this->Topic->unbindModel(array(
            'belongsTo' => array('Category')
        ));
        $this->Topic->bindModel(array(
            'hasMany' => array('Comment')
        ));
        $data = $this->Topic->find('all',$options);
        debug($data);
    }
}