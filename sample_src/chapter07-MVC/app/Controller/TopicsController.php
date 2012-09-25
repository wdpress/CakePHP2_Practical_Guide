<?php
//app/Controller/TopicsController.php
class TopicsController extends AppController {

    public function index() {
    	//全ての関連データを取得しない
        $this->Topic->contain();
        $data = $this->Topic->find('all');
        
        //Commentモデルのデータのみ取得
        $this->Topic->contain('Comment');
        $data2 = $this->Topic->find('all');
        
        //CommnetとCaregoryのデータを取得
        $this->Topic->contain(array('Category','Comment'));
        $data3 = $this->Topic->find('all');
        
        //containオプションからの指定
        $data4 = $this->Topic->find('all',array(
        	'contain' => 'Category'
        ));        
    }
}