<?php
class PostsController extends AppController {
    public $scaffold;

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