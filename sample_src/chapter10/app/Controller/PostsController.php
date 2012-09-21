<?php
class PostsController extends AppController {
    public $scaffold;
    public $components = array('Demo');
    public $helpers = array('Demo');
    public $paginate = array(
    	'limit' => 3,
    	'order' => array(
    		'Post.created' => 'DESC',
    	),
    	'conditions' => array(
    		'Post.id <' => 300
    	)
    );
    public function behavior_test() {
		//Postモデルの $actsAs に Demoビヘイビアが設定されている前提
    	$this->Post->sayHello();
    }
	public function getlist() {
		$this->Session->setFlash($this->Demo->hello());
		$data = $this->paginate('Post',array('Post.id not' => null));
		$this->set('data',$data);
	}
    public function edit() {
        $id = $this->request->pass[0];
        if ($this->request->is('post')) {
            $data = array(
                'id' => $id,
                'name' => $this->request->data['Post']['name'],
                'body' => $this->request->data['Post']['body']
            );
            if ($this->Post->save($data)) {
                $this->Session->setFlash('保存しました');
                $this->redirect('/posts/index');
            }
        } else {
            $options = array('conditions' => array('Post.id' => $id));
            $this->request->data = $this->Post->find('first',$options);
        }
    }
}