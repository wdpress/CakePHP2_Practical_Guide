<?php
//app/Controller/TasksController.php
class TasksController extends AppController {

    /* indexアクションと doneアクションは以前と同じなので省略 */
    public function index() {

        //データをモデルから取得してビューへ渡す
        $options = array(
            'conditions' => array(
                'Task.status' => 0
            )
        );
        $tasks_data = $this->Task->find('all',$options);
        $this->set('tasks_data',$tasks_data);

        // app/View/Tasks/index.ctp を表示
        $this->render('index');
    }
    public function create() {  

        //POSTされた場合だけ処理を行う
        if ($this->request->is('post')) {
            $data = array(
             'name' => $this->request->data['name'],
             'body' => $this->request->data['body'], //(注:bodyを追加)
            );
            //データを登録
            $id = $this->Task->save($data);
            if ($id === false) { //(注:ifを追加)
                $this->render('create');
                return;
            }
            $msg = sprintf('タスク %s を登録しました。',$this->Task->id);

            //メッセージを表示してリダイレクト
            $this->flash($msg,'/Tasks/index');
            return;         
        }
        $this->render('create');
    }
}