<?php
//app/Controller/Component/DemoComponent.php
class DemoComponent extends Component {
	
	//コントローラー内からは下記のようにして呼び出せる
	//$this->Demo->hello('CakePHP');
	//
	public function hello($name = 'Dolly') {
		return 'Hello '.$name;
	}
	
}