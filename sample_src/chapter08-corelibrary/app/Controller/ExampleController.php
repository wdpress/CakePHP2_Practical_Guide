<?php
class ExampleController extends AppController {
	public function	test() {
		$a = array(
    0 => array('Person' => array('name' => 'Jeff')),
    1 => array('Person' => array('name' => 'David')),
    2 => array('Person' => array('name' => 'Ave'))
);
$result = Set::sort($a, '{n}.Person.name', 'asc');
		debug($result);
	}
}