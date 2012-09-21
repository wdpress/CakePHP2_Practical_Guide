<?php
App::uses('Topic', 'Model');

/**
 * Topic Test Case
 *
 */
class TopicTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
    public $fixtures = array(
        'app.topic',
        'app.category',
        'app.comment'
    );

/**
 * setUp method
 *
 * @return void
 */
    public function setUp() {
        parent::setUp();
        $this->Topic = ClassRegistry::init('Topic');
    }

/**
 * tearDown method
 *
 * @return void
 */
    public function tearDown() {
        unset($this->Topic);

        parent::tearDown();
    }

    public function testタイトルは必須入力である() {
        $this->Topic->create(array('Topic'=>array('title'=>'')));
        $this->assertFalse($this->Topic->validates());
        $this->assertArrayHasKey('title', $this->Topic->validationErrors);
    }

    public function testカテゴリ1の最新5件が取得できること() {
        $latests = $this->Topic->getLatest();
        $this->assertCount(5, $latests);
        $this->assertEquals('CG入門', $latests[0]['Topic']['title']);
        $this->assertEquals('はじめてのWindows', 
                            $latests[1]['Topic']['title']);
        $this->assertEquals('はじめてのPHP', $latests[2]['Topic']['title']);
        $this->assertEquals('新しい携帯電話', $latests[3]['Topic']['title']);
        $this->assertEquals('新しいパソコン', $latests[4]['Topic']['title']);
    }

}
