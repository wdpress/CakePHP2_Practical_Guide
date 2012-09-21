	<?php
	//app/Controller/SampleController.php
	class SampleController extends AppController {
	
    //Demoコンポーネントを設定
    public $components = array('Demo');

    public function index() {
        //Demoコンポーネントのhelloメソッドを利用
        $message = $this->Demo->hello();
        $this->Session->setFlash($message);
        $this->redirect(array(
            'controller' => 'posts',
            'action' => 'index'
        ));
    }
		//Demoヘルパーを設定
		public $helpers = array('Demo');
		
		public function test() {
		}
	}
