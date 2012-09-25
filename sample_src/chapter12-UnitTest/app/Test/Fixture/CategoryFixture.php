<?php
/**
 * CategoryFixture
 *
 */
class CategoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
    public $fields = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
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
            'id' => 1,
            'name' => 'コンピュータ',
            'created' => '2012-02-02 05:14:16',
            'modified' => '2012-02-02 05:14:16'),
        array(
            'id' => 2,
            'name' => 'グルメ',
            'created' => '2012-02-02 05:14:23',
            'modified' => '2012-02-02 05:14:23')
    );

}
