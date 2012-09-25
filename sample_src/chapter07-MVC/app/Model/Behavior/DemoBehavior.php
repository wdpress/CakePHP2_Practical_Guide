<?php
//app/Model/Behavior/DemoBehavior.php
class DemoBehavior extends ModelBehavior {
	
	//下記のメソッドがモデルクラスに存在しているように振る舞う
	public function sayHello() {
		return 'Hello';
	}
}