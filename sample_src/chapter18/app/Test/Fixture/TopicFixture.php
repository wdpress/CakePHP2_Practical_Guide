<?php
/**
 * TopicFixture
 *
 */
class TopicFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
    public $fields = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'title' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
        'body' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
        'category_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'indexes' => array(
            'PRIMARY' => array('column' => 'id', 'unique' => 1)
        ),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM')
    );

/**
 * Records
 *
 * @var array
 */
    public $records = array(
        array(
            'id' => 1, 'category_id' => 1,
            'title' => '新しいパソコン',
            'created' => '2012-02-02 05:15:13'),
        array(
            'id' => 2, 'category_id' => 1,
            'title' => '新しい携帯電話',
            'created' => '2012-02-03 05:15:13'),
        array(
            'id' => 3, 'category_id' => 1,
            'title' => '格好良いスマートフォン',
            'created' => '2012-02-01 05:15:13'),
        array(
            'id' => 4, 'category_id' => 1,
            'title' => 'はじめてのPHP',
            'created' => '2012-02-04 05:15:13'),
        array(
            'id' => 5, 'category_id' => 1,
            'title' => 'はじめてのWindows',
            'created' => '2012-02-05 05:15:13'),
        array(
            'id' => 6, 'category_id' => 1,
            'title' => 'CG入門',
            'created' => '2012-02-06 05:15:13'),
        array(
            'id' => 7, 'category_id' => 2,
            'title' => '好きなお寿司は？',
            'created' => '2012-02-04 15:15:15')
    );

}
